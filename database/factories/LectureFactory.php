<?php

namespace Database\Factories;

use App\Models\Courses;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lecture>
 */
class LectureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'course_id' => Courses::get()->inRandomOrder()->first()->id,
            'name' => fake()->name(),
            'description' => fake()->text(),
            'audio_path' => 'test',
            'duration' => fake()->randomNumber(),
        ];
    }
}
