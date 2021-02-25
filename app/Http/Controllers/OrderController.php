<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;
use App\Models\Order;
use DB;

class OrderController extends Controller
{
    public function order(Request $request, $book_id)
    {
        $this->validate($request,  [
            'quantity' => 'required|number|gt:0'
        ]);

        $book = Book::findOrFail($book_id);

        $new_order = new Order;
        // $new_order->user_id = ...
        $new_order->save();

        // DB::table('book_order')->insert([
        //     'book_id' => $book->id,
        //     'order_id' => $new_order->id,
        //     'quantity' => $request->quantity
        // ]);

        $new_order->books()->attach($book->id, [
            'quantity' => $request->quantity
        ]);

        session()->flash('success_message', 'Order was successfully created');

        return redirect()->action('BookController@show', $book->id);
    }
}
