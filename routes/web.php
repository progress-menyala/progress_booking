<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TourController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\OrganizersController;
use App\Models\Destination;
use App\Models\OrganizerProfile;

Route::get('/', function () {
    return view('home');
});


Route::get('/about', [AboutController::class, 'index']);
Route::get('/about/faq', [AboutController::class, 'faq']);

Route::get('/tours', [TourController::class, 'index']);
Route::get('/tours/{tour}', [TourController::class, 'show']);

Route::get('/organizers', [OrganizersController::class, 'index']);
Route::get('/organizers/{id}', [OrganizersController::class, 'show']);

Route::get('/checkout', [BookingController::class, 'index'])->name('checkout.index');
Route::post('/checkout', [BookingController::class, 'store'])->name('checkout.store');

Route::get('/destination', [DestinationController::class, 'index']);
Route::get('/destination/{id}', [DestinationController::class, 'show']);