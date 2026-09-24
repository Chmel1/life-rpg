<?php

namespace Database\Seeders;

use App\Models\Character;
use App\Models\Stat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CharacterStatsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $characters = Character::all();
        $stats = Stat::all();

        foreach ($characters as $character){
            foreach($stats as $stat){
                $character->characterStats()->firstOrCreate(
                    ['stat_id'=> $stat->id, ],
                    ['value'=>0, ]
                );
            }
        }
    }
}
