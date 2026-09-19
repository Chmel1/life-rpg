<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Stat extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'type',
    ];

    public function characters(): BelongsToMany
    {
        return $this->belongsToMany(
            Character::class,
            'character_stats'
        )->withPivot('value');
    }

    public function activities(): BelongsToMany
    {
        return $this->belongsToMany(
            Activity::class,
            'activity_stat'
        )->withPivot('is_primary');
    }
}