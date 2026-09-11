<?php

namespace App\Listeners;

use App\Events\AchievementUnlocked;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Notifications\AchievementUnlocked as AchievementUnlockedNotification;
class SendAchievementNotification
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
    public function handle(AchievementUnlocked $event): void
    {
         $event->character->user->notify(
            new AchievementUnlockedNotification(
                $event->achievement
            )
        );
    }
}
