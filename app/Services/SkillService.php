<?php

namespace App\Services;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class SkillService
{
    public function create(User $user, array $data): Skill
    {
        return DB::transaction(function () use ($user, $data) {

            $skill = $user->skills()->create($data);

            $character = $user->character;

            $character->skills()->attach($skill->id, [
                'level' => 1,
                'xp' => 0,
            ]);

            return $skill;
        });
    }
}