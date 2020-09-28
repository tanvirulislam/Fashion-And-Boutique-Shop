<?php

namespace App\Http\Controllers;

use App\Product;
use\Image;
use\App\Catagory;
use\App\Subcatagory;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

       $cat=Catagory::all();
       $subcat=Subcatagory::all();
       $product=Product::all();
       return view('admin.product.manage',['catagories'=>$cat, 'subcat'=>$subcat, 'product'=>$product]);

   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $catagories=Catagory::all();
      return view('admin.product.add',['categories'=>$catagories]);
  }

  public function findProductName(Request $request){
    $data=Subcatagory::select('Subcatagory','id')->where('Catagory_id',$request->id)->get();
    return response()->json($data);
}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    protected function imageUpload($request){
        $productImage = $request->file('picture');
        $imageName = $productImage->getClientOriginalName();
        $directory = 'public/upload/';
        $imageUrl = $directory.$imageName;
        Image::make($productImage)->resize(400,400)->save($imageUrl);
        return $imageUrl;
    }

    public function store(Request $request)
    {
     
     $request->validate([

        'Catagory_id' => 'required',
        'subcatagory_id' => 'required',
        'productname' => 'required',
        'productdis' => 'required',
        'color' => 'required',
        'picture' => 'required',


    ]);
     if($request->file('picture')!==null){
        $image=$this->imageUpload($request);
    }else{
       $image=null;
   }

   $product=new Product();
   $product->Catagory_id=$request->Catagory_id;
   $product->subcatagory_id=$request->subcatagory_id;
   $product->productname=$request->productname;
   $product->productdis=$request->productdis;
   $product->picture=$image;
   $product->price=$request->price;
   $product->color=$request->color;
   $product->status=$request->status;
   $product->save();
   Toastr::success('Successully Add 🙂' ,'Success');


   return redirect('/product')->with('message','Registered succesfully');
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {    $cat=Catagory::all();
       $subcat=Subcatagory::all();
       $product = Product::find($id);
       return view('admin.product.edit',['product'=>$product, 'categories'=>$cat, 'subcatagory'=>$subcat]);
   }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function productInfoUpdate ($product, $request, $imageUrl){
       $product->Catagory_id=$request->Catagory_id;
       $product->subcatagory_id=$request->subcatagory_id;
       $product->productname=$request->productname;
       $product->productdis=$request->productdis;
       $product->color=$request->color;
       $product->price=$request->price;
       $product->status=$request->status;
       $product->picture = $imageUrl;
       $product->save();
   }
   public function update(Request $request)
   {
    $productImage = $request->file('picture');
    if($productImage){
        $product = Product::find($request->id);
        unlink($product->picture);
        $imageUrl = $this->imageUpload($request);
        $this->productInfoUpdate($product, $request, $imageUrl);
        Toastr::success('Successfully Updated 🙂' ,'Success');
        return redirect()->route('product');
    } else {
       $product = Product::find($request->id);
       $product->Catagory_id=$request->Catagory_id;
       $product->subcatagory_id=$request->subcatagory_id;
       $product->productname=$request->productname;
       $product->productdis=$request->productdis;
       $product->color=$request->color;
       $product->price=$request->price;
       $product->status=$request->status;
       
       $product->save();

       
       Toastr::success('Product Successfully Updated 🙂' ,'Success');
       return redirect()->route('product');
   }
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);

        $product->delete();
        Toastr::warning('Successully Deleted 🙂' ,'Success');


        return redirect('/product');
    }
}
