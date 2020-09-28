@extends('front.master.master')
@section('title')
Coustomer Login
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
			{{-- left section --}}
			<div class="col-md-6">
				<form action="{{route('customerlogin')}}" method="post" class="billing-form">
					@csrf
					<h3 class="mb-4 billing-heading">Coustomer Login</h3>
					<div class="row align-items-end">
						<div class="col-md-12">
							<div class="form-group">
								<label  for="firstname">Email</label>
								<input name="name" type="email" class="form-control" placeholder="">
							</div>
						</div>

						<div class="col-md-12">
							<div class="form-group">
								<label for="firstname">Password</label>
								<input name="pass" type="password" class="form-control" placeholder="">
							</div>
						</div>

						<button type="submit" class="btn btn-success">Submit</button>

					</div>
				</form><!-- END -->
			</div>

			{{-- right section --}}
			<div class="col-md-6">
				<form action="{{route('customerregi')}}" method="post" class="billing-form">
					@csrf
					<h3 class="mb-4 billing-heading">Coustomer Registretion</h3>
					<div class="row align-items-end">
						<div class="col-md-12">
							<div class="form-group">
								<label for="firstname">Name</label>
								<input name="name" type="text" class="form-control" placeholder="">
							</div>
						</div>
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
								<label for="firstname">Password</label>
								<input name="pass" type="password" class="form-control" placeholder="">
							</div>
						</div>

						<button type="submit" class="btn btn-success">Submit</button>

					</div>
				</form>
			</div>
			
		</div>
	</div>
</section>
@endsection