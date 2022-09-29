@extends('layout.app')

@section('title', 'Home Page')

@section('content')
    <div class="container2">
        <h1>Boolfilm</h1>
        <p>La rubrica settimanale dei film più votati!</p>
        <button>
            <a href="{{route('pageController')}}">Lista Film</a>
        </button>
    </div>
@endsection