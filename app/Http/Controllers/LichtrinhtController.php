<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Idol;
use App\Models\Lichtrinh;
use App\Models\Nhomnhac;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class LichtrinhtController extends Controller
{
    public function index(){
        $lichtrinh = DB::table('lichtrinh')
        ->join('nhomnhac','nhomnhac.id','=','lichtrinh.nhomnhac_id')
        ->select('lichtrinh.*','tennn')->get();
        $nhomnhac = Nhomnhac::withCount('lichtrinh')->get();
        return view('lichtrinh.index', compact('lichtrinh', 'nhomnhac'));
    }
    
    public function hienthilt($id){
        $nhomnhac = Nhomnhac::where('id', $id)->first();
        $lichtrinh = Lichtrinh::where('nhomnhac_id', $nhomnhac->id)->get();
        $nhomnhac = Nhomnhac::where('id', $id)->get();
        return view('lichtrinh.bh', compact('lichtrinh', 'nhomnhac'));
    }

    public function themmoilt($id){
        $nhomnhac = Nhomnhac::where('id', $id)->first();
        $lichtrinh = Lichtrinh::where('nhomnhac_id', $nhomnhac->id)->get();
        $nhomnhac = Nhomnhac::where('id', $id)->get();
        $baihat = DB::table('baihat')->get();
        return view('lichtrinh.create', compact('lichtrinh', 'nhomnhac', 'baihat'));
    }

    public function store(Request $request){
        $lichtrinh = new Lichtrinh();
        $lichtrinh->nhomnhac_id = $request->nhomnhac_id;
        $lichtrinh->tenlt = $request->tenlt;
        $lichtrinh->thoigian = $request->thoigian;
        $lichtrinh->diadiem = $request->diadiem;
        $lichtrinh->slve = $request->slve;
        if($request->hasFile('anhbn')){
            $image = $request->file('anhbn');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
            $lichtrinh->anhbn = $imageName;
        }
        $lichtrinh->cktrinhdien = json_encode($request->cktrinhdien);

        $lichtrinh->save();
        return redirect()->route('lichtrinh.index')->with('thongbao', 'them thanh cong');
    }

    public function edit(Lichtrinh $lichtrinh){
        $baihat = DB::table('baihat')->get();
        return view('lichtrinh.edit', compact('lichtrinh', 'baihat'));
    }

    public function update(Request $request, $id){
        
        $lichtrinh = Lichtrinh::find($id);
        $lichtrinh->nhomnhac_id = $request->nhomnhac_id;
        $lichtrinh->tenlt = $request->tenlt;
        $lichtrinh->thoigian = $request->thoigian;
        $lichtrinh->diadiem = $request->diadiem;
        $lichtrinh->slve = $request->slve;
        if($request->hasFile('anhbn')){
            $image = $request->file('anhbn');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
            $lichtrinh->anhbn = $imageName;
        }
        $lichtrinh->cktrinhdien = json_encode($request->cktrinhdien);

        $lichtrinh->save();
        return redirect()->route('lichtrinh.index')->with('thongbao', 'them thanh cong');
    }

    public function destroy(Lichtrinh $lichtrinh){
        $lichtrinh->delete();
        return redirect()->route('lichtrinh.index')->with('thongbao', 'xoa thanh cong');
    }


    public function emaillichtrinh($id1, $id2){

        $now = Carbon::now('Asia/Ho_Chi_Minh')->format('d-m-Y H:i:s');

        $lichtrinh = Lichtrinh::where('id', $id2)->first();

        $tenlt = $lichtrinh->tenlt;

        $thoigian = $lichtrinh->thoigian;

        $diadiem = $lichtrinh->diadiem;

        $title_mail = $tenlt.' '.'Thời gian công diễn '.$thoigian.' '.'Địa điểm công diễn '.$diadiem;

        $users = User::where('nhomnhac_id', $id1)->get();

        $data = [];

            foreach ($users as $us){
                $data['email'][] = $us->email;
            }
            
        
        Mail::send('email.congviec', $data, function($message) use ($title_mail, $data){
            $message->to($data['email'])->subject($title_mail);
            $message->from($data['email'],$title_mail);
        });

        return redirect()->back()->with('thongbao', 'Gửi email thành công');
    }
}
