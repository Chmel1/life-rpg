<?php

namespace Database\Seeders;

use App\Models\Activity;
use App\Models\Skill;
use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    public function run(): void
    {
        $programming = Skill::where('name', 'Программирование')->first();
        $sport = Skill::where('name', 'Спорт')->first();
        $english = Skill::where('name', 'Английский язык')->first();
        $reading = Skill::where('name', 'Чтение')->first();
        $study = Skill::where('name', 'Учёба')->first();

        $running = Activity::create([
            'name' => 'Бег',
            'description' => 'Пробежка или беговая тренировка',
            'base_xp' => 50,
        ]);

        $running->skills()->attach([
            $sport->id => ['xp' => 50],
        ]);

        $programmingActivity = Activity::create([
            'name' => 'Программирование',
            'description' => 'Работа над программным проектом',
            'base_xp' => 50,
        ]);

        $programmingActivity->skills()->attach([
            $programming->id => ['xp' => 50],
        ]);

        $readingActivity = Activity::create([
            'name' => 'Чтение книги',
            'description' => 'Чтение художественной или образовательной литературы',
            'base_xp' => 30,
        ]);
       
        $readingActivity->skills()->attach([
            $reading->id => ['xp' => 30],
        ]);

        $englishActivity = Activity::create([
            'name' => 'Изучение английского',
            'description' => 'Изучение английского языка',
            'base_xp' => 50,
        ]);

        $englishActivity->skills()->attach([
            $english->id => ['xp' => 50],
        ]);

        $laravelActivity = Activity::create([
            'name' => 'Изучение Laravel',
            'description' => 'Изучение Laravel и разработка на PHP',
            'base_xp' => 60,
        ]);

        $laravelActivity->skills()->attach([
            $programming->id => ['xp' => 40],
            $study->id => ['xp' => 20],
        ]);
    }
}