<?php

namespace App\Services;

use App\Models\Character;
use App\Models\Stat;
use Illuminate\Support\Facades\DB;
use RuntimeException;

class CharacterStatService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function increase(Character $character, Stat $stat){
        DB::transaction(function () use($character, $stat){
            if($character->stat_points <=0){
                throw new RuntimeException(
                    'Недостаточно очков характеристик.'
                );
            }

            $characterStat = $character->characterStats()->where('stat_id', $stat->id)->first();

            if (!$characterStat) {
                throw new RuntimeException(
                    'Характеристика персонажа не найдена.'
                );
            }
            if ($characterStat->value >= 40) {
                throw new RuntimeException(
                    'Характеристика уже достигла максимального значения.'
                );
            }


            $characterStat->increment('value');
            $character->decrement('stat_points');
        });
    }
}
