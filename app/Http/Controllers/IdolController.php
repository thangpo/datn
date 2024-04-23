<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Idol;
use App\Models\Nhomnhac;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IdolController extends Controller
{
    public function index(){
        $idol = DB::table('idol')
        ->join('nhomnhac','nhomnhac.id','=','idol.nhomnhac_id')
        ->select('idol.*','tennn')->get();
        $nhomnhac = Nhomnhac::withCount('idol')->get();
        return view('idol.index', compact('idol', 'nhomnhac'));
    }
    public function themmoi($id){
        $nhomnhac = Nhomnhac::where('id', $id)->first();
        $idol = Idol::where('nhomnhac_id', $nhomnhac->id)->get();
        $nhomnhac = Nhomnhac::where('id', $id)->get();
        return view('idol.create', compact('idol', 'nhomnhac'));
    }
    
    public function themidol(Request $request, $id){
        $idol = new Idol();
        $idol->nhomnhac_id = $request->nhomnhac_id;
        $idol->tenid = $request->tenid;
        $idol->tuoi = $request->tuoi;
        $idol->qquan = $request->qquan;

        if($request->hasFile('anh')){
            $image = $request->file('anh');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
            $idol->anh = $imageName;
        }
        $idol->chieucao = $request->chieucao;
        $idol->cannang = $request->cannang;
        $idol->gioitinh = $request->gioitinh;

        $idol->save();
        
        $user = DB::table('users')
        ->join('idol','idol.id','=','users.idol_id')
        ->select('users.*','tenid')->get();
        $nhomnhac = Nhomnhac::where('id', $id)->first();
        $idol = Idol::where('nhomnhac_id', $nhomnhac->id)->get();
        $nhomnhac = Nhomnhac::where('id', $id)->get();
        return view('idol.qwe', compact('idol', 'nhomnhac', 'user'));
    }

    public function edit(Idol $idol){   
        return view('idol.edit', compact('idol'));
    }

    public function update(Request $request, $id){
        
        $idol = Idol::find($id);
        $idol->nhomnhac_id = $request->nhomnhac_id;
        $idol->tenid = $request->tenid;
        $idol->tuoi = $request->tuoi;
        $idol->qquan = $request->qquan;

        if($request->hasFile('anh')){
            $image = $request->file('anh');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
            $idol->anh = $imageName;
        }
        $idol->chieucao = $request->chieucao;
        $idol->cannang = $request->cannang;
        $idol->gioitinh = $request->gioitinh;

        $idol->save();
        
        
        return redirect()->route('idol.index')->with('thongbao', 'them thanh cong');
    }

    public function destroy(Idol $idol){
        $idol->delete();
        return redirect()->route('idol.index')->with('thongbao', 'xoa thanh cong');
    }


    public function suaanhid($id){   
        $idol = Idol::find($id);
        return view('idol.suaanh', compact('idol'));
    }

    public function capnhataid(Request $request, $id){
        
        $idol = Idol::find($id);
        if($request->hasFile('anh')){
            $image = $request->file('anh');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
            $idol->anh = $imageName;
        }
        $idol->save();
        
        $idol = Idol::find($id);
        $users = User::where('idol_id', $idol->id)->get();    
        $nhomnhac = Nhomnhac::where('id', $idol->nhomnhac_id)->get();
        $idol = Idol::where('id', $id)->get();

        return view('idol.thongtinx', compact('users', 'idol', 'nhomnhac'));
    }

    public function suattidol($id){   
        $idol = Idol::find($id);
        return view('idol.suattid', compact('idol'));
    }

    public function capnhatttidol(Request $request, $id){
        
        $idol = Idol::find($id);
        $idol->nhomnhac_id = $request->nhomnhac_id;
        $idol->tenid = $request->tenid;
        $idol->tuoi = $request->tuoi;
        $idol->qquan = $request->qquan;
        $idol->chieucao = $request->chieucao;
        $idol->cannang = $request->cannang;
        $idol->gioitinh = $request->gioitinh;
        $idol->save();
        
        $idol = Idol::find($id);
        $users = User::where('idol_id', $idol->id)->get();    
        $nhomnhac = Nhomnhac::where('id', $idol->nhomnhac_id)->get();
        $idol = Idol::where('id', $id)->get();

        return view('idol.thongtinx', compact('users', 'idol', 'nhomnhac'));
    }
}
