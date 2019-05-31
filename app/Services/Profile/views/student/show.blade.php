@extends('layouts.dashboard')
@section('content')

    {{-- Form --}}
    <div class="container mt-50">
        <div class="section-title style-4">
            <h2>{{ $user->name }} {{ $user->prenom }}</h2>
        </div>
        <div class="row mt-50">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Nom</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ $user->name}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="prenom">Prenom</label>
                    <input type="text" name="prenom" id="prenom" class="form-control" value="{{ $user->prenom}}">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" class="form-control" value="{{ $user->email}}">
                </div>
            </div>
        </div>

        <div class="row"> 
            <div class="col-md-12">
                <div class="card bg-main-green">
                    <div class="card-body text-light">
                    
                            <h4 class="section-title style-4">Niveau de scolarité</h4>
                            <span>{{ $user->myRole()->fullLevel() }}</span>
                            ( <a href="{{ url('profile/complete') }}">modifier</a> )
                            
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection