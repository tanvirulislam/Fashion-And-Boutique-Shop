<?php

namespace App\Http\Controllers;

use App\Catagory;
use App\Product;
use App\Subcatagory;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
    	$catagories=Catagory::all();

    	$latest_product=Product::where('status',1)->latest()->limit(8)->get();
    	
    	return view('front.home', ['catagories'=>$catagories, 'latest_product'=>$latest_product]);

    }

    public function singlecatagory($id){
    	$catagories=Catagory::all();
    	$catagory_product=Product::where('status',1)->where('Catagory_id', $id)->latest()->paginate(12);

    	$catagory_name=Catagory::where('id', $id)->value('Catagory');

      
    	// $catagory_id=Catagory::where('id', $id)->value('id');

    	$subcat=Subcatagory::where('Catagory_id', $id)->latest()->get();

    	return view('front.singlecatagory', ['catagory_products'=>$catagory_product, 'catagory_name'=>$catagory_name, 'catagories'=>$catagories, 'subcat'=>$subcat]);
    	
    }

    public function singlesubcatagory($id){
    	

    	$catagories=Catagory::all();
    	$subcatagory_product=Product::where('status',1)->where('subcatagory_id', $id)->latest()->paginate(12);
    	$catagory_id=Product::where('subcatagory_id', $id)->value('Catagory_id');

    	$catagory_name=Catagory::where('id', $catagory_id)->value('Catagory');

    	$subcatagory_name=Subcatagory::where('id', $id)->value('Subcatagory');
      
    	// $catagory_id=Catagory::where('id', $id)->value('id');

    	$subcat=Subcatagory::where('Catagory_id', $catagory_id)->latest()->get();

    	return view('front.single_subcatagory', ['subcatagory_product'=>$subcatagory_product, 'catagory_name'=>$catagory_name, 'catagories'=>$catagories, 'subcat'=>$subcat, 'subcatagory_name'=>$subcatagory_name]);

    }

    public function singleproduct($id){

    	$catagories=Catagory::all();

    	$subcatagory=Subcatagory::all();

    	$product_name=Product::where('id', $id)->first();

    	$catagory_id=Product::where('id', $id)->value('Catagory_id');

    	$subcatagory_id=Product::where('id', $id)->value('subcatagory_id');

    	$catagory_name=Catagory::where('id', $catagory_id)->value('Catagory');

    	$subcatagory_name=Subcatagory::where('id', $subcatagory_id)->value('Subcatagory');

    	return view('front.single_product', ['product_name'=>$product_name, 'subcatagory'=>$subcatagory, 'catagories'=>$catagories, 'catagory_name'=>$catagory_name, 'subcatagory_name'=>$subcatagory_name]);

    }

   
}
