<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Anhsp;
use App\Models\Bangthanhtoan;
use App\Models\BinhluanSp;
use App\Models\Countdown;
use App\Models\Danhmuc;
use App\Models\Nhomnhac;
use App\Models\Profile;
use App\Models\Sanpham;
use App\Models\ThoiGian;
use App\Models\User;
use App\Models\ViewSanpham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;

class SanphamController extends Controller
{
    public function danhsachsp($id)
    {
        $danhmuc = Danhmuc::find($id);
        $sanpham = DB::table('san_pham_an_theo')->get();
        $anhsp = DB::table('anh_theo_sp')
            ->join('san_pham_an_theo', 'san_pham_an_theo.id', '=', 'anh_theo_sp.sanpham_id')
            ->select('anh_theo_sp.*', 'danhmuc_id', 'loai_hang', 'xoa_mem', 'ten_sanpham', 'gia_sanpham', 'hinh_anh', 'mo_ta')->get();

        $sanphamchuaanh = Sanpham::whereDoesntHave('anh_theo_sp')->get();
        return view('sanpham.index', compact('danhmuc', 'sanpham', 'anhsp', 'sanpham', 'sanphamchuaanh'));
    }

    public function thungracsp($id)
    {
        $danhmuc = Danhmuc::find($id);
        $sanpham = DB::table('san_pham_an_theo')->get();
        return view('sanpham.thungrac', compact('danhmuc', 'sanpham'));
    }

    public function themsp($id)
    {
        $danhmuc = Danhmuc::find($id);
        return view('sanpham.create', compact('danhmuc'));
    }

    public function themmoisp(Request $request)
    {
        $sanpham = new Sanpham();
        $sanpham->danhmuc_id = $request->danhmuc_id;
        $sanpham->xoa_mem = $request->xoa_mem;
        $sanpham->loai_hang = $request->loai_hang;
        $sanpham->so_luong = $request->so_luong;
        $sanpham->ten_sanpham = $request->ten_sanpham;
        $sanpham->gia_sanpham = $request->gia_sanpham;

        if ($request->hasFile('hinh_anh')) {
            $image = $request->file('hinh_anh');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
            $sanpham->hinh_anh = $imageName;
        }
        $sanpham->mo_ta = $request->mo_ta;
        $sanpham->save();

        return redirect()->back();
    }

    public function suasp($id)
    {
        $sanpham = Sanpham::find($id);
        $danhmuc = DB::table('san_pham_an_theo')->get();
        return view('sanpham.edit', compact('sanpham', 'danhmuc'));
    }

    public function sua(Request $request, $id)
    {
        $sanpham = Sanpham::find($id);
        $sanpham->danhmuc_id = $request->danhmuc_id;
        $sanpham->xoa_mem = $request->xoa_mem;
        $sanpham->loai_hang = $request->loai_hang;
        $sanpham->so_luong = $request->so_luong;
        $sanpham->ten_sanpham = $request->ten_sanpham;
        $sanpham->gia_sanpham = $request->gia_sanpham;

        if ($request->hasFile('hinh_anh')) {
            $image = $request->file('hinh_anh');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
            $sanpham->hinh_anh = $imageName;
        }
        $sanpham->mo_ta = $request->mo_ta;
        $sanpham->save();

        return redirect()->back();
    }

    public function xoamemsp(Request $request, $id)
    {
        $sanpham = Sanpham::find($id);
        if ($request->xoa_mem == 1) {
            $sanpham->xoa_mem = $request->xoa_mem;
            $sanpham->save();
            return redirect()->back();
        }
        if ($request->xoa_mem == 0) {
            $sanpham->xoa_mem = $request->xoa_mem;
            $sanpham->save();
            return redirect()->back();
        }
    }

    public function xoavv($id)
    {
        $sanpham = Sanpham::find($id);
        $sanpham->delete();
        return redirect()->back()->with('xóa thành công');
    }


    public function danhmucsanpham($id)
    {
        $user = User::where('id', $id)->first();
        $nhomnhac = DB::table('nhomnhac')->take(3)->get();
        $danhmuc = DB::table('danhmuc')->get();
        $sanpham = DB::table('san_pham_an_theo')->get();
        return view('sanpham.view', compact('user', 'nhomnhac', 'danhmuc', 'sanpham'));
    }

    public function sanphamchitiet($id1, $id2)
    {
        $sanpham = Sanpham::where('id', $id1)->first();
        $user = User::where('id', $id2)->first();
        $danhmuc = Danhmuc::where('id', $sanpham->danhmuc_id)->first();
        $sanphams = Sanpham::where('danhmuc_id', $danhmuc->id)->take(7)->get();
        $anhsp = Anhsp::where('sanpham_id', $sanpham->id)->first();
        $binhluansp = BinhluanSp::where('sanpham_id', $sanpham->id)->get();
        $users = DB::table('users')->get();
        $profile = DB::table('profile')->get();
        return view('sanpham.viewchitiet', compact('user', 'danhmuc', 'sanpham', 'anhsp', 'sanphams', 'binhluansp', 'users', 'profile'));
    }

    public function listanh($id)
    {
        $sanpham = Sanpham::where('id', $id)->first();
        $danhmuc = Danhmuc::where('id', $sanpham->danhmuc_id)->first();
        $anhsp = Anhsp::where('sanpham_id', $sanpham->id)->get();
        return view('sanpham.listanh', compact('sanpham', 'anhsp', 'danhmuc'));
    }

    public function viewanhphu($id)
    {
        $sanpham = Sanpham::where('id', $id)->first();
        return view('sanpham.viewap', compact('sanpham'));
    }

    public function themanhpsp(Request $request)
    {
        $anhsp = new Anhsp();
        $this->validate($request, [
            'anh_phu' => 'array|required|max:3',
            'anh_phu.*' => 'required|mimetypes:image/jpg,image/jpeg,image/png',
        ]);

        $anhsp->sanpham_id = $request->sanpham_id;

        $anhphus = [];
        if ($request->hasfile('anh_phu')) {
            foreach ($request->file('anh_phu') as $file) {
                $name = time() . rand(1, 100) . '.' . $file->extension();
                $file->move(public_path('uploads'), $name);
                $anhphus[] = $name;
            }
            $anhsp->anh_phu = json_encode($anhphus);
        }

        $anhsp->save();

        return redirect()->back();
    }

    public function suaanhsp($id)
    {
        $anhsp = Anhsp::where('id', $id)->first();
        $sanpham = Sanpham::where('id', $anhsp->sanpham_id)->first();
        return view('sanpham.suaanhsp', compact('anhsp', 'sanpham'));
    }

    public function sualaiasp(Request $request, $id)
    {
        $anhsp = Anhsp::find($id);
        $this->validate($request, [
            'anh_phu' => 'array|required|max:3',
            'anh_phu.*' => 'required|mimetypes:image/jpg,image/jpeg,image/png',
        ]);

        $anhsp->sanpham_id = $request->sanpham_id;

        $anhphus = [];
        if ($request->hasfile('anh_phu')) {
            foreach ($request->file('anh_phu') as $file) {
                $name = time() . rand(1, 100) . '.' . $file->extension();
                $file->move(public_path('uploads'), $name);
                $anhphus[] = $name;
            }
            $anhsp->anh_phu = json_encode($anhphus);
        }

        $anhsp->save();

        return redirect()->back();
    }


    public function binhluansp(Request $request)
    {
        $binhluansp = new BinhluanSp();
        $binhluansp->user_id = $request->user_id;
        $binhluansp->sanpham_id = $request->sanpham_id;

        if ($request->hasFile('hinh_anh')) {
            $image = $request->file('hinh_anh');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
            $binhluansp->hinh_anh = $imageName;
        }

        $binhluansp->noi_dung = $request->noi_dung;
        $binhluansp->so_sao = $request->so_sao;

        $binhluansp->save();

        return redirect()->back();
    }

    public function thongtindonhang(Request $request, $id)
    {
        $user = User::where('id', $id)->first();
        $so_luong = $request->so_luong;
        $sanpham_id = $request->sanpham_id;
        $sanpham = Sanpham::where('id', $sanpham_id)->first();
        $danhmuc = Danhmuc::where('id', $sanpham->danhmuc_id)->first();
        $profile = Profile::where('users_id', $user->id)->first();
        $tong_tien = $so_luong * ($sanpham->gia_sanpham);
        return view('sanpham.billsanpham', compact('user', 'sanpham', 'so_luong', 'danhmuc', 'profile', 'tong_tien'));
    }

    public function thanhtoansp(Request $request)
    {
        $thanhtoan = new Bangthanhtoan();
        $thanhtoan->users_id = $request->users_id;
        $thanhtoan->sanpham_id = $request->sanpham_id;
        $thanhtoan->soluongve = $request->soluongve;
        $thanhtoan->tongtien = $request->tongtien;
        $thanhtoan->pttt = $request->pttt;

        $thanhtoan->save();

        return view('sanpham.hoadon');
    }

    public function getOnlineUsers()
    {
        $onlineUsers = [];
        $keys = Redis::keys('user-online-*');

        foreach ($keys as $key) {
            $userId = str_replace('user-online-', '', $key);
            $onlineUsers[] = User::find($userId);
        }

        return $onlineUsers;
    }

    public function daugiasp($id1, $id2)
    {
        $sanpham = Sanpham::where('id', $id1)->first();
        $user = User::where('id', $id2)->first();
        $danhmuc = Danhmuc::where('id', $sanpham->danhmuc_id)->first();
        $sanphams = Sanpham::where('danhmuc_id', $danhmuc->id)->take(7)->get();
        $anhsp = Anhsp::where('sanpham_id', $sanpham->id)->first();
        $binhluansp = BinhluanSp::where('sanpham_id', $sanpham->id)->get();
        $users = DB::table('users')->get();
        $profile = DB::table('profile')->get();
        $taisan = ViewSanpham::where('user_id', $user->id)->first();
        $thanhtoan = Bangthanhtoan::where('sanpham_id', $sanpham->id)->orderBy('tongtien', 'desc')->get();
        $thanhtoans = Bangthanhtoan::where('sanpham_id', $sanpham->id)->orderBy('tongtien', 'desc')->first();
        $nguoitc = ThoiGian::where('sanpham_id', $sanpham->id)
            ->orderBy('created_at', 'desc')  // Sắp xếp theo created_at giảm dần
            ->first(); 

        //đồng hồ đếm ngược
        $countdown = Countdown::first();

        if (!$countdown) {
            // Nếu chưa có thời gian kết thúc, tạo mới
            $endDate = now()->addDays(1);
            Countdown::create(['end_date' => $endDate]);
        } else {
            // Lấy thời gian kết thúc từ cơ sở dữ liệu
            $endDate = Carbon::parse($countdown->end_date);

            // Nếu thời gian đã hết, thiết lập đếm ngược đến 7 giờ sáng hôm sau
            if (now()->greaterThanOrEqualTo($endDate)) {
                $endDate = now()->addDay()->setTime(7, 0, 0);
                $countdown->update(['end_date' => $endDate]);
            }
        }

        $onlineUsers = $this->getOnlineUsers();
        $onlineUsersCount = count($onlineUsers);
        return view('sanpham.daugia', compact('user', 'danhmuc', 'sanpham', 'anhsp', 'sanphams', 'binhluansp', 'users', 
        'profile', 'onlineUsersCount', 'taisan', 'thanhtoan', 'thanhtoans', 'endDate', 'nguoitc'));
    }

    public function daugiatc(Request $request)
    {

        $thanhtoan = Bangthanhtoan::where('sanpham_id', $request->sanpham_id)->get();
        $tongtien = ViewSanpham::where('user_id', $request->user_id)->first();
        $sotienconlai = $tongtien->so_tien - $request->gia_sanpham;

        $daugia = new ThoiGian();
        $daugia->sanpham_id = $request->sanpham_id;
        $daugia->user_id = $request->user_id;
        $daugia->gia_sanpham = $request->gia_sanpham;
        $daugia->save();

        // Thu thập tất cả các ID cần xóa
        $thanhtoanIds = $thanhtoan->pluck('id')->toArray();

        // Xóa các bản ghi trong bảng Bangthanhtoan
        Bangthanhtoan::destroy($thanhtoanIds);

        $taisan = ViewSanpham::find($tongtien->id);
        $taisan->user_id = $request->user_id;
        $taisan->so_tien = $sotienconlai;
        $taisan->save();

        return redirect()->back();
    }

    public function nguontien($id)
    {
        $user = User::where('id', $id)->first();
        return view('sanpham.taikhoan', compact('user'));
    }

    public function naptien(Request $request)
    {
        $thanhtoan = new ViewSanpham();
        $thanhtoan->user_id = $request->user_id;
        $thanhtoan->so_tien = $request->so_tien;
        $thanhtoan->save();

        return redirect()->back();
    }

    public function daugia(Request $request, $id)
    {
        $taisan = ViewSanpham::where('id', $id)->first();

        if ($request->tongtien < $request->giaht + 1) {
            $thongbao = "Số tiền nhỏ hơn giá hiện tại";
            return redirect()->back();
        } elseif ($request->tongtien > $taisan->so_tien) {
            $thongbao = "Số tiền không đủ";
            return redirect()->back();
        } else {
            $daugia = new Bangthanhtoan();
            $daugia->users_id = $request->users_id;
            $daugia->sanpham_id = $request->sanpham_id;
            $daugia->tongtien = $request->tongtien;
            $daugia->save();

            return redirect()->back();
        }
    }

    public function capnhatdaugia(Request $request, $id)
    {
        $daugia = Bangthanhtoan::where('id', $id)->first();

        $taisan = ViewSanpham::where('user_id', $request->users_id)->first();

        if ($request->tongtien < $request->giaht + 1) {
            return redirect()->back()->with('thongbao', 'Số tiền nhỏ hơn giá hiện tại');
        } elseif ($request->tongtien > $taisan->so_tien) {
            $thongbao = "Số tiền không đủ";
            return redirect()->back()->with('thongbao', 'Số tiền không đủ');
        } else {
            $daugia = Bangthanhtoan::find($id);
            $daugia->users_id = $request->users_id;
            $daugia->sanpham_id = $request->sanpham_id;
            $daugia->tongtien = $request->tongtien;
            $daugia->save();

            return redirect()->back();
        }
    }

    public function qualythoigian()
    {
        $countdown = Countdown::first();

        if (!$countdown) {
            // Nếu chưa có thời gian kết thúc, tạo mới
            $endDate = now()->addDays(1);
            Countdown::create(['end_date' => $endDate]);
        } else {
            // Lấy thời gian kết thúc từ cơ sở dữ liệu
            $endDate = Carbon::parse($countdown->end_date);

            // Nếu thời gian đã hết, thiết lập đếm ngược đến 7 giờ sáng hôm sau
            if (now()->greaterThanOrEqualTo($endDate)) {
                $endDate = now()->addDay()->setTime(7, 0, 0);
                $countdown->update(['end_date' => $endDate]);
            }
        }

        return view('sanpham.test', compact('endDate'));
    }
}
