<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function index()
    {
        $count = DB::table('books')->count();
        $books     = DB::table('books')->get();

        $a = 5;
        $b = 25;

        $review = 'This <script>window.location = "https://amazon.com";</script> is a <strong>great</strong> book catalogue!';

//        return view('books.books')
//            ->with('count', $count)
//            ->with('books', $books)
//            ->with('newVariable', $a)
//            ->with('review', $review)
//            ->with('anotherVariable', $b);

//        return view('books.books')
//            ->with([
//                'count'           => $count,
//                'books'           => $books,
//                'newVariable'     => $a,
//                'review'          => $review,
//                'anotherVariable' => $b
//            ]);

//        return view('books.books', [
//            'count'           => $count,
//            'books'           => $books,
//            'newVariable'     => $a,
//            'review'          => $review,
//            'anotherVariable' => $b
//        ]);

//        return [
//            'count'  => $count,
//            'books'  => $books,
//            'review' => $review,
//        ];

//        return compact(['count', 'books', 'review']);

        // this approach does not allow to rename the variables
        return view('books.books', compact([
            'count',
            'books',
            'review'
        ]));
    }

    public function show($id){

        // $book = DB::table('books')->where('id', $id)->first();
//        $book = DB::table('books')->find($id);

        $book = Book::find($id);

//        return view('books.show')->with('book', $book);
//        return view('books.show', ['book' => $book]);

        return view('books.show', compact(['book']));

    }
}
