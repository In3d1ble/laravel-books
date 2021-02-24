@extends('layouts.main', ['title' => 'List of categories'])

@section('content')

    <a href="{{ action("CategoryController@index") }}">Back to list of categories</a>

    <p>Category name: {{ $category->name }}</p>

@endsection