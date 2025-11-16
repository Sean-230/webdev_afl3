<?php

// database/seeders/UserSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Admin User
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'is_admin' => true,
        ]);

        // Personal Test User - Sean
        User::create([
            'name' => 'sean',
            'email' => 'sean.tandjaja2005@gmail.com',
            'password' => Hash::make('12345678'),
            'is_admin' => false,
        ]);
    }
}

