@extends('layouts.dashboard')
@section('content')


<!--breadcrumb-area start-->
<div class="breadcrumb-area mt-25">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="site-breadcrumb">
                    <ul class="list-none">
                        <li><a href="{{url('/dashboard')}}">Dashboard</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumb-area end-->

{{-- Content --}}
<div class="container">
    
    @if(request()->user()->role->name == "student")
        @include('dashboard::student')
    @else
        @include('dashboard::tutor')
    @endif

</div>
    
@endsection