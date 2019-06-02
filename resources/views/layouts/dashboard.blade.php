<!doctype html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Edusolid | Dashboard</title>
	<meta name="description" content="Education online en Tunisie, Réponses aux questions académiques">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="apple-touch-icon" href="icon.png">

    <link rel="stylesheet" href="{{asset('css/theme.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body>
	<!--[if lte IE 9]>
	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->
    <div id="app">
        <!--header-area start-->
		
		@include('dashboard::parts.header')
		<div class="wrapper">

			<!-- Sidebar -->
			@if($user->role->name == "student")
				@include('site.sidebar.student-sidebar')
			@else
				@include('site.sidebar.tutor-sidebar')
			@endif
		
			<!-- Page Content -->
			<div id="content">
				<!-- We'll fill this with dummy content -->
				@yield('content')
			</div>
			
		</div>
		{{-- profile --}}
		{{-- <div class="page-banner bg-1">
			<div class="d-table">
				<div class="page-title vertical-middle text-center">
					<img src="https://via.placeholder.com/150" class="rounded-circle" alt="">
					<h2> Youssef Jerbi </h2>
					<p> 2émme année </p>
				</div>
			</div>
		</div> --}}



        </div>

		<!--footer-area start-->
		@include('site.parts.footer')
		<!--footer-area end-->
	</div>
	<!-- modernizr js -->
	<script src="{{asset('assets/js/vendor/modernizr-3.6.0.min.js')}}"></script>
	<script src="{{asset('js/app.js')}}"></script>
	<script src="{{asset('assets/js/vendor/jquery-migrate-3.0.0.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery-ui.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.mmenu.js')}}"></script>
	<script src="{{asset('assets/js/venobox.min.js')}}"></script>
	<script src="{{asset('assets/js/slick.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
	<script src="{{asset('assets/js/waypoints.js')}}"></script>
	<script src="{{asset('assets/js/jquery.countdown.min.js')}}"></script>
	{{-- <script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script> --}}
	<script src="{{asset('assets/js/letteranimation.min.js')}}"></script>
	<script src="{{asset('assets/js/plugins.js')}}"></script>
	<script src="{{asset('assets/js/main.js')}}"></script>
	<!-- jquery-3.3.1 version -->

	

  
</body>
</html>
