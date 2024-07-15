<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TourController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\OrganizersController;
use App\Models\OrganizerProfile;

Route::get('/', function () {
    return view('home');
});


Route::get('/about', [AboutController::class, 'index']);
Route::get('/about/faq', [AboutController::class, 'faq']);

Route::get('/tours', [TourController::class, 'index']);
Route::get('/tours/{tour}', [TourController::class, 'show']);
Route::get('/tours/cart', [TourController::class, 'cart']);

Route::get('/organizers', [OrganizersController::class, 'index']);
Route::get('/organizers/{id}', [OrganizersController::class, 'show']);