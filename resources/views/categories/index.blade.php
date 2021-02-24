@extends('layouts.main', ['title' => 'List of categories'])

@section('content')

<a href="{{ action ("CategoryController@create") }}"><button>Create category</button></a>

<ul>

    @foreach ($categories as $category)
    

        <li>
            <a href="{{ action("CategoryController@show", $category->id) }}">{{ $category->name }}</a>
            <a href="{{ action("CategoryController@edit", $category->id) }}"><button>EDIT</button></a>

            <form method="post" action="{{ action('CategoryController@destroy', $category->id) }}">      
                
                
            @csrf            
            @method('delete') 
            <input type="submit" value="Delete">        
        
            </form>
        
        
        </li>


    @endforeach
</ul>

@endsection
