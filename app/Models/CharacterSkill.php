<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CharacterSkill extends Model
{
    protected $fillable = [
        'character_id',
        'skill_id',
        'level',
        'xp',
    ];

    public function character()
    {
        return $this->belongsTo(Character::class);
    }

    public function skill()
    {
        return $this->belongsTo(Skill::class);
    }
}
