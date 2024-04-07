<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Baiviet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BaivietController extends Controller
{
    public function baivietall()
    {
        $baiviet = DB::table('baiviet')->get();
        return view('baiviet.index', compact('baiviet'));
    }

    public function thembaiviet()
    {
        return view('baiviet.create');
    }

    public function thembai(Request $request)
    {
        $baiviet = new Baiviet();

        $baiviet->tieude = $request->tieude;
        $baiviet->noidung = $request->noidung;

        if ($request->hasFile('hinhanh')) {
            $image = $request->file('hinhanh');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
            $baiviet->hinhanh = $imageName;
        }

        $baiviet->save();
        return redirect()->route('baivietall')->with('thongbao', 'Thêm thành công');
    }

    public function suabai(Baiviet $baiviet, $id)
    {
        $baiviet = Baiviet::find($id);
        return view('baiviet.edit', compact('baiviet'));
    }

    public function sualaibv(Request $request, $id)
    {
        $baiviet = Baiviet::find($id);

        $baiviet->tieude = $request->tieude;
        $baiviet->noidung = $request->noidung;

        if ($request->hasFile('hinhanh')) {
            $image = $request->file('hinhanh');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
            $baiviet->hinhanh = $imageName;
        }

        $baiviet->save();
        return redirect()->route('baivietall')->with('thongbao', 'thêm thành công');
    }

    public function destroy(Baiviet $baiviet)
    {
        $baiviet->delete();
        return redirect()->route('baivietall')->with('thongbao', 'xoa thanh cong');
    }







    // hiển thị trang chủ

    public function viewbaiveit()
    {
        $baiviet = DB::table('baiviet')->get();
        return view('baiviet.tintuc', compact('baiviet'));
    }


    public function gioithieu()
    {
        return view('baiviet.gioithieu');
    }
}
