<?php

namespace App\Http\Controllers;

use App\Subcatagory;
use App\Catagory;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use DB;

class SubcatagoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $catagories=Catagory::all();
        $subcatagories=Subcatagory::all();
        return view('admin.subcatagory.manage', ['catagory'=>$catagories,'subcatagory'=>$subcatagories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $catagories=Catagory::all();

        return view('admin.subcatagory.add', ['catagories'=>$catagories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $request->validate([

            'Catagory_id' => 'required',
            'Subcatagory'=>'required',
            'Status' => 'required',

        ]);

       $subcatagory=new Subcatagory();
       $subcatagory->Catagory_id=$request->Catagory_id;
       $subcatagory->Subcatagory=$request->Subcatagory;
       $subcatagory->Status=$request->Status;
       $subcatagory->save();
       Toastr::success('Successully Add 🙂' ,'Success');


          return redirect('/subcatagory')->with('message','Registered succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subcatagory  $subcatagory
     * @return \Illuminate\Http\Response
     */
    public function show(Subcatagory $subcatagory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subcatagory  $subcatagory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $catagories=Catagory::all();
        $subcatagory = Subcatagory::find($id);
        return view('admin.subcatagory.edit',['subcat'=>$subcatagory, 'cat'=>$catagories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subcatagory  $subcatagory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
       DB::table('subcatagories')->where('id', $request->id)->update([
        'Subcatagory'=>$request->Subcatagory, 
        'Catagory_id'=>$request->Catagory_id,
        'Status'=>$request->Status,
   ]);
       Toastr::success('Successully Updated 🙂' ,'Success');

        return redirect('/subcatagory');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subcatagory  $subcatagory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subcatagory = Subcatagory::find($id);

        $subcatagory->delete();
        Toastr::warning('Successully Deleted 🙂' ,'Success');


        return redirect('/subcatagory');
    }
}
