<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cauhinh;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CauhinhController extends Controller
{
    public function index(){
        $cauhinh = DB::table('cauhinh')->get();
        return view('cauhinh.index', compact('cauhinh'));
    }

    public function create(){
        return view('cauhinh.create');
    }
    
    public function store(Request $request){
        $cauhinh = new Cauhinh();
        $cauhinh->tenws = $request->tenws;
        $cauhinh->diachi = $request->diachi;
        $cauhinh->sdt = $request->sdt;
        $cauhinh->email = $request->email;

        if($request->hasFile('logo')){
            $image = $request->file('logo');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
            $cauhinh->logo = $imageName;
        }

        $cauhinh->save();
        return redirect()->route('cauhinh.index')->with('thongbao', 'them thanh cong');
    }

    public function edit(Cauhinh $cauhinh){
        return view('cauhinh.edit', compact('cauhinh'));
    }

    public function update(Request $request, $id){
        
        $cauhinh = Cauhinh::find($id);
        $cauhinh->tenws = $request->tenws;
        $cauhinh->diachi = $request->diachi;
        $cauhinh->sdt = $request->sdt;
        $cauhinh->email = $request->email;
        if($request->hasFile('logo')){
            $image = $request->file('logo');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
            $cauhinh->logo = $imageName;
        }

        $cauhinh->save();
        
        
        return redirect()->route('cauhinh.index')->with('thongbao', 'Cập nhật thành công');
    }

    public function destroy(Cauhinh $cauhinh){
        $cauhinh->delete();
        return redirect()->route('cauhinh.index')->with('thongbao', 'xoa thanh cong');
    }
}
