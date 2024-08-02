<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OrganizersController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\PaymentCallbackController;
use App\Http\Middleware\VerifyCsrfToken;

// Route::get('/', function () {
//     return view('dashboard');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

Route::get('/', [HomeController::class, 'index'])->name('dashboard');

Route::get('/about', [AboutController::class, 'index']);
Route::get('/about/faq', [AboutController::class, 'faq']);

Route::get('/tours', [TourController::class, 'index']);
Route::get('/tours/{tour}', [TourController::class, 'show']);

Route::get('/organizers', [OrganizersController::class, 'index']);
Route::get('/organizers/{id}', [OrganizersController::class, 'show']);

// Route::get('/checkout', [BookingController::class, 'index'])->name('checkout.index');
Route::get('/checkout/{id}', [BookingController::class, 'index'])->name('checkout');
Route::post('/checkout', [BookingController::class, 'store'])->name('checkout.store');
Route::get('/checkout/{id}/payment', [BookingController::class, 'payment'])->name('checkout.payment');


Route::get('/destination', [DestinationController::class, 'index']);
Route::get('/destination/{destination}', [DestinationController::class, 'show']);

Route::get('/contact', [ContactController::class, 'index']);

Route::post('payments/midtrans-notification', [PaymentCallbackController::class, 'receive'])->middleware('bypass.csrf');

Route::post('payments/xendit', [BookingController::class, 'paymentXendit'])->name('paymentXendit');
Route::get('/notification/{id}', [BookingController::class, 'xenditNotification'])->name('checkout.xenditNotification');

Route::get('/download/{id}', [BookingController::class, 'download']);
// Route::middleware('web')->post('payments/midtrans-notification', [PaymentCallbackController::class, 'receive']);
require __DIR__.'/auth.php';
