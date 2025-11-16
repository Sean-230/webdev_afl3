<?php

// database/seeders/DatabaseSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            CategorySeeder::class,
            UserSeeder::class,
            ProductSeeder::class,
            ReviewSeeder::class,
            WarehouseSeeder::class,
            CartSeeder::class,
        ]);
    }
}
