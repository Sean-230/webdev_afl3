<?php

// database/factories/WarehouseFactory.php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class WarehouseFactory extends Factory
{
    protected $model = \App\Models\Warehouse::class;

    public function definition()
    {
        return [
            'location' => $this->faker->company . ' Warehouse',
        ];
    }
}

