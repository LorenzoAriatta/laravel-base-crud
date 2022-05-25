@extends('layout')

@section('index')
    <div class="container">
        @foreach ($comics as $comic)
            <div class="card">
                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                <h3>{{ $comic->title }}</h3>
                <h4>Price: $ {{ $comic->price }}</h4>
                <h4>On sale: {{ $comic->sale_date }}</h4>
                <a href="{{ route('comics.show', $comic->id) }}"><button>SHOW DETAILS</button></a>
            </div>
        @endforeach
    </div>
@endsection
