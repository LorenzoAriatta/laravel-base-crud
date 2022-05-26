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
                <a href="{{ route('comics.index') }}"><button class="detail-button">Go Back</button></a>
                <h6><strong>OR</strong></h6>
                <form class="form" action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <input onclick="btn.onclick" class="delete-button" type="submit" value="remove">
                </form>
            </div>
        </div>
    </div>
    <div id="popUp" class="pop">
        <div class="pop-content">
            <span onclick="close.onclick" class="close">&times;</span>
            <h3>This operation is NOT reversible.</h3>
            <h3>Do you wish to proceed?</h3>
        </div>
    </div>
@endsection
