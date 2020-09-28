<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shipping;
use App\Order;
use App\OrderDetails;
use App\Customer;
use Brian2694\Toastr\Facades\Toastr;
use DB;
use PDF;


class CustomerOrderController extends Controller
{
	public function order(){
		$orders =DB::table('orders')
		->join('customers','orders.user_id','=','customers.id')
		->select('orders.*','customers.name as Username','customers.phone_num','customers.id as customersID')
		->where('orders.status','=',0)
		->get();

		return view('admin.order.order', ['orders'=>$orders]);         


	}

	public function oeder_details($id){
		$orders =DB::table('orders')
		->join('customers','orders.user_id','=','customers.id')
		->join('shippings', 'orders.shipping_id', '=', 'shippings.id')
		->select('orders.*','customers.name as Username','customers.phone_num','customers.id as customersID', 'shippings.email','shippings.phone_num as phone_number','shippings.address','shippings.message','shippings.id as shippingID')
		->where('orders.id','=',$id)
		->first();
		$detail=OrderDetails :: where('order_id',$id)->get();

		return view('admin.order.order_details', ['orders'=>$orders, 'detail'=>$detail]);


	}

	public function order_confirm(Request $request)
	{
		DB::table('orders')->where('id', $request->id)->update([
			'status'=>$request->status
		]);
		DB::table('order_details')->where('order_id', $request->id)->update([
			'order_status'=>$request->status
		]);
		Toastr::success('Successully Updated 🙂' ,'Success');

		return redirect('/allorder');
	}


	public function alloeder(){
		$orders =DB::table('orders')
		->join('customers','orders.user_id','=','customers.id')
		->select('orders.*','customers.name as Username','customers.phone_num','customers.id as customersID')
		->where('orders.status','=',1)
		->get();

		return view('admin.order.allorder', ['orders'=>$orders]);         


	}

	public function order_print($id){
		$orders =DB::table('orders')
		->join('customers','orders.user_id','=','customers.id')
		->join('shippings', 'orders.shipping_id', '=', 'shippings.id')
		->select('orders.*','customers.name as Username','customers.phone_num','customers.id as customersID', 'shippings.email','shippings.phone_num as phone_number','shippings.address','shippings.message','shippings.id as shippingID')
		->where('orders.id','=',$id)
		->first();
		$detail=OrderDetails :: where('order_id',$id)->get();

		$pdf=PDF::loadView('admin.order.order_print',['orders'=>$orders,'detail'=>$detail]);
		return $pdf->download('Order_Receipt.pdf');
	}

}
