<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Blog\WebisteController;

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [WebisteController::class, 'home'])->name('home');
