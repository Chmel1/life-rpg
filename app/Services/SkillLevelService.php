<?php

namespace App\Services;

use App\Models\Character;
use App\Models\Skill;

class SkillLevelService
{
    /**
     * Create a new class instance.
     */
    public function __construct(private XpService $xpService)
    {
        
    }

    public function addXp(Character $character, Skill $skill, int $xp){
        $characterSkill = $character->skills()
            ->where('skills.id', $skill->id)
            ->first();

        if (!$characterSkill){
            return;
        }

        $currentXp = $characterSkill->pivot->xp;
        $currentLevel = $characterSkill->pivot->level;

        $currentXp += $xp;

        while($this->xpService->canLevelUp(
            $currentLevel, $currentXp
        )){
            $currentXp -= $this->xpService->xpToNextLevel($currentLevel);
            $currentLevel++;
        }

        $character->skills()->updateExistingPivot($skill->id, ['xp'=>$currentXp, 'level'=>$currentLevel,]);
    }
}
