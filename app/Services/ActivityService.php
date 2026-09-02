<?php

namespace App\Services;

use App\Models\Activity;
use App\Models\ActivityLog;
use App\Models\Character;
use Illuminate\Support\Facades\DB;

class ActivityService
{

    public function __construct(
            private CharacterLevelService $characterLevelService
        ) {
        }
    public function complete(Character $character, Activity $activity): ActivityLog{
        return DB::transaction(function () use ($character, $activity) {
            $log = $character->activityLogs()->create([
                'activity_id' => $activity->id,
                'xp_earned' => $activity->base_xp,
            ]);
            $this->characterLevelService->addXp($character,$activity->base_xp);
            return $log;
        });
    }
}
