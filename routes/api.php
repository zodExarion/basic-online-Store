<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\ProductController;
use App\Http\Controllers\api\CartController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::controller(ProductController::class)->group(function () {

    Route::get('/indexs', 'index')->name('home');
});
Route::controller(CartController::class)->group(function () {
    Route::get('/index', 'show')->name('home');
    Route::get('/a', 'show')->name('login');;
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
