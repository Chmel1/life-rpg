<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    public function run(): void
    {
        $skills = [
            'Программирование',
            'Спорт',
            'Английский язык',
            'Чтение',
            'Учёба',
        ];

        foreach ($skills as $skill) {
            Skill::firstOrCreate([
                'name' => $skill,
            ]);
        }
    }
}