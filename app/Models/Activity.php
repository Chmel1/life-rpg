<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable = [
        'name',
        'base_xp',
    ];

    public function logs(){
        return $this->hasMany(ActivityLog::class);
    }

    public function skills(){
        return $this->belongsToMany(Skill::class)
            ->withPivot('xp')
            ->withTimestamps();
    }
}
