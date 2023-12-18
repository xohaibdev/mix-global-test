<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Auth::routes();
Route::get('/', [AuthController::class, 'index'])->name('main');

Route::middleware(['auth'])->group(function () {
    Route::get('/products', [App\Http\Controllers\ProductController::class, 'index'])->name('products');
    Route::post('/add-to-cart/{product}', [App\Http\Controllers\ProductController::class, 'addToCart'])->name('addToCart');
    Route::post('/remove-from-cart/{product}', [App\Http\Controllers\ProductController::class, 'removeFromCart'])->name('removeFromCart');
    Route::get('/cart', [App\Http\Controllers\CartController::class, 'getCartItems'])->name('getCartItems');
});