@extends('front.master.master')

@section('title')
{{$catagory_name}}
@endsection

@section('body')
<div class="hero-wrap hero-bread" style="background-image: url('{{ asset('public/front/images/bg_6.jpg') }}');">
	<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-9 ftco-animate text-center">
				<p class="breadcrumbs"><span class="mr-2"><a href="{{route('index')}}">Home</a></span> <sp
					an>{{$catagory_name}}</span></p>
				<h1 class="mb-0 bread">{{$catagory_name}}</h1>
			</div>
		</div>
	</div>
</div>

<section class="ftco-section bg-light">
	<div class="container">
		<div class="row">

			<div class="col-md-4 col-lg-2">
				<div class="sidebar">
					<div class="sidebar-box-2">
						<h2 class="heading">Categories</h2>
						<div class="fancy-collapse-panel">
							<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingOne">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">{{$catagory_name}}
											</a>
										</h4>
									</div>
									<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
										<div class="panel-body">
											<ul>
												@foreach($subcat as $subcatagory)
												<li><a href="{{route('singleSubcatagory', $subcatagory->id)}}">{{$subcatagory->Subcatagory}}</a></li>
												
												@endforeach
											</ul>
										</div>
									</div>
								</div>
								
							</div>
						</div>
					</div>
					
				</div>
			</div>
			
			<div class="col-md-8 col-lg-10 order-md-last">
				<div class="row">
					@foreach($catagory_products as $catagory_product)
					<div class="col-sm-12 col-md-12 col-lg-4 ftco-animate d-flex">
						<div class="product d-flex flex-column">
							<a href="{{route('singleproduct', $catagory_product->id)}}" class="img-prod"><img class="img-fluid" src="{{asset('/')}}{{$catagory_product->picture}}" alt="Colorlib Template">
								<div class="overlay"></div>
							</a>
							<div class="text py-3 pb-4 px-3">
								<div class="d-flex">
									<div class="cat">
										<span>{{$catagory_name}}</span>
									</div>
									
								</div>
								<h3><a href="#">{{$catagory_product->productname}}</a></h3>
								<div class="pricing">
									<p class="price"><span>BDT. {{$catagory_product->price}}</span></p>
								</div>
								<p class="bottom-area d-flex px-3">
									<a href="#" class="add-to-cart text-center py-2 mr-1"><span>Add to cart <i class="ion-ios-add ml-1"></i></span></a>
									<a href="#" class="buy-now text-center py-2">Buy now<span><i class="ion-ios-cart ml-1"></i></span></a>
								</p>
							</div>
						</div>
					</div>
					@endforeach
				</div>
				<div class="row mt-5">
					<div class="col text-center">
						{!! $catagory_products->links() !!}
					</div>
				</div>
			</div>

			
		</div>
	</div>
</section>

<section class="ftco-gallery">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8 heading-section text-center mb-4 ftco-animate">
				<h2 class="mb-4">Follow Us On Instagram</h2>
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
			</div>
		</div>
	</div>
	<div class="container-fluid px-0">
		<div class="row no-gutters">
			<div class="col-md-4 col-lg-2 ftco-animate">
				<a href="{{asset('/')}}public/front/images/gallery-1.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url('{{ asset('public/front/images/gallery-1.jpg') }}');">
					<div class="icon mb-4 d-flex align-items-center justify-content-center">
						<span class="icon-instagram"></span>
					</div>
				</a>
			</div>
			<div class="col-md-4 col-lg-2 ftco-animate">
				<a href="{{asset('/')}}public/front/images/gallery-2.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url('{{ asset('public/front/images/gallery-2.jpg') }}');">
					<div class="icon mb-4 d-flex align-items-center justify-content-center">
						<span class="icon-instagram"></span>
					</div>
				</a>
			</div>
			<div class="col-md-4 col-lg-2 ftco-animate">
				<a href="{{asset('/')}}public/front/images/gallery-3.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url('{{ asset('public/front/images/gallery-3.jpg') }}');">
					<div class="icon mb-4 d-flex align-items-center justify-content-center">
						<span class="icon-instagram"></span>
					</div>
				</a>
			</div>
			<div class="col-md-4 col-lg-2 ftco-animate">
				<a href="{{asset('/')}}public/front/images/gallery-4.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url('{{ asset('public/front/images/gallery-4.jpg') }}');">
					<div class="icon mb-4 d-flex align-items-center justify-content-center">
						<span class="icon-instagram"></span>
					</div>
				</a>
			</div>
			<div class="col-md-4 col-lg-2 ftco-animate">
				<a href="{{asset('/')}}public/front/images/gallery-5.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url('{{ asset('public/front/images/gallery-5.jpg') }}');">
					<div class="icon mb-4 d-flex align-items-center justify-content-center">
						<span class="icon-instagram"></span>
					</div>
				</a>
			</div>
			<div class="col-md-4 col-lg-2 ftco-animate">
				<a href="{{asset('/')}}public/front/images/gallery-6.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url('{{ asset('public/front/images/gallery-6.jpg') }}');">
					<div class="icon mb-4 d-flex align-items-center justify-content-center">
						<span class="icon-instagram"></span>
					</div>
				</a>
			</div>
		</div>
	</div>
</section>
@endsection