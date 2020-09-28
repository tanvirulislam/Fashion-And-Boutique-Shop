@extends('front.master.master')

@section('title')
cart
@endsection

@section('body')
<div class="hero-wrap hero-bread" style="background-image: url('{{ asset('public/front/images/bg_6.jpg') }}');">
	<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-9 ftco-animate text-center">
				<p class="breadcrumbs"><span class="mr-2"><a href="{{route('index')}}">Home</a></span> <span>Cart</span></p>
				
			</div>
		</div>
	</div>
</div>

<section class="ftco-section ftco-cart">
	<div class="container">
		<div class="block-title" style="    text-align: center;
		font-size: 25px;
		font-weight: 700;
		color: red;
		margin-bottom: 10px;">
		<span class="title">Your Cart List</span>
	</div> 
	@if(session()->has('success_msg'))
	<div class="alert alert-success alert-dismissible fade show" role="alert">
		{{ session()->get('success_msg') }}
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">×</span>
		</button>
	</div>
	@endif
	@if(session()->has('alert_msg'))
	<div class="alert alert-warning alert-dismissible fade show" role="alert">
		{{ session()->get('alert_msg') }}
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">×</span>
		</button>
	</div>
	@endif
	@if(count($errors) > 0)
	@foreach($errors0>all() as $error)
	<div class="alert alert-success alert-dismissible fade show" role="alert">
		{{ $error }}
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">×</span>
		</button>
	</div>
	@endforeach
	@endif
	<div class="row about_inner_item">
		<!--new cart model -->
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					@if(\Cart::getTotalQuantity()>0)
					<h4 class="text-center" style="color:#a91515ed"><b>{{ \Cart::getTotalQuantity()}} Item(s) In Your Cart<b></h4><br>
						@else
						<h4>No Item(s) In Your Cart</h4><br>
						<a href="{{ route('index') }}" class="btn btn-info">Continue Shopping</a>
						@endif
					</div>
					<div class="panel-body">
						@foreach($cartCollection as $item)
						<div class="row">
							<div class="col-lg-3">
								<img src="{{ $item->attributes->image }}" class="img-thumbnail" width="200" height="200">
							</div>
							<div class="col-lg-4">
								<p>
									<b><a href="">{{ $item->name }}</a></b><br>
									<b>Price: </b>BDT.{{ $item->price }}<br>
									<b>Sub Total: </b>BDT.{{ \Cart::get($item->id)->getPriceSum() }}<br>
									{{--                                <b>With Discount: </b>BDT.{{ \Cart::get($item->id)->getPriceSumWithConditions() }}--}}
								</p>
							</div>
							<div class="col-lg-5">
								<div class="row">
									<div class="col-lg-6">
										<form action="{{ route('cart.update') }}" method="POST" class="form-inline">
											{{ csrf_field() }}
											<div class="form-group">
												<input type="hidden" value="{{ $item->id}}" id="id" name="id">
												<input type="number" class="form-control form-control-sm" value="{{ $item->quantity }}"
												id="quantity" name="quantity" style="width:70px;">
											</div>
											<button class="btn btn-primary py-2 px-3">Update</button>
										</form>
									</div>
									<div class="col-lg-6">
										<form action="{{ route('cart.remove') }}" method="POST" class="form-inline">
											@csrf
											<input type="hidden" value="{{ $item->id }}" id="id" name="id">
											<button class="btn btn-primary py-2 px-3" style="">Delete</i></button>
										</form>
									</div>
								</div>
							</div>
						</div>
						<hr>
						@endforeach
						<div class="panel-footer">
							<div class="row">
								<div class="col-md-6">
									@if(count($cartCollection)>0)
									<form action="{{ route('cart.clear') }}" method="POST">
										{{ csrf_field() }}
										<button class="btn btn-primary py-2 px-3">Clear Cart</button>
									</form>
									@endif
								</div>
								<div class="col-md-6">
									@if(count($cartCollection)>0)


									<ul class="list-group list-group-flush">
										<li class="list-group-item"><b>Total: </b>BDT.{{ \Cart::getTotal() }}</li>
									</ul>
									<br><a href="{{ route('index') }}" class="btn btn-primary">Continue Shopping</a>

									@if( Session::get('customerId'))

									<a href="{{route('shipping_info')}}" class="btn btn-success">Proceed To Checkout</a>
									@else
									<a href="{{route('coustomer_login')}}" class="btn btn-success">Proceed To Checkout</a>
									
									@endif
									@endif
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--new cart model -->


		</div>
	</div>
</section>

@endsection