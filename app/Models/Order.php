<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
Use App\Models\User;
=======
use App\Models\Book;
use App\Models\User;
>>>>>>> refs/remotes/origin/main

class Order extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function books()
    {
        return $this->belongsToMany(Book::class)->withPivot('quantity', 'order_id');
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> refs/remotes/origin/main
