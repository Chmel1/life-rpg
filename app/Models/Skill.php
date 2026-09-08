<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = [
        'name',
        'user_id',
    ];

    public function characters(){
        return $this->belongsToMany(Character::class, 'character_skills')->withPivot([
            'level',
            'xp',
        ]);
    }

    public function activities()
    {
        return $this->belongsToMany(Activity::class)
            ->withPivot('xp')
            ->withTimestamps();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
