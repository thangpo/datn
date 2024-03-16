<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Like;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function like($baidang){
        $like = Like::where('users_id', auth()->user()->id)->where('baidang_id', $baidang)->first();
        if($like){
            return redirect()->back()->with('error', 'bài nhạc này đã được lưu vào yêu thích');
        }else{
          $like = new Like();
          $like->users_id = auth()->user()->id;
          $like->baidang_id = $baidang;
          $like->save();

          return back();
    }
}
}
