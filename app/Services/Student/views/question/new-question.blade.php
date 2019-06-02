@extends('layouts.dashboard')
@section('content')
    @component('components.breadcrumb', ['pages' => ['Dashboard', 'Nouvelle Question']])
    @endcomponent
    <div class="container mt-50">
        <div class="section-title style-4">
            <h2>Nouvelle Question</h2>
        </div>

        @include('question::create')

    </div>

@endsection