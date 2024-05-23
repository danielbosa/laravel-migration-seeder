@extends('layouts.app')

@section('title', 'Movies')

@section('content')
<main id="">
    <h1>All Movies</h1>

    <section class="container">
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col-6 col-md-4 col-lg-6 h-100">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ $movie->image }}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $movie->title }}</h5>
                                    <p class="card-text">Titolo originale: {{ $movie->original_title }}</p>
                                    <p class="card-text">Data di uscita: {{ $movie->date }}</p>
                                    <p class="card-text">Voto: {{ $movie->vote }}</p>
                                    <a class="db-btn" href="{{route('movies.show', $movie->id)}}">Scopri di più</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    {{-- <section class="container">
                <div class="card mb-3">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img src="{{ $movie->image }}" class="img-fluid rounded-start" alt="...">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{ $movie->title }}</h5>
                            <p class="card-text">Titolo originale: {{ $movie->original_title }}</p>
                            <p class="card-text">Data di uscita: {{ $movie->date }}</p>
                            <p class="card-text">Voto: {{ $movie->vote }}</p>
                            <a class="btn" href="{{route('movies.show', $movie->id)}}">Scopri di più</a>
                        </div>
                      </div>
                    </div>
                  </div>
    </section> --}}
    



</main>

@endsection
