<?php

namespace App\Services;

class XpService
{
    /**
     * Create a new class instance.
     */
    public function  xpToNextLevel(int $level)
    {
        return (int) round(100 * pow($level, 1.5));
    }
    public function canLevelUp(int $level, int $xp){
        return $xp>= $this->xpToNextLevel($level);
    }
}
