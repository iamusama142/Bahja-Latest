<?php

namespace App\Http\Controllers;

use App\Mail\OrderMail;
use App\Models\Address;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Shipping;
use App\Models\User;
use App\Notifications\StatusNotification;
use Auth;
use Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Notification;
use PDF;
use Session;

class OrderController extends Controller
{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()
    {

        $orders = Order::where(['payment_status' => 'paid'])->orderBy('id', 'DESC')->get();

        return view('backend.order.orderList')->with('orders', $orders);

    }

    public function error_order()
    {

        $orders = Order::where('payment_status', '<>', 'paid')->orderBy('id', 'DESC')->get();

        return view('backend.order.errorOrderList')->with('orders', $orders);

    }

    public function dateFilterOrder(Request $request)
    {
        if ($request->sdate && $request->endate) {
            $orders = Order::whereBetween('created_at', [$request->sdate, $request->endate])->orderBy('id', 'DESC')->get();
        } else {
            $orders = Order::orderBy('id', 'DESC')->get();
        }

        return view('backend.order.orderList')->with('orders', $orders);

    }

    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()
    {

        //

    }

    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function sendOrderConfirmationMail($cart)
    {

        Mail::to("info@bvidya.com")->send(new OrderMail($cart));

    }

    public function store(Request $request)
    {

       
       
        if (Auth::check()) {

            $this->validate($request, [
                'address_id' => 'required',
            ]);

        } elseif (Session::get('guest_user_id')) {


            $this->validate($request, [
                'first_name' => 'required',
                'email' => 'required|email',
                'phone' => 'required|numeric|digits:8',
                'street_address' => 'required',
                'block' => 'required',
            ]);

        }

        $this->validate($request, [
            'payment_method' => 'required',
            'shipping' => 'required',
        ]);

        

        if (Auth::check()) {

            if (empty(Cart::where('user_id', auth()->user()->id)->where('order_id', null)->first())) {

                request()->session()->flash('error', 'Cart is Empty !');
                return back();

            }

            $address = Address::where('id', $request->address_id)->first();

            $first_name = $address->user_name;
            $last_name = '';
            $email = $request->user()->email;
            $phone = $address->phone;
            $address1 = $address->address;
            $address2 = '';
            $postal = $address->area;
            $country = '';
            $user_id = $request->user()->id;
            $checkout_type = 'registered#'.$request->user()->id;

        } elseif (Session::get('guest_user_id')) {

            if (empty(Cart::where('user_id', Session::get('guest_user_id'))->where('order_id', null)->first())) {

                request()->session()->flash('error', 'Cart is Empty !');
                return back();

            }

            $first_name = $request->first_name;
            $last_name = '';
            $email = $request->email;
            $phone = $request->phone;
            $address1 = $request->street_address.' (Block): '.$request->block.' (Delivery Instruction): '.$request->delivery_instruction;
            $address2 = '';
            $postal = $request->area;
            $country = $request->country;
            $user_id = null;
            $checkout_type = 'guest#'.Session::get('guest_user_id');

        }

        $order = new Order();

        $order_data = $request->all();

        $order_data['first_name'] = $first_name;
        $order_data['last_name'] = $last_name;
        $order_data['email'] = $email;
        $order_data['phone'] = $phone;
        $order_data['address1'] = $address1;
        $order_data['address2'] = $address2;
        $order_data['post_code'] = $postal;
        $order_data['country'] = $country;
        $order_data['user_id'] = $user_id;
        $order_data['order_number'] = 'ORD-' . strtoupper(Str::random(10));
        $order_data['shipping_id'] = $request->shipping;
        $order_data['checkout_type'] = $checkout_type;
        $shipping = Shipping::where('id', $order_data['shipping_id'])->pluck('price');
        $order_data['sub_total'] = Helper::totalCartPrice();
        $order_data['quantity'] = Helper::cartCount('',Session::get('guest_user_id'));

        if (session('coupon')) {
            $order_data['coupon'] = session('coupon')['value'];
        }

        if ($request->shipping) {
            if (session('coupon')) {
                $order_data['total_amount'] = Helper::totalCartPrice() + $shipping[0] - session('coupon')['value'];
            } else {
                $order_data['total_amount'] = Helper::totalCartPrice() + $shipping[0];
            }
        } else {
            if (session('coupon')) {
                $order_data['total_amount'] = Helper::totalCartPrice() - session('coupon')['value'];
            } else {
                $order_data['total_amount'] = Helper::totalCartPrice();
            }
        }

        $order_data['status'] = "new";
        $order_data['payment_status'] = 'unpaid';

        if (request('payment_method') == 'knet') {
            $order_data['payment_method'] = 'knet';
        } else {
            $order_data['payment_method'] = 'myfatoorah';
        }

        $order->fill($order_data);
        $status = $order->save();

        if ($status) {
            $users = User::where('role', 'admin')->first();
        }

        $details = [
            'title' => 'New order created',
            'actionURL' => route('order.show', $order->id),
            'fas' => 'fa-file-alt',
        ];

        Session::put('order_id_session', $order->id);

        Notification::send($users, new StatusNotification($details));

        if (request('payment_method') == 'knet') {

            $paymentData = $this->paymentSection($order_data, 1);

            if ($paymentData['IsSuccess'] == true) {
                $redirectURL = $paymentData['data']['invoiceURL'];
                return redirect($redirectURL);
            }

        } else {

            $paymentData = $this->paymentSection($order_data, 0);

            if ($paymentData['IsSuccess'] == true) {
                $redirectURL = $paymentData['data']['invoiceURL'];
                return redirect($redirectURL);
            }

        }

        Cart::where('user_id', $user_id)->where('order_id', null)->update(['order_id' => $order->id]);

        request()->session()->flash('success', 'Your product successfully placed in order');

        return redirect()->route('home');
    }

    /**

     * Display the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function paymentSection($orderDetail, $paymentId)
    {

        $myFatoorah = new MyFatoorahController();

        $data = $myFatoorah->index($orderDetail, $paymentId);

        return $data;

    }

    public function show($id)
    {

        $order = Order::find($id);

        // return $order;

        return view('backend.order.show')->with('order', $order);

    }

    /**

     * Show the form for editing the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function edit($id)
    {

        $order = Order::find($id);

        return view('backend.order.edit')->with('order', $order);

    }

    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, $id)
    {

        $order = Order::find($id);

        $this->validate($request, [

            'status' => 'required|in:new,process,delivered,cancel',

        ]);

        $data = $request->all();

        // return $request->status;

        if ($request->status == 'delivered') {

            foreach ($order->cart as $cart) {

                $product = $cart->product;

                // return $product;

                $product->stock -= $cart->quantity;

                $product->save();

            }

        }

        $status = $order->fill($data)->save();

        if ($status) {

            request()->session()->flash('success', 'Successfully updated order');

        } else {

            request()->session()->flash('error', 'Error while updating order');

        }

        return redirect()->route('order.index');

    }

    /**

     * Remove the specified resource from storage.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function destroy($id)
    {

        $order = Order::find($id);

        if ($order) {

            $status = $order->delete();

            if ($status) {

                request()->session()->flash('success', 'Order Successfully deleted');

            } else {

                request()->session()->flash('error', 'Order can not deleted');

            }

            return redirect()->route('order.index');

        } else {

            request()->session()->flash('error', 'Order can not found');

            return redirect()->back();

        }

    }

    public function orderTrack()
    {

        return view('frontend.pages.order-track');

    }

    public function productTrackOrder(Request $request)
    {

        // return $request->all();

        $order = Order::where('user_id', auth()->user()->id)->where('order_number', $request->order_number)->first();

        if ($order) {

            if ($order->status == "new") {

                request()->session()->flash('success', 'Your order has been placed. please wait.');

                return redirect()->route('home');

            } elseif ($order->status == "process") {

                request()->session()->flash('success', 'Your order is under processing please wait.');

                return redirect()->route('home');

            } elseif ($order->status == "delivered") {

                request()->session()->flash('success', 'Your order is successfully delivered.');

                return redirect()->route('home');

            } else {

                request()->session()->flash('error', 'Your order canceled. please try again');

                return redirect()->route('home');

            }

        } else {

            request()->session()->flash('error', 'Invalid order numer please try again');

            return back();

        }

    }

    // PDF generate

    public function pdf(Request $request)
    {

        $order = Order::getAllOrder($request->id);

        // return $order;

        $file_name = $order->order_number . '-' . $order->name . '.pdf';

        // return $file_name;

//        dd(asd);

        $pdf = PDF::loadview('backend.order.pdf', compact('order'));

        return $pdf->download($file_name);

    }

    // Income chart

    public function incomeChart(Request $request, $year = '', $type = '', $from = '', $to = '')
    {

        if ($type == 'weekly') {

            $sales = DB::select(DB::raw("SELECT SUM(`total_amount`) as sales, WEEK(`created_at`) as week FROM `orders` WHERE YEAR(`created_at`) = $year AND payment_status = 'paid' GROUP BY week"));

            $weeks = [];

            for ($i = 0; $i < 54; $i++) {
                $weeks['W-' . $i] = 0;
            }

            foreach ($sales as $sale) {
                $weeks['W-' . $sale->week] = $sale->sales;
            }

            return $weeks;

        }

        if ($type == 'monthly') {

            $sales = DB::select(DB::raw("SELECT SUM(total_amount) AS sales, MONTHNAME(`created_at`) AS month FROM `orders` WHERE YEAR(`created_at`) = $year AND payment_status = 'paid' Group by month"));

            $months = ["January" => 0, "February" => 0, "March" => 0, "April" => 0, "May" => 0, "June" => 0, "July" => 0, "August" => 0, "September" => 0, "October" => 0, "November" => 0, "December" => 0];

            foreach ($sales as $sale) {
                $months[$sale->month] = $sale->sales;
            }

            return $months;
        }

        if ($type == 'yearly') {

            $sales = DB::select(DB::raw("SELECT SUM(`total_amount`) AS sales, YEAR(`created_at`) as `year` FROM `orders` WHERE  payment_status = 'paid' GROUP BY `year`"));

            $years = [date('Y') => 0];

            foreach ($sales as $sale) {
                $years[$sale->year] = $sale->sales;
            }

            return $years;
        }

        if ($from != '' and $to != '') {

            $sales = DB::select(DB::raw("SELECT SUM(`total_amount`) AS sales, DATE(`created_at`) as `date` FROM `orders` WHERE payment_status = 'paid' GROUP BY `date` ASC HAVING `date` BETWEEN '$from' AND '$to'"));

            $dates = ['.' => 0];

            foreach ($sales as $sale) {
                $dates[$sale->date] = $sale->sales;
            }

            return $dates;
        }

        $sales = DB::select(DB::raw("SELECT SUM(total_amount) AS sales, MONTHNAME(`created_at`) AS month FROM `orders` WHERE YEAR(`created_at`) = YEAR(NOW()) AND payment_status = 'paid' Group by month"));

        $months = ["January" => 0, "February" => 0, "March" => 0, "April" => 0, "May" => 0, "June" => 0, "July" => 0, "August" => 0, "September" => 0, "October" => 0, "November" => 0, "December" => 0];

        foreach ($sales as $sale) {
            $months[$sale->month] = $sale->sales;
        }

        return $months;

        // $year=\Carbon\Carbon::now()->year;

        // // dd($year);

        // $items=Order::with(['cart_info'])->whereYear('created_at',$year)->where('status','delivered')->get()

        //     ->groupBy(function($d){

        //         return \Carbon\Carbon::parse($d->created_at)->format('m');

        //     });

        //     // dd($items);

        // $result=[];

        // foreach($items as $month=>$item_collections){

        //     foreach($item_collections as $item){

        //         $amount=$item->cart_info->sum('amount');

        //         // dd($amount);

        //         $m=intval($month);

        //         // return $m;

        //         isset($result[$m]) ? $result[$m] += $amount :$result[$m]=$amount;

        //     }

        // }

        // $data=[];

        // for($i=1; $i <=12; $i++){

        //     $monthName=date('F', mktime(0,0,0,$i,1));

        //     $data[$monthName] = (!empty($result[$i]))? number_format((float)($result[$i]), 2, '.', '') : 0.0;

        // }

        // return $data;

    }

    public function orderSearch(Request $request)
    {

        if ($request->search) {
            $orders = Order::where('first_name', 'like', '%' . $request->search . '%')->orderBy('id', 'DESC')->paginate(10);
            return view('backend.order.orderList', compact('orders'))->render();
        } else {
            $orders = Order::orderBy('id', 'DESC')->paginate(10);

            return view('backend.order.orderList', compact('orders'))->render();

        }

    }

    public function highestProductSell(Request $request)
    {
        if ($request->sdate && $request->endate) {
            $productSel = Order::whereBetween('created_at', [$request->sdate, $request->endate])->where('product_id', '!=', 0)->orderBy('id', 'DESC')->get();
        } else {
            $getArray = DB::table('orders')->where('product_id', '!=', 0)
                ->groupBy('product_id')
                ->having(DB::raw('count(product_id)'), '>', 0)
                ->pluck('product_id');
            $feedback = DB::table('orders')
                ->whereIn('product_id', $getArray)->get();

            $productSel = DB::table('products')
                ->whereIn('id', $getArray)->get();
        }

        return view('backend.selsReport.higestProductSels', compact('productSel'));

        // DB::table(SELECT product_id, COUNT(product_id) FROM orders WHERE(product_id!=0) GROUP BY product_id HAVING COUNT(product_id) > 0);

    }

    public function highestProductSearch(Request $request)
    {
        if ($request->sdate && $request->endate) {
            $productSel = Order::whereBetween('created_at', [$request->sdate, $request->endate])->where('product_id', '!=', 0)->orderBy('id', 'DESC')->get();
        } else {
            $getArray = DB::table('orders')->where('product_id', '!=', 0)
                ->groupBy('product_id')
                ->having(DB::raw('count(product_id)'), '>', 0)
                ->pluck('product_id');
            $feedback = DB::table('orders')
                ->whereIn('product_id', $getArray)->get();

            $productSel = DB::table('products')
                ->whereIn('id', $getArray)->get();
        }

        return view('backend.selsReport.higestProductSels', compact('productSel'));
    }

    public function selsOrderReport(Request $request)
    {
        if ($request->sdate && $request->endate) {
            $orders = Order::whereBetween('created_at', [$request->sdate, $request->endate])->orderBy('id', 'DESC')->get();
        } else {
            $orders = Order::orderBy('id', 'DESC')->get();
        }

        return view('backend.selsReport.orderReport')->with('orders', $orders);
    }

    public function deleteOrder(Request $request, $id)
    {
        $order = Order::find($id);
        $order->delete();
        return redirect()->back();
    }

}
