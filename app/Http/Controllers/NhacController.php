<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Abumnhac;
use App\Models\Albumid;
use App\Models\LikeNhac;
use App\Models\Nhac;
use App\Models\Nhomnhac;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NhacController extends Controller
{
    public function index(){
        $nhac = DB::table('nhac')
        ->join('nhomnhac','nhomnhac.id','=','nhac.nhomnhac_id')
        ->select('nhac.*','tennn')->get();
        $nhomnhac = Nhomnhac::withCount('nhac')->get();
        return view('nhac.index', compact('nhac', 'nhomnhac'));
    }
    public function hienthin($id){
        $nhomnhac = Nhomnhac::where('id', $id)->first();
        $nhac = Nhac::where('nhomnhac_id', $nhomnhac->id)->get();
        $nhomnhac = Nhomnhac::where('id', $id)->get();
        return view('nhac.nhac', compact('nhac', 'nhomnhac'));
    }

   

    public function themn($id){
        $nhomnhac = Nhomnhac::where('id', $id)->first();
        $nhac = Nhac::where('nhomnhac_id', $nhomnhac->id)->get();
        return view('nhac.create', compact('nhac', 'nhomnhac'));
    }

    public function themnhacmoi(Request $request, $id){
        $nhac = new Nhac();
        $nhac->nhomnhac_id = $request->nhomnhac_id;
        $nhac->tenn = $request->tenn;
        if($request->hasFile('anh')){
            $image = $request->file('anh');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
            $nhac->anh = $imageName;
        }
        if($request->hasFile('nhac')){
            $image = $request->file('nhac');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('audio'), $imageName);
            $nhac->nhac = $imageName;
        }
        $nhac->loainhac = $request->loainhac;
        $nhac->tacgia = $request->tacgia;

        $nhac->save();
        $nhomnhac = Nhomnhac::where('id', $id)->first();
        $nhac = Nhac::where('nhomnhac_id', $nhomnhac->id)->get();
        $nhomnhac = Nhomnhac::where('id', $id)->get();
        return view('nhac.nhac', compact('nhac', 'nhomnhac'));
    }
    public function edit(Nhac $nhac){   
        return view('nhac.edit', compact('nhac'));
    }
    public function update(Request $request, $id){
        
        $nhac = Nhac::find($id);
        $nhac->nhomnhac_id = $request->nhomnhac_id;
        $nhac->tenn = $request->tenn;
        if($request->hasFile('anh')){
            $image = $request->file('anh');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
            $nhac->anh = $imageName;
        }
        if($request->hasFile('nhac')){
            $image = $request->file('nhac');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('audio'), $imageName);
            $nhac->nhac = $imageName;
        }
        $nhac->loainhac = $request->loainhac;
        $nhac->tacgia = $request->tacgia;

        $nhac->save();
        return redirect()->route('nhac.index')->with('thongbao', 'them thanh cong');
    }

    public function destroy(Nhac $nhac){
        $nhac->delete();
        return redirect()->route('nhac.index')->with('thongbao', 'xoa thanh cong');
    }

    public function hienthinus($id){
        $users = User::find($id);
        $profile = Profile::where('users_id', $users->id)->get();
        $nhac = DB::table('nhac')->get();
        foreach ($nhac as $n){
            $nhomnhac = Nhomnhac::where('id', $n->nhomnhac_id)->get();
            
            $likenhac = LikeNhac::where('nhac_id', $n->id)
            ->join('nhac','nhac.id','=','likenhac.nhac_id')
            ->select('likenhac.*','nhac_id')->get();
            $nhac = Nhac::withCount('likenhac')->get();  
        }
        $nhomnhacv = DB::table('nhomnhac')->get();
        return view('trangnguoid.nhac', compact('nhac', 'nhomnhac', 'nhomnhacv', 'users', 'profile'));
    }

    public function songs($id1, $id2){
       $nhacs = Nhac::find($id1);
       $users = User::find($id2);
       $profile = Profile::where('users_id', $users->id)->get();
       $nhac = DB::table('nhac')->get();
        foreach ($nhac as $n){
            $nhomnhac = Nhomnhac::where('id', $n->nhomnhac_id)->get();

            $likenhac = LikeNhac::where('nhac_id', $n->id)
            ->join('nhac','nhac.id','=','likenhac.nhac_id')
            ->select('likenhac.*','nhac_id')->get();
            $nhac = Nhac::withCount('likenhac')->get();  
        }
        $nhomnhacv = DB::table('nhomnhac')->get();
        $nhaclx = Nhac::findOrFail($id1);
        $nhaclx->view_count++;
        $nhaclx->save();
       return view('trangnguoid.nhac', compact('nhacs','nhac', 'nhomnhac', 'nhomnhacv', 'users', 'profile'));
    }

    // chuyển bài hát nhomnhacnd
    public function playnext($id1, $id2){
       $users = User::find($id2);
       $profile = Profile::where('users_id', $users->id)->get();
       $nhac = DB::table('nhac')->get();
       $nhacd = DB::table('nhac')->max('id');
        if($id1 >= $nhacd){
            $nhacs = Nhac::find($id1 == $nhacd);
        }else{
            $nhacs = Nhac::where('id', '>', $id1)->first();
        }
        foreach ($nhac as $n){
            $nhomnhac = Nhomnhac::where('id', $n->nhomnhac_id)->get();

            $likenhac = LikeNhac::where('nhac_id', $n->id)
            ->join('nhac','nhac.id','=','likenhac.nhac_id')
            ->select('likenhac.*','nhac_id')->get();
            $nhac = Nhac::withCount('likenhac')->get();  
        }
        $nhomnhacv = DB::table('nhomnhac')->get();
        $nhomnhacv = DB::table('nhomnhac')->get();
        $nhaclx = Nhac::findOrFail($id1);
        $nhaclx->view_count++;
        $nhaclx->save();
        return view('trangnguoid.nhac', compact('nhacs','nhac', 'nhomnhac', 'nhomnhacv', 'users' ,'profile'));
    }

    public function past($id1, $id2){
        $nhacs = Nhac::find($id1);
        $users = User::find($id2);
        $profile = Profile::where('users_id', $users->id)->get();
        $loop = "loop";
        $nhac = DB::table('nhac')->get();
         foreach ($nhac as $n){
             $nhomnhac = Nhomnhac::where('id', $n->nhomnhac_id)->get();

             $likenhac = LikeNhac::where('nhac_id', $n->id)
            ->join('nhac','nhac.id','=','likenhac.nhac_id')
            ->select('likenhac.*','nhac_id')->get();
            $nhac = Nhac::withCount('likenhac')->get();  
         }
         $nhomnhacv = DB::table('nhomnhac')->get();
        return view('trangnguoid.nhac', compact('nhacs','nhac', 'nhomnhac', 'nhomnhacv', 'loop', 'users' ,'profile'));
     }

     // lùi lại bài hát
    public function playpre($id1, $id2){
       $nhac = DB::table('nhac')->get();
       $users = User::find($id2);
       $profile = Profile::where('users_id', $users->id)->get();
       $nhacd = DB::table('nhac')->min('id');
        if($id1 == $nhacd){
            $nhacs = Nhac::find($id1 == $nhacd);
        }else{
            $nhacs = Nhac::find($id1-1);
        }
        foreach ($nhac as $n){
            $nhomnhac = Nhomnhac::where('id', $n->nhomnhac_id)->get();

            $likenhac = LikeNhac::where('nhac_id', $n->id)
            ->join('nhac','nhac.id','=','likenhac.nhac_id')
            ->select('likenhac.*','nhac_id')->get();
            $nhac = Nhac::withCount('likenhac')->get();  
        }
        foreach ($nhac as $n){
            $nhomnhac = Nhomnhac::where('id', $n->nhomnhac_id)->get();

            $likenhac = LikeNhac::where('nhac_id', $n->id)
            ->join('nhac','nhac.id','=','likenhac.nhac_id')
            ->select('likenhac.*','nhac_id')->get();
            $nhac = Nhac::withCount('likenhac')->get();  
        }
        $nhomnhacv = DB::table('nhomnhac')->get();
        $nhomnhacv = DB::table('nhomnhac')->get();
        $nhaclx = Nhac::findOrFail($id1);
        $nhaclx->view_count++;
        $nhaclx->save();
        return view('trangnguoid.nhac', compact('nhacs','nhac', 'nhomnhac', 'nhomnhacv', 'users', 'profile'));
    }

    public function randomnhac($id1, $id2){
        $nhacs = DB::table('nhac')->inRandomOrder()->first();
        $users = User::find($id2);
        $profile = Profile::where('users_id', $users->id)->get();
        $nhac = DB::table('nhac')->get();
         foreach ($nhac as $n){
             $nhomnhac = Nhomnhac::where('id', $n->nhomnhac_id)->get();
             $likenhac = LikeNhac::where('nhac_id', $n->id)
            ->join('nhac','nhac.id','=','likenhac.nhac_id')
            ->select('likenhac.*','nhac_id')->get();
            $nhac = Nhac::withCount('likenhac')->get();  
         }
        $nhomnhacv = DB::table('nhomnhac')->get();
        $nhomnhacv = DB::table('nhomnhac')->get();
        $nhaclx = Nhac::findOrFail($id1);
        $nhaclx->view_count++;
        $nhaclx->save();
        return view('trangnguoid.nhac', compact('nhacs','nhac', 'nhomnhac', 'nhomnhacv', 'users', 'profile'));
     }


     public function likenhac($nhac){
        $likenhac = LikeNhac::where('users_id', auth()->user()->id)->where('nhac_id', $nhac)->first();
        if($likenhac){
            return redirect()->back()->with('error', 'bài nhạc này đã được lưu vào yêu thích');
        }else{
            $likeNhac = new LikeNhac();
            $likeNhac->users_id = auth()->user()->id;
            $likeNhac->nhac_id = $nhac;
            $likeNhac->save();
    
            return back();
        } 
  }

  public function songknd($id){
    $nhacs = Nhac::find($id);
    $nhac = DB::table('nhac')->get();
     foreach ($nhac as $n){
        $nhomnhac = Nhomnhac::where('id', $n->nhomnhac_id)->get();

        $likenhac = LikeNhac::where('nhac_id', $n->id)
            ->join('nhac','nhac.id','=','likenhac.nhac_id')
            ->select('likenhac.*','nhac_id')->get();
        $nhac = Nhac::withCount('likenhac')->get();  
    }
    $nhomnhacv = DB::table('nhomnhac')->get();
    $nhaclx = Nhac::findOrFail($id);
    $nhaclx->view_count++;
    $nhaclx->save();
    return view('trangnguoid.nhac', compact('nhacs','nhac', 'nhomnhac', 'nhomnhacv'));
 }

 public function playnextknd($id){
    $nhac = DB::table('nhac')->get();
    $nhacd = DB::table('nhac')->max('id');
     if($id >= $nhacd){
         $nhacs = Nhac::find($id == $nhacd);
     }else{
         $nhacs = Nhac::find($id+1);
     }
     foreach ($nhac as $n){
         $nhomnhac = Nhomnhac::where('id', $n->nhomnhac_id)->get();

         $likenhac = LikeNhac::where('nhac_id', $n->id)
            ->join('nhac','nhac.id','=','likenhac.nhac_id')
            ->select('likenhac.*','nhac_id')->get();
            $nhac = Nhac::withCount('likenhac')->get();  
     }
     $nhomnhacv = DB::table('nhomnhac')->get();
     return view('trangnguoid.nhac', compact('nhacs','nhac', 'nhomnhac', 'nhomnhacv'));
 }

 public function pastknd($id){
     $nhacs = Nhac::find($id);
     $loop = "loop";
     $nhac = DB::table('nhac')->get();
      foreach ($nhac as $n){
          $nhomnhac = Nhomnhac::where('id', $n->nhomnhac_id)->get();

          $likenhac = LikeNhac::where('nhac_id', $n->id)
            ->join('nhac','nhac.id','=','likenhac.nhac_id')
            ->select('likenhac.*','nhac_id')->get();
            $nhac = Nhac::withCount('likenhac')->get();  
      }
      $nhomnhacv = DB::table('nhomnhac')->get();
     return view('trangnguoid.nhac', compact('nhacs','nhac', 'nhomnhac', 'nhomnhacv', 'loop'));
  }

 public function playpreknd($id){
    $nhac = DB::table('nhac')->get();
    $nhacd = DB::table('nhac')->min('id');
     if($id == $nhacd){
         $nhacs = Nhac::find($id == $nhacd);
     }else{
         $nhacs = Nhac::find($id-1);
     }
     foreach ($nhac as $n){
         $nhomnhac = Nhomnhac::where('id', $n->nhomnhac_id)->get();

         $likenhac = LikeNhac::where('nhac_id', $n->id)
            ->join('nhac','nhac.id','=','likenhac.nhac_id')
            ->select('likenhac.*','nhac_id')->get();
            $nhac = Nhac::withCount('likenhac')->get();  
     }
     foreach ($nhac as $n){
         $nhomnhac = Nhomnhac::where('id', $n->nhomnhac_id)->get();

         $likenhac = LikeNhac::where('nhac_id', $n->id)
            ->join('nhac','nhac.id','=','likenhac.nhac_id')
            ->select('likenhac.*','nhac_id')->get();
            $nhac = Nhac::withCount('likenhac')->get();  
     }
     $nhomnhacv = DB::table('nhomnhac')->get();
     return view('trangnguoid.nhac', compact('nhacs','nhac', 'nhomnhac', 'nhomnhacv'));
 }

 public function randomnhacknd($id){
     $nhacs = DB::table('nhac')->inRandomOrder()->first();
     $nhac = DB::table('nhac')->get();
      foreach ($nhac as $n){
          $nhomnhac = Nhomnhac::where('id', $n->nhomnhac_id)->get();

          $likenhac = LikeNhac::where('nhac_id', $n->id)
            ->join('nhac','nhac.id','=','likenhac.nhac_id')
            ->select('likenhac.*','nhac_id')->get();
            $nhac = Nhac::withCount('likenhac')->get();  
      }
      $nhomnhacv = DB::table('nhomnhac')->get();
     return view('trangnguoid.nhac', compact('nhacs','nhac', 'nhomnhac', 'nhomnhacv'));
  }


  public function nhanbl($id){
    $nhacs = Nhac::find($id);
    $binhluan = DB::table('binhluannhac')->get();
    $profile = DB::table('profile')->get();
    $nhac = DB::table('nhac')->get();
     foreach ($nhac as $n){
        $nhomnhac = Nhomnhac::where('id', $n->nhomnhac_id)->get();

        $likenhac = LikeNhac::where('nhac_id', $n->id)
            ->join('nhac','nhac.id','=','likenhac.nhac_id')
            ->select('likenhac.*','nhac_id')->get();
        $nhac = Nhac::withCount('likenhac')->get();  
    }
    return view('nhac.binhluan', compact('nhacs','nhac', 'nhomnhac', 'binhluan', 'profile'));
 }

 public function binhluannhac($id1, $id2){
    $nhacs = Nhac::find($id1);
    $user = User::find($id2);
    $users = User::where('id', $id2)->get();
    $profile = Profile::where('users_id', $user->id)->get();
    $nhac = DB::table('nhac')->get();
    $binhluan = DB::table('binhluannhac')->get();
     foreach ($nhac as $n){
        $nhomnhac = Nhomnhac::where('id', $n->nhomnhac_id)->get();

        $likenhac = LikeNhac::where('nhac_id', $n->id)
            ->join('nhac','nhac.id','=','likenhac.nhac_id')
            ->select('likenhac.*','nhac_id')->get();
        $nhac = Nhac::withCount('likenhac')->get();  
    }
    return view('nhac.binhluan', compact('nhacs', 'nhac', 'nhomnhac', 'users', 'profile', 'binhluan'));
 }



 public function ablikenhac($id1){
    $nhacs = DB::table('nhac')->get();
    $users = User::find($id1);
    $nhac = DB::table('nhac')->get();
    $likenhacs = DB::table('likenhac')->get();
    foreach ($nhac as $n){
        $nhomnhac = Nhomnhac::where('id', $n->nhomnhac_id)->get();

        $likenhac = LikeNhac::where('nhac_id', $n->id)
            ->join('nhac','nhac.id','=','likenhac.nhac_id')
            ->select('likenhac.*','nhac_id')->get();
        $nhac = Nhac::withCount('likenhac')->get();  
    }
    return view('nhac.likenhac', compact('likenhacs', 'nhacs', 'nhac', 'nhomnhac', 'users'));
 }

 public function nhacyeuthich($id1, $id2){
    $nhacs = DB::table('nhac')->get();
    $users = User::find($id2);
    $nhach = Nhac::find($id1);
    $nhac = DB::table('nhac')->get();
    $likenhacs = DB::table('likenhac')->get();
    foreach ($nhac as $n){
        $nhomnhac = Nhomnhac::where('id', $n->nhomnhac_id)->get();

        $likenhac = LikeNhac::where('nhac_id', $n->id)
            ->join('nhac','nhac.id','=','likenhac.nhac_id')
            ->select('likenhac.*','nhac_id')->get();
        $nhac = Nhac::withCount('likenhac')->get();  
    }
    return view('nhac.likenhac', compact('likenhacs', 'nhacs', 'nhac', 'nhomnhac', 'users', 'nhach'));
 }

 public function nhomnhacnd($id1, $id2){
    $nhac = DB::table('nhac')->get();
    $nhomnhac = Nhomnhac::find($id1);
    $users = User::find($id2);
    $nhac = Nhac::where('nhomnhac_id', $nhomnhac->id)->get();
    return view('nhac.likenhac', compact('nhac', 'nhomnhac', 'users'));
 }

 //nhactheonhom
 public function nhomnhacct($id1){
    $nhac = DB::table('nhac')->get();
    $nhomnhac = Nhomnhac::find($id1);
    $nhac = Nhac::where('nhomnhac_id', $nhomnhac->id)->get();
    return view('nhac.likenhac', compact('nhac', 'nhomnhac'));
 }

 public function ndnhomnhac($id1, $id2){
    $nhac = DB::table('nhac')->get();
    $nhach = Nhac::find($id1);
    $nhomnhac = Nhomnhac::find($id2);
    $nhac = Nhac::where('nhomnhac_id', $nhomnhac->id)->get();
    return view('nhac.likenhac', compact('nhac', 'nhomnhac', 'nhach'));
 }

 public function nhactheonhom($id1, $id2){
    $nhac = DB::table('nhac')->get();
    $nhach = Nhac::find($id1);
    $users = User::find($id2);
    $nhomnhac = Nhomnhac::where('id', $nhach->nhomnhac_id)->get();
    foreach ($nhomnhac as $n){
        $nhac = Nhac::where('nhomnhac_id', $n->id)->get();
        $nhaci = Nhac::where('nhomnhac_id', $n->id)->pluck('nhac');
        $nhact = Nhac::where('nhomnhac_id', $n->id)->pluck('tenn');
        $nhaca = Nhac::where('nhomnhac_id', $n->id)->pluck('anh');
    }
    return view('nhac.likenhac', compact('nhach', 'nhomnhac', 'users', 'nhac', 'nhaci', 'nhact', 'nhaca'));
 }

 public function abumtknd($id1, $id2){
    $nhac = Nhac::find($id1);
    $users = User::find($id2);
    $abumnhac = Abumnhac::where('users_id', $users->id)->get();
    return view('nhac.abum', compact('nhac', 'users', 'abumnhac'));
 }

 public function themmoiab($id1, $id2){
    $nhacs = Nhac::find($id1);
    $users = User::find($id2);
    return view('nhac.abum', compact('nhacs', 'users'));
 }

 public function tgalbum($id1){
    $users = User::find($id1);
    return view('nhac.nhacabl', compact('users'));
 }

 public function tmabkh(Request $request, $id1){
      $abumnhac = new Abumnhac();
      $abumnhac->users_id = $id1;
      $abumnhac->tenab = $request->tenab;
      $abumnhac->save();

      return redirect()->back();
    }

    public function themnhacab(Request $request, $id1){
        $albumid = new Albumid();
        $albumid->nhac_id = $id1;
        $albumid->abumnhac_id = $request->abumnhac_id;
        $albumid->save();
  
        return redirect()->back();
    }
    

    public function thumucnhac($id1){
        $users = User::find($id1);
        $abumnhac = Abumnhac::where('users_id', $users->id)->get();
        return view('nhac.talbumnhac', compact('users', 'abumnhac'));
    }

    public function tmtheonhac($id1, $id2){
        $abumnhac = Abumnhac::find($id1);
        $users = User::find($id2);
        $albumid = Albumid::where('abumnhac_id', $abumnhac->id)->get();
        $nhactt = DB::table('nhac')->get();
        
        return view('nhac.talbumnhac', compact('users', 'albumid', 'nhactt'));
    }

    public function nghenhactab($id1, $id2){
        $nhaccc = Nhac::find($id1);
        $users = User::find($id2);
        $albumid = Albumid::where('nhac_id', $nhaccc->id)->get();
        $nhactt = DB::table('nhac')->get();
        
        return view('nhac.talbumnhac', compact('users', 'albumid', 'nhactt', 'nhaccc'));
    }
}
