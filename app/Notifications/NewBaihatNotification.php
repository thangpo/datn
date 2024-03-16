<?php

namespace App\Notifications;

use App\Models\Baihat;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewBaihatNotification extends Notification
{
    use Queueable;
    public $baihat;

    /**
     * Create a new notification instance.
     */
    public function __construct(Baihat $baihat)
    {
        $this->baihat = $baihat;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->line('co bai hat moi duoc dang')
                    ->action('xem bai hat', url('/videoct/'.$this->baihat->id))
                    ->line('cam on ban da su dung ung dung cua toi');
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
