@extends('layouts.app')

@section('page-title', 'Movies')

@section('main-content')
    <div class="container">
    <h1 class="text-center">List of Movies</h1>
    <div class="row">
      @foreach ($movies as $movie)
        <div class="col-md-6 mb-4">
          <div class="card">
            <div class="card-body">
              <h2 class="card-title">{{ $movie->title }}</h2>
              <p class="card-text">
                <strong>Original Title:</strong> {{ $movie->original_title }}<br>
                <strong>Nationality:</strong> {{ $movie->nationality }}<br>
                <strong>Date:</strong> {{ $movie->date }}<br>
                <strong>Vote:</strong> {{ $movie->vote }}
              </p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>


@endsection
