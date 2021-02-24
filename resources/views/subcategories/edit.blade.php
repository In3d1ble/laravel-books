<h1>Eshop management</h1>
<h2>Edit Subcategory: {{ $subcategory->name }}</h2>

@if ($errors->any())
    <div>
        <h4>Validation errors!</h4>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="post" action="{{ action('SubcategoryController@update', [$subcategory->id]) }}">
    @csrf
    @method('put')
    <select name="category_id">
        @foreach($categories as $category)
            <option value="{{ $category->id }}" {{ $category->id === $subcategory->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
        @endforeach
    </select>
    <input type="text" name="name" value="{{ old('name', $subcategory->name) }}">
    <input type="submit" value="Update">
</form>
