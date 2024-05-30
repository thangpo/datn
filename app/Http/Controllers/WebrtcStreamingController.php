<?php

namespace App\Http\Controllers;
use App\Events\NewMessage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebrtcStreamingController extends Controller
{
   public function index(){
    $newMessage = new NewMessage('Hello, world!');
    broadcast($newMessage)->toOthers();
   }
}
