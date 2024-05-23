@extends('layouts.app')

@section('title', 'Books')

@section('content')
<main>
    <h1>All Books</h1>
<ul>
    @foreach ($books as $book)
    <li><a href="{{route('books.show', $book->id)}}">{{ $book->title }}</a></li>

    @endforeach
</ul>

</main>

@endsection
