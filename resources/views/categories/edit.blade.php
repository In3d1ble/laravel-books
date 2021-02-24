<h1>Editing</h1>

<form action="{{ action("CategoryController@update", $category->id) }}" method=POST>
    @csrf
    @method('PUT')

    <p>Category name: <input type="text" name="name" value="{{ old('name', $category->name) }}"></p>
    
    <input type="submit" value="Edit category">


</form>