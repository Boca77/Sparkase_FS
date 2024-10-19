<?php

namespace Database\Factories;

use DB;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Courses;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserEvaluations>
 */
class UserEvaluationsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::get()->inRandomOrder()->first()->id,
            'course_id' => Courses::get()->inRandomOrder()->first()->id,
            'recommendation' => fake()->boolean(),
            'grade' => fake()->randomElement(['A', 'B', 'C', 'D', 'F']),
            'message' => fake()->text(),
        ];
            
    }
}
