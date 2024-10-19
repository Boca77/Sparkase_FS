<?php

namespace Database\Seeders;

use App\Models\Cities;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cities::factory(10)->create();
    }
}
