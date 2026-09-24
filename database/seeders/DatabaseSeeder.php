<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            SkillSeeder::class,
            ActivitySeeder::class,
            StatSeeder::class,
            CharacterStatsSeeder::class,
            AchievementSeeder::class,
        ]);

        
    }
}