@extends('layouts.site')
@section('content')
    <!--banner-area start-->
    @include('site.parts.posez-question')
    <!--banner-area end-->

    <!--textblock-area start-->
    @include('site.parts.features')
    <!--textblock-area end-->

    <!--courses-area start-->
    @include('site.parts.tutor-online')
    <!--courses-area end-->

    <!--testimonial-area start-->
    @include('site.parts.student-review')
    <!--testimonial-area end-->

    
@endsection