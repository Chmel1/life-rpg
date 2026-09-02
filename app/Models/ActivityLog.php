<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActivityLog extends Model
{
    protected $fillable = [
        'character_id',
        'activity_id',
        'xp_earned',
    ];
    

    public function character(){
        return $this->belongsTo(Character::class);
    }

    public function activity(){
        return $this->belongsTo(Activity::class);
    }

}
