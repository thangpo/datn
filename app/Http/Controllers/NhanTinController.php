<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Idol;
use App\Models\Nhantin;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

class NhanTinController extends Controller
{
    public function tinnhan($id1, $id2){
        $url = url()->previous();
        $tenurl = app('router')->getRoutes()->match(app('request')->create($url))->getName();
       
        $idol = Idol::where('id', $id1)->first();
        $user = User::where('id', $id2)->first();
        $profile = Profile::where('users_id', $user->id)->first();
        $nhantin = Nhantin::where('id_idol', $profile->id)->orderBy('created_at', 'desc')->get();
        return view('nhantin.tinnhannd', compact('idol', 'user', 'profile', 'nhantin', 'tenurl'));
    }
    public function guitinn(Request $request){
        $tinhnhan = new Nhantin();

        $tinhnhan->id_idol = $request->id_idol;
        $tinhnhan->id_profile = $request->id_profile;
        $tinhnhan->nh = $request->nh;
        $tinhnhan->noidung = $request->noidung;
        
        if($request->hasFile('anh')){
            $image = $request->file('anh');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
            $tinhnhan->anh = $imageName;
        }
        $tinhnhan->save();
        return redirect()->back();
    }
}