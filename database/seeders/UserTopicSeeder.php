<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Topics;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserTopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::get();

        foreach ($users as $user) {
            DB::table('user_topics')->insert([
                'user_id' => $user->id,
                'topic_id' => Topics::get()->inRandomOrder()->first()->id
            ]);
        }
    }
}
