<?php

namespace Database\Seeders;

use App\Models\Stat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class StatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Stat::create([
            'name' => 'Интеллект',
            'slug' => 'intelligence',
            'type' => 'primary',
        ]);

        Stat::create([
            'name' => 'Сила',
            'slug' => 'strength',
            'type' => 'primary',
        ]);

        Stat::create([
            'name' => 'Выносливость',
            'slug' => 'endurance',
            'type' => 'primary',
        ]);

        Stat::create([
            'name' => 'Дисциплина',
            'slug' => 'discipline',
            'type' => 'universal',
        ]);
    }
}
