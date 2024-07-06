<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\Thanhtoanvip;
use App\Models\UserVip;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserVipController extends Controller
{
    public function viphienthi(){
        $uservip = DB::table('user_vip')->get();
        return view('vip.index', compact('uservip'));
    }
    
    public function themvip(){
        return view('vip.add');
    }

    public function themvipus(Request $request){
        $uservip = new UserVip();
        $uservip->ten_vip = $request->ten_vip;
        $uservip->gia = $request->gia;
        $uservip->ngay_hh = $request->ngay_hh;
        $uservip->dac_quyen = $request->dac_quyen;

        $uservip->save();
        return redirect()->route('viphienthi')->with('thongbao', 'them thanh cong');
    }

    public function capnhatvip($id){
        $uservip = UserVip::where('id', $id)->first();
        return view('vip.edit', compact('uservip'));
    }

    public function suavip(Request $request, $id){
        $uservip = UserVip::find($id);
        $uservip->ten_vip = $request->ten_vip;
        $uservip->gia = $request->gia;
        $uservip->ngay_hh = $request->ngay_hh;
        $uservip->dac_quyen = $request->dac_quyen;

        $uservip->save();
        return redirect()->route('viphienthi')->with('thongbao', 'sửa thanh cong');
    }

    public function xoavip($id){
        $uservip = UserVip::where('id', $id)->delete();
        return redirect()->route('viphienthi')->with('thongbao', 'Xóa thành công');
    }

    public function vipuser($id){
        $users = User::where('id', $id)->first();
        $uservip = DB::table('user_vip')->get();
        $uservipmax = DB::table('user_vip')->max('id');
        $thanhtoan = Thanhtoanvip::where('id_user', $users->id)->first();
        return view('vip.view', compact('users','uservip','thanhtoan', 'uservipmax'));
    }

    public function thanhtoanvp($id1, $id2){
        //$currentUrl = $_SERVER['REQUEST_URI'];
        //$pathParts = explode('/', $currentUrl);
        //$routerPrefix = $pathParts[1];
        
        $ngayHienTai = now();
        $users = User::where('id', $id2)->first();
        $uservip = UserVip::where('id', $id1)->first();
        if(empty($uservip)){
            $ngaythem = $uservip->ngay_hh;
            $gia = $uservip->gia;
        }else{
            $ngaythem = $uservip->ngay_hh + 30;
            $gia = $uservip->gia / 2;
        }
        $thanhtoan = Thanhtoanvip::where('id_user', $users->id)->first();
        $ngayhh = $ngayHienTai->addDays($ngaythem);
        $profile = Profile::where('users_id', $id2)->first();
        return view('vip.ttzalo', compact('users','uservip','profile','ngayhh', 'gia', 'thanhtoan'));
    }
    
}
