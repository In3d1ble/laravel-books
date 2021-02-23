<?php

namespace App\Http\Controllers;

use App\Models\Publisher;
use http\Client\Request;
use Illuminate\Support\Facades\DB;

class PublisherController extends Controller
{
    public function index()
    {
        // $publishers = DB::table('publishers')->get();
        $publishers = Publisher::with('books')->orderBy('title')->get();

        // more complex query to add additional constraints (like ordering)
        // to the query that selects the related models
        // see Laravel documentation on Eager loading
        $publishers = Publisher::with([
            'books' => function ($query) {
                    $query->orderBy('title', 'asc'); // order the books by title
                }
            ])
            ->orderBy('title') // order the publishers by title
            ->get();

        return view('publishers.index', compact('publishers'));
    }

    public function show($id)
    {
        $publisher = DB::table('publishers')->find($id);

        $books = DB::table('books')->where('publisher_id', $id)->get();

        return view('publishers.show', compact(['publisher', 'books']));
    }

    public function create()
    {
        $publisher = new Publisher;

        return view('publishers.edit-or-create', compact('publisher'));
    }

    public function store(Request $request)
    {
        // validation
        $this->validate($request, [
            'title' => 'required|unique:publishers'
        ], [
            'title.required' => 'Just fill it in, dude!'
        ]);

        // validation passed...

        // get new Publisher object
        $publisher = new Publisher;

        // fill it with data
        $publisher->title = $request->input('title');

        // saving (making a SQL insert query)
        $publisher->save();

        // inform the user of success
        session()->flash('success_message', 'The publisher was saved.');

        // redirect
        return redirect(action('PublisherController@index'));
    }

    public function edit($publisher_id)
    {
        // find the publisher in database or throw 404 error
        $publisher = Publisher::findOrFail($publisher_id);

        return view('publishers.edit-or-create', compact('publisher'));
    }

    public function update(Request $request, $publisher_id)
    {
        // do validation
        $this->validate($request, [
            'title' => 'required|unique:publishers'
        ]);

        // retrieve saved object from the database
        $publisher = Publisher::findOrFail($publisher_id);

        // fill it with data
        $publisher->title = $request->input('title');

        // saving (making a SQL insert query)
        $publisher->save();

        // inform the user of success
        session()->flash('success_message', 'The publisher was saved.');

        // redirect
        return redirect(action('PublisherController@index'));
    }
}
