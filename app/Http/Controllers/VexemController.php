<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Bangthanhtoan;
use App\Models\Donhang;
use App\Models\Lichtrinh;
use App\Models\Profile;
use App\Models\User;
use App\Models\Vexem;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class VexemController extends Controller
{
    public function themmoivx($id){
        $lichtrinh = Lichtrinh::find($id);
        $vexem = Vexem::where('lichtrinh_id', $lichtrinh->id)->get();
        $lichtrinhs = Lichtrinh::where('id', $id)->get();
        return view('vexem.vexem', compact('lichtrinh', 'vexem', 'lichtrinhs'));
    }

// thongtindv thongtindv
    public function themvexem($id){
        $lichtrinh = Lichtrinh::find($id);
        return view('vexem.themvexe', compact('lichtrinh'));
    }

    public function vexemtt(Request $request){
        $vexem = new Vexem();
        $vexem->lichtrinh_id = $request->lichtrinh_id;
        $vexem->tenve = $request->tenve;
        $vexem->giave = $request->giave;
        $vexem->soluong = $request->soluong;
        $vexem->loaighe = $request->loaighe;
        $vexem->save();
        return redirect()->back()->with('thongbao', 'them thanh cong');
    }

    public function suavexemtt($id){
        $vexem = Vexem::find($id);
        $lichtrinh = Lichtrinh::where('id', $vexem->lichtrinh_id)->first();
        return view('vexem.suavexem', compact('lichtrinh', 'vexem'));
    }

    public function suave(Request $request, $id){
        $vexem = Vexem::find($id);
        $vexem->lichtrinh_id = $request->lichtrinh_id;
        $vexem->tenve = $request->tenve;
        $vexem->giave = $request->giave;
        $vexem->soluong = $request->soluong;
        $vexem->loaighe = $request->loaighe;
        $vexem->save();
        return redirect()->back()->with('thongbao', 'them thanh cong');
    }


    public function viewvexem($id){
        $users = User::find($id);
        $vexem = DB::table('vexem')->get();
        $lichtrinh = DB::table('lichtrinh')->get();
        $nhomnhac = DB::table('nhomnhac')->get();
        return view('vexem.viewvexem', compact('lichtrinh', 'vexem', 'users', 'nhomnhac'));
    }

    public function thongtindv($id1, $id2){
        $vexem = Vexem::find($id1);
        $users = User::find($id2);
        $profile = Profile::where('users_id', $users->id)->first();
        $lichtrinh = Lichtrinh::where('id', $vexem->lichtrinh_id)->get();
        $nhomnhac = DB::table('nhomnhac')->get();
        return view('vexem.thongtinve', compact('lichtrinh', 'vexem', 'users', 'nhomnhac', 'profile'));
    }

    public function congdien(){
        $nhomnhac = DB::table('nhomnhac')->get();
        $lichtrinh = DB::table('lichtrinh')->get();
        return view('vexem.congdien', compact('lichtrinh', 'nhomnhac'));
    }

    public function congdiens($id){
        $users = User::where('id', $id)->first();
        $nhomnhac = DB::table('nhomnhac')->get();
        $lichtrinh = DB::table('lichtrinh')->get();
        return view('vexem.congdien', compact('lichtrinh', 'nhomnhac', 'users'));
    }
    
    public function thongtinbuild(Request $request){
        $bangthanhtoan = new Bangthanhtoan();
        $bangthanhtoan->users_id = $request->users_id;
        $bangthanhtoan->vexem_id = $request->vexem_id;
        $bangthanhtoan->lichtrinh_id = $request->lichtrinh_id;
        $bangthanhtoan->profile_id = $request->profile_id;
        $bangthanhtoan->soluongve = $request->soluongve;
        $bangthanhtoan->tongtien = $request->tongtien;
        $bangthanhtoan->pttt = $request->pttt;
        $bangthanhtoan->save();


        // khi có build vé xem
        $bangthanhtoantg = DB::table('bangthanhtoan')->orderBy('id','desc')->first();
        $userstg = DB::table('users')->get();
        $vexemtg = DB::table('vexem')->get();
        $lichtrinhtg = DB::table('lichtrinh')->get();
        $profiletg = DB::table('profile')->get();
        return view('vexem.xembuild', compact('bangthanhtoantg', 'userstg', 'vexemtg', 'lichtrinhtg', 'profiletg'));
    }
    //thanh toán bằng tiền mặt
    //thanh toán bằng ck
    public function thanhtoannao(Request $request){
        $donhang = new Donhang();
        $donhang->users_id = $request->users_id;
        $donhang->vexem_id = $request->vexem_id;
        $donhang->nganhang = $request->nganhang;
        $donhang->soluongve = $request->soluongve;
        $donhang->save();

        // trừ số lượng vé
        $vexem = Vexem::where('id', $request->vexem_id)->first();

        $vexem = Vexem::find($request->vexem_id);
        $soluong = $vexem->soluong;
        $vexem->soluong = $soluong - $request->soluongve;
        $vexem->save();

        // Gửi email
        $now = Carbon::now('Asia/Ho_Chi_Minh')->format('d-m-Y H:i:s');

        $vexem = Vexem::where('id', $request->vexem_id)->first();

        $lichtrinh = Lichtrinh::where('id', $vexem->lichtrinh_id)->first();

        $tenve = $vexem->tenve;

        $title_mail = 'Vé công diễn'.' '.$tenve;

        $users = User::where('id', $request->users_id)->get();

        $user = User::where('id', $request->users_id)->first();

        $profile = Profile::where('users_id', $user->id)->first();

        $data = [
            'tenve' => $vexem->tenve,
            'tenlt' => $lichtrinh->tenlt,
            'diadiem' => $lichtrinh->diadiem,
            'anhbn' => $lichtrinh->anhbn,
            'tennd' => $profile->tennd,
        ];

            foreach ($users as $us){
                $data['email'][] = $us->email;
            }
            
        
        Mail::send('vexem.camon', $data, function($message) use ($title_mail, $data){
            $message->to($data['email'])->subject($title_mail);
            $message->from($data['email'],$title_mail);
        });

        $users = User::where('id', $request->users_id)->first();
        $vexem = Vexem::where('id', $request->vexem_id)->first();
        $lichtrinh = Lichtrinh::where('id', $vexem->lichtrinh_id)->first();
        $bangthanhtoan = DB::table('bangthanhtoan')->get();
        $profile = Profile::where('users_id', $users->id)->first();
        return view('vexem.thanhtoansz', compact('users', 'vexem', 'bangthanhtoan', 'lichtrinh', 'profile'));
    }
}
