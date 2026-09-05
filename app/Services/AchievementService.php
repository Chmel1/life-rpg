<?php

namespace App\Services;

use App\Models\Achievement;
use App\Models\Character;

class AchievementService
{
    /**
     * Create a new class instance.
     */
    public function __construct(private CharacterLevelService $characterLevelService)
    {
        
    }

    public function check(Character $character){
        
        $achievements = Achievement::all();

        foreach($achievements as $achievement){
            if($this->isUnlocked($character, $achievement)){
                continue;
            }
            if ($this->isCompleted($character, $achievement)) {
                $this->unlock($character, $achievement);
            }
        }
    }

    private function isUnlocked(Character $character, Achievement $achievement){
        
        return $character->achievements()->where('achievements.id', $achievement->id)->exists();

    }

    private function isCompleted(Character $character, Achievement $achievement){
        return match ($achievement->type) {
            'activity_count' => $character->activityLogs()->count()
                >= $achievement->requirement,

            'character_level' => $character->level
                >= $achievement->requirement,

            default => false,
        };
    }

    private function unlock(Character $character, Achievement $achievement){
        $character->achievements()->attach(
            $achievement->id,
            [
                'unlocked_at' => now(),
            ]
        );
        $this->characterLevelService->addXp($character, $achievement->xp_reward);
    }
    
}
