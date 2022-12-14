<?php



namespace App\Http\Controllers;

use App\Mail\OrderMail;

use Auth;
use Session;

use Illuminate\Http\Request;

use App\Models\Product;

use App\Models\Wishlist;

use App\Models\Cart;

use Illuminate\Support\Facades\Mail;

use Illuminate\Support\Str;

use Helper;

class CartController extends Controller

{

    protected $product = null;

    public function __construct(Product $product)
    {

        $this->product = $product;
    }

    public function addToCart(Request $request)
    {
        if (empty($request->slug)) {
            request()->session()->flash('error', 'Invalid Products');
            return back();
        }

        $product = Product::where('slug', $request->slug)->first();

        if (empty($product)) {
            request()->session()->flash('error', 'Invalid Products');
            return back();
        }


        if (Auth::check()) {
            $user_id = auth()->user()->id;
        } elseif (Session::get('guest_user_id')) {
            $user_id = Session::get('guest_user_id');
        } else {
            $user_id = mt_rand(50001, 79999);
            Session::put('guest_user_id', $user_id);
        }

        $already_cart = Cart::where('user_id', $user_id)->where('order_id', null)->where('product_id', $product->id)->first();

        if ($already_cart) {

            $already_cart->quantity = $already_cart->quantity + 1;
            $already_cart->amount = $product->discount + $already_cart->amount; // now discount is discounted price
            
            if ($already_cart->product->stock < $already_cart->quantity || $already_cart->product->stock <= 0){
                return back()->with('error', 'Stock not sufficient!.');
            }

            $already_cart->save();

        } else {
            
            $cart = new Cart;
            $cart->user_id = $user_id;
            $cart->product_id = $product->id;
            $cart->price = $product->discount; // now discount is discounted price
            $cart->quantity = 1;
            $cart->amount = $cart->price * $cart->quantity;

            if ($cart->product->stock < $cart->quantity || $cart->product->stock <= 0) {
                return back()->with('error', 'Stock not sufficient!.');
            }

            $cart->save();

            //$wishlist=Wishlist::where('user_id',auth()->user()->id)->where('cart_id',null)->update(['cart_id'=>$cart->id]);
        }

        request()->session()->flash('success', 'Product successfully added to cart');
        return back();
    }



    public function singleAddToCart(Request $request)
    {
        $request->validate([
            'slug'      =>  'required',
            'quant'      =>  'required',
        ]);

        $product = Product::where('slug', $request->slug)->first();

        if ($product->stock < $request->quant[1]) {

            return back()->with('error', 'Out of stock, You can add other products.');

        }

        if (($request->quant[1] < 1) || empty($product)) {

            request()->session()->flash('error', 'Invalid Products');
            return back();

        }

        if (Auth::check()) {
            $user_id = auth()->user()->id;
        } elseif (Session::get('guest_user_id')) {
            $user_id = Session::get('guest_user_id');
        } else {
            $user_id = mt_rand(50001, 79999);
            Session::put('guest_user_id', $user_id);
        }

        $already_cart = Cart::where('user_id', $user_id)->where('order_id', null)->where('product_id', $product->id)->first();
        
        if ($already_cart) {

            $already_cart->quantity = $already_cart->quantity + $request->quant[1];
            $already_cart->amount = ($product->discount * $request->quant[1]) + $already_cart->amount; // now discount is discounted price

            if ($already_cart->product->stock < $already_cart->quantity || $already_cart->product->stock <= 0){
                return back()->with('error', 'Stock not sufficient!.');
            } 

            $already_cart->save();

        } else {

            $cart = new Cart;
            $cart->user_id = $user_id;
            $cart->product_id = $product->id;
            $cart->price = $product->discount; //now discount is discounted price
            $cart->quantity = $request->quant[1];
            $cart->amount = ($cart->price * $cart->quantity);

            if ($cart->product->stock < $cart->quantity || $cart->product->stock <= 0){
                return back()->with('error', 'Stock not sufficient!.');
            } 

            $cart->save();

        }

        request()->session()->flash('success', 'Product successfully added to cart.');
        return back();
    }

    public function cartDelete(Request $request)
    {

        $cart = Cart::find($request->id);

        if ($cart) {

            $cart->delete();

            request()->session()->flash('success', 'Cart successfully removed');

            return back();
        }

        request()->session()->flash('error', 'Error please try again');

        return back();
    }

    public function cartDeleteAll(Request $request)
    {
        if (Auth::check()) {
            $user_id = auth()->user()->id;
        } elseif (Session::get('guest_user_id')) {
            $user_id = Session::get('guest_user_id');
        }
        $cart = Cart::where('user_id', $user_id)->delete();
        // if ($cart) {
        //     $cart->delete();
        request()->session()->flash('success', 'Cart successfully removed');
        return back();
        // }
        // request()->session()->flash('error','Error please try again');
        // return back();
    }

    public function cartUpdatenew(Request $request)
    {

        if ($request->cartQuantity) {

            $error = array();
            $success = '';
            
            $product = Product::where('id', $request->product_id)->first();

            if ($product->stock < $request->cartQuantity) {

                return back()->with('error', 'Out of stock, You can add other products.');

            }

            if (($request->cartQuantity < 1) || empty($product)) {
                request()->session()->flash('error', 'Invalid Products');
                return back();
            }

            $already_cart = Cart::where('id', $request->cart_id)->first();

            if ($already_cart) {

                // $already_cart->quantity = $already_cart->quantity + $request->cartQuantity;

                $already_cart->quantity = $request->cartQuantity;
                $already_cart->amount = ($product->discount * $request->cartQuantity); //+ $already_cart->amount; discount is price now

                if ($already_cart->product->stock < $already_cart->quantity || $already_cart->product->stock <= 0){
                    return back()->with('error', 'Stock not sufficient!.');
                }
                    
                $already_cart->save();

                if (strpos(floatval(Helper::totalCartPrice()), ".") !== false)
                    $subtotal = number_format(Helper::totalCartPrice(), 3) . ' KWD';
                else
                    $subtotal = floatval(Helper::totalCartPrice()) . ' KWD';

                $total_amount = Helper::totalCartPrice();

                if (session()->has('coupon')) {
                    $total_amount = $total_amount - Session::get('coupon')['value'];
                }
                if (strpos(floatval($total_amount), ".") !== false)
                    $total = number_format($total_amount, 3) . ' KWD';
                else
                    $total = floatval($total_amount) . ' KWD';

                if (strpos(floatval($already_cart->amount), ".") !== false)
                    $item_amount = number_format($already_cart->amount, 3) . ' KWD';
                else
                    $item_amount = floatval($already_cart->amount) . ' KWD';

                $amounts['item_amount'] = $item_amount;
                $amounts['subtotal'] = $subtotal;
                $amounts['total'] = $total;
            }
            
            // return back()->with($error)->with('success', $success);
        }
    }


    public function cartUpdate(Request $request)
    {

        // dd($request->all());

        if ($request->quant) {

            $error = array();

            $success = '';

            // return $request->quant;

            foreach ($request->quant as $k => $quant) {

                // return $k;

                $id = $request->qty_id[$k];

                // return $id;

                $cart = Cart::find($id);

                // return $cart;

                if ($quant > 0 && $cart) {

                    // return $quant;



                    if ($cart->product->stock < $quant) {

                        request()->session()->flash('error', 'Out of stock');

                        return back();
                    }

                    $cart->quantity = ($cart->product->stock > $quant) ? $quant  : $cart->product->stock;

                    // return $cart;



                    if ($cart->product->stock <= 0) continue;

                    //$after_price = ($cart->product->price - ($cart->product->price * $cart->product->discount) / 100);

                    $after_price = $cart->product->discount; // now discount is discounted price

                    $cart->amount = $after_price * $quant;

                    // return $cart->price;

                    $cart->save();

                    $success = 'Cart successfully updated!';
                    
                } else {

                    $error[] = 'Cart Invalid!';
                }
            }

            return back()->with($error)->with('success', $success);

        } else {

            return back()->with('Cart Invalid!');
        }
    }



    // public function addToCart(Request $request){

    //     // return $request->all();

    //     if(Auth::check()){

    //         $qty=$request->quantity;

    //         $this->product=$this->product->find($request->pro_id);

    //         if($this->product->stock < $qty){

    //             return response(['status'=>false,'msg'=>'Out of stock','data'=>null]);

    //         }

    //         if(!$this->product){

    //             return response(['status'=>false,'msg'=>'Product not found','data'=>null]);

    //         }

    //         // $session_id=session('cart')['session_id'];

    //         // if(empty($session_id)){

    //         //     $session_id=Str::random(30);

    //         //     // dd($session_id);

    //         //     session()->put('session_id',$session_id);

    //         // }

    //         $current_item=array(

    //             'user_id'=>auth()->user()->id,

    //             'id'=>$this->product->id,

    //             // 'session_id'=>$session_id,

    //             'title'=>$this->product->title,

    //             'summary'=>$this->product->summary,

    //             'link'=>route('product-detail',$this->product->slug),

    //             'price'=>$this->product->price,

    //             'photo'=>$this->product->photo,

    //         );



    //         $price=$this->product->price;

    //         if($this->product->discount){

    //             $price=($price-($price*$this->product->discount)/100);

    //         }

    //         $current_item['price']=$price;



    //         $cart=session('cart') ? session('cart') : null;



    //         if($cart){

    //             // if anyone alreay order products

    //             $index=null;

    //             foreach($cart as $key=>$value){

    //                 if($value['id']==$this->product->id){

    //                     $index=$key;

    //                 break;

    //                 }

    //             }

    //             if($index!==null){

    //                 $cart[$index]['quantity']=$qty;

    //                 $cart[$index]['amount']=ceil($qty*$price);

    //                 if($cart[$index]['quantity']<=0){

    //                     unset($cart[$index]);

    //                 }

    //             }

    //             else{

    //                 $current_item['quantity']=$qty;

    //                 $current_item['amount']=ceil($qty*$price);

    //                 $cart[]=$current_item;

    //             }

    //         }

    //         else{

    //             $current_item['quantity']=$qty;

    //             $current_item['amount']=ceil($qty*$price);

    //             $cart[]=$current_item;

    //         }



    //         session()->put('cart',$cart);

    //         return response(['status'=>true,'msg'=>'Cart successfully updated','data'=>$cart]);

    //     }

    //     else{

    //         return response(['status'=>false,'msg'=>'You need to login first','data'=>null]);

    //     }

    // }



    // public function removeCart(Request $request){

    //     $index=$request->index;

    //     // return $index;

    //     $cart=session('cart');

    //     unset($cart[$index]);

    //     session()->put('cart',$cart);

    //     return redirect()->back()->with('success','Successfully remove item');

    // }



    public function checkout(Request $request)
    {

        // $cart=session('cart');

        // $cart_index=\Str::random(10);

        // $sub_total=0;

        // foreach($cart as $cart_item){

        //     $sub_total+=$cart_item['amount'];

        //     $data=array(

        //         'cart_id'=>$cart_index,

        //         'user_id'=>$request->user()->id,

        //         'product_id'=>$cart_item['id'],

        //         'quantity'=>$cart_item['quantity'],

        //         'amount'=>$cart_item['amount'],

        //         'status'=>'new',

        //         'price'=>$cart_item['price'],

        //     );



        //     $cart=new Cart();

        //     $cart->fill($data);

        //     $cart->save();

        // }

        if (Auth::check()) {
            $user_id = auth()->user()->id;
        } elseif (Session::get('guest_user_id')) {
            $user_id = Session::get('guest_user_id');
        } else {
            $user_id = mt_rand(50001, 79999);
            Session::put('guest_user_id', $user_id);
        }

        if(Helper::cartCount('',$user_id)){
            return view('frontend.pages.checkout');
        }
        else{
            return redirect()->route('home')->with('error', 'You have no products in your cart');
        }

         
    }
}
