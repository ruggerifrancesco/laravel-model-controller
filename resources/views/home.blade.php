@extends('layout.app')

@section('title', 'Movies')

@section('main-content')
<div class="container">
    <div class="row">
        @foreach ($movies as $movie)
            <div class="card p-0">
                <div class="card-body">
                    <h5 class="card-title">
                        {{ $movie->title }}
                    </h5>
                    <p class="card-text">
                        Original Title: {{ $movie->original_title }}
                    </p>
                    <a href="#" class="btn btn-primary">
                        test
                    </a>
                </div>
                <div class="card-footer">
                    <span class="text-body-primary">{{ $movie->nationality}}</span>
                    <small class="text-body-secondary">{{ $movie->date }}</small>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
