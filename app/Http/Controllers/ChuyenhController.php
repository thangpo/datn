<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Baihat;
use App\Models\Idol;
use App\Models\Lichtrinh;
use App\Models\LikeNhac;
use App\Models\Nhac;
use App\Models\Nhomnhac;
use App\Models\Profile;
use App\Models\Thanhtoanvip;
use App\Models\User;
use App\Models\UserVip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChuyenhController extends Controller
{
    public function hienthi($id){
        $user = DB::table('users')
        ->join('idol','idol.id','=','users.idol_id')
        ->select('users.*','tenid')->get();
        $nhomnhac = Nhomnhac::where('id', $id)->first();
        $idol = Idol::where('nhomnhac_id', $nhomnhac->id)->get();
        $nhomnhac = Nhomnhac::where('id', $id)->get();
        return view('idol.qwe', compact('idol', 'nhomnhac', 'user'));
    }
    
    public function index(){
        $baihat = DB::table('baihat')
        ->join('nhomnhac','nhomnhac.id','=','baihat.nhomnhac_id')
        ->select('baihat.*','tennn')->latest()->take(3)->get();
        $banner = DB::table('tests_banner')->get();
        $cauhinh = DB::table('cauhinh')->get();
        $idol = DB::table('idol')->join('nhomnhac','nhomnhac.id','=','idol.nhomnhac_id')
        ->select('idol.*','tennn')->get();
        $nhomnhac = DB::table('nhomnhac')->get();
        return view('trangnguoid.trangchu', compact('baihat', 'banner', 'cauhinh','idol','nhomnhac'));
    }


    public function baihatview(){
        $nhac = DB::table('nhac')->get();
        foreach ($nhac as $n){
            $nhomnhac = Nhomnhac::where('id', $n->nhomnhac_id)->get();
            $likenhac = LikeNhac::where('nhac_id', $n->id)
            ->join('nhac','nhac.id','=','likenhac.nhac_id')
            ->select('likenhac.*','nhac_id')->get();
            $nhac = Nhac::withCount('likenhac')->get();
        }
        $nhomnhacv = DB::table('nhomnhac')->get();
        return view('trangnguoid.nhac', compact('nhac', 'nhomnhac', 'nhomnhacv'));
    }


    public function views($id){
        $users = User::where('id', $id)->get();
        $usernd = User::find($id);
        $baihat = DB::table('baihat')
        ->join('nhomnhac','nhomnhac.id','=','baihat.nhomnhac_id')
        ->select('baihat.*','tennn')->latest()->take(3)->get();
        $banner = DB::table('tests_banner')->get();
        $cauhinh = DB::table('cauhinh')->get();
        $idol = DB::table('idol')->join('nhomnhac','nhomnhac.id','=','idol.nhomnhac_id')
        ->select('idol.*','tennn')->get();
        $nhomnhac = DB::table('nhomnhac')->get();
        $idols = Idol::where('id', $usernd->idol_id)->first();
        $thanhtoan = Thanhtoanvip::where('id_user', $usernd->id)->first();
        $profile = Profile::where('users_id', $usernd->id)->first();
        if(empty($thanhtoan) != 'Null'){
            $uservip = UserVip::where('id', $thanhtoan->id_vip)->first();
        }else{
            $uservip = '';
        }
        return view('trangnguoid.trangchu', compact('baihat', 'banner', 'thanhtoan', 'cauhinh','idol','nhomnhac','users', 'usernd', 'profile', 'idols', 'uservip'));
    }



    
    public function hienthict($id1, $id2){
        $nhomnhac = Nhomnhac::where('id', $id1)->first();
        $idol = Idol::where('nhomnhac_id', $nhomnhac->id)->latest()->take(7)->get();
        $baihat = Baihat::where('nhomnhac_id', $nhomnhac->id)->get();
        $lichtrinh = Lichtrinh::where('nhomnhac_id', $nhomnhac->id)->get();
        $idols = Idol::where('nhomnhac_id', $nhomnhac->id)->get();
        $nhomnhac = Nhomnhac::where('id', $id1)->get();
        $users = User::where('id', $id2)->get();
        $usernd = User::find($id2);
        $profile = Profile::where('users_id', $usernd->id)->first();
        $idolsl = Idol::where('id', $usernd->idol_id)->first();
        return view('trangnguoid.nhomnhacct', compact('idol', 'nhomnhac', 'baihat', 'lichtrinh', 'idols', 'users', 'profile', 'idolsl'));
    }
}