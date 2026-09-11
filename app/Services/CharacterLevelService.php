<?php

namespace App\Services;

use App\Models\Character;
use App\Events\LevelUp;

class CharacterLevelService
{
    /**
     * Create a new class instance.
     */
    public function __construct(private XpService $xpService)
    {
        
    }

    public function addXp(Character $character, int $xp){
        $character->xp += $xp;
        $character->total_xp += $xp;    

        while(
            $this->xpService->canLevelUp(
                $character->level,
                $character->xp,
            )
        ){
            $character->xp -= $this->xpService->xpToNextLevel
            (
                $character->level
            );
            $character->level++;
            LevelUp::dispatch($character);
        }
        $character->save();
        
    }
}
