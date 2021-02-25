<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;

class Book extends Model
{
    use HasFactory;

    public function reviews(){
        return $this->hasMany(Review::class);
    }


    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
<<<<<<< HEAD
=======
}
>>>>>>> refs/remotes/origin/main

    public function orders()
    {
        $this->belongsToMany(Order::class);
    }
<<<<<<< HEAD
}
=======
}

>>>>>>> refs/remotes/origin/main
