<?php

namespace Database\Seeders;

use App\Models\Gender;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Gender::create([
            'id' => 1,
            'type' => 'Машко',
        ]);
        Gender::create([
            'id' => 2,
            'type' => 'Женско',
        ]);
        Gender::create([
            'id' => 3,
            'type' => 'Друго',
        ]);
    }
}
