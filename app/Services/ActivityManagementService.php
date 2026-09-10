<?php

namespace App\Services;

use App\Models\Activity;
use App\Models\User;


use Illuminate\Support\Facades\DB;

class ActivityManagementService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        
    }

    public function create(User $user, array $data){
         $this->validateSkillsOwnership($user, $data['skills']);

        return DB::transaction(function () use ($user, $data) {

            $activity = $user->activities()->create([
                'name' => $data['name'],
                'description' => $data['description'] ?? null,
                'base_xp' => $data['base_xp'],
            ]);

            $skills = $this->prepareSkills($data['skills']);

            $activity->skills()->attach($skills);

            return $activity;
        });
    }

    private function validateSkillsOwnership(User $user, array $skills){
        $skillIds = collect($skills)->pluck('id')->unique();

        $ownedSkillsCount = $user->skills()->whereIn('id', $skillIds)->count();

        if($ownedSkillsCount !== $skillIds->count()){
            abort(403);
        }
    }

    private function prepareSkills(array $skills): array
    {
        $result = [];

        foreach ($skills as $skill) {
            $result[$skill['id']] = [
                'xp' => $skill['xp'],
            ];
        }

        return $result;
    }
    public function update(Activity $activity, array $data)
    {
        $user = $activity->user;

        $this->validateSkillsOwnership(
            $user,
            $data['skills']
        );

        return DB::transaction(function () use ($activity, $data) {

            $activity->update([
                'name' => $data['name'],
                'description' => $data['description'] ?? null,
                'base_xp' => $data['base_xp'],
            ]);

            $skills = $this->prepareSkills($data['skills']);

            $activity->skills()->sync($skills);

            return $activity;
        });
    }

    public function delete(Activity $activity){
        $activity->delete();
    }

}
