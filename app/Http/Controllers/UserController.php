<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\Anhtheoid;
use App\Models\Baihat;
use App\Models\Binhluanvdngan;
use App\Models\Donhang;
use App\Models\Idol;
use App\Models\Lichtrinh;
use App\Models\Likevideon;
use App\Models\Nhac;
use App\Models\Nhomnhac;
use App\Models\Profile;
use App\Models\Theodoi;
use App\Models\User;
use App\Models\Videongan;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

use function Laravel\Prompts\table;

class UserController extends Controller
{
    // Đăng nhập
    public function login(UserRequest $request) {
        if ($request->isMethod('POST')) {
            // Sử dụng thằng Auth::attempt kiểm tra thông tin đăng nhập
            if (Auth::attempt(['email'=>$request->email, 'password'=> $request->password])) {
                $user = Auth::user();
                $id = $user->id;
                return redirect()->route('views', compact('id'));
            } else {
                Session::flash('error', 'Sai thông tin đăng nhập');
                return redirect()->route('login');
            }
        }
        return view('auth.login');
    }

    // Đăng ký
    public function register(UserRequest $request) {
        if ($request->isMethod('POST')) {
            // Lấy toàn bộ dữ liệu trong form đăng ký mà chúng ta gửi lên
            $params = $request->except("_token");
            // Mã hóa mật khẩu người dùng cung cấp
            $params["password"] = Hash::make($request->password);
            // Đặt giá trị email_verified_at là thời gian hiện tại
            $params["email_verified_at"] = Carbon::now('Asia/Ho_Chi_Minh');
            $user = User::create($params);

            if ($user->id) {
                Session::flash('success', 'Thêm tài khoản thành công');
                return redirect()->route('login');
            }
        }
        return view('auth.register');
    }

    // Đăng xuất
    public function logout () {
        Auth::logout();
        return redirect()->route('login');
    }

    ///

    public function hienthius($id1, $id2){
        $idols = Idol::find($id1);
        $nhomnhac = Nhomnhac::where('id', $id2)->first();
        $users = User::where('idol_id', $idols->id)->get();
        $idol = Idol::where('id', $id1)->get();
        return view('user.index', compact('idol', 'users', 'nhomnhac', 'idols'));
    }

    public function themus($id1, $id2){
        $idol = Idol::find($id1);
        $nhomnhac = Nhomnhac::where('id', $id2)->first();
        $users = User::where('idol_id', $idol->id)->get();
        return view('user.create', compact('idol', 'users', 'nhomnhac'));
    }

    public function taikhoant(UserRequest $request) {
        $users = new User();
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = $request->password;
        $users->idol_id = $request->idol_id;
        $users->nhomnhac_id = $request->nhomnhac_id;
        $users->save();
        return redirect()->route('idol.index')->with('thongbao', 'them thanh cong');
    }

    public function edit(User $user){
        return view('user.edit', compact('user'));
    }
    
    public function update(Request $request, $id){     
        $users = User::find($id);
        $users->role = $request->role;
        $users->name = $request->name;
        $users->email = $request->email;
        $users->save();
        return redirect()->route('idol.index')->with('thongbao', 'them thanh cong');
    }

    public function ttidol($id1){
        $idol = Idol::where('id', $id1)->first();
        $users = User::where('idol_id', $idol->id)->get();
        $idol = Idol::where('id', $id1)->get();
        foreach ($idol as $id) {
            $nhomnhac = Nhomnhac::where('id', $id->nhomnhac_id)->first();
            $lichtrinh = Lichtrinh::where('nhomnhac_id', $nhomnhac->id)->latest()->take(4)->get();
        }
        $nhac = Nhac::where('nhomnhac_id', $nhomnhac->id)->get();
        $theodoi = Theodoi::where('idol_id', $id1)
            ->join('idol','idol.id','=','theodoi.idol_id')
            ->select('theodoi.*','idol_id')->get();
        $tdidol = Idol::withCount('theodoi')->get();

        return view('trangnguoid.ttidol', compact('idol', 'users', 'nhomnhac', 'lichtrinh', 'theodoi', 'tdidol', 'nhac'));
    }


    public function ctidolus($id1, $id2){
        $idol = Idol::find($id1);
        $usernd = User::find($id2);
        $users = User::where('idol_id', $idol->id)->get();
        $idol = Idol::where('id', $id1)->get();
        foreach ($idol as $id) {
            $nhomnhac = Nhomnhac::where('id', $id->nhomnhac_id)->first();
            $lichtrinh = Lichtrinh::where('nhomnhac_id', $nhomnhac->id)->latest()->take(4)->get();
        }
        $nhac = Nhac::where('nhomnhac_id', $nhomnhac->id)->get();
        $theodoi = Theodoi::where('idol_id', $id1)
            ->join('idol','idol.id','=','theodoi.idol_id')
            ->select('theodoi.*','idol_id')->get();
        $tdidol = Idol::withCount('theodoi')->get();

        $theodoi = Theodoi::where('idol_id', $id1)->where('users_id', $id2)->first();

        return view('trangnguoid.ttidol', compact('idol', 'users', 'nhomnhac', 'lichtrinh', 'usernd', 'theodoi', 'tdidol', 'nhac'));
    }


    public function theodoi(Request $request, $id){
        $theodoi = new Theodoi();
        $theodoi->users_id = $id;
        $theodoi->idol_id = $request->idol_id;
        $theodoi->save();

        return redirect()->back();
    }

    public function botheodoi($id1, $id2){
        $theodoi = Theodoi::where('idol_id', $id1)->where('users_id', $id2)->delete();
        return redirect()->back();
    }

// profile idol
    public function profile($id){
        $users = User::where('id', $id)->get();
        foreach ($users as $us){
            $idol = Idol::where('id', $us->idol_id)->get();
            foreach ($idol as $id){
                $nhomnhac = Nhomnhac::where('id', $id->nhomnhac_id)->get();
            }
        }
        return view('user.profile', compact('users', 'idol', 'nhomnhac'));
    }

// ảnh id
    public function anhchitiet($id1, $id2){
        $idol = Idol::find($id1);
        $nhomnhac = Nhomnhac::where('id', $idol->nhomnhac_id)->first();
        $anhtheoid = Anhtheoid::where('idol_id', $idol->id)->get();
        $users = User::find($id2);    
        return view('user.themanhid', compact('users', 'idol', 'nhomnhac', 'anhtheoid'));
    }


    public function xemanhct($id1, $id2){
        $idol = Idol::find($id1);
        $users = User::find($id2); 
        $nhomnhac = Nhomnhac::where('id', $idol->nhomnhac_id)->first();
        $anhtheoid = Anhtheoid::where('idol_id', $idol->id)->get();       
        return view('user.themanhid', compact('users', 'idol', 'nhomnhac', 'anhtheoid'));
    }


    public function themanhid($id1, $id2){
        $idol = Idol::find($id1);
        $nhomnhac = Nhomnhac::where('id', $idol->nhomnhac_id)->first();
        $anhtheoid = Anhtheoid::where('idol_id', $idol->id)->get();
        $users = User::find($id2);    
        return view('idol.anhtheoid', compact('users', 'idol', 'nhomnhac', 'anhtheoid'));
    }


    public function themidanh(Request $request, $id1, $id2){
        $anhtheoid = new Anhtheoid();
        $anhtheoid->idol_id = $id1;

        $anhtheoids = [];
        if($request->hasfile('anhid'))
		{
			foreach($request->file('anhid') as $file)
			{
			    $name = time().rand(1,100).'.'.$file->extension();
			    $file->move(public_path('uploads'), $name);  
			    $anhtheoids[] = $name;  
			}
            $anhtheoid->anhid = json_encode($anhtheoids);
		}
        $anhtheoid->save();
        
        $idol = Idol::find($id1);
        $nhomnhac = Nhomnhac::where('id', $idol->nhomnhac_id)->first();
        $anhtheoid = Anhtheoid::where('idol_id', $idol->id)->get();
        $users = User::find($id2);   
        return view('user.themanhid', compact('users', 'idol', 'nhomnhac', 'anhtheoid'));
    }



//video ngắn


public function videoxemct($id1, $id2){
    $idol = Idol::find($id1);
    $nhomnhac = Nhomnhac::where('id', $idol->nhomnhac_id)->first();
    $videongan = Videongan::where('idol_id', $idol->id)->get();
    $users = User::find($id2);    
    return view('user.themanhid', compact('users', 'idol', 'nhomnhac', 'videongan'));
}


public function videothem($id1, $id2){
    $idol = Idol::find($id1);
    $users = User::find($id2);    
    $nhomnhac = Nhomnhac::where('id', $idol->nhomnhac_id)->first();
    $anhtheoid = Anhtheoid::where('idol_id', $idol->id)->get();
    return view('user.videongan', compact('users', 'idol', 'nhomnhac', 'anhtheoid'));
}



public function videonganct($id1, $id2){
    $videongan = Videongan::find($id1);
    $idol = Idol::where('id', $videongan->idol_id)->first();
    $users = User::find($id2);   
    $videongans = DB::table('videongan')->where('id', '<>', $id1)->get(); 
    return view('baihat.videonganct', compact('users', 'videongan', 'idol', 'videongans'));
}



public function videonganctnd($id){
    $users = User::find($id);
    $videongan = DB::table('videongan')
    ->join('idol','idol.id','=','videongan.idol_id')
    ->select('videongan.*','anh','tenid')->get();

    foreach($videongan as $vdn){
        $likevideon = Likevideon::where('videongan_id', $vdn->id)
        ->join('videongan','videongan.id','=','likevideon.videongan_id')
        ->select('likevideon.*','videongan_id')->get();

        $binhluanvdngan = Binhluanvdngan::where('videongan_id', $vdn->id)
        ->join('videongan','videongan.id','=','binhluanvdngan.videongan_id')
        ->select('binhluanvdngan.*','videongan_id')->get();

        $videongans = Videongan::withCount('likevideon', 'binhluanvdngan')->get(); 
    }

    $likevideo = Likevideon::where('users_id', $id)->pluck('videongan_id');


    $manglikevd = collect($likevideo); 
    $videon_id = $manglikevd->map(function ($value) {
        return intval($value); 
    }); 

    return view('baihat.videonganct', compact('users', 'videongan', 'videongans', 'likevideon', 'videon_id'));
}



public function bolikevideongan($id1, $id2){
    $likevideon = Likevideon::where('videongan_id', $id1)->where('users_id', $id2)->delete();
    return redirect()->back();
}



// bình luận
public function binhluanvideon($id1, $id2){
    $videongan = Videongan::find($id1);
    $idol = Idol::where('id', $videongan->idol_id)->first();
    $binhluanvdngan = DB::table('binhluanvdngan')->get();
    $user = DB::table('users')->get();
    $profile = DB::table('profile')->get();

    $users = User::find($id2);    
    return view('baihat.ctvideon', compact('users', 'videongan', 'idol', 'binhluanvdngan', 'user', 'profile'));
}

public function chuyenvdn($id1, $id2){
    $videongans = DB::table('videongan')->max('id');
    
        if($id1 >= $videongans){
            $videongan = Videongan::where('id', '<', $id1)->first();
        }else{
            $videongan = Videongan::where('id', '>', $id1)->first();
        }

    $idol = Idol::where('id', $videongan->idol_id)->first();
    $binhluanvdngan = DB::table('binhluanvdngan')->get();
    $user = DB::table('users')->get();
    $profile = DB::table('profile')->get();
    

    $users = User::find($id2);    
    return view('baihat.ctvideon', compact('users', 'videongan', 'idol', 'binhluanvdngan', 'user', 'profile'));
}



public function likevideongan($id1, $id2){
    $likevideon = Likevideon::where('users_id', $id2)->where('videongan_id', $id1)->first();
        if($likevideon){
            return redirect()->back()->with('error', 'bài nhạc này đã được lưu vào yêu thích');
        }else{
    $likevideon = new Likevideon();
    $likevideon->videongan_id = $id1;
    $likevideon->users_id = $id2;
    $likevideon->save();
   
    return redirect()->back();
}
}



public function themblvdn(Request $request, $id){
    $binhluanvdngan = new Binhluanvdngan();
    $binhluanvdngan->users_id = $id;
    $binhluanvdngan->videongan_id = $request->videongan_id;
    $binhluanvdngan->noidung = $request->noidung;
    $binhluanvdngan->save();
   
    return redirect()->back();
}



public function themvideo(Request $request, $id1, $id2){
    $videongan = new Videongan();
    $videongan->idol_id = $id1;
    $videongan->tieude = $request->tieude;

    if($request->hasFile('video')){
        $image = $request->file('video');
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('videos'), $imageName);
        $videongan->video = $imageName;
    }
    $videongan->save();
    
    $idol = Idol::find($id1);
    $nhomnhac = Nhomnhac::where('id', $idol->nhomnhac_id)->first();
    $videongan = Videongan::where('idol_id', $idol->id)->get();
    $users = User::find($id2);   
    return view('user.themanhid', compact('users', 'idol', 'nhomnhac', 'videongan'));
}




    public function profilend($id){
        $users = User::where('id', $id)->first();
        $profile = Profile::where('users_id', $users->id)->get();
        $users = User::where('id', $id)->get();
        return view('user.profilend', compact('users', 'profile'));
    }

    public function pfnguoidung(UserRequest $request) {
        $profile = new Profile();
        $profile->users_id = $request->users_id;
        $profile->tennd = $request->tennd;
        $profile->tuoi = $request->tuoi;
        $profile->diachi = $request->diachi;
        $profile->sdt = $request->sdt;
        $profile->gioitinh = $request->gioitinh;
        if($request->hasFile('anhnd')){
            $image = $request->file('anhnd');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
            $profile->anhnd = $imageName;
        }
        $profile->save();
        return redirect()->back();
    }


     public function capnhatnd(Request $request, $id){
        
        $profile = Profile::find($id);
        $profile->users_id = $request->users_id;
        $profile->tennd = $request->tennd;
        $profile->tuoi = $request->tuoi;
        $profile->diachi = $request->diachi;
        $profile->sdt = $request->sdt;
        $profile->gioitinh = $request->gioitinh;
        if($request->hasFile('anhnd')){
            $image = $request->file('anhnd');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
            $profile->anhnd = $imageName;
        }
        $profile->save();
        return redirect()->back();
    }
    


    public function hoadon($id){
        $users = User::where('id', $id)->first();
        $profile = Profile::where('users_id', $users->id)->first();

        // hóa đơn
        $donhang = Donhang::where('users_id', $users->id)->get();
        $vexem = DB::table('vexem')->get();
        $bangthanhtoan = DB::table('bangthanhtoan')->get();
        $lichtrinh = DB::table('lichtrinh')->get();
        return view('vexem.hoadon', compact('users', 'profile' ,'donhang', 'vexem', 'bangthanhtoan', 'lichtrinh'));
    }
}