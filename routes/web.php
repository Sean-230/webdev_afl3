<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('user.home');
});

Route::get('/contact', function () {
    return view('user.contact');
});

Route::get('/about', function () {
    return view('user.about');
});

Route::get('/review', function () {
    return view('user.review');
});

Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
