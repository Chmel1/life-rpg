<?php

namespace App\Services;

use App\Models\Activity;
use App\Models\Character;
class ActivityXpService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function calculate(Character $character, Activity $activity){
        $primaryMultiplier = $this->getPrimaryMultiplier($activity, $character);
        $secondaryMultiplier = $this->getSecondaryMultiplier($activity, $character);
        $disciplineMultiplier = $this->getDisciplineMultiplier($character);

        $multiplier = $primaryMultiplier + ($secondaryMultiplier - 1) + ($disciplineMultiplier - 1);
        
        return (int) round($activity->base_xp * $multiplier);
    }

    public function getPrimaryMultiplier(Activity $activity,Character $character){
        $stat = $activity->stats->firstWhere('pivot.is_primary', true);

        if(!$stat){
            return 1.0;
        }

        $value = $character->stats->firstWhere('id', $stat->id)?->pivot?->value ?? 00;

        return $this->calculatePrimaryMultiplier($value);
    }

    private function calculatePrimaryMultiplier(int $value){
        $value = min($value, 40);

        if ($value <= 20){
            return 1 + ($value * 0.05);
        }

        return 2 + (($value - 20) * 0.10);
    }

    public function getSecondaryMultiplier(Activity $activity,Character $character){
        $stat = $activity->stats->firstWhere('pivot.is_primary', false);

        if(!$stat){
            return 1.0;
        }

        $value = $character->stats->firstWhere('id', $stat->id)?->pivot?->value ?? 00;

        return $this->calculateSecondaryMultiplier($value);
    }
    private function calculateSecondaryMultiplier(int $value){
        $value = min($value, 40);

        return 1 + ($value * 0.025);
    }

    private function getDisciplineMultiplier(Character $character): float
    {
        $stat = $character->stats
            ->firstWhere('slug', 'discipline');

        $value = $stat?->pivot?->value ?? 0;

        return $this->calculateSecondaryMultiplier($value);
    }
}
