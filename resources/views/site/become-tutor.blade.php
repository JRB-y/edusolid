@extends('layouts.site')
@section('content')
<!--breadcrumb-area start-->
<div class="breadcrumb-area mt-25">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="site-breadcrumb">
                    <ul class="list-none">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li>Devenir Tuteur</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumb-area end-->

<div class="register-area mt-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-12 mb-10">
                        <div class="img-100p img-block">
                            <img src="assets/images/register/1.jpg" alt="" />
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 pr-05">
                        <div class="img-100p img-block mb-xs-10">
                            <img src="assets/images/register/2.jpg" alt="" />
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 pl-05">
                        <div class="img-100p img-block">
                            <img src="assets/images/register/3.jpg" alt="" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt-sm-40">
                <div class="section-title style-4">
                    <h2>Rejoignez notre communauté</h2>
                </div>
                <div class="input-form register-form mt-60">
                    <form method="POST" action="{{ route('register-tutor') }}">
                        @csrf
                        <div class="row">
                            
                            <div class="col-sm-12">
                                <label for="name">{{ __('Nom') }}</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-sm-12 mt-25">
                                <label for="prenom">{{ __('Prénom') }}</label>
                                <input id="prenom" type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom" autofocus>
                                @error('prenom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-sm-12 mt-25">
                                <label for="email">{{ __('Email') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                            <div class="col-sm-12 mt-25">
                                <label for="password" class="">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-sm-12 mt-25">
                                <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>

                            <div class="col-lg-6 mt-30">
                                <input type="checkbox" id="agree" />
                                <label for="agree">J'accepte les <a href="#">termes et conditions</a></label>
                            </div>
                            <div class="col-lg-6 mt-30">
                                <input type=submit class="btn-common" value="Join">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection