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

        foreach ($users as $user) {
            UserInfo::create([
                'user_id' => $user->id,
                'cities_id' => Cities::query()->inRandomOrder()->first()->id,
                'phone' => fake()->phoneNumber(),
                'gender_id' => Gender::query()->inRandomOrder()->first()->id,
                'birth_date' => fake()->dateTime(),
                'image_path' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fstablediffusionweb.com%2Fko%2Fimage%2F2480429-generic-representation-of-a-man&psig=AOvVaw2vdr44g9huhaFZz9g9Ptv6&ust=1729500765395000&source=images&cd=vfe&opi=89978449&ved=0CBEQjRxqFwoTCICOv8nKnIkDFQAAAAAdAAAAABAE',
                'study_time' => fake()->randomElement(['10-20 минути', '30 минути', '45 минути', '1 час']),

            ]);
        }
    }
}
