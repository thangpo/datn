<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Thanhtoanvip;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ThanhtoanController extends Controller
{
    public function thanhtoanzalo(Request $request)
    {
        $thanhtoanvip = new Thanhtoanvip();
        $thanhtoanvip->id_user = $request->id_user;
        $thanhtoanvip->id_vip = $request->id_vip;
        $thanhtoanvip->so_tien = $request->so_tien;
        $thanhtoanvip->ngayhethan = $request->ngayhethan;
        $thanhtoanvip->pttt = $request->pttt;

        $thanhtoanvip->save();

        // Lấy thời gian hiện tại
        $ngayHienTai = Carbon::now();

        // Thời gian hết hạn (ví dụ: 2024-06-30)
        $ngayHetHan = Carbon::create($request->ngayhethan);

        // Đếm số ngày còn lại
        $soNgayConLai = $ngayHienTai->diffInDays($ngayHetHan);

        // Xóa khi thời gian hết
        if ($soNgayConLai <= 0) {
            $thanhtoanvip = Thanhtoanvip::where('id_user', $request->id_user)->delete();
        }
        return view('vip.hoadon', compact('soNgayConLai', 'ngayHetHan', 'ngayHienTai'))->with('thongbao', 'thanh toán thành công');
    }


    public function thanhtoannangcap(Request $request, $id)
    {
        $thanhtoanvip = Thanhtoanvip::find($id);
        $thanhtoanvip->id_user = $request->id_user;
        $thanhtoanvip->id_vip = $request->id_vip;
        $thanhtoanvip->so_tien = $request->so_tien;
        $thanhtoanvip->ngayhethan = $request->ngayhethan;
        $thanhtoanvip->pttt = $request->pttt;

        $thanhtoanvip->save();

        // Lấy thời gian hiện tại
        $ngayHienTai = Carbon::now();

        // Thời gian hết hạn (ví dụ: 2024-06-30)
        $ngayHetHan = Carbon::create($request->ngayhethan);

        // Đếm số ngày còn lại
        $soNgayConLai = $ngayHienTai->diffInDays($ngayHetHan);

        // Xóa khi thời gian hết
        if ($soNgayConLai <= 0) {
            $thanhtoanvip = Thanhtoanvip::where('id_user', $request->id_user)->delete();
        }
        return view('vip.hoadon', compact('soNgayConLai', 'ngayHetHan', 'ngayHienTai'))->with('thongbao', 'thanh toán thành công');
    }
}
