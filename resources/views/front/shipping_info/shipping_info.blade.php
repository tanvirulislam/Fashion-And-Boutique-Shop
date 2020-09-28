@extends('front.master.master')
@section('title')
Shipping info
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
				<form action="{{route('shippinginfo_store')}}" method="post" class="billing-form">
					@csrf
					<h3 class="mb-4 billing-heading">Shipping info</h3>
					<div class="row align-items-end">
						
						<div class="col-md-12">
							<div class="form-group">
								<label for="firstname">Email</label>
								<input name="email" type="email" class="form-control" placeholder="">
							</div>
						</div>

						<div class="col-md-12">
							<div class="form-group">
								<label for="firstname">Phone Number</label>
								<input name="phone_num" type="number" class="form-control" placeholder="">
							</div>
						</div>

						<div class="col-md-12">
							<div class="form-group">
								<label for="firstname">Address</label>
								<textarea name="address" class="form-control"></textarea>
							</div>
						</div>

						<div class="col-md-12">
							<div class="form-group">
								<label for="firstname">Message</label>
								<textarea name="message" class="form-control"></textarea>
							</div>
						</div>


						<button type="submit" class="btn btn-success">Submit</button>

					</div>
				</form>
			</div>
			
		
	</div>
</section>


@endsection