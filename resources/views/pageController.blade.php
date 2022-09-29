@extends('layout.app')

@section('title', 'Lista Film')

@section('content')

    <!-- <div class="container">
        <h1>Lista Film</h1>
        <ul>
            @forelse($movies as $movie)
                <li>{{$movie->id}} - {{$movie->title}}</li>
            @empty
                <li>Nessun Risultato!</li>
            @endforelse
        </ul>
    </div> -->

    <div class="card">
        <h3>Title</h3>
        <span>Original title</span>
        <span>Lang</span>
        <span>Year</span>
        <span>Date</span>
    </div>

@endsection