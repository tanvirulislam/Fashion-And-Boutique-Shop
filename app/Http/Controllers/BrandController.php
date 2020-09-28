<?php

namespace App\Http\Controllers;
use App\Brand;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use DB;

class BrandController extends Controller
{
   public function index()
   {	
   		$brands=Brand::all();
   		return view('admin.brand.manage', ['brands'=>$brands]);
   }

   public function create()
   {
   		return view('admin.brand.add');
   }

   public function store(Request $request){
   	$request->validate([

            'name' => 'required',
            'status' => 'required',

        ]);

   	 $brand=new Brand();
       $brand->name=$request->name;
       $brand->status=$request->status;
       $brand->save();
       Toastr::success('Successully Add 🙂' ,'Success');


          return redirect('/brand')->with('message','Registered succesfully');


   }


   public function edit($id)
    {
        $brand = Brand::find($id);
        return view('admin.brand.edit',['brand'=>$brand]);
    }


     public function update(Request $request)
    {
       DB::table('brands')->where('id', $request->id)->update([
       	'name'=>$request->name, 
       	'status'=>$request->status
   ]);
       Toastr::success('Successully Updated 🙂' ,'Success');

        return redirect('/brand');
    }




    public function destroy($id)
    {
        $brand = Brand::find($id);

        $brand->delete();
        Toastr::warning('Successully Deleted 🙂' ,'Success');


        return redirect('/brand');
    }


}
