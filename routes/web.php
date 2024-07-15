<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/about', [AboutController::class, 'index']);
Route::get('/about/faq', [AboutController::class, 'faq']);