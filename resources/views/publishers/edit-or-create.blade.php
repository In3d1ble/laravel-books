@extends('layouts.main')

@section('content')

    @if ($publisher->id)

        <h1>Edit an existing publisher</h1>

        <form action="{{ action('PublisherController@update', $publisher->id) }}" method="post">
            @method('PUT')

    @else

        <h1>Create a new publisher</h1>

        <form action="{{ action('PublisherController@store') }}" method="post">

    @endif

        @csrf
            <input type="text" name="premium" value="{{ old('title', $publisher->title) }}">
        <input type="text" name="title" value="{{ old('title', $publisher->title) }}">
        <input type="submit" value="Save this publisher">
    </form>

@endsection
