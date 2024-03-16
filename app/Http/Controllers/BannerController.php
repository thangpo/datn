<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BannerController extends Controller
{
    public function index(){
        $banner = DB::table('tests_banner')->get();
        return view('banner.index', compact('banner'));
    }

    public function create(){
        return view('banner.create');
    }

    public function store(Request $request){
        $banner = new Banner();

        if($request->hasFile('anhbn')){
            $image = $request->file('anhbn');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
            $banner->anhbn = $imageName;
        }

        $banner->save();
        return redirect()->route('banner.index')->with('thongbao', 'them thanh cong');
    }
    public function edit(Banner $banner){
        return view('banner.edit', compact('banner'));
    }
    public function update(Request $request, $id){
        
        $banner = Banner::find($id);
        if($request->hasFile('anhbn')){
            $image = $request->file('anhbn');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
            $banner->anhbn = $imageName;
        }

        $banner->save();  
        return redirect()->route('banner.index')->with('thongbao', 'Cập nhật thành công');
    }

    public function destroy(Banner $banner){
        $banner->delete();
        return redirect()->route('banner.index')->with('thongbao', 'xoa thanh cong');
    }
}
