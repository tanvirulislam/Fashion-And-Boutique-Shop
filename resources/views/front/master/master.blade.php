<!DOCTYPE html>
<html lang="en">
<head>
 
  <meta charset="utf-8">
  <title>@yield('title')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

  <link rel="stylesheet" href="{{asset('/')}}public/front/css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="{{asset('/')}}public/front/css/animate.css">

  <link rel="stylesheet" href="{{asset('/')}}public/front/css/owl.carousel.min.css">
  <link rel="stylesheet" href="{{asset('/')}}public/front/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="{{asset('/')}}public/front/css/magnific-popup.css">

  <link rel="stylesheet" href="{{asset('/')}}public/front/css/aos.css">

  <link rel="stylesheet" href="{{asset('/')}}public/front/css/ionicons.min.css">

  <link rel="stylesheet" href="{{asset('/')}}public/front/css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="{{asset('/')}}public/front/css/jquery.timepicker.css">


  <link rel="stylesheet" href="{{asset('/')}}public/front/css/flaticon.css">
  <link rel="stylesheet" href="{{asset('/')}}public/front/css/icomoon.css">
  <link rel="stylesheet" href="{{asset('/')}}public/front/css/style.css">
</head>
<body class="goto-here">
  {{-- nav --}}
  @include('front.include.header')
  <!-- END nav -->

@yield('body')




{{-- footer --}}
@include('front.include.footer')

<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="{{asset('/')}}public/front/js/jquery.min.js"></script>
<script src="{{asset('/')}}public/front/js/jquery-migrate-3.0.1.min.js"></script>
<script src="{{asset('/')}}public/front/js/popper.min.js"></script>
<script src="{{asset('/')}}public/front/js/bootstrap.min.js"></script>
<script src="{{asset('/')}}public/front/js/jquery.easing.1.3.js"></script>
<script src="{{asset('/')}}public/front/js/jquery.waypoints.min.js"></script>
<script src="{{asset('/')}}public/front/js/jquery.stellar.min.js"></script>
<script src="{{asset('/')}}public/front/js/owl.carousel.min.js"></script>
<script src="{{asset('/')}}public/front/js/jquery.magnific-popup.min.js"></script>
<script src="{{asset('/')}}public/front/js/aos.js"></script>
<script src="{{asset('/')}}public/front/js/jquery.animateNumber.min.js"></script>
<script src="{{asset('/')}}public/front/js/bootstrap-datepicker.js"></script>
<script src="{{asset('/')}}public/front/js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{asset('/')}}public/front/js/google-map.js"></script>
<script src="{{asset('/')}}public/front/js/main.js"></script>

</body>
</html>