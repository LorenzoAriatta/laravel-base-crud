@extends('layout')

@section('create')
    <div>
        <form action="{{ route('comics.store') }}" method="post">
            @csrf


        </form>
    </div>
@endsection
