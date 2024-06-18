<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Baihat;
use App\Models\Idol;
use App\Models\Lichtrinh;
use App\Models\Nhac;
use App\Models\Nhomnhac;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\table;

class NhomnhacController extends Controller
{
    public function index()
    {
        $nhomnhac = Nhomnhac::withCount('idol')->get();
        return view('nhomnhac.index', compact('nhomnhac'));
    }

    public function create()
    {
        return view('nhomnhac.create');
    }

    public function store(Request $request)
    {
        $nhomnhac = new Nhomnhac();
        $nhomnhac->xoa_mem = $request->xoa_mem;
        $nhomnhac->tennn = $request->tennn;
        if ($request->hasFile('logonn')) {
            $image = $request->file('logonn');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
            $nhomnhac->logonn = $imageName;
        }
        $nhomnhac->ngaytl = $request->ngaytl;

        $nhomnhac->save();
        return redirect()->route('nhomnhac.index')->with('thongbao', 'them thanh cong');
    }

    public function edit(Nhomnhac $nhomnhac)
    {
        return view('nhomnhac.edit', compact('nhomnhac'));
    }

    public function update(Request $request, $id)
    {

        $nhomnhac = Nhomnhac::find($id);
        $nhomnhac->xoa_mem = $request->xoa_mem;
        $nhomnhac->tennn = $request->tennn;
        if ($request->hasFile('logonn')) {
            $image = $request->file('logonn');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
            $nhomnhac->logonn = $imageName;
        }
        $nhomnhac->ngaytl = $request->ngaytl;

        $nhomnhac->save();


        return redirect()->route('nhomnhac.index')->with('thongbao', 'Cập nhật thành công');
    }


    public function xoamemnn(Request $request, $id)
    {

        $nhomnhac = Nhomnhac::find($id);
        if ($request->xoa_mem == 1) {
            $nhomnhac->xoa_mem = $request->xoa_mem;
            $nhomnhac->save();
            return redirect()->route('nhomnhac.index')->with('thongbao', 'Xóa thành công');
        }
        if($request->xoa_mem == 0){
            $nhomnhac->xoa_mem = $request->xoa_mem;
            $nhomnhac->save();
            return redirect()->route('nhomnhacx')->with('thongbao', 'Quay lại thành công');
        }
    }

    public function nhomnhacx()
    {
        $nhomnhac = Nhomnhac::withCount('idol')->get();
        return view('nhomnhac.xoamem', compact('nhomnhac'));
    }

    public function xoavinhvien($id)
    { 
        $idol = Idol::where('nhomnhac_id', $id)->first();
        $baihat = Baihat::where('nhomnhac_id', $id)->first();
        $lichtrinh = Lichtrinh::where('nhomnhac_id', $id)->first();
        $nhac = Nhac::where('nhomnhac_id', $id)->first();

        if(empty($idol) && empty($baihat) && empty($lichtrinh) && empty($nhac)){
            $nhomnhac = Nhomnhac::where('id', $id)->delete();
            return redirect()->route('nhomnhacx')->with('thongbao', 'Xóa thành công');
        }
        if(empty($idol) != 'Null'){
            return redirect()->route('hienthi',['id' => $id])->with('thongbao', 'chưa thể xóa');
        }
        if(empty($baihat) != 'Null'){
            return redirect()->route('hienthibh',['id' => $id])->with('thongbao', 'chưa thể xóa');
        }
        if(empty($lichtrinh) != 'Null'){
            return redirect()->route('hienthilt',['id' => $id])->with('thongbao', 'chưa thể xóa');
        }
        if(empty($nhac) != 'Null'){
            return redirect()->route('hienthin',['id' => $id])->with('thongbao', 'chưa thể xóa');
        }

        //$nhomnhac->delete();
        //return redirect()->route('nhomnhac.index')->with('thongbao', 'xoa thanh cong');
    }


    // nhóm nhạc view
    public function nhomnhacall($id)
    {
        $users = User::find($id);
        $nhomnhac = DB::table('nhomnhac')->get();
        $lichtrinh = DB::table('lichtrinh')->latest()->take(1)->get();
        $banner = DB::table('tests_banner')->latest()->take(1)->get();
        $baiviet = DB::table('baiviet')->latest()->take(1)->get();
        $idol = DB::table('idol')->get();
        return view('nhomnhac.nhomnhacall', compact('nhomnhac', 'users', 'idol', 'lichtrinh', 'banner', 'baiviet'));
    }
}
