<?php

namespace App\Models;

use App\Models\Skill;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{   
    protected $fillable = [
    'name',
    'level',
    'xp',
    'user_id',
    'total_xp',
];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function skills(){
        return $this->belongsToMany(Skill::class, 'character_skills')->withPivot([
            'level',
            'xp',
        ]);
    }

    public function initializeSkills(): void
    {
        $skills = Skill::where('user_id', $this->user_id)
        ->pluck('id');

        $data = [];

        foreach ($skills as $skillId) {
            $data[$skillId] = [
                'level' => 1,
                'xp' => 0,
            ];
        }

        $this->skills()->syncWithoutDetaching($data);
    }

    public function activityLogs()
    {
        return $this->hasMany(ActivityLog::class);
    }

    public function achievements(){
        return $this->belongsToMany(Achievement::class, 'character_achievement')->withPivot('unlocked_at');
    }

    
}
