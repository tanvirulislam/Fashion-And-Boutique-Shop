@extends('admin.master.master')

@section('title')
order details
@endsection

@section('body')
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Order Details</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active">Order details</li> 
					<li class="breadcrumb-item active">{{$orders->Username}}</li> 

				</ol>
			</div>
		</div>
	</div>
</section>

<section class="content"> 
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6">
				<div class="card">
					<div class="card-header">
						<p>Customer Informetion</p>
					</div>
					<div class="card-body">
						<ul>
							<li><b>Name: </b>{{$orders->Username}}</li>
							<li><b>Phone: </b>{{$orders->phone_num}}</li>

						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card">
					<div class="card-header">
						<p>Delivay Addrees</p>
					</div>
					<div class="card-body">
						<ul>
							<li><b>Email: </b>{{$orders->email}}</li>
							<li><b>Phone: </b>{{$orders->phone_number}}</li>
							<li><b>Address: </b>{{$orders->address}}</li>
							<li><b>Message: </b>{{$orders->message}}</li>

						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="content"> 
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<p>Order details</p>
					</div>
					<div class="card-body">
						<table class="table table-bordered">
							<tr>
								<th>Name</th>
								<th>Quantity</th>
								<th>Price</th>
								<th>Total price</th>
							</tr>
							@foreach($detail AS $details)
							<tr>

								<td>{{$details->product_name}}</td>
								<td>{{$details->product_quantity}}</td>
								<td>{{$details->product_price}}</td>
								<td>{{$details->order_total}}</td>

							</tr>
							@endforeach
							
						</table>
					</div>
					<div class="card-footer">
						@if($orders->status==0)
						<form action="{{route('order_confirm')}}" method="post" accept-charset="utf-8">
							@csrf
							<input type="hidden" name="status" value="1">
							<input type="hidden" name="id" value="{{$orders->id}}">
							<button  type="submit" class="btn btn-warning text-light">Confirm </button>
						</form>
						
						<a href="{{route('order_print', $orders->id)}}" class="btn btn-danger text-light">Print </a>
						@else
						<a href="{{route('order_print', $orders->id)}}" class="btn btn-danger text-light">Print </a>
						@endif
					</div>
				</div>
			</div>
			
		</div>
	</div>
</section>





@endsection