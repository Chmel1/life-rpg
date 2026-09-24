<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CharacterStat extends Model
{
    protected $fillable = [
        'character_id',
        'stat_id',
        'value',
    ];

    protected $casts = [
        'value'=>'integer',
    ];

    public function character(){
        return $this->belongsTo(Character::class);
    }
    public function stat(){
        return $this->belongsTo(Stat::class);
    }
}
