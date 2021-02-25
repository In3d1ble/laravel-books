<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;
use App\Models\Order;

class OrderController extends Controller
{
   
    public function order(Request $request, $book_id)
    {

        $this->validate($request, 'quantity'=>'required|number|gt:0')

        $book = Book::findOrFail($book_id);

        $new_order = new Order;
        $new_order->save();

        $new_order->books()->attach($book->id, [
            'quantity' => $request->quantity
        ]);
      
        session()->flash('success_message', 'Order was successfully created');

        return redirect()->actiuon('BookController@show', $book->id);
    }

    
}