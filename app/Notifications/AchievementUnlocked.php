<?php

namespace App\Notifications;

use App\Models\Achievement;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AchievementUnlocked extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct(public Achievement $achievement)
    {
        
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
    

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toDatabase(object $notifiable): array
    {
        return [
            'type' => 'achievement_unlocked',
            'title' => 'Новое достижение!',
            'message' => $this->achievement->name,
            'xp_reward' => $this->achievement->xp_reward,
        ];
    }
}
