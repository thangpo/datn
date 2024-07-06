<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Notifications\MessageReceived;
use App\Notifications\PushNotification;
use Illuminate\Support\Facades\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PushController extends Controller
{
    public function subscriptions(Request $request)
    {
        $this->validate($request, [
            'endpoint' => 'required',
            'keys.auth' => 'required',
            'keys.p256dh' => 'required',
        ]);
        $endpoint = $request->endpoint;
        $token = $request->keys['auth'];
        $key = $request->keys['p256dh'];
        $user = Auth::user();
        if (isset($user)) {
            $user->updatePushSubscription($endpoint, $key, $token);
        }

        return response()->json('subscribe success', 200);
    }

    public function nhantin()
    {
        return view('nhantin.tn');
    }

    public function push(Request $request)
    {
        $recipient = User::find(4); // Thay thế 4 bằng ID của người nhận
        $senderId = User::find(5); // Thay thế 5 bằng ID của người gửi
        $message = "het cu roi"; // Tin nhắn
        $recipient->notify(new MessageReceived($message, $senderId));
    }
}
