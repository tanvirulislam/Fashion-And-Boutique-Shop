<?php

namespace App\Http\Controllers;

use App\Catagory;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use DB;

class CatagoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $catagories=Catagory::all();
       return view('admin.catagory.manage',['catagories'=>$catagories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.catagory.add');
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

            'Catagory' => 'required',
            'Status' => 'required',

        ]);

       $catagory=new Catagory();
       $catagory->Catagory=$request->Catagory;
       $catagory->Status=$request->Status;
       $catagory->save();
       Toastr::success('Successully Add 🙂' ,'Success');


          return redirect('/catagory')->with('message','Registered succesfully');

       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Catagory  $catagory
     * @return \Illuminate\Http\Response
     */
    public function show(Catagory $catagory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Catagory  $catagory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $catagory = Catagory::find($id);
        return view('admin.catagory.edit',['catagory'=>$catagory]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Catagory  $catagory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
       DB::table('catagories')->where('id', $request->id)->update([
        'Catagory'=>$request->Catagory, 
        'Status'=>$request->Status
   ]);
       Toastr::success('Successully Updated 🙂' ,'Success');

        return redirect('/catagory');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Catagory  $catagory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $catagory = Catagory::find($id);

        $catagory->delete();
        Toastr::warning('Successully Deleted 🙂' ,'Success');


        return redirect('/catagory');
    }
}
