<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">    
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Welcome to SHIVANI</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- Bootstrap core CSS -->
	<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('css/datepicker.css')}}" rel="stylesheet" type="text/css" />
	<!-- Full Calender CSS -->
	<link href="{{asset('css/fullcalendar.css')}}" rel="stylesheet">
	<!-- Owl Carousel CSS -->
	<link href="{{asset('css/owl.carousel.css')}}" rel="stylesheet">
	<!-- Pretty Photo CSS -->
	<link href="{{asset('css/prettyPhoto.css')}}" rel="stylesheet">
	<!-- Bx-Slider StyleSheet CSS -->
	<link href="{{asset('css/jquery.bxslider.css')}}" rel="stylesheet"> 
	<!-- Font Awesome StyleSheet CSS -->
	<link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
	<!-- DL Menu CSS -->
	<link href="{{asset('css/component.css')}}" rel="stylesheet">
	<link href="{{asset('css/svg-style.css')}}" rel="stylesheet">
	<!-- Widget CSS -->
	<link href="{{asset('css/widget.css')}}" rel="stylesheet">
	<!-- Typography CSS -->
	<link href="{{asset('css/typography.css')}}" rel="stylesheet">
	<!-- Shortcodes CSS -->
	<link href="{{asset('css/shortcodes.css')}}" rel="stylesheet">
	<!-- Custom Main StyleSheet CSS -->
	<link href="{{asset('css/style.css')}}" rel="stylesheet">
	<!-- Color CSS -->
	<link href="{{asset('css/color.css')}}" rel="stylesheet">
	<!-- Responsive CSS -->
	<link href="{{asset('css/responsive.css')}}" rel="stylesheet">
	<!-- SELECT MENU -->
	<link href="{{asset('css/selectric.css')}}" rel="stylesheet">
	<!-- SIDE MENU -->
	<link href="{{asset('css/jquery.sidr.dark.css')}}" rel="stylesheet" >
	<script type="text/javascript">
		$.ajaxSetup({
			headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
		});
	</script>
	@yield('stylesheet')
</head>
<body>

	<!--KF KODE WRAPPER WRAP START-->
	<div class="kode_wrapper">    
		@include('layouts.header')
		@include('layouts.loginModal')
		@include('layouts.registerModal')
		@yield('content')
		@include('layouts.subcribe')
		@include('layouts.footer')
	</div>

	<!--Bootstrap core JavaScript-->
	<script src="{{asset('/js/jquery-2.2.3.min.js')}}"></script>
	<script src="{{asset('/js/jquery.js')}}"></script>
	<script src="{{asset('/js/bootstrap.min.js')}}"></script>	
	<script src="{{asset('/js/bootstrap-datepicker.js')}}"></script>
	<!--Bx-Slider JavaScript-->
	<script src="{{asset('/js/jquery.bxslider.min.js')}}"></script>
	<!--Owl Carousel JavaScript-->
	<script src="{{asset('/js/owl.carousel.min.js')}}"></script>
	<!--Pretty Photo JavaScript-->
	<script src="{{asset('/js/jquery.prettyPhoto.js')}}"></script>
	<!--Dl Menu Script-->
	<script src="{{asset('/js/dl-menu/modernizr.custom.js')}}"></script>
	<!--Dl Menu Script-->
	<script src="{{asset('/js/dl-menu/jquery.dlmenu.js')}}"></script>
	<!--Dl Menu Script-->
	<script src="{{asset('/js/dl-menu/modernizr.custom.js')}}"></script>
	<!--Dl Menu Script-->
	<script src="{{asset('/js/dl-menu/jquery.dlmenu.js')}}"></script>
	<!--Full Calender JavaScript-->
	<script src="{{asset('/js/moment.min.js')}}"></script>
	<script src="{{asset('/js/fullcalendar.min.js')}}"></script>
	<script src="{{asset('/js/jquery.downCount.js')}}"></script>
	<!--Image Filterable JavaScript-->
	<script src="{{asset('/js/jquery-filterable.js')}}"></script>
	<!--Accordian JavaScript-->
	<script src="{{asset('/js/jquery.accordion.js')}}"></script>
	<!--Number Count (Waypoints) JavaScript-->
	<script src="{{asset('/js/waypoints-min.js')}}"></script>
	<!--v ticker-->
	<script src="{{asset('/js/jquery.vticker.min.js')}}"></script>
	<!--select menu-->
	<script src="{{asset('/js/jquery.selectric.min.js')}}"></script>
	<!--Side Menu-->
	<script src="{{asset('/js/jquery.sidr.min.js')}}"></script>
	<!--Custom JavaScript-->
	<script src="{{asset('/js/custom.js')}}"></script>
	@yield('script')
</body>
</html>