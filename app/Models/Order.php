<?php



namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class Order extends Model

{

    protected $fillable=['product_id','user_id','order_number','sub_total','quantity','delivery_charge','status','total_amount','first_name','last_name','country','post_code','address1','address2','phone','email','payment_method','payment_status','shipping_id','coupon', 'name','checkout_type'];



    public function cart_info(){

        return $this->hasMany('App\Models\Cart','order_id','id');

    }

    public static function getAllOrder($id){

        return Order::with('cart_info')->find($id);

    }

    public static function countActiveOrder(){

        $data=Order::where('payment_status','=','paid')->count();

        if($data){

            return $data;

        }

        return 0;

    }

    public function cart(){

        return $this->hasMany(Cart::class);

    }



    public function shipping(){

        return $this->belongsTo(Shipping::class,'shipping_id');

    }

    public function user()

    {

        return $this->belongsTo('App\models\User', 'user_id');

    }

    public static function recentOrder() {

        $data = Order::where('payment_status','=','paid')->orderby('created_at', 'desc')->limit(5)->get();

        return $data;

    }

    public static function newOrder() {

        $data = Order::where('payment_status','=','paid')->where(['status'=>'new'])->orderby('created_at', 'desc')->limit(5)->get();

        return $data;

    }

    public static function totalSales(){

        $data=Order::where('payment_status','=','paid')->sum('total_amount');

        if($data){

            return $data;

        }

        return 0;

    }

    public static function currentMonthSales(){

        $sales = DB::select( DB::raw("SELECT SUM(total_amount) AS curr_month_sale FROM orders WHERE MONTH(created_at) = MONTH(NOW()) AND payment_status = 'paid'") );

        if($sales[0]->curr_month_sale){

            return $sales[0]->curr_month_sale;

        }

        return 0;

    }

    public static function prevMonthSales(){

        $sales = DB::select( DB::raw("SELECT SUM(total_amount) AS curr_month_sale FROM orders WHERE MONTH(created_at) = (MONTH(NOW())-1) AND payment_status = 'paid'") );

        if($sales[0]->curr_month_sale){

            return $sales[0]->curr_month_sale;

        }

        return 0;

    }

}

