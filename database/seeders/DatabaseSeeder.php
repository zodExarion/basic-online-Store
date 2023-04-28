<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;


use App\Models\Users;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        Product::factory(10)->create();

        \App\Models\Users::factory()->create([
            'name' => 'admin admins',
            'email' => 'admin@admin',
            'password' => Hash::make('admin'),
            'role' => 1 // Admin user
        ]);
    }
}