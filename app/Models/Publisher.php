<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Book;

class Publisher extends Model
{
    use HasFactory;

    protected $table = 'publishers';

    protected $fillable = [
        'title'
    ];
//
//    protected $guarded = [
//        'premium'
//    ];

    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
