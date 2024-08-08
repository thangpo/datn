<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Danhmuc;
use App\Models\Sanpham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DanhmucController extends Controller
{
    public function danhsachdm(){
        $danhmuc = Danhmuc::withCount('san_pham_an_theo')->get();
        return view ('danhmuc.index', compact('danhmuc'));
    }

    public function themmoidm(){
        return view('danhmuc.create');
    }

    public function themdm(Request $request){
        $danhmuc = new Danhmuc();
        $danhmuc->ten_sanpham = $request->ten_sanpham;

        if($request->hasFile('hinh_anh')){
            $image = $request->file('hinh_anh');
            $imageName = time().''.$image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
            $danhmuc->hinh_anh = $imageName;
        }
        $danhmuc->xoa_mem = $request->xoa_mem;

        $danhmuc->save();

        return redirect()->back();
    }

    public function capnhatdm($id){
        $danhmuc = Danhmuc::find($id);
        return view('danhmuc.edit', compact('danhmuc'));
    }

    public function suadm(Request $request, $id){
       $danhmuc = Danhmuc::find($id);
       $danhmuc->ten_sanpham = $request->ten_sanpham;

        if($request->hasFile('hinh_anh')){
            $image = $request->file('hinh_anh');
            $imageName = time().''.$image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
            $danhmuc->hinh_anh = $imageName;
        }
        $danhmuc->xoa_mem = $request->xoa_mem;

        $danhmuc->save();
        return redirect()->route('danhsachdm')->with('thongbao', 'them thanh cong');
    }

    public function xoamemdm(Request $request, $id){
        $danhmuc = Danhmuc::find($id);
        if($request->xoa_mem == 1){
            $danhmuc->xoa_mem = $request->xoa_mem;
            $danhmuc->save();
            return redirect()->back();
        }
        if($request->xoa_mem == 0){
            $danhmuc->xoa_mem = $request->xoa_mem;
            $danhmuc->save();
            return redirect()->back();
        }
    }

    public function thungracdm(){
        $danhmuc = DB::table('danhmuc')->get();
        return view ('danhmuc.xoamem', compact('danhmuc'));
    }

    public function xoadm($id){
        $danhmuc = Danhmuc::find($id);
        $sanpham = Sanpham::where('danhmuc_id', $danhmuc->id)->first();
        if(empty($sanpham)){
            $danhmuc = Danhmuc::where('id', $id)->delete();
            return redirect()->route('danhsachdm')->with('thongbao', 'Xóa thành công');
        }
        if(empty($sanpham) != 'Null'){
            return redirect()->route('thungracdm')->with('thongbao', 'chưa thể xóa');
        }
    }
}
