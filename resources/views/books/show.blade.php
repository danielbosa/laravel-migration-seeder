@extends('layouts.app')

{{-- @section('title', 'Books') --}}

@section('content')

<main>
    <h1>{{ $book->title }}</h1>
    <div class="d-flex">
        <p>{{$book->plot}}</p>
        <div>
            <img src="{{$book->cover_image}}" alt="">
        </div>
    </div>
    
</main>

@endsection
