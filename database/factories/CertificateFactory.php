<?php

namespace Database\Factories;

use App\Models\Courses;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Certificate>
 */
class CertificateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::query()->inRandomOrder()->first()->id,
            'courses_id' => Courses::query()->inRandomOrder()->first()->id,
            'image_path' => 'test',	
        ];
    }
}
