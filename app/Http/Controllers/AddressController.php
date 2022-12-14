<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;
use App\Models\Banner;
use Illuminate\Support\Str;
use App\Models\Cart;
use App\Models\Area;
use App\Models\Shipping;
use Illuminate\Support\Facades\Auth;
class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $address=Address::orderBy('id','DESC')->where('user_id', auth()->user()->id)->paginate(10);
        return view('user.address.index')->with('addresses',$address);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $area=Area::all();
        return view('user.address.create',compact('area'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $this->validate($request,[
            'address_name' => 'required|string',
            'user_name' => 'required|string',
            'phone' => 'required|numeric|digits:8',
            // 'area' => 'required',
            'shipping' => 'required',
            'address' => 'required|string',
            'status'=>'required|in:active,inactive',
        ]);
        $data=$request->all();
        $data['user_id']=$request->user()->id;
        $status=Address::create($data);
        if($status){
            request()->session()->flash('success','Address successfully added');
        }
        else{
            request()->session()->flash('error','Error occurred while adding Address');
        }
        $userId=Auth::user()->id;
       $cartDetails=Cart::where('user_id',$userId)->first();

        if($cartDetails==null){
            return redirect()->route('address.index');
           
        }else{
            return redirect()->route('checkout');
        }
       
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
        $banner=Address::findOrFail($id);
        $areas=Area::all();
        return view('user.address.edit')->with('address',$banner)->with('areas', $areas);
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
        $address=Address::findOrFail($id);
        $this->validate($request,[
            'address_name' => 'required|string',
            'user_name' => 'required|string',
            'phone' => 'required|numeric|min:10',
            // 'area' => 'required',
            'shipping' => 'required',
            'address' => 'required|string',
            'status'=>'required|in:active,inactive',
        ]);
        $data=$request->all();
        $status=$address->fill($data)->save();
        if($status){
            request()->session()->flash('success','Address successfully updated');
        }
        else{
            request()->session()->flash('error','Error occurred while updating Address');
        }
        return redirect()->route('address.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $address=Address::findOrFail($id);
        $status=$address->delete();
        if($status){
            request()->session()->flash('success','Address successfully deleted');
        }
        else{
            request()->session()->flash('error','Error occurred while deleting Address');
        }
        return redirect()->route('address.index');
    }

    public function getareaData(Request $request,$id){
        $area=Shipping::where('area_id',$id)->get();
        $options='<option value="" >SELECT YOUR LOCATION </option>';
        foreach ($area as $aries) {
            $options.='<option value="'.$aries->id.'">'.$aries->type .'</option>';
        }
        return ['area'=>$options];
    }
}
