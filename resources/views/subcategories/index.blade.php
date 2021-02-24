<h1>Eshop management</h1>
<h2>Subcategories</h2>

<a href="{{ action('SubcategoryController@create') }}">Create</a>

<div style="width: 30rem;">
@foreach($subcategories as $subcategory)
    <div style="display: flex; justify-content: space-between; margin-bottom: 2rem">

        <h3>{{ $subcategory->name }} ({{ $subcategory->category->name }})</h3>

        <a href="{{ action('SubcategoryController@edit', $subcategory->id) }}">Edit</a>

        <form method="post" action="{{ action('SubcategoryController@destroy', $subcategory->id) }}">
            @csrf
            @method('delete')
            <input type="submit" value="Delete">
        </form>

    </div>
@endforeach
</div>
