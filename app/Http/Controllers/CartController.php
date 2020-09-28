<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use DB;
use\App\Catagory;
class CartController extends Controller
{
	public function cart()  {
		$cartCollection = \Cart::getContent();
		$catagories=Catagory::all();
		return view('front.cart.cart')->with(['cartCollection' => $cartCollection, 'catagories'=>$catagories]);
	}
	public function add(Request$request){
		\Cart::add(array(
			'id' => $request->id,
			'name' => $request->name,
			'price' => $request->price,
			'quantity' => $request->quantity,
			'attributes' => array(
				'image' => $request->img,

			)
		));
		return redirect()->route('cart.index')->with('success_msg', 'Item is Added to Cart!');
	}

	public function remove(Request $request){
		\Cart::remove($request->id);
		return redirect()->route('cart.index')->with('success_msg', 'Item is removed!');
	}
	public function update(Request $request){
		\Cart::update($request->id,
			array(
				'quantity' => array(
					'relative' => false,
					'value' => $request->quantity
				),
			));
		return redirect()->route('cart.index')->with('success_msg', 'Cart is Updated!');
	}
	public function clear(){
		\Cart::clear();
		return redirect()->route('cart.index')->with('success_msg', 'Car is cleared!');
	}
}
