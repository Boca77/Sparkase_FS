<?php

namespace Database\Seeders;

use App\Models\Modules;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ModulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Modules::create([
            'name' => 'Бизнис',
            'description' => 'Научи како да го анализираш финансискиот статус на компаниите и да развиваш финансиски стратегии.',
        ]);

        Modules::create([
            'name' => 'Лични Финансии',
            'description' => 'Научи како брзо и лесно да ги совладаш општите вештини за лични финансии и управување со пари.',
        ]);
    }
}
