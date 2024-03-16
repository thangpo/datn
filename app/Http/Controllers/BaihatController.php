<?php

namespace App\Http\Controllers;

use App\Events\NewBaihatCreated;
use App\Http\Controllers\Controller;
use App\Models\Albumvideo;
use App\Models\Baihat;
use App\Models\BinhluanVd;
use App\Models\Dangkykenh;
use App\Models\Danhmucvd;
use App\Models\Lichsuxem;
use App\Models\Likevideo;
use App\Models\Nhomnhac;
use App\Models\Profile;
use App\Models\Thongbaovd;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class BaihatController extends Controller
{
    public function index(){
        $baihat = DB::table('baihat')
        ->join('nhomnhac','nhomnhac.id','=','baihat.nhomnhac_id')
        ->select('baihat.*','tennn')->get();
        $nhomnhac = Nhomnhac::withCount('baihat')->get();
        return view('baihat.index', compact('baihat', 'nhomnhac'));
    }
    public function hienthibh($id){
        $nhomnhac = Nhomnhac::where('id', $id)->first();
        $baihat = Baihat::where('nhomnhac_id', $nhomnhac->id)->get();
        return view('baihat.bh', compact('baihat', 'nhomnhac'));
    }
    public function thembh($id){
        $nhomnhac = Nhomnhac::where('id', $id)->first();
        $baihat = DB::table('baihat')->max('id');
        return view('baihat.create', compact('baihat', 'nhomnhac'));
    }
    public function themmoimv(Request $request, $id){
        $baihat = new Baihat();
        $baihat->nhomnhac_id = $request->nhomnhac_id;
        $baihat->tenbh = $request->tenbh;
        $baihat->ngayph = $request->ngayph;
    
        if($request->hasFile('nhac')){
            $image = $request->file('nhac');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('videos'), $imageName);
            $baihat->nhac = $imageName;
        }

        $baihat->theloai = $request->theloai;
        if($request->hasFile('anhbh')){
            $image = $request->file('anhbh');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
            $baihat->anhbh = $imageName;
        }

        $baihat->save();

        $nhomnhac = Nhomnhac::where('id', $id)->first();
        $baihat = Baihat::where('nhomnhac_id', $nhomnhac->id)->get();
        return view('baihat.bh', compact('baihat', 'nhomnhac'));
    }

    public function thongbapvd(Request $request, $id){
        $thongbaovd = new Thongbaovd();
        $thongbaovd->nhomnhac_id = $request->nhomnhac_id;
        $thongbaovd->baihat_id = $id;
        $thongbaovd->save();

          return back();
    }


    public function edit(Baihat $baihat){   
        return view('baihat.edit', compact('baihat'));
    }

    public function update(Request $request, $id){
        
        $baihat = Baihat::find($id);
        $baihat->nhomnhac_id = $request->nhomnhac_id;
        $baihat->tenbh = $request->tenbh;
        $baihat->ngayph = $request->ngayph;
    
        if($request->hasFile('nhac')){
            $image = $request->file('nhac');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('videos'), $imageName);
            $baihat->nhac = $imageName;
        }

        $baihat->theloai = $request->theloai;
        if($request->hasFile('anhbh')){
            $image = $request->file('anhbh');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
            $baihat->anhbh = $imageName;
        }
        $baihat->solnx = $request->solnx;

        $baihat->save();
        return redirect()->route('baihat.index')->with('thongbao', 'them thanh cong');
    }

    public function destroy(Baihat $baihat){
        $baihat->delete();
        return redirect()->route('baihat.index')->with('thongbao', 'xoa thanh cong');
    }





// phần view

    public function videocn(){
       $baihat = DB::table('baihat')
        ->join('nhomnhac','nhomnhac.id','=','baihat.nhomnhac_id')
        ->select('baihat.*','tennn','logonn')->get();
        return view('trangnguoid.video', compact('baihat'));
    }

// trang chủ video
    public function videond($id){
        $users = User::where('id', $id)->first();
        $profile = Profile::where('users_id', $users->id)->get();
        $dangkykenh = Dangkykenh::where('users_id', $users->id)->get();
        $thongbaovd = DB::table('thongbaovd')->get();
        $thongbaond = 0;
        foreach($thongbaovd as $tbvd){
            foreach($dangkykenh as $dkk){
                if($tbvd->nhomnhac_id == $dkk->nhomnhac_id){
                    $thongbaond++;
                }
            }
        }
        $baihat = DB::table('baihat')
         ->join('nhomnhac','nhomnhac.id','=','baihat.nhomnhac_id')
         ->select('baihat.*','tennn','logonn')->get();
         return view('trangnguoid.video', compact('baihat', 'users', 'profile', 'dangkykenh', 'thongbaovd', 'thongbaond'));
    }



    public function chitietthongbao($id){
        $users = User::where('id', $id)->first();
        $profile = Profile::where('users_id', $users->id)->get();
        $dangkykenh = Dangkykenh::where('users_id', $users->id)->get();
        $thongbaovd = DB::table('thongbaovd')->get();
        foreach($thongbaovd as $tbvd){
            foreach($dangkykenh as $dkk){
                if($tbvd->nhomnhac_id == $dkk->nhomnhac_id){
                    $thongbao = DB::table('thongbaovd')->get('nhomnhac_id');
                }
            }
        }
        $baihat = DB::table('baihat')
         ->join('nhomnhac','nhomnhac.id','=','baihat.nhomnhac_id')
         ->select('baihat.*','tennn','logonn')->get();
         return view('baihat.thongbao', compact('baihat', 'users', 'profile', 'dangkykenh', 'thongbaovd', 'thongbao'));
    }




    public function videoct($id){
        $baihats = Baihat::where('id', $id)->get();
        $baihaty = Baihat::where('id', $id)->first();
        foreach ($baihats as $bhs){
            $nhomnhac = Nhomnhac::where('id', $bhs->nhomnhac_id)->get();
        }
        foreach ($baihats as $bhs){
            $likevideo = Likevideo::where('baihat_id', $bhs->id)
                ->join('baihat','baihat.id','=','likevideo.baihat_id')
                ->select('likevideo.*','baihat_id')->get();
            $baihats = Baihat::withCount('likevideo')->get();  
        }
        $profile = DB::table('profile')->get();
        $binhluan = DB::table('binhluanvd')->get();
        $baihat = DB::table('baihat')
        ->join('nhomnhac','nhomnhac.id','=','baihat.nhomnhac_id')
        ->select('baihat.*','tennn','logonn')->get();

        $baihatlx = Baihat::findOrFail($id);
        $baihatlx->view_count++;
        $baihatlx->save();
        return view('baihat.ctvideo', compact('baihat' ,'baihats', 'nhomnhac', 'baihaty', 'profile', 'binhluan', 'likevideo'));
    }

    public function videoctnd($id1, $id2){
        $users = User::where('id', $id2)->first();
        $baihats = Baihat::where('id', $id1)->get();
        $baihaty = Baihat::where('id', $id1)->first();
        foreach ($baihats as $bhs){
            $nhomnhac = Nhomnhac::where('id', $bhs->nhomnhac_id)->get();
        }
        foreach ($baihats as $bhs){
            $likevideo = Likevideo::where('baihat_id', $bhs->id)
                ->join('baihat','baihat.id','=','likevideo.baihat_id')
                ->select('likevideo.*','baihat_id')->get();
            $baihats = Baihat::withCount('likevideo')->get();  
        }
        $profile = Profile::where('users_id', $users->id)->get();
        $binhluan = DB::table('binhluanvd')->get();
        
        $baihat = DB::table('baihat')
        ->join('nhomnhac','nhomnhac.id','=','baihat.nhomnhac_id')
        ->select('baihat.*','tennn','logonn')->get();


        $lichsuxem = new Lichsuxem();
        $lichsuxem->baihat_id = $id1;
        $lichsuxem->users_id = $id2;
        $lichsuxem->save();


        $baihatlx = Baihat::findOrFail($id1);
        $baihatlx->view_count++;
        $baihatlx->save();
        return view('baihat.ctvideo', compact('baihat' ,'baihats', 'nhomnhac', 'baihaty', 'users', 'likevideo', 'binhluan', 'profile'));
    }

    public function likevideo($baihat){
        $likevideo = Likevideo::where('users_id', auth()->user()->id)->where('baihat_id', $baihat)->first();
        if($likevideo){
            return redirect()->back()->with('error', 'bài nhạc này đã được lưu vào yêu thích');
        }else{
            $likevideo = new Likevideo();
            $likevideo->users_id = auth()->user()->id;
            $likevideo->baihat_id = $baihat;
            $likevideo->save();
    
            return back();
        } 
  }


  public function alllikevideo($id){
    $users = User::find($id);
    $likevideo = Likevideo::where('users_id', $users->id)->get();
    $baihat = DB::table('baihat')
    ->join('nhomnhac','nhomnhac.id','=','baihat.nhomnhac_id')
    ->select('baihat.*','tennn','logonn')->get();
    return view('trangnguoid.video', compact('users', 'likevideo', 'baihat'));
 }

 public function thumucvd($id){
    $users = User::find($id);
    $danhmucvds = Danhmucvd::where('users_id', $users->id)->get();
    return view('baihat.thumuc', compact('users', 'danhmucvds'));
 }

 public function thumuctuvd($id1, $id2){
    $baihat = Baihat::find($id1);
    $users = User::find($id2);
    $danhmucvd = Danhmucvd::where('users_id', $users->id)->get();
    return view('baihat.thumuc', compact('baihat', 'users', 'danhmucvd'));
 }

 public function themmoiabvd(Request $request, $id){
    $danhmucvd = new Danhmucvd();
    $danhmucvd->users_id = $id;
    $danhmucvd->tenab = $request->tenab;
    $danhmucvd->save();

    return redirect()->back();
}

public function themmoivideo(Request $request, $id){
    $albumvideo = new Albumvideo();
    $albumvideo->bathat_id = $id;
    $albumvideo->danhmucvd_id = $request->danhmucvd_id;
    $albumvideo->save();

    return redirect()->back();
}

public function videotheodm($id1, $id2){
    $danhmucvdtg = Danhmucvd::find($id1);
    $users = User::find($id2);
    $albumvideo = Albumvideo::where('danhmucvd_id', $danhmucvdtg->id)->get();
    $baihat = DB::table('baihat')
    ->join('nhomnhac','nhomnhac.id','=','baihat.nhomnhac_id')
    ->select('baihat.*','tennn','logonn')->get();
    return view('baihat.thumuc', compact('danhmucvdtg', 'users', 'albumvideo', 'baihat'));
 }


 public function videotheonhomnhac($id1, $id2){
    $nhomnhac = Nhomnhac::find($id1);
    $users = User::find($id2);
    $nhomnhacs = DB::table('nhomnhac')->get();
    foreach ($nhomnhacs as $nns){
        $dangkykenh = Dangkykenh::where('nhomnhac_id', $nns->id)
            ->join('nhomnhac','nhomnhac.id','=','dangkykenh.nhomnhac_id')
            ->select('dangkykenh.*','nhomnhac_id')->get();
        $nhomnhacc = Nhomnhac::withCount('dangkykenh')->get();  
    }
    $baihat = DB::table('baihat')
    ->join('nhomnhac','nhomnhac.id','=','baihat.nhomnhac_id')
    ->select('baihat.*','tennn','logonn')->get();
    return view('baihat.baihattnn', compact('nhomnhac', 'users', 'baihat', 'nhomnhacc'));
 }

 public function dangkykenh(Request $request, $id){
    $dangkykenh = new Dangkykenh();
    $dangkykenh->users_id = $id;
    $dangkykenh->nhomnhac_id = $request->nhomnhac_id;
    $dangkykenh->save();

    return redirect()->back();
}


 public function kenhdadangky($id){
    $users = User::find($id);
    $dangkykenh = Dangkykenh::where('users_id', $users->id)->get();
    $nhomnhackenh = DB::table('nhomnhac')->get();
    return view('baihat.baihattnn', compact('users', 'nhomnhackenh', 'dangkykenh'));
 }

 public function lichsuxem($id){
    $users = User::find($id);
    $baihat = DB::table('baihat')
    ->join('nhomnhac','nhomnhac.id','=','baihat.nhomnhac_id')
    ->select('baihat.*','tennn','logonn')->get();
    $lichsuxem = Lichsuxem::where('users_id', $users->id)->get();
    return view('baihat.lichsuxem', compact('users', 'baihat', 'lichsuxem'));
 }
  

}