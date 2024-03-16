<?php

namespace App\Listeners;

use App\Events\NewBaihatCreated;
use App\Models\User;
use App\Notifications\NewBaihatNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
class SendNewBaihatNotification implements ShouldQueue
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
    public function handle(NewBaihatCreated $event): void
    {
        $baihat = $event->baihat;

        // gui thong bao voi nguoi dung
        $users = User::all();
        foreach($users as $us){
            $us->notify(new NewBaihatNotification($baihat));
        }
    }
}
