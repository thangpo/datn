<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\BroadcastMessage;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class MessageReceived extends Notification
{
    private $message;
    private $senderId;

    public function __construct($message, $senderId)
    {
        $this->message = $message;
        $this->senderId = $senderId;
    }

    public function via($notifiable)
    {
        return ['broadcast'];
    }

    public function toBroadcast($notifiable)
    {
        return new BroadcastMessage([
            'message' => $this->message,
            'senderId' => $this->senderId,
        ]);
    }

    public function toArray($notifiable)
    {
        return [
            'message' => $this->message,
            'senderId' => $this->senderId,
        ];
    }
}