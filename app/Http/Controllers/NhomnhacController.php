<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Idol;
use App\Models\Nhomnhac;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\table;

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


    // nhóm nhạc view
    public function nhomnhacall($id){
        $users = User::find($id);
        $nhomnhac = DB::table('nhomnhac')->get();
        $lichtrinh = DB::table('lichtrinh')->latest()->take(1)->get();
        $banner = DB::table('tests_banner')->latest()->take(1)->get();
        $baiviet = DB::table('baiviet')->latest()->take(1)->get();
        $idol = DB::table('idol')->get();
        return view('nhomnhac.nhomnhacall', compact('nhomnhac', 'users', 'idol', 'lichtrinh', 'banner', 'baiviet'));
    }
}
