<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Baidang;
use App\Models\Binhluan;
use App\Models\Binhluanid;
use App\Models\BinhluanNhac;
use App\Models\BinhluanVd;
use App\Models\Idol;
use App\Models\Likebinhluan;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BinhluanController extends Controller
{
    public function vbinhluan($id){
        $users = User::where('id', $id)->first();
        $baidang = Baidang::where('users_id', $users->id)->get();
        $users = User::where('id', $id)->get();
        $profile = DB::table('profile')->get();
        foreach ($users as $us){
            $idol = Idol::where('id', $us->idol_id)->get();
        }
        $binhluan = DB::table('binhluan')->get();
        return view('baidang.binhluan', compact('baidang', 'users', 'idol', 'binhluan', 'profile'));
    }

    public function ndbinhluan($id1, $id2){
        $baidang = Baidang::where('id', $id1)->first();
        $usern = User::where('id', $id2)->first();
        $usernd = User::where('id', $id2)->get();
        $users = User::where('id', $baidang->users_id)->get();
        $baidang = Baidang::where('id', $id1)->get();
        foreach ($users as $us){
            $idol = Idol::where('id', $us->idol_id)->get();
        }
        
        $profile = Profile::where('users_id', $usern->id)->get();
        foreach ($baidang as $bd){
            $binhluan = Binhluan::where('baidang_id', $bd->id)->get();
        }
        $likebinhluan = DB::table('likebinhluan')->get();
        $binhluanid = Binhluanid::where('baidang_id', $bd->id)->get();
        $userndm = User::where('id', $id2)->first();

        
            
        return view('baidang.binhluank', compact('baidang', 'users', 'idol', 'binhluan', 'usernd', 'profile', 'userndm', 'binhluanid', 'likebinhluan'));
    }

    public function binhluantheo($id1, $id2){
        $baidang = Baidang::where('id', $id1)->first();
        $usern = User::where('id', $id2)->first();
        $usernd = User::where('id', $id2)->get();
        $users = User::where('id', $baidang->users_id)->get();
        $baidang = Baidang::where('id', $id1)->get();
        $traloi = Baidang::where('id', $id1)->get();
        foreach ($users as $us){
            $idol = Idol::where('id', $us->idol_id)->get();
        }
        
        $profile = Profile::where('users_id', $usern->id)->get();
        foreach ($baidang as $bd){
            $binhluan = Binhluan::where('baidang_id', $bd->id)->get();
        }
        $binhluanid = Binhluanid::where('baidang_id', $bd->id)->get();
        $likebinhluan = DB::table('likebinhluan')->get();
        $userndm = User::where('id', $id2)->first();
        return view('baidang.binhluank', compact('baidang', 'users', 'idol', 'binhluan', 'usernd', 'profile', 'traloi', 'userndm', 'binhluanid', 'likebinhluan'));
    }

    public function binhluan(Request $request, $baidang){
        $binhluan = new Binhluan();
        $binhluan->baidang_id = $baidang;
        $binhluan->users_id = $request->users_id;
        $binhluan->noidung = $request->noidung;

        $binhluan->save();
        return redirect()->back();
    }

    public function binhluantheoid(Request $request, $id){
        $binhluanid = new Binhluanid();
        $binhluanid->idol_id = $request->idol_id;
        $binhluanid->users_id = $request->users_id;
        $binhluanid->baidang_id = $id;
        $binhluanid->binhluan = $request->binhluan;

        $binhluanid->save();
        
        $baidang = Baidang::where('id', $id)->first();
        $usern = User::where('id', $request->users_id)->first();
        $usernd = User::where('id', $request->users_id)->get();
        $users = User::where('id', $baidang->users_id)->get();
        $baidang = Baidang::where('id', $id)->get();
        foreach ($users as $us){
            $idol = Idol::where('id', $us->idol_id)->get();
        }
        
        $profile = Profile::where('users_id', $usern->id)->get();
        foreach ($baidang as $bd){
            $binhluan = Binhluan::where('baidang_id', $bd->id)->get();
        }
        $binhluanid = Binhluanid::where('baidang_id', $bd->id)->get();
        $userndm = User::where('id', $request->users_id)->first();
        return view('baidang.binhluank', compact('baidang', 'users', 'idol', 'binhluan', 'usernd', 'profile', 'userndm', 'binhluanid'));
    }

    public function binhluanvd(Request $request, $baihat){
        $binhluan = new BinhluanVd();
        $binhluan->baihat_id = $baihat;
        $binhluan->users_id = $request->users_id;
        $binhluan->noidung = $request->noidung;

        $binhluan->save();
        return redirect()->back();
    }

    public function binhluannhac(Request $request, $nhac){
        $binhluan = new BinhluanNhac();
        $binhluan->nhac_id = $nhac;
        $binhluan->users_id = $request->users_id;
        $binhluan->noidung = $request->noidung;

        $binhluan->save();
        return redirect()->back();
    }

    public function destroy(Binhluan $binhluan){
        $binhluan->delete();
        return redirect()->back();
    }
}
