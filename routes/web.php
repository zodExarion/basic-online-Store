<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PaymentController;
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



Route::controller(ProductController::class)->group(function () {

    Route::get('/', 'index')->name('home');
});

Route::controller(CartController::class)->group(function () {

    Route::post('/',  'store')->name('store');
    Route::delete('/cart/delete/{id}', 'destroy');
    Route::put('/cart/add/{id}', 'update');
    Route::put('/cart/minus/{id}', 'update');
    Route::get('/get', 'show')->name('cart');
});

Route::post('pay', [PaymentController::class, 'pay'])->name('payment');
Route::get('success', [PaymentController::class, 'success']);
Route::get('error', [PaymentController::class, 'error']);