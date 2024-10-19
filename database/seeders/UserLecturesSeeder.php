<?php

namespace Database\Seeders;

use App\Models\Badges;
use App\Models\Lecture;
use App\Models\User;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserLecturesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::get();

        foreach ($users as $user) {
            DB::table('user_lectures')->insert([
                'user_id' => $user->id,
                'lecture_id' => Lecture::query()->inRandomOrder()->first()->id,
                'started_at' => fake()->dateTime(),
                'completed_at' => fake()->dateTime(),
            ]);
        }
    }
}

