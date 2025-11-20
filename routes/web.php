<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\PasswordResetController;
use App\Http\Controllers\Auth\EmailVerificationController;
use App\Models\Product;
use App\Http\Controllers\ContactController;

// Public routes
Route::get('/', function () {
    $products = Product::inRandomOrder()->limit(4)->get();
    return view('user.home', compact('products'));
})->name('home');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::get('/about', function () {
    return view('user.about');
})->name('about');

Route::get('/review', [ReviewController::class, 'index'])->name('review');  // ✅ ADDED ->name('review')

Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');

// Authentication routes
Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);
    Route::get('/forgot-password', [PasswordResetController::class, 'showResetForm'])->name('password.request');
    Route::post('/forgot-password', [PasswordResetController::class, 'reset'])->name('password.reset');
});

Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

// Email verification routes
Route::middleware('auth')->group(function () {
    Route::get('/email/verify', [EmailVerificationController::class, 'notice'])->name('verification.notice');
    Route::get('/email/verify/{id}/{hash}', [EmailVerificationController::class, 'verify'])
        ->middleware('signed')->name('verification.verify');
    Route::post('/email/verification-notification', [EmailVerificationController::class, 'resend'])
        ->name('verification.send');
});

// Authenticated routes
Route::middleware('auth')->group(function () {
    // Cart routes
    Route::prefix('cart')->name('cart.')->middleware('auth')->group(function () {
        Route::get('/', [CartController::class, 'index'])->name('index');
        Route::post('/add/{product}', [CartController::class, 'add'])->name('add');
        Route::put('/{cartItem}', [CartController::class, 'update'])->name('update');
        Route::delete('/{cartItem}', [CartController::class, 'remove'])->name('remove');
        Route::delete('/', [CartController::class, 'clear'])->name('clear');
    });

    // Order routes
    Route::prefix('orders')->name('orders.')->middleware('auth')->group(function () {
        Route::get('/', [OrderController::class, 'index'])->name('index');
        Route::post('/checkout', [OrderController::class, 'checkout'])->name('checkout');
    });

    // Review routes
    Route::prefix('reviews')->name('reviews.')->group(function () {
        Route::post('/{product}', [ReviewController::class, 'store'])->name('store');
        Route::put('/{review}', [ReviewController::class, 'update'])->name('update');
        Route::delete('/{review}', [ReviewController::class, 'destroy'])->name('destroy');
    });

    // Account management routes
    Route::prefix('account')->name('account.')->group(function () {
        Route::get('/change-password', [AccountController::class, 'showChangePassword'])->name('change-password');
        Route::post('/change-password', [AccountController::class, 'changePassword']);
        Route::delete('/delete', [AccountController::class, 'deleteAccount'])->name('delete');
    });

    // Admin routes
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
        Route::get('/warehouse', [AdminController::class, 'warehouse'])->name('warehouse');
        Route::post('/warehouse/product', [AdminController::class, 'storeProduct'])->name('warehouse.store');
        Route::put('/warehouse/product/{id}/stock', [AdminController::class, 'updateStock'])->name('warehouse.update-stock');
        Route::delete('/warehouse/product/{id}', [AdminController::class, 'deleteProduct'])->name('warehouse.delete');
        Route::get('/orders', [AdminController::class, 'orders'])->name('orders');
        Route::put('/orders/{order}/status', [AdminController::class, 'updateOrderStatus'])->name('orders.update-status');
    });
});
