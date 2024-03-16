<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Baidang;
use App\Models\Binhluan;
use App\Models\Idol;
use App\Models\Like;
use App\Models\Likebinhluan;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BaidangController extends Controller
{
    public function baidang($id){
        $users = User::where('id', $id)->first();
        $baidang = Baidang::where('users_id', $users->id)->get();
        $users = User::where('id', $id)->get();
        foreach ($users as $us){
            $idol = Idol::where('id', $us->idol_id)->get();
            
            foreach ($baidang as $bd){
                $binhluan = Binhluan::where('baidang_id', $bd->id)
                ->join('baidang','baidang.id','=','binhluan.baidang_id')
                ->select('binhluan.*','baidang_id')->get();
        
            $like = Like::where('baidang_id', $bd->id)
                ->join('baidang','baidang.id','=','like.baidang_id')
                ->select('like.*','baidang_id')->get();
                $baidang = Baidang::withCount('like', 'binhluan')->get();
            }
        }
        return view('baidang.baidang', compact('users', 'baidang', 'idol'));
    }


    public function baidangall(){
        $baidang = DB::table('baidang')
        ->join('users','users.id','=','baidang.users_id')
        ->join('idol','idol.id','=','users.idol_id')
        ->select('baidang.*','anh','tenid','name','idol_id')->get();
        foreach ($baidang as $bd){
        $binhluan = Binhluan::where('baidang_id', $bd->id)
            ->join('baidang','baidang.id','=','binhluan.baidang_id')
            ->select('binhluan.*','baidang_id')->get();

        $like = Like::where('baidang_id', $bd->id)
            ->join('baidang','baidang.id','=','like.baidang_id')
            ->select('like.*','baidang_id')->get();
            
        $baidangs = Baidang::withCount('like', 'binhluan')->get();  
    }
        return view('baidang.baidangall', compact('baidang', 'baidangs'));
    }

    public function baidangnd($id){
        $users = User::where('id', $id)->first();
        $baidang = DB::table('baidang')
        ->join('users','users.id','=','baidang.users_id')
        ->join('idol','idol.id','=','users.idol_id')
        ->select('baidang.*','anh','tenid','name','idol_id')->get();
        
        foreach ($baidang as $bd){
        $binhluan = Binhluan::where('baidang_id', $bd->id)
            ->join('baidang','baidang.id','=','binhluan.baidang_id')
            ->select('binhluan.*','baidang_id')->get();

        $like = Like::where('baidang_id', $bd->id)
            ->join('baidang','baidang.id','=','like.baidang_id')
            ->select('like.*','baidang_id')->get();
            
        $baidangs = Baidang::withCount('like', 'binhluan')->get();  
    }
        return view('baidang.baidangall', compact('baidang', 'baidangs', 'users'));
    }

    
    public function binhluanv($id){
        $baidang = Baidang::where('id', $id)->first();
        $users = User::where('id', $baidang->users_id)->get();
        $baidang = Baidang::where('id', $id)->get();

        $profile = DB::table('profile')->get();
        foreach ($users as $us){
            $idol = Idol::where('id', $us->idol_id)->get();  
        }
        foreach ($baidang as $bd){
            $binhluan = Binhluan::where('baidang_id', $bd->id)->get();
        }
        return view('baidang.binhluank', compact('baidang', 'users', 'idol', 'binhluan', 'profile'));
    }
    

    public function thembd($id){
        $users = User::where('id', $id)->first();
        $baidang = Baidang::where('users_id', $users->id)->get();
        $users = User::where('id', $id)->get();
        foreach ($users as $us){
            $idol = Idol::where('id', $us->idol_id)->get();
        }
        return view('baidang.tbaidang', compact('users', 'baidang', 'idol'));
    }

    public function dangbai(Request $request, $users_id){
        $baidang = new Baidang();

        $baidang->users_id = $request->users_id;
        $baidang->noidung = $request->noidung;

        $baidangs = [];
        if($request->hasfile('anhbd'))
		{
			foreach($request->file('anhbd') as $file)
			{
			    $name = time().rand(1,100).'.'.$file->extension();
			    $file->move(public_path('uploads'), $name);  
			    $baidangs[] = $name;  
			}
            $baidang->anhbd = json_encode($baidangs);
		}

        $baidang->save();
        return redirect()->route('baidang', ['id' => $baidang->users_id])->with('thongbao', 'them thanh cong');
    }


    public function timbinhluan(Request $request, $id){
        $likebinhluan = Likebinhluan::where('users_id', $request->users_id)->where('idol_id', $id)->first();
        if($likebinhluan){
            return redirect()->back()->with('error', 'bài nhạc này đã được lưu vào yêu thích');
        }else{
          $likebinhluan = new Likebinhluan();
          $likebinhluan->users_id = $request->users_id;
          $likebinhluan->baidang_id = $id;
          $likebinhluan->idol_id = $request->idol_id;
          $likebl = $likebinhluan->viewtim + 1;
          $likebinhluan->viewtim = $likebl;
          $likebinhluan->save();

          return back();
    }
}

}
