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
            'quantity' => $this->faker->numberBetween(1,5),
        ];
    }
}
