@extends('layouts.main')

@section('content')

<h1>{{ $book->title }}</h1>
<h2>{{ $book->authors }}</h2>

<img src="{{ $book->image }}" alt="{{ $book->title }} - cover">

<h2>Order this book</h2>
<form action="{{ action('OrderController@order', $book->id) }}" method="post">
    @csrf

    <input type="number" name="quantity" value="{{ old('quantity') }}">

    <input type="submit" value="Order!">

</form>


<a href="{{ action('BookController@index') }}">
    Back to list of books
</a>

<hr>

<h2>Reviews</h2>

<form
    method="post"
    action="{{ action('ReviewController@store', $book->id) }}"
>
    @csrf
    <textarea name="text"></textarea>
    <input type="number" name="rating"/>
    <input type="submit" value="create a review">
</form>

@foreach( $book->reviews as $review)
    <div>
        <p>{{ $review->text }}</p>
        <strong>{{ $review->rating }} / 100</strong>
    </div>
@endforeach

@endsection