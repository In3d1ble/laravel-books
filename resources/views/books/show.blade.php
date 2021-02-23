<h1>{{ $book->title }}</h1>
<h2>{{ $book->authors }}</h2>

<img src="{{ $book->image }}" alt="{{ $book->title }} - cover">

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
