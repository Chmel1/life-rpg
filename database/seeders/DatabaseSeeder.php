<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            SkillSeeder::class,
            AchievementSeeder::class,
            ActivitySeeder::class,
            UserSeeder::class,
            
            
        ]);

        
    }
}