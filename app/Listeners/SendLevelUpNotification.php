<?php

namespace App\Listeners;

use App\Events\LevelUp;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Notifications\LevelUp as LevelUpNotification;

class SendLevelUpNotification
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(LevelUp $event): void
    {
        $event->character->user->notify(
            new LevelUpNotification(
                $event->character->level
            )
        );
    }
}
