<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            //TopicSeeder::class,
            UserTopicSeeder::class,
            BadgesSeeder::class,
            UserInfoSeeder::class,
            CertificateSeeder::class,
            // QuizSeeder::class,
            // QuizQuestionSeeder::class,
            // QuizAnswerSeeder::class,
            // QuizEmailSeeder::class,
        ]);
    }
}
