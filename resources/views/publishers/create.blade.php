@extends('layouts.main')

@section('content')

    <h1>Create a new publisher</h1>

    <form action="{{ action('PublisherController@store') }}" method="post">
        @csrf
        <input type="text" name="title">
        <input type="submit" value="Create a new publisher">
    </form>

@endsection