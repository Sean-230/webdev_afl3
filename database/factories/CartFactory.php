<?php

// database/factories/CartFactory.php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CartFactory extends Factory
{
    protected $model = \App\Models\Cart::class;

    public function definition()
    {
        return [
            'is_checked_out' => false,
        ];
    }
}
