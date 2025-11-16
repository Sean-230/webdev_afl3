<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Share cart count with all views
        View::composer('*', function ($view) {
            if (Auth::check() && !Auth::user()->is_admin) {
                $cart = Cart::where('user_id', Auth::id())->first();
                $cartCount = $cart ? $cart->items()->sum('quantity') : 0;
                $view->with('cartCount', $cartCount);
            }
        });
    }
}
