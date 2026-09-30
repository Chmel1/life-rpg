<?php

namespace App\Services;

use App\Models\Activity;
use App\Models\ActivityLog;
use App\Models\Character;
use Illuminate\Support\Facades\DB;

class ActivityService
{
    public function __construct(
        private CharacterLevelService $characterLevelService,
        private SkillLevelService $skillLevelService,
        private AchievementService $achievementService,
        private ActivityXpService $activityXpService
    ) {
    }

    public function complete(
        Character $character,
        Activity $activity
    ): ActivityLog {
        $activity->load(['skills', 'stats']);

        return DB::transaction(function () use ($character, $activity) {

            $xp = $this->activityXpService->calculate(
                $character,
                $activity
            );

            $log = $character->activityLogs()->create([
                'activity_id' => $activity->id,
                'xp_earned' => $xp,
            ]);

            $this->characterLevelService->addXp(
                $character,
                $xp
            );

            foreach ($activity->skills as $skill) {
                $this->skillLevelService->addXp(
                    $character,
                    $skill,
                    $skill->pivot->xp
                );
            }

            $this->achievementService->check($character);

            return $log;
        });
    }
}