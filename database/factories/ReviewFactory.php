<?php

// database/factories/ReviewFactory.php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{
    protected $model = \App\Models\Review::class;

    public function definition()
    {
        return [
            'rating' => $this->faker->numberBetween(1,5),
            'comment' => $this->faker->optional()->sentence(),
        ];
    }
}
