@extends('layout')

@section('edit')
    <div class="create-box">
        <form action="{{ route('comics.update', $comic->id) }}" method="post">
            @csrf
            @method('PUT')

            <h2>EDIT COMIC</h2>

            <div class="user-box">
                <input type="text" name="title" value="{{ $comic->title }}">
                <label for="title">Title</label>
            </div>
            <div class="user-box">
                <input type="text" name="series" value="{{ $comic->series }}">
                <label for="series">Series</label>
            </div>
            <div class="user-box">
                <input type="text" name="type" value="{{ $comic->type }}">
                <label for="type">Type</label>
            </div>
            <div class="user-box">
                <input type="text" name="thumb" value="{{ $comic->thumb }}">
                <label for="thumb">URL Thumb</label>
            </div>
            <div class="user-box">
                <input type="number" name="price" value="{{ $comic->price }}">
                <label for="price">Price</label>
            </div>
            <div class="user-box">
                <input type="date" name="sale_date" value="{{ $comic->sale_date }}">
                <label for="sale_date">On Sale</label>
            </div>
            <div class="user-box">
                <label for="description">Description</label>
                <textarea name="description" cols="40" rows="5">{{ $comic->description }}</textarea>
            </div>

            <button id="create-button" type="submit">Submit</button>

        </form>
    </div>
@endsection
