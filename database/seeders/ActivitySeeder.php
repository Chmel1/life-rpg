<?php

namespace Database\Seeders;

use App\Models\Activity;
use App\Models\User;
use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    public function run(): void
    {
        $user = User::where('email', 'besvlat@bk.ru')->firstOrFail();

        $programming = $user->skills()
            ->where('name', 'Программирование')
            ->firstOrFail();

        $sport = $user->skills()
            ->where('name', 'Спорт')
            ->firstOrFail();

        $english = $user->skills()
            ->where('name', 'Английский язык')
            ->firstOrFail();

        $reading = $user->skills()
            ->where('name', 'Чтение')
            ->firstOrFail();

        $study = $user->skills()
            ->where('name', 'Учёба')
            ->firstOrFail();


        /*
         * Бег
         * 50 XP → Спорт
         */
        $running = $user->activities()->create([
            'name' => 'Бег',
            'description' => 'Пробежка или беговая тренировка',
            'base_xp' => 50,
        ]);

        $running->skills()->attach([
            $sport->id => [
                'xp' => 50,
            ],
        ]);


        /*
         * Программирование
         * 50 XP → Программирование
         */
        $coding = $user->activities()->create([
            'name' => 'Программирование',
            'description' => 'Работа над программным проектом',
            'base_xp' => 50,
        ]);

        $coding->skills()->attach([
            $programming->id => [
                'xp' => 50,
            ],
        ]);


        /*
         * Чтение книги
         * 30 XP → Чтение
         */
        $readingActivity = $user->activities()->create([
            'name' => 'Чтение книги',
            'description' => 'Чтение книги или полезного материала',
            'base_xp' => 30,
        ]);

        $readingActivity->skills()->attach([
            $reading->id => [
                'xp' => 30,
            ],
        ]);


        /*
         * Изучение английского
         * 50 XP → Английский язык
         */
        $englishActivity = $user->activities()->create([
            'name' => 'Изучение английского',
            'description' => 'Изучение английского языка',
            'base_xp' => 50,
        ]);

        $englishActivity->skills()->attach([
            $english->id => [
                'xp' => 50,
            ],
        ]);


        /*
         * Изучение Laravel
         *
         * 60 XP всего:
         * 40 → Программирование
         * 20 → Учёба
         */
        $laravel = $user->activities()->create([
            'name' => 'Изучение Laravel',
            'description' => 'Изучение Laravel и разработка проекта',
            'base_xp' => 60,
        ]);

        $laravel->skills()->attach([
            $programming->id => [
                'xp' => 40,
            ],
            $study->id => [
                'xp' => 20,
            ],
        ]);
    }
}