@extends('layout.app')

@section('title', 'Lista Film')

@section('content')

    <div class="container4">
    @forelse($movies as $movie)
        <div class="card">
            <h2><a href="">{{$movie->title}}</a></h2>
            <span>{{$movie->original_title}}</span>
            <span>{{$movie->nationality}}</span>
            <span>{{$movie->date}}</span>
            <span>{{$movie->vote}}</span>
        </div>
    @empty
        <h4>Nessun Risultato!</h4>
    @endforelse
    </div>

    

@endsection