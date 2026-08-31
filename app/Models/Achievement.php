<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    protected $fillable = [
        'name',
        'description',
        'type',
        'requirement',
        'xp_reward',
    ];


    public function characters(){
        return $this->belongsToMany(Character::class, "character_achievement")->withPivot('unlocked_at');
    }
}
