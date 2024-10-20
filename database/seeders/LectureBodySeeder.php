<?php

namespace Database\Seeders;

use App\Models\LectureBody;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LectureBodySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LectureBody::create([
            'lecture_id' => 1,
            'subtitle' => 'Introduction',
            "content" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.
             Minus, aperiam. Lorem ipsum dolor sit amet consectetur adipisicing elit. 
             Minus, aperiam.'
        ]);

        LectureBody::create([
            'lecture_id' => 1,
            'subtitle' => 'Introduction',
            "content" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.
             Minus, aperiam. Lorem ipsum dolor sit amet consectetur adipisicing elit. 
             Minus, aperiam.'
        ]);

        LectureBody::create([
            'lecture_id' => 1,
            'subtitle' => 'Introduction',
            "content" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.
             Minus, aperiam. Lorem ipsum dolor sit amet consectetur adipisicing elit. 
             Minus, aperiam.'
        ]);
    }
}
