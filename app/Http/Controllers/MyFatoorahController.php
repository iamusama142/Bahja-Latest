<?php



namespace App\Http\Controllers;
use App\Mail\AdminOrderMail;
use App\Mail\UserOrderMail;
use App\Models\Address;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Shipping;
use App\Models\Settings;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use MyFatoorah\Library\PaymentMyfatoorahApiV2;



class MyFatoorahController extends Controller {



    public $mfObj;
    public $inventory_updated = 0;



//-----------------------------------------------------------------------------------------------------------------------------------------



    /**

     * create MyFatoorah object

     */

    public function __construct() {

        $this->mfObj = new PaymentMyfatoorahApiV2(config('myfatoorah.api_key'), config('myfatoorah.country_iso'), config('myfatoorah.test_mode'));

    }



//-----------------------------------------------------------------------------------------------------------------------------------------



    /**

     * Create MyFatoorah invoice

     *

     * @return \Illuminate\Http\Response

     */

    public function index($orderDetail, $paymentId) {

        try {

            $paymentMethodId = $paymentId; // 0 for MyFatoorah invoice or 1 for Knet in test mode



            $payLoadData = $this->getPayLoadData($orderDetail);

            $curlData = $payLoadData;

            $data     = $this->mfObj->getInvoiceURL($curlData, $paymentMethodId);

            $response = ['IsSuccess' => 'true', 'Message' => 'Invoice created successfully.', 'data' => $data];

        } catch (\Exception $e) {

            $response = ['IsSuccess' => 'false', 'Message' => $e->getMessage()];

        }

        return $response;

    }



//-----------------------------------------------------------------------------------------------------------------------------------------



    /**

     *

     * @param int|string $orderId

     * @return array

     */

    private function getPayLoadData($orderDetail) {

        $callbackURL = route('myfatoorah.callback');

        $cname = $orderDetail['first_name'].' '.$orderDetail['last_name'];
        $email = $orderDetail['email'];
        $phone = $orderDetail['phone'];
        $user_id = $orderDetail['user_id'];
        $checkout_type = $orderDetail['checkout_type'];

        return [

            'CustomerName'       => $cname,

            'InvoiceValue'       => $orderDetail['total_amount'] ? $orderDetail['total_amount'] : 'N/A' ,

            'DisplayCurrencyIso' => 'KWD',

            'CustomerEmail'      => $email,

            'CallBackUrl'        => $callbackURL,

            'ErrorUrl'           => $callbackURL,

            'MobileCountryCode'  => '+965',

            'CustomerMobile'     => $phone,

            'Language'           => 'en',

            'user_id'           => $user_id,

            'UserDefinedField' => $checkout_type,

            'CustomerReference'  => $orderDetail['order_number'] ? $orderDetail['order_number'] : 'N/A',

            'SourceInfo'         => 'Laravel ' . app()::VERSION . ' - MyFatoorah Package ' . MYFATOORAH_LARAVEL_PACKAGE_VERSION

        ];

    }



//-----------------------------------------------------------------------------------------------------------------------------------------



    /**

     * Get MyFatoorah payment information

     *

     * @return \Illuminate\Http\Response

     */

    public function callback() {

        try {

            $paymentId = request('paymentId');

            $data      = $this->mfObj->getPaymentStatus($paymentId, 'PaymentId');

            if ($data->InvoiceStatus == 'Paid') {

                return $this->success($data);

            } else if ($data->InvoiceStatus == 'Failed') {

                return $this->cancel($data);

            } else if ($data->InvoiceStatus == 'Expired') {

                return $this->cancel($data);

            }

            return null;

        } catch (\Exception $e) {

            $response = ['IsSuccess' => 'false', 'Message' => $e->getMessage()];

        }

        return response()->json($response);

    }



    public function success($data)

    {

        if (isset($data)) {

            $orderNumber = $data->CustomerReference;

            Order::where('order_number', $orderNumber)->update([

                'status' => 'process',

                'payment_status' => 'paid',

                'paymentId' => $data->focusTransaction->PaymentId ? $data->focusTransaction->PaymentId : null,

                'ReferenceId' => $data->focusTransaction->ReferenceId ? $data->focusTransaction->ReferenceId : null,

            ]);
            

            $orderData = Order::where('order_number',$orderNumber)->first();

            $checkout_info  = explode('#',$orderData->checkout_type);
            
            $checkout_type = $checkout_info[0];
            $user_id = $checkout_info[1];
            $shipping_id = $orderData->shipping_id;
            $total_amount = $orderData->total_amount;
            
            Cart::where('user_id', $user_id)->where('order_id', null)->update(['order_id' => $orderData->id]);

            $cartDetails=Cart::with(['order','product'])->where('order_id',$orderData->id)->get();
  
            $shipping=Shipping::find($shipping_id);

            $totalAmunt= $total_amount;

            //adjust inventory

            $cart_items=Cart::select('id', 'product_id', 'quantity' , 'inventory_updated')->where('order_id',$orderData->id)->get();

            foreach ($cart_items as $cart_item) {
                
                if(!$cart_item->inventory_updated){
                    
                    $product = Product::find($cart_item->product_id);
                    $product->stock = $product->stock - $cart_item->quantity;
                    $product->save();

                    Cart::where(['id'=>$cart_item->id])->update(['inventory_updated'=>1]);
                }
                
            }

            //adjust inventory 

        }

        $settingData = Settings::first();

        Mail::to($settingData->email)->send(new AdminOrderMail($orderData,$cartDetails,$shipping,$totalAmunt));

        Mail::to($data->CustomerEmail)->send(new UserOrderMail($orderData,$cartDetails,$shipping,$totalAmunt));


        return view('frontend.pages.order-success',compact('orderData','cartDetails','shipping','totalAmunt'));

    }



    public function cancel($data)

    {
      

        if (isset($data)) {

                $orderNumber = $data->CustomerReference;

                Order::where('order_number', $orderNumber)->update([

                    'status' => 'cancel',

                    'paymentId' => $data->focusTransaction->PaymentId ? $data->focusTransaction->PaymentId : null,

                    'ReferenceId' => $data->focusTransaction->ReferenceId ? $data->focusTransaction->ReferenceId : null,

                ]);

        }

        $orderData = Order::where('order_number',$orderNumber)->first();

        $settingData = Settings::first();
        
        // Cart::where(['user_id'=>$orderData->user_id])->delete();

        return view('frontend.pages.order-cancle');

    }



//-----------------------------------------------------------------------------------------------------------------------------------------

}

