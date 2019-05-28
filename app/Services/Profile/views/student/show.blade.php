@extends('layouts.dashboard')
@section('content')

    <div class="container mt-50">
        <div class="section-title style-4">
            <h2>{{ $user->name }} {{ $user->prenom }}</h2>
        </div>
    </div>

@endsection