<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Danhmuc;
use App\Models\Sanpham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SanphamController extends Controller
{
    public function danhsachsp($id){
        $danhmuc = Danhmuc::find($id);
        $sanpham = DB::table('san_pham_an_theo')->get();
        return view('sanpham.index', compact('danhmuc', 'sanpham'));
    }

    public function themsp($id){
        $danhmuc = Danhmuc::find($id);
        return view('sanpham.create', compact('danhmuc'));
    }

    public function themmoisp(Request $request){
        $sanpham = new Sanpham();
        $sanpham->id_danhmuc = $request->id_danhmuc;
        $sanpham->ten_sanpham = $request->ten_sanpham;
        $sanpham->gia_sanpham = $request->gia_sanpham;

        if($request->hasFile('hinh_anh')){
            $image = $request->file('hinh_anh');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
            $sanpham->hinh_anh = $imageName;
        }
        $sanpham->mo_ta = $request->mo_ta;
        $sanpham->save();

        return redirect()->back();
    }

    public function suasp($id){
        $danhmuc = Danhmuc::find($id);
        return view('sanpham.edit', compact('danhmuc'));
    }
}
