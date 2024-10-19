<?php

namespace Database\Seeders;

use App\Models\Courses;
use App\Models\Modules;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $modules  = Modules::get();

        foreach ($modules as $module) {
            Courses::create([
                'modules_id' => $module->id,
                'name' => fake()->word(),
                'description' => fake()->sentence(),
            ]);
        }
    }
}