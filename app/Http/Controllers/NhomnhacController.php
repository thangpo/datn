<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Nhomnhac;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NhomnhacController extends Controller
{
    public function index(){
        $nhomnhac = Nhomnhac::withCount('idol')->get();
        return view('nhomnhac.index', compact('nhomnhac'));
    }

    public function create(){
        return view('nhomnhac.create');
    }
    
    public function store(Request $request){
        $nhomnhac = new Nhomnhac();
        $nhomnhac->tennn = $request->tennn;
        if($request->hasFile('logonn')){
            $image = $request->file('logonn');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
            $nhomnhac->logonn = $imageName;
        }
        $nhomnhac->ngaytl = $request->ngaytl;

        $nhomnhac->save();
        return redirect()->route('nhomnhac.index')->with('thongbao', 'them thanh cong');
    }

    public function edit(Nhomnhac $nhomnhac){
        return view('nhomnhac.edit', compact('nhomnhac'));
    }

    public function update(Request $request, $id){
        
        $nhomnhac = Nhomnhac::find($id);
        $nhomnhac->tennn = $request->tennn;
        if($request->hasFile('logonn')){
            $image = $request->file('logonn');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
            $nhomnhac->logonn = $imageName;
        }
        $nhomnhac->ngaytl = $request->ngaytl;

        $nhomnhac->save();
        
        
        return redirect()->route('nhomnhac.index')->with('thongbao', 'Cập nhật thành công');
    }

    public function destroy(Nhomnhac $nhomnhac){
        $nhomnhac->delete();
        return redirect()->route('nhomnhac.index')->with('thongbao', 'xoa thanh cong');
    }
}
