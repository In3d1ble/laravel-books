
<h1>Eshop management</h1>
<h2>Categories</h2>

<a href="{{ action('CategoryController@create') }}">Create</a>

<div style="width: 30rem;">
@foreach($categories as $category)
    <div style="display: flex; justify-content: space-between; margin-bottom: 2rem">

        <h3>{{ $category->name }}</h3>

        <a href="{{ action('CategoryController@edit', $category->id) }}">Edit</a>

        <form method="post" action="{{ action('CategoryController@destroy', $category->id) }}">
            @csrf
            @method('delete')
            <input type="submit" value="Delete">
        </form>

    </div>
@endforeach
</div>
