@extends('front.master.master')

@section('title')
{{$product_name->productname}}
@endsection

@section('body')

<div class="hero-wrap hero-bread" style="background-image: url('{{ asset('public/front/images/bg_6.jpg') }}');">
	<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-9 ftco-animate text-center">
				<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>{{$catagory_name}}</span> <span>{{$subcatagory_name}}</span></p>
				<h1 class="mb-0 bread">{{$product_name->productname}}</h1>
			</div>
		</div>
	</div>
</div>

<section class="ftco-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 mb-5 ftco-animate">
				<a href="{{asset('/')}}{{$product_name->picture}}" class="image-popup prod-img-bg"><img src="{{asset('/')}}{{$product_name->picture}}" class="img-fluid" alt="Colorlib Template"></a>
			</div>
			<div class="col-lg-6 product-details pl-md-5 ftco-animate">
				<h3>{{$product_name->productname}}</h3>
				
				<p class="price"><span>BDT. {{$product_name->price}}</span></p>
				{{$product_name->productdis}}
				<div class="row mt-4">
					<div class="col-md-6">
						
					</div>
					<div class="w-100"></div>
					<div class="input-group col-md-6 d-flex mb-3">
						
						<form action="{{ route('cart.store') }}" method="POST">
							{{ csrf_field() }}
							<input type="hidden" value="{{ $product_name->id }}" id="id" name="id">
							<input type="hidden" value="{{ $product_name->productname }}" id="name" name="name">
							<input type="hidden" value="{{ $product_name->price }}" id="price" name="price">
							<input type="hidden" value="{{ $product_name->picture }}" id="img" name="img">
							
							<input type="text" id="quantity" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
							
						
						
						
					
					<button class="btn btn-primary btn-sm" style="color: black" class="tooltip-test" title="add to cart" >
						<i class="fa fa-shopping-cart"></i> add to cart
					</button>
				</form>
				</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection
