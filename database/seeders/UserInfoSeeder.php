<?php

namespace Database\Seeders;

use App\Models\Cities;
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
        $users = UserInfo::get();

        foreach ($users as $user) {
            UserInfo::create([
                'user_id' => $user->id,
                'city_id' => Cities::get()->inRandomOrder()->first()->id,
                'phone' => fake()->phoneNumber(),
                'gender' => fake()->randomElement(['M', 'F']),
                'birth_date' => fake()->dateTime(),
                'image_path' => 'test',
                'study_time' => fake()->randomElement(['morning', 'afternoon', 'night']),

            ]);
        }
    }
}
