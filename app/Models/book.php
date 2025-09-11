<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
     protected $fillable = [
        'title',
        'author',
        'publisher',
        'no_of_books',
        'price_of_book',
        'pic_of_author',
    ];
}
