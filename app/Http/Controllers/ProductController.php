<?php



namespace App\Http\Controllers;



use App\Models\Cart;

use Illuminate\Http\Request;

use App\Models\Product;

use App\Models\Category;

use App\Models\Brand;



use Illuminate\Support\Str;



class ProductController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {

        $products=Product::getAllProduct();

        // return $products;

        return view('backend.product.index')->with('products',$products);

    }



    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        $brand=Brand::get();

        $category=Category::where('is_parent',1)->get();

        // return $category;

        return view('backend.product.create')->with('categories',$category)->with('brands',$brand);

    }



    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)

    {
        // return $request->all();
        
        $validation = validator()->make($request->all(), [

            'title'=>'required|string',

            'summary'=>'required|string',

            'description'=>'nullable|string',

            'photo'=>'required|string',

            'size'=>'required',

            'stock.*'=>"required|numeric",

            'cat_id'=>'required|exists:categories,id',

            'brand_id'=>'nullable|exists:brands,id',

            'child_cat_id'=>'nullable|exists:categories,id',

            'is_featured'=>'sometimes|in:1',

            'status'=>'required|in:active,inactive',

            // 'condition'=>'required|in:default,new,hot',

            'price.*'=>'required|numeric',

            // 'discount.*'=>'required|numeric'
           

        ]);

        if ($validation->fails()) {
            return ['errors' => $validation->errors(), 'status' => 'error'];
        }



        foreach ($request->size as $key => $productSize) {

            
            $data = $request->all();
            
            $price = $request->price;
            $stock = $request->stock;
            $discount = $request->discount; // now its discounted price

            if (empty($request->title_ar)) {
                $data['title_ar'] = $request->title;
            }

            if (empty($request->summary_ar)) {
                $data['summary_ar'] = $request->summary;
            }

            if (empty($request->summary_ar)) {
                $data['description_ar'] = $request->description;
            }

            $slug = Str::slug($request->title);

            $count = Product::where('slug', $slug)->count();

            if ($count > 0) {

                $slug = $slug . '-' . date('ymdis') . '-' . rand(0, 999);

            }

            $data['slug'] = $slug;

            $data['is_featured'] = $request->input('is_featured', 0);

            $data['size']=$productSize;

            $data['price']=$price[$key];

            $data['stock']=$stock[$key];

            if($discount[$key] == null or $discount[$key] <= 0){
                
                $data['discount']=$price[$key];

            }
            else{

                $data['discount']=$discount[$key];
            }

            $status = Product::create($data);

        }

        if($status){

            request()->session()->flash('success','Product Successfully added');

            return ['status' => 'success'];

        }

        // else{

        //     request()->session()->flash('error','Please try again!!');

        // }

        // return redirect()->route('product.index');

    }



    /**

     * Display the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function show($id)

    {

        //

    }



    /**

     * Show the form for editing the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function edit($id)

    {

        $brand=Brand::get();

        $product=Product::findOrFail($id);

        $category=Category::where('is_parent',1)->get();

        $items=Product::where('id',$id)->get();

        // return $items;

        return view('backend.product.edit')->with('product',$product)

                    ->with('brands',$brand)

                    ->with('categories',$category)->with('items',$items);

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
        
        $product=Product::findOrFail($id);

        $this->validate($request,[

            'title'=>'string|required',

            'summary'=>'string|required',

            'description'=>'string|nullable',

            'photo'=>'string|required',

            'size'=>'nullable',

            'stock'=>"required|numeric",

            'cat_id'=>'required|exists:categories,id',

            'child_cat_id'=>'nullable|exists:categories,id',

            'is_featured'=>'sometimes|in:1',

            'brand_id'=>'nullable|exists:brands,id',

            'status'=>'required|in:active,inactive',

            'condition'=>'required|in:default,new,hot',

            'price'=>'required|numeric',

            // 'discount'=>'required|numeric'

        ]);

     

      
        $data=$request->except(['size','discount']);
        $data['size'] = $request->size.'ml';

        if($request->discount == null or $request->discount <=0){
            $data['discount'] = $request->price;
        }
        else{
            $data['discount'] = $request->discount;
        }



        if (empty($request->title_ar)){

            $data['title_ar'] = $request->title;

        }

        if (empty($request->summary_ar)){

            $data['summary_ar'] = $request->summary;

        }

        if (empty($request->summary_ar)){

            $data['description_ar'] = $request->description;

        }

        $data['is_featured']=$request->input('is_featured',0);

         

        // return $data;

       

        $status=$product->fill($data)->save();

        if($status){

            request()->session()->flash('success','Product Successfully updated');

        }

        else{

            request()->session()->flash('error','Please try again!!');

        }

        return redirect()->route('product.index');

    }



    /**

     * Remove the specified resource from storage.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function destroy($id)

    {

        $existInCart = Cart::where('product_id', $id)->first();

        if ($existInCart){

            request()->session()->flash('error','Product Already Exist in cart. please "Deactivate" product');

            return redirect()->route('product.index');

        }

//        if ()

        $product=Product::findOrFail($id);

        $status=$product->delete();

        if($status){

            request()->session()->flash('success','Product successfully deleted');

        }

        else{

            request()->session()->flash('error','Error while deleting product');

        }

        return redirect()->route('product.index');

    }

}

