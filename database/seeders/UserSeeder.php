<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Томи',
            'surname' => 'Андреев',
            'email' => 'user@example.com',
            'password' => Hash::make('user'),
        ]);

        User::create([
            'name' => 'admin',
            'surname' => 'admin',
            'email' => 'admin@admin',
            'password' => Hash::make('admin'),
        ]);
    }
}
