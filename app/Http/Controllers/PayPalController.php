<?php

namespace App\Http\Controllers;
use App\Models\Order;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
use Illuminate\Http\Request;
use NunoMaduro\Collision\Provider;
use App\Models\Cart;
use App\Models\Product;
use DB;
use Session;
class PayPalController extends Controller
{
    private $paypalProvider;
    public function __construct(PayPalClient $payPal)
    {
        $this->paypalProvider = $payPal;
    }
    public function payment()
    {
        $cart = Cart::where('user_id',auth()->user()->id)->where('order_id',null)->get()->toArray();
        $data = [];
        $data['items'] = array_map(function ($item) use($cart) {
            $name=Product::where('id',$item['product_id'])->pluck('title');
            return [
                'name' =>$name ,
                'price' => $item['price'],
                'desc'  => 'Thank you for using paypal',
                'qty' => $item['quantity']
            ];
        }, $cart);
        // return $cart;
//        $data['items'] = array_map(function ($item) use($cart) {
//            $name=Product::where('id',$item['product_id'])->pluck('title');
//            return [
//                'name' =>$name ,
//                'price' => $item['price'],
//                'desc'  => 'Thank you for using paypal',
//                'qty' => $item['quantity']
//            ];
//        }, $cart);
//
//        $data['invoice_id'] ='ORD-'.strtoupper(uniqid());
//        $data['invoice_description'] = "Order #{$data['invoice_id']} Invoice";
//        $data['return_url'] = route('payment.success');
//        $data['cancel_url'] = route('payment.cancel');
//
//        $total = 0;
//        foreach($data['items'] as $item) {
//            $total += $item['price']*$item['qty'];
//        }
//
//        $data['total'] = $total;
//        if(session('coupon')){
//            $data['shipping_discount'] = session('coupon')['value'];
//        }
//        Cart::where('user_id', auth()->user()->id)->where('order_id', null)->update(['order_id' => session()->get('id')]);
        // return session()->get('id');
        $total = 0;
        $data['total'] = $total;
        if(session('coupon')){
            $data['shipping_discount'] = session('coupon')['value'];
        }
        Cart::where('user_id', auth()->user()->id)->where('order_id', null)->update(['order_id' => session()->get('id')]);
        $total = Order::where('id', session()->get('id'))->pluck('total_amount');
        $token = $this->paypalProvider->getAccessToken();
        $this->paypalProvider->setAccessToken($token);
        $response = $this->paypalProvider->createOrder([
            "intent" => "CAPTURE",
            "application_context" => [
                "return_url" => route('payment.success'),
                "cancel_url" => route('payment.cancel'),
            ],
            "purchase_units" => [
                0 => [
                    "amount" => [
                        "currency_code" => "USD",
                        "value" => $total[0]
                    ]
                ]
            ]
        ]);
        return redirect($response['links'][1]['href']);
    }

    /**
     * Responds with a welcome message with instructions
     *
     * @return \Illuminate\Http\Response
     */
    public function cancel()
    {
        Order::where('id',Session::get('order_id_session'))->update(['payment_status'=>'unpaid']);
        session()->forget('cart');
        session()->forget('coupon');
        return view('frontend.pages.order-cancle');
    }

    /**
     * Responds with a welcome message with instructions
     *
     * @return \Illuminate\Http\Response
     */
    public function success(Request $request)
    {
            Order::where('id',Session::get('order_id_session'))->update(['payment_status'=>'paid']);
            request()->session()->flash('success','You successfully pay from Paypal! Thank You');
            session()->forget('cart');
            session()->forget('coupon');
            return view('frontend.pages.order-success');
    }
}
