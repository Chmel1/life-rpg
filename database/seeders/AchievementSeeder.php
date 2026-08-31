<?php

namespace Database\Seeders;

use App\Models\Achievement;
use Illuminate\Database\Seeder;

class AchievementSeeder extends Seeder
{
    public function run(): void
    {
        Achievement::create([
            'name' => 'Первый шаг',
            'description' => 'Выполни свою первую активность.',
            'type' => 'activity_count',
            'requirement' => 1,
            'xp_reward' => 50,
        ]);

        Achievement::create([
            'name' => 'Десять активностей',
            'description' => 'Выполни 10 активностей.',
            'type' => 'activity_count',
            'requirement' => 10,
            'xp_reward' => 100,
        ]);

        Achievement::create([
            'name' => 'Первый уровень',
            'description' => 'Достигни 5 уровня персонажа.',
            'type' => 'character_level',
            'requirement' => 5,
            'xp_reward' => 200,
        ]);

        Achievement::create([
            'name' => '1000 XP',
            'description' => 'Получи 1000 XP.',
            'type' => 'total_xp',
            'requirement' => 1000,
            'xp_reward' => 250,
        ]);
    }
}