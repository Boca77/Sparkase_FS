<?php

namespace Database\Seeders;

use App\Models\Cities;
use App\Models\Gender;
use App\Models\User;
use App\Models\UserInfo;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::get();
        $gender = Gender::get();

        foreach ($users as $user) {
            UserInfo::create([
                'user_id' => $user->id,
                'cities_id' => Cities::query()->inRandomOrder()->first()->id,
                'phone' => fake()->phoneNumber(),
                'gender_id' => Gender::query()->inRandomOrder()->first()->id,
                'birth_date' => fake()->dateTime(),
                'image_path' => 'test',
                'study_time' => fake()->randomElement(['10-20 минути', '30 минути', '45 минути', '1 час']),

            ]);
        }
    }
}
