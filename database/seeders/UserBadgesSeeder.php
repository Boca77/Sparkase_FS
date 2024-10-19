<?php

namespace Database\Seeders;

use App\Models\Badges;
use App\Models\User;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserBadgesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::get();

        foreach ($users as $user) {
            DB::table('user_badges')->insert([
                'user_id' => $user->id,
                'badges_id' => Badges::query()->inRandomOrder()->first()->id
            ]);
        }
    }
}
