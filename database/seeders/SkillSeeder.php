<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::where('email', 'besvlat@bk.ru')->firstOrFail();
        $character = $user->character;
        $skills = [
            [
                'name' => 'Программирование',
            ],
            [
                'name' => 'Спорт',
            ],
            [
                'name' => 'Английский язык',
            ],
            [
                'name' => 'Чтение',
            ],
            [
                'name' => 'Учёба',
            ],
        ];

        foreach ($skills as $skill) {
            $createdSkill = $user->skills()->create($skill);

            $character->skills()->attach($createdSkill->id, [
                'level' => 1,
                'xp' => 0,
            ]);
        }
    }
}