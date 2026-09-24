<?php

namespace App\Services;

use App\Models\Character;
use App\Models\Stat;

class CharacterStatService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }
    public function initialize(Character $character){
        
        $stats = Stat::all();
        
        foreach($stats as $stat){
            $character->characterStats()->create([
                'stat_id' => $stat->id,
                'value' => 0,
            ]);
        }
    }
}
