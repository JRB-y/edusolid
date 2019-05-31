@extends('layouts.dashboard')
@section('content')
    <!--breadcrumb-area start-->
    <div class="breadcrumb-area mt-25">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="site-breadcrumb">
                        <ul class="list-none">
                            <li><a href="{{url('dashboard')}}">Dashboard</a></li>
                            <li><i class="fa fa-angle-right"></i></li>
                            <li>Profil</li>
                            <li><i class="fa fa-angle-right"></i></li>
                            <li>Niveau</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- form steps vue js -->
    <div class="course-area mt-30">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 mt-25">
                    <p>Veuillez remplir les informations de votre profil</p>
                    <div class="tab-content" style="height: 100%;">
                        <complete-profile></complete-profile>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection