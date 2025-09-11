<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

// ✅ Show Welcome Page at "/"
Route::get('/', function () {
    return view('welcome');   // loads resources/views/welcome.blade.php
});

// ✅ Books CRUD routes at "/books"
Route::resource('books', BookController::class);
