@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main class="container">
    <h1>Home page</h1>
    @foreach ($trains as $train)
        <ul>
            <li>Company: {{$train->company}}</li>
            <li>Partenza: {{$train->departure}}</li>
            <li>Destinazione: {{$train->destination}}</li>
        </ul>
    @endforeach


</main>

@endsection
