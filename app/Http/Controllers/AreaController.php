<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;
class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $area=Area::all();
        return view('backend.area.index',compact('area'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.area.create');
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
        'name'=>'required',
      ]);
      
      $area = new Area();
      $area->name=$request->name;
      $area->save();
      if($area){
        request()->session()->flash('success','Area successfully added');
    }
    else{
        request()->session()->flash('error','Error occurred while adding Area');
    }
    return redirect('admin/area');
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
      $areaedit=Area::find($id);
      return view('backend.area.edit',compact('areaedit'));
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
       $areaupdate= Area::find($id);
       $areaupdate->name=$request->name;
       $areaupdate->save();
       
       if($areaupdate){
        request()->session()->flash('success','Area successfully updated');
    }
    else{
        request()->session()->flash('error','Error occurred while updating Area');
    }
    return redirect('admin/area');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function areadelete( Request $request,$id)
    {
        
        
       $areadelete=Area::find($id);
       $areadelete->delete();
       if($areadelete){
        request()->session()->flash('success','Area successfully deleted');
    }
    else{
        request()->session()->flash('error','Error occurred while deleting Area');
    }
    return redirect('admin/area');
     }
}
