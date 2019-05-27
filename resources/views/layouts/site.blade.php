<!doctype html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Edusolid - Solution aux questions académique	</title>
	<meta name="description" content="">
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
		@include('site.parts.header')
		
		<!--header-area end-->
        @yield('content')

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

	
	<!-- Modal -->
	<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-body login-popup">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<i class="fa fa-close"></i>
					</button>
					<div class="row align-items-center">
						<div class="col-lg-6">
							<div class="login-left overlay">
								<img src="assets/images/register/4.jpg" alt="" />
							</div>
						</div>
						<div class="col-lg-6">
							<div class="login-right pr-30">
								<div class="section-title">
									<h3>Connectez-vous à <br/> Edusolid</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
								</div>
								<div class="input-form register-form mt-10">
									{{-- <form id="contactForm" data-toggle="validator" method="POST" action="assets/php/contact.php">
										<div class="row">
											<div class="col-sm-12 mt-25">
												<label>Username*</label>
												<input type="text" />
											</div>
											<div class="col-sm-12 mt-25">
												<label>Password*</label>
												<input type="password" />
											</div>
											<div class="col-lg-6 mt-30">
												<input type="checkbox" id="agree" />
												<label for="agree">Remember</label>
											</div>
											<div class="col-lg-6 mt-30">
												<button class="btn-common">Login</button>
											</div>
										</div>
									</form> --}}

									<form method="POST" action="{{ route('login') }}">
										@csrf
				
										<div class="form-group row">
											<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>
				
											<div class="col-md-6">
												<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
				
												@error('email')
													<span class="invalid-feedback" role="alert">
														<strong>{{ $message }}</strong>
													</span>
												@enderror
											</div>
										</div>
				
										<div class="form-group row">
											<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Mot de passe') }}</label>
				
											<div class="col-md-6">
												<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
				
												@error('password')
													<span class="invalid-feedback" role="alert">
														<strong>{{ $message }}</strong>
													</span>
												@enderror
											</div>
										</div>
				
										<div class="form-group row">
											<div class="col-md-6 offset-md-4">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
				
													<label class="form-check-label" for="remember">
														{{ __('Se souvenir de moi') }}
													</label>
												</div>
											</div>
										</div>
				
										<div class="form-group row mb-0">
											<div class="col-md-8 offset-md-4">
													<div class="col-lg-6 mt-30">
														<button class="btn-common">{{__('Login')}}</button>
													</div>
				
												@if (Route::has('password.request'))
													<a class="btn btn-link" href="{{ route('password.request') }}">
														{{ __('Mot de passe oublié?') }}
													</a>
												@endif
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
  
</body>
</html>
