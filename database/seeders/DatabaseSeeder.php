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
            BadgesSeeder::class,
            CitiesSeeder::class,
            GenderSeeder::class,
            TopicsSeeder::class,
            UserInfoSeeder::class,
            UserTopicSeeder::class,
            ModulesSeeder::class,
            UserBadgesSeeder::class,
            CoursesSeeder::class,
            UserCoursesSeeder::class,
            LectureSeeder::class,
            UserLecturesSeeder::class,
            MaterialsSeeder::class,
            CertificateSeeder::class,
            UserEvaluationsSeeder::class,

            // QuizSeeder::class,
            // QuizQuestionSeeder::class,
            // QuizAnswerSeeder::class,
            // QuizEmailSeeder::class,
        ]);
    }
}
