@extends('front.master.master')
@section('title')
Success
@endsection

@section('body')
<div class="hero-wrap hero-bread" style="background-image: url('{{ asset('public/front/images/bg_6.jpg') }}');">
	<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-9 ftco-animate text-center">
				
			</div>
		</div>
	</div>
</div>
<section class="ftco-section">
	<div class="container">
		<div class="row">

			<div class="col-md-12">
				<h3>
					Congratulations!!! You have successfully ordered your item.
				</h3>
				<p>
					Your order id is {{$pinNum->pin}}
				</p>
				<a href="{{route('index')}}" class="btn btn-primary" title="">Continue shopping</a>
			</div>
		</div>
	</div>
</section>






@endsection