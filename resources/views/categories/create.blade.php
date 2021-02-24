@extends('layouts.main', ['title' => 'List of categories'])

@section('content')

<h1>Create a new category</h1>

<form action="{{ action('CategoryController@store') }}" method="post">
    @csrf
    
    <p>Category name:<input type="text" name="name" value="{{ old('name', $category->name) }}"></p>
    <input type="submit" value="Create new category">
</form>

