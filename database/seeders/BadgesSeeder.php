<?php

namespace Database\Seeders;

use App\Models\Badges;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BadgesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Badges::create([
            'id' => 1,
            'name' => 'Освоен',
            'description' => 'Лична финансиска гимнастика',
            'image_path' => '/images/Badge1.png'
        ]);

        Badges::create([
            'id' => 2,
            'name' => 'Освоен',
            'description' => 'Управување со личен бизнис',
            'image_path' => '/images/Badge2.png'

        ]);

        Badges::create([
            'id' => 3,
            'name' => 'Во прогрес',
            'description' => 'Лична финансиска гимнастика',
            'image_path' => '/images/Badge3.png'
        ]);

        Badges::create([
            'id' => 4,
            'name' => 'Во прогрес',
            'description' => 'Управување со личен бизнис',
            'image_path' => '/images/Badge4.png'

        ]);
    }

}
