<?php

namespace Database\Seeders;

use App\Models\Cities;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cities::create([
            'id' => 1,
            'name' => 'Скопје',
        ]);

        Cities::create([
            'id' => 2,
            'name' => 'Битола',
        ]);

        Cities::create([
            'id' => 3,
            'name' => 'Ресен',
        ]);

        Cities::create([
            'id' => 4,
            'name' => 'Куманово',
        ]);

        Cities::create([
            'id' => 5,
            'name' => 'Прилеп',
        ]);

        Cities::create([
            'id' => 6,
            'name' => 'Тетово',
        ]);

        Cities::create([
            'id' => 7,
            'name' => 'Гостивар',
        ]);

        Cities::create([
            'id' => 8,
            'name' => 'Крушево',
        ]);

        Cities::create([
            'id' => 9,
            'name' => 'Берово',
        ]);

        Cities::create([
            'id' => 10,
            'name' => 'Виница',
        ]);

        Cities::create([
            'id' => 11,
            'name' => 'Делчево',
        ]);

        Cities::create([
            'id' => 12,
            'name' => 'Кочани',
        ]);

        Cities::create([
            'id' => 13,
            'name' => 'Штип',
        ]);

        Cities::create([
            'id' => 14,
            'name' => 'Охрид',
        ]);

        Cities::create([
            'id' => 15,
            'name' => 'Струга',
        ]);
    }
}
