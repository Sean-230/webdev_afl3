<?php

// database/factories/CartItemFactory.php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CartItemFactory extends Factory
{
    protected $model = \App\Models\CartItem::class;

    public function definition()
    {
        return [
            'quantity' => $this->faker->numberBetween(1,5),
            'price' => $this->faker->randomFloat(2, 1, 200),
        ];
    }
}
