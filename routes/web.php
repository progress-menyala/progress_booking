<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TourController;
use App\Http\Middleware\VerifyCsrfToken;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\OrganizersController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\PaymentCallbackController;

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

Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/about/faq', [AboutController::class, 'faq'])->name('faq');

Route::get('/tours', [TourController::class, 'index'])->name('tours');
Route::get('/tours/{tour}', [TourController::class, 'show']);

Route::get('/organizers', [OrganizersController::class, 'index']);
Route::get('/organizers/{id}', [OrganizersController::class, 'show']);

// Route::get('/checkout', [BookingController::class, 'index'])->name('checkout.index');
Route::get('/checkout/{id}', [BookingController::class, 'index'])->name('checkout');
Route::post('/checkout', [BookingController::class, 'store'])->name('checkout.store');
Route::get('/checkout/{id}/payment', [BookingController::class, 'payment'])->name('checkout.payment');


Route::get('/destination', [DestinationController::class, 'index'])->name('destination');
Route::get('/destination/{destination}', [DestinationController::class, 'show']);

Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::post('payments/midtrans-notification', [PaymentCallbackController::class, 'receive'])->middleware('bypass.csrf');

Route::post('payments/xendit', [BookingController::class, 'paymentXendit'])->name('paymentXendit');
Route::post('/notification', [BookingController::class, 'xenditNotification'])->name('xenditNotification');

// newsletter
Route::post('/newsletter', [NewsletterController::class, 'store'])->name('newsletter.store');

// Route::get('/download/{id}', [BookingController::class, 'sendInvoice']);
// Route::middleware('web')->post('payments/midtrans-notification', [PaymentCallbackController::class, 'receive']);
require __DIR__.'/auth.php';
