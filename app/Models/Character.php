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
];
    protected static function booted(): void
    {
        static::created(function (Character $character) {
            $character->initializeSkills();
        });
    }

    public function usser(){
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
        $skills = Skill::pluck('id');

        $data = [];

        foreach ($skills as $skillId) {
            $data[$skillId] = [
                'level' => 1,
                'xp' => 0,
            ];
        }

        $this->skills()->syncWithoutDetaching($data);
    }

    
}
