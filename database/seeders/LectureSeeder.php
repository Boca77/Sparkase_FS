<?php

namespace Database\Seeders;

use App\Models\Lecture;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LectureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Lecture::create([
            'courses_id' => 1,
            'name' => 'Управување со проекти за почетници',
            'audio_path' => 'test',
            'duration' => 10
        ]);

        Lecture::create([
            'courses_id' => 1,
            'name' => 'Стратешки маркетинг за мали бизниси',
            'audio_path' => 'test',
            'duration' => 10
        ]);

        Lecture::create([
            'courses_id' => 1,
            'name' => 'Вештини за преговарање и комуникација',
            'audio_path' => 'test',
            'duration' => 10
        ]);

        Lecture::create([
            'courses_id' => 2,
            'name' => 'Основи на финансиски менаџмент',
            'audio_path' => 'test',
            'duration' => 10
        ]);

        Lecture::create([
            'courses_id' => 2,
            'name' => 'Дигитална трансформација за претприемачи',
            'audio_path' => 'test',
            'duration' => 10
        ]);

        Lecture::create([
            'courses_id' => 2,
            'name' => 'Успешно градење на бренд',
            'audio_path' => 'test',
            'duration' => 10
        ]);

        Lecture::create([
            'courses_id' => 3,
            'name' => 'Ефикасно управување со времето',
            'audio_path' => 'test',
            'duration' => 10
        ]);

        Lecture::create([
            'courses_id' => 3,
            'name' => 'Анализа на податоци за подобрување на одлуките',
            'audio_path' => 'test',
            'duration' => 10
        ]);

        Lecture::create([
            'courses_id' => 3,
            'name' => 'Водење тимови во хибридна работна средина',
            'audio_path' => 'test',
            'duration' => 10
        ]);

        Lecture::create([
            'courses_id' => 4,
            'name' => 'Меѓународен бизнис и глобални пазари',
            'audio_path' => 'test',
            'duration' => 10
        ]);

        Lecture::create([
            'courses_id' => 4,
            'name' => 'Претприемништво и иновации во акција',
            'audio_path' => 'test',
            'duration' => 10
        ]);

        Lecture::create([
            'courses_id' => 4,
            'name' => 'Лидерство во време на промени',
            'audio_path' => 'test',
            'duration' => 10
        ]);

        Lecture::create([
            'courses_id' => 5,
            'name' => 'Маркетинг преку социјални медиуми',
            'audio_path' => 'test',
            'duration' => 10
        ]);

        Lecture::create([
            'courses_id' => 5,
            'name' => 'Основи на корпоративна стратегија',
            'audio_path' => 'test',
            'duration' => 10
        ]);

        Lecture::create([
            'courses_id' => 5,
            'name' => 'Креативност и иновации во бизнисот',
            'audio_path' => 'test',
            'duration' => 10
        ]);

        Lecture::create([
            'courses_id' => 6,
            'name' => 'Управување со ризици и одржлив раст',
            'audio_path' => 'test',
            'duration' => 10
        ]);

        Lecture::create([
            'courses_id' => 6,
            'name' => 'Етика и корпоративна одговорност',
            'audio_path' => 'test',
            'duration' => 10
        ]);

        Lecture::create([
            'courses_id' => 6,
            'name' => 'Управување со финансиски извештаи',
            'audio_path' => 'test',
            'duration' => 10
        ]);

        Lecture::create([
            'courses_id' => 7,
            'name' => 'Анализа на пазари и конкуренција',
            'audio_path' => 'test',
            'duration' => 10
        ]);

        Lecture::create([
            'courses_id' => 7,
            'name' => 'Планирање и реализација на старт-апи',
            'audio_path' => 'test',
            'duration' => 10
        ]);

        Lecture::create([
            'courses_id' => 7,
            'name' => 'Развој на лидерски вештини за идни лидери',
            'audio_path' => 'test',
            'duration' => 10
        ]);
        
        Lecture::create([
            'courses_id' => 8,
            'name' => 'Развој на лидерски вештини за идни лидери',
            'audio_path' => 'test',
            'duration' => 10
        ]);

        Lecture::create([
            'courses_id' => 8,
            'name' => 'Развој на лидерски вештини за идни лидери',
            'audio_path' => 'test',
            'duration' => 10
        ]);

        Lecture::create([
            'courses_id' => 8,
            'name' => 'Развој на лидерски вештини за идни лидери',
            'audio_path' => 'test',
            'duration' => 10
        ]);
    }
}
