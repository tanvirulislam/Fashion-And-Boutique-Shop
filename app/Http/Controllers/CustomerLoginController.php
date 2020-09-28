<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Catagory;
use Session;
use Illuminate\Support\Facades\Hash;

class CustomerLoginController extends Controller
{
	public function coustomer(){
		$catagories=Catagory::all();
		return view('front.customer.coustomer', ['catagories'=>$catagories]);
	}

	public function customerregi(Request $request){
		$customer = new Customer();
		$customer->name = $request->name;
		$customer->email = $request->email;
		$customer->pass = Hash::make($request->pass);
		$customer->phone_num = $request->phone_num;
		$customer->save();
		$customerId = $customer->id;
		Session::put('customerId',$customerId);
		Session::put('customerName',$customer->name);
		return redirect('/shipping_info');
	}
	public function customerlogin(Request $request){
		$customer = User::where('email',$request->email)->first();
		if(password_verify($request->pass,$customer->pass)){
			Session::put('customerId',$customer->id);
			Session::put('customerName',$customer->name);
			return redirect('/shipping_info');
		} else {
			return redirect('/coustomer_login')->with('message','Incorrect Password');
		}
	}
}
