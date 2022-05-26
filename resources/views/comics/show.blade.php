@extends('layout')

@section('show')
    <div class="container-detail">
        <div class="comic-detail">
            <h1>{{ $comic->title }}</h1>
            <div class="comic-description">
                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                <p>{{ $comic->description }}</p>
            </div>
            <div class="price">
                <h3>Price: </h3>
                <h2>$ {{ $comic->price }}</h2>
            </div>
            <div class="comic-info">
                <h5>Series: {{ $comic->series }}</h5>
                <h5>On sale: {{ $comic->sale_date }}</h5>
                <h5>Type: {{ $comic->type }}</h5>
                <a href="{{ route('comics.index') }}"><button>Go Back</button></a>
            </div>
        </div>
    </div>
@endsection
