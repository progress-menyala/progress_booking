<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TourController;
use App\Http\Controllers\AboutController;

Route::get('/', function () {
    return view('home');
});


Route::get('/about', [AboutController::class, 'index']);
Route::get('/about/faq', [AboutController::class, 'faq']);

Route::get('/tours', [TourController::class, 'index']);
Route::get('/tours/{tour}', [TourController::class, 'show']);