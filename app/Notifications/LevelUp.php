<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class LevelUp extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct(public int $newLevel )
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     */
   public function toDatabase(object $notifiable): array
    {
        return [
            'type' => 'level_up',
            'title' => 'Новый уровень!',
            'message' => "Ты достиг уровня {$this->newLevel}!",
            'level' => $this->newLevel,
        ];
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
