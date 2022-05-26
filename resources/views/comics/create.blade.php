@extends('layout')

@section('create')
    <div class="create-box">
        <form action="{{ route('comics.store') }}" method="post">
            @csrf

            <h2>Create YOUR Comic</h2>

            <div class="user-box">
                <input type="text" name="title">
                <label for="title">Title</label>
            </div>
            <div class="user-box">
                <input type="text" name="series">
                <label for="series">Series</label>
            </div>
            <div class="user-box">
                <input type="text" name="type">
                <label for="type">Type</label>
            </div>
            <div class="user-box">
                <input type="text" name="thumb">
                <label for="thumb">URL Thumb</label>
            </div>
            <div class="user-box">
                <input type="number" name="price">
                <label for="price">Price</label>
            </div>
            <div class="user-box">
                <input type="date" name="sale_date">
                <label for="sale_date">On Sale</label>
            </div>
            <div class="user-box">
                <label for="description">Description</label>
                <textarea name="description" cols="40" rows="5"></textarea>
            </div>

            <button id="create-button" type="submit">Submit</button>

        </form>
    </div>
@endsection
