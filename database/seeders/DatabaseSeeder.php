<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // Insertar datos estáticos en la tabla employees
        Employee::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'username' => 'admin',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        Employee::create([
            'name' => 'Vendor User 1',
            'email' => 'vendor1@example.com',
            'username' => 'vendor1',
            'password' => Hash::make('password'),
            'role' => 'vendor',
        ]);
    }
}
