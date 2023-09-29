<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('homepage.index');
});

Route::get('/view', function () {
    return view('homepage.details');
});
Route::get('/cart', function () {
    return view('homepage.cart');
});
Route::get('/checkout/address-details', function () {
    return view('homepage.checkout-address-details');
});
Route::get('/checkout/shipping-details', function () {
    return view('homepage.checkout-shipping-details');
});

Route::get('/checkout/payment-details', function () {
    return view('homepage.checkout-payment-details');
});

Route::get('/checkout/review-details', function () {
    return view('homepage.checkout-review-details');
});

Route::get('/checkout/complete-details', function () {
    return view('homepage.checkout-complete-details');
});

Route::get('/dashboard/address-details', function () {
    return view('homepage.account-dashboard-address');
});

Route::get('/dashboard/account-details', function () {
    return view('homepage.account');
});

Route::get('/dashboard/order-details', function () {
    return view('homepage.orders');
});

Route::get('/dashboard/payment-details', function () {
    return view('homepage.payments');
});

Route::get('/dashboard/user-details', function () {
    return view('homepage.user');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
