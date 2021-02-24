
<h1>Eshop management</h1>
<h2>Edit Category: {{ $category->name }}</h2>

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

<form method="post" action="{{ action('CategoryController@update', [$category->id]) }}">
    @csrf
    @method('put')
    <input type="text" name="name" value="{{ old('name', $category->name) }}">
    <input type="submit" value="Update">
</form>

