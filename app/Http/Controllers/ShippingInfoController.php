<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catagory;
use Session;
use App\Customer;
use App\Shipping;
use App\Order;
use App\OrderDetails;
use App\Product;



class ShippingInfoController extends Controller
{
	public function shipping(){
		$catagories=Catagory::all();
		return view('front.shipping_info.shipping_info',  ['catagories'=>$catagories]);
	}


	public function shipping_store(Request $request){
		$user= Session::get('customerId');
		
			$customer = new Shipping();
			
			$customer->email = $request->email;
			$customer->user_id = $user;
			$customer->phone_num = $request->phone_num;
			$customer->address = $request->address;
			$customer->message = $request->message;
			$customer->save();
		
		$shippingId = $customer->id;
		$userId = $customer->user_id;
		
			$mainOrder = new Order();
			$mainOrder->user_id = $userId;;
			$mainOrder->shipping_id =  $shippingId;
			$mainOrder->pin ='PUR-'.rand('10000000','99999999');
			$mainOrder->order_total=\Cart::getTotal();
			$mainOrder->save();
			$orderId=$mainOrder->id;
			$cartCollection = \Cart::getContent();
			foreach ($cartCollection as $cartProduct){
				$order= new OrderDetails();
				$order->user_id = $userId;
				$order->shipping_id =  $shippingId;
				$order->product_id = $cartProduct->id;
				$order->order_id = $orderId;
				$order->product_name = $cartProduct->name;
				$order->product_price = $cartProduct->price;
				$order->product_quantity =$cartProduct->quantity;
				$order->order_total = \Cart::get($cartProduct->id)->getPriceSum();
				$order->save();
			
		}


		\Cart::clear();
		$pinNum = Order::where('id',$orderId)->first();
        //$users=User::all();
		$catagories = Catagory::orderBy('id','desc')->get();
		return view('front.success')->with(['pinNum'=>$pinNum,'catagories'=>$catagories]);
	}
}
