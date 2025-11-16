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

        // Regular Users
        $users = [
            ['name' => 'Emily Johnson', 'email' => 'emily.j@example.com'],
            ['name' => 'Michael Chen', 'email' => 'michael.chen@example.com'],
            ['name' => 'Sarah Williams', 'email' => 'sarah.w@example.com'],
            ['name' => 'David Martinez', 'email' => 'david.m@example.com'],
            ['name' => 'Jessica Brown', 'email' => 'jessica.b@example.com'],
            ['name' => 'James Anderson', 'email' => 'james.a@example.com'],
            ['name' => 'Amanda Taylor', 'email' => 'amanda.t@example.com'],
            ['name' => 'Robert Lee', 'email' => 'robert.l@example.com'],
            ['name' => 'Lisa Garcia', 'email' => 'lisa.g@example.com'],
            ['name' => 'Christopher Wilson', 'email' => 'chris.w@example.com'],
            ['name' => 'Michelle Davis', 'email' => 'michelle.d@example.com'],
            ['name' => 'Daniel Rodriguez', 'email' => 'daniel.r@example.com'],
            ['name' => 'Jennifer Martinez', 'email' => 'jennifer.m@example.com'],
            ['name' => 'Matthew Thompson', 'email' => 'matthew.t@example.com'],
            ['name' => 'Ashley White', 'email' => 'ashley.w@example.com'],
        ];

        foreach ($users as $userData) {
            User::create([
                'name' => $userData['name'],
                'email' => $userData['email'],
                'password' => Hash::make('password'),
                'is_admin' => false,
            ]);
        }
    }
}

