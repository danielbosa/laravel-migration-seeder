@extends('layouts.app')

@section('title', 'Movies')

@section('content')
<main>
    <h1>{{ $movie->title }}</h1>
    {{-- <p>{{$movie->plot}}</p> --}}

</main>

@endsection
