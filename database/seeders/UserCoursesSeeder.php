<?php

namespace Database\Seeders;

use App\Models\Badges;
use App\Models\Courses;
use App\Models\User;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserCoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::get();

        foreach ($users as $user) {
            DB::table('user_courses')->insert([
                'user_id' => $user->id,
                'courses_id' => Courses::query()->inRandomOrder()->first()->id,
                'started_at' => fake()->dateTime(),    
                'completed_at' => fake()->dateTime(),
            ]);
        }
    }
}

