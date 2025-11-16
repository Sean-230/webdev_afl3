<?php

// database/seeders/CategorySeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $names = ['eskrim','bubuk eskrim','cone','cup','sendok','tutup'];
        foreach ($names as $name) {
            Category::firstOrCreate(['name' => $name]);
        }
    }
}
