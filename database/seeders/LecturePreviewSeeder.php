<?php

namespace Database\Seeders;

use App\Models\LecturePreview;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LecturePreviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LecturePreview::create([
            'lecture_id' => 1,
            'content' => 'Евиденцијата на приходите и на расходите претставува 
            основа за управување со финансии и домаќинство.
            Водењето на буџетот ни овозможува да ја согледаме реалната состојба 
            на своите финансии и да ги распределиме парите што
            ги имаме во согласност со приоритетите.',
            'learn_points' => json_encode([
                'Да управувате со личните финансии',
                'Да ги следите вашите трошоци',
                'Важни факти за финансиите'
            ]),
            'fun_fact' => 'Дали знаете дека 70% од стресот што го чувствуваме е предизвикан од
             финансиски грижи. (Психологија на успехот, Дејл Карнеги).',
        ]);
    }
}
