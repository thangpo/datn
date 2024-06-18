<?php

use App\Http\Controllers\BaidangController;
use App\Http\Controllers\BaihatController;
use App\Http\Controllers\BaivietController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BinhluanController;
use App\Http\Controllers\CauhinhController;
use App\Http\Controllers\ChuyenhController;
use App\Http\Controllers\IdolController;
use App\Http\Controllers\LichtrinhtController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\NhacController;
use App\Http\Controllers\NhomnhacController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VexemController;
use App\Models\Baihat;
use App\Models\Lichtrinh;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::middleware(['auth'])->group(function () {

Route::resource('/baihat', BaihatController::class);
Route::resource('/banner', BannerController::class);
Route::resource('/cauhinh', CauhinhController::class);
Route::resource('/cauhinh', CauhinhController::class);

Route::resource('/nhomnhac', NhomnhacController::class);

Route::resource('/user', UserController::class);
Route::resource('/nhac', NhacController::class);

// bài viết có người dùng và admin
Route::resource('/baiviet', BaivietController::class);
Route::match(['get', 'post'], '/baivietall', [BaivietController::class, 'baivietall'])->name('baivietall');
Route::match(['get', 'post'], '/thembaiviet', [BaivietController::class, 'thembaiviet'])->name('thembaiviet');
Route::match(['get', 'post'], '/thembai', [BaivietController::class, 'thembai'])->name('thembai');
Route::match(['get', 'post'], '/suabai/{id}', [BaivietController::class, 'suabai'])->name('suabai');
Route::put('/sualaibv/{id}', [BaivietController::class, 'sualaibv'])->name('sualaibv');



//lịch trình admin và người dùng
Route::resource('/lichtrinh', LichtrinhtController::class);
Route::match(['get', 'post'], '/lichtrinh/hienthilt/{id}', [LichtrinhtController::class, 'hienthilt'])->name('hienthilt');
Route::match(['get', 'post'], '/lichtrinh/themmoilt/{id}', [LichtrinhtController::class, 'themmoilt'])->name('themmoilt');
Route::match(['get', 'post'], '/emaillichtrinh/{id1}/lichtrinh/{id2}', [LichtrinhtController::class, 'emaillichtrinh'])->name('emaillichtrinh');


// idol admin và người dùng
Route::resource('/idol', IdolController::class);
Route::match(['get', 'post'], '/themidol/{id}', [IdolController::class, 'themidol'])->name('themidol');
Route::match(['get', 'post'], '/suaanhid/{id}', [IdolController::class, 'suaanhid'])->name('suaanhid');
Route::put('/capnhataid/{id}', [IdolController::class, 'capnhataid'])->name('capnhataid');
Route::match(['get', 'post'], '/suattidol/{id}', [IdolController::class, 'suattidol'])->name('suattidol');
Route::put('/capnhatttidol/{id}', [IdolController::class, 'capnhatttidol'])->name('capnhatttidol');
Route::match(['get', 'post'], '/idol/themmoi/{id}', [IdolController::class, 'themmoi'])->name('themmoi');


// nhạc admin và người dùng profilend
Route::match(['get', 'post'], '/themnhacmoi/{id}', [NhacController::class, 'themnhacmoi'])->name('themnhacmoi');
Route::match(['get', 'post'], '/hienthin/{id}', [NhacController::class, 'hienthin'])->name('hienthin');
Route::match(['get', 'post'], '/hienthinus/{id}', [NhacController::class, 'hienthinus'])->name('hienthinus');
Route::match(['get', 'post'], '/likenhac/{nhac}', [NhacController::class, 'likenhac'])->name('likenhac');
Route::match(['get', 'post'], '/themn/{id}', [NhacController::class, 'themn'])->name('themn');
Route::match(['get', 'post'], '/songs/{id1}/user/{id2}', [NhacController::class, 'songs'])->name('songs');
Route::match(['get', 'post'], '/playnext/{id1}/user/{id2}', [NhacController::class, 'playnext'])->name('playnext');
Route::match(['get', 'post'], '/playpre/{id1}/user/{id2}', [NhacController::class, 'playpre'])->name('playpre');
Route::match(['get', 'post'], '/past/{id1}/user/{id2}', [NhacController::class, 'past'])->name('past');
Route::match(['get', 'post'], '/randomnhac/{id1}/user/{id2}', [NhacController::class, 'randomnhac'])->name('randomnhac');
Route::match(['get', 'post'], '/binhluannhac/{id1}/user/{id2}', [NhacController::class, 'binhluannhac'])->name('binhluannhac');
Route::match(['get', 'post'], '/nhacyeuthich/{id1}/user/{id2}', [NhacController::class, 'nhacyeuthich'])->name('nhacyeuthich');
Route::match(['get', 'post'], '/nhactheonhom/{id1}/user/{id2}', [NhacController::class, 'nhactheonhom'])->name('nhactheonhom');
Route::match(['get', 'post'], '/nhomnhacnd/{id1}/user/{id2}', [NhacController::class, 'nhomnhacnd'])->name('nhomnhacnd');
Route::match(['get', 'post'], '/ndnhomnhac/{id1}/nhac/{id2}', [NhacController::class, 'ndnhomnhac'])->name('ndnhomnhac');
Route::match(['get', 'post'], '/abumtknd/{id1}/user/{id2}', [NhacController::class, 'abumtknd'])->name('abumtknd');
Route::match(['get', 'post'], '/themmoiab/{id1}/user/{id2}', [NhacController::class, 'themmoiab'])->name('themmoiab');
Route::match(['get', 'post'], '/tgalbum/{id1}', [NhacController::class, 'tgalbum'])->name('tgalbum');
Route::match(['get', 'post'], '/tmabkh/{id1}', [NhacController::class, 'tmabkh'])->name('tmabkh');
Route::match(['get', 'post'], '/themnhacab/{id1}', [NhacController::class, 'themnhacab'])->name('themnhacab');
Route::match(['get', 'post'], '/nhomnhacct/{id1}', [NhacController::class, 'nhomnhacct'])->name('nhomnhacct');
Route::match(['get', 'post'], '/songknd/{id1}', [NhacController::class, 'songknd'])->name('songknd');
Route::match(['get', 'post'], '/thumucnhac/{id1}', [NhacController::class, 'thumucnhac'])->name('thumucnhac');
Route::match(['get', 'post'], '/tmtheonhac/{id1}/user/{id2}', [NhacController::class, 'tmtheonhac'])->name('tmtheonhac');
Route::match(['get', 'post'], '/nghenhactab/{id1}/user/{id2}', [NhacController::class, 'nghenhactab'])->name('nghenhactab');
Route::match(['get', 'post'], '/nhanbl/{id1}', [NhacController::class, 'nhanbl'])->name('nhanbl');
Route::match(['get', 'post'], '/playnextknd/{id1}', [NhacController::class, 'playnextknd'])->name('playnextknd');
Route::match(['get', 'post'], '/playpreknd/{id1}', [NhacController::class, 'playpreknd'])->name('playpreknd');
Route::match(['get', 'post'], '/pastknd/{id1}', [NhacController::class, 'pastknd'])->name('pastknd');
Route::match(['get', 'post'], '/randomnhacknd/{id1}', [NhacController::class, 'randomnhacknd'])->name('randomnhacknd');
Route::match(['get', 'post'], '/ablikenhac/{id1}', [NhacController::class, 'ablikenhac'])->name('ablikenhac');
// nhóm nhạc
Route::match(['get', 'post'], '/nhomnhacall/{id}', [NhomnhacController::class, 'nhomnhacall'])->name('nhomnhacall');
Route::match(['get', 'post'], '/xoavinhvien/{id}', [NhomnhacController::class, 'xoavinhvien'])->name('xoavinhvien');
Route::put('/xoamemnn/{id}', [NhomnhacController::class, 'xoamemnn'])->name('xoamemnn');
Route::match(['get', 'post'], '/nhomnhacx', [NhomnhacController::class, 'nhomnhacx'])->name('nhomnhacx');

//bài hát admin và người dùng chuyenh/hienthi
Route::match(['get', 'post'], '/themmoimv/{id}', [BaihatController::class, 'themmoimv'])->name('themmoimv');
Route::match(['get', 'post'], '/baihat/hienthibh/{id}', [BaihatController::class, 'hienthibh'])->name('hienthibh');
Route::match(['get', 'post'], '/baihat/thembh/{id}', [BaihatController::class, 'thembh'])->name('thembh');
Route::match(['get', 'post'], '/videond/{id}', [BaihatController::class, 'videond'])->name('videond');
Route::match(['get', 'post'], '/videoct/{id}', [BaihatController::class, 'videoct'])->name('videoct');
Route::match(['get', 'post'], '/videoctnd/{id1}/user/{id2}', [BaihatController::class, 'videoctnd'])->name('videoctnd');
Route::match(['get', 'post'], '/likevideo/{baihat}', [BaihatController::class, 'likevideo'])->name('likevideo');
Route::match(['get', 'post'], '/alllikevideo/{id}', [BaihatController::class, 'alllikevideo'])->name('alllikevideo');
Route::match(['get', 'post'], '/thumucvd/{id}', [BaihatController::class, 'thumucvd'])->name('thumucvd');
Route::match(['get', 'post'], '/thumuctuvd/{id1}/user/{id2}', [BaihatController::class, 'thumuctuvd'])->name('thumuctuvd');
Route::match(['get', 'post'], '/themmoiabvd/{id}', [BaihatController::class, 'themmoiabvd'])->name('themmoiabvd');
Route::match(['get', 'post'], '/themmoivideo/{id}', [BaihatController::class, 'themmoivideo'])->name('themmoivideo');
Route::match(['get', 'post'], '/videotheodm/{id1}/user/{id2}', [BaihatController::class, 'videotheodm'])->name('videotheodm');
Route::match(['get', 'post'], '/videotheonhomnhac/{id1}/user/{id2}', [BaihatController::class, 'videotheonhomnhac'])->name('videotheonhomnhac');
Route::match(['get', 'post'], '/dangkykenh/{id}', [BaihatController::class, 'dangkykenh'])->name('dangkykenh');
Route::match(['get', 'post'], '/kenhdadangky/{id}', [BaihatController::class, 'kenhdadangky'])->name('kenhdadangky');
Route::match(['get', 'post'], '/lichsuxem/{id}', [BaihatController::class, 'lichsuxem'])->name('lichsuxem');
Route::match(['get', 'post'], '/thongbapvd/{id}', [BaihatController::class, 'thongbapvd'])->name('thongbapvd');
Route::match(['get', 'post'], '/chitietthongbao/{id}', [BaihatController::class, 'chitietthongbao'])->name('chitietthongbao');


// chuyển hướng người dùng
Route::match(['get', 'post'], '/chuyenh/hienthi/{id}', [ChuyenhController::class, 'hienthi'])->name('hienthi');
Route::match(['get', 'post'], '/views/{id}', [ChuyenhController::class, 'views'])->name('views');
Route::match(['get', 'post'], '/hienthict/{id1}/user/{id2}', [ChuyenhController::class, 'hienthict'])->name('hienthict');

// ve xem thongtindv thongtinbuild congdien
Route::match(['get', 'post'], '/themmoivx/{id}', [VexemController::class, 'themmoivx'])->name('themmoivx');
Route::match(['get', 'post'], '/themvexem/{id}', [VexemController::class, 'themvexem'])->name('themvexem');
Route::match(['get', 'post'], '/vexemtt', [VexemController::class, 'vexemtt'])->name('vexemtt');
Route::match(['get', 'post'], '/suavexemtt/{id}', [VexemController::class, 'suavexemtt'])->name('suavexemtt');
Route::match(['get', 'post'], '/suave/{id}', [VexemController::class, 'suave'])->name('suave');
Route::match(['get', 'post'], '/xoavexemtt/{id}', [VexemController::class, 'xoavexemtt'])->name('xoavexemtt');
Route::match(['get', 'post'], '/viewvexem/{id}', [VexemController::class, 'viewvexem'])->name('viewvexem');
Route::match(['get', 'post'], '/thongtindv/{id1}/user/{id2}', [VexemController::class, 'thongtindv'])->name('thongtindv');
Route::match(['get', 'post'], '/thongtinbuild', [VexemController::class, 'thongtinbuild'])->name('thongtinbuild');
Route::match(['get', 'post'], '/buildvx', [VexemController::class, 'buildvx'])->name('buildvx');
Route::match(['get', 'post'], '/congdiens/{id}', [VexemController::class, 'congdiens'])->name('congdiens');
Route::match(['get', 'post'], '/emailcamon', [VexemController::class, 'emailcamon'])->name('emailcamon');

// thanh toán
Route::match(['get', 'post'], '/thanhtoannao', [VexemController::class, 'thanhtoannao'])->name('thanhtoannao');

// users route viewvexem
Route::match(['get', 'post'], '/hienthius/{id1}/nhomnhac/{id2}', [UserController::class, 'hienthius'])->name('hienthius');
Route::match(['get', 'post'], '/themus/{id1}/nhomnhac/{id2}', [UserController::class, 'themus'])->name('themus');
Route::match(['get', 'post'], '/taikhoant', [UserController::class, 'taikhoant'])->name('taikhoant');

// profile idol tài khoản viewvexem
Route::match(['get', 'post'], '/chuyentiep/{id}', [UserController::class, 'chuyentiep'])->name('chuyentiep');
Route::match(['get', 'post'], '/themprf/{id}', [UserController::class, 'themprf'])->name('themprf');

// user người dùng
Route::match(['get', 'post'], '/anhchitiet/{id1}/user/{id2}', [UserController::class, 'anhchitiet'])->name('anhchitiet');
Route::match(['get', 'post'], '/themanhid/{id1}/user/{id2}', [UserController::class, 'themanhid'])->name('themanhid');
Route::match(['get', 'post'], '/themidanh/{id1}/user/{id2}', [UserController::class, 'themidanh'])->name('themidanh');
Route::match(['get', 'post'], '/suaanhnd/{id1}/user/{id2}', [UserController::class, 'suaanhnd'])->name('suaanhnd');
Route::match(['get', 'post'], '/suattnd/{id1}/user/{id2}', [UserController::class, 'suattnd'])->name('suattnd');
Route::put('/capnhatanh/{id}', [UserController::class, 'capnhatanh'])->name('capnhatanh');
Route::put('/capnhatttnd/{id}', [UserController::class, 'capnhatttnd'])->name('capnhatttnd');
Route::match(['get', 'post'], '/profilend/{id}', [UserController::class, 'profilend'])->name('profilend');
Route::match(['get', 'post'], '/pfnguoidung', [UserController::class, 'pfnguoidung'])->name('pfnguoidung');
Route::match(['get', 'post'], '/capnhatnd/{id}', [UserController::class, 'capnhatnd'])->name('capnhatnd');
Route::match(['get', 'post'], '/hoadon/{id}', [UserController::class, 'hoadon'])->name('hoadon');
Route::match(['get', 'post'], '/suatk/{id}', [UserController::class, 'suatk'])->name('suatk');
Route::match(['get', 'post'], '/admin/{id}', [UserController::class, 'admin'])->name('admin');
Route::match(['get', 'post'], '/ctidolus/{id1}/user/{id2}', [UserController::class, 'ctidolus'])->name('ctidolus');
Route::match(['get', 'post'], '/theodoi/{id1}', [UserController::class, 'theodoi'])->name('theodoi');
Route::match(['get', 'post'], '/botheodoi/{id1}/user/{id2}', [UserController::class, 'botheodoi'])->name('botheodoi');
Route::match(['get', 'post'], '/videothem/{id1}/user/{id2}', [UserController::class, 'videothem'])->name('videothem');
Route::match(['get', 'post'], '/themvideo/{id1}/user/{id2}', [UserController::class, 'themvideo'])->name('themvideo');
Route::match(['get', 'post'], '/xemanhct/{id1}/user/{id2}', [UserController::class, 'xemanhct'])->name('xemanhct');
Route::match(['get', 'post'], '/videoxemct/{id1}/user/{id2}', [UserController::class, 'videoxemct'])->name('videoxemct');
Route::match(['get', 'post'], '/videonganct/{id1}/user/{id2}', [UserController::class, 'videonganct'])->name('videonganct');
Route::match(['get', 'post'], '/videonganctnd/{id}', [UserController::class, 'videonganctnd'])->name('videonganctnd');
Route::match(['get', 'post'], '/likevideongan/{id1}/user/{id2}', [UserController::class, 'likevideongan'])->name('likevideongan');
Route::match(['get', 'post'], '/bolikevideongan/{id1}/user/{id2}', [UserController::class, 'bolikevideongan'])->name('bolikevideongan');
Route::match(['get', 'post'], '/binhluanvideon/{id1}/user/{id2}', [UserController::class, 'binhluanvideon'])->name('binhluanvideon');
Route::match(['get', 'post'], '/themblvdn/{id}', [UserController::class, 'themblvdn'])->name('themblvdn');
Route::match(['get', 'post'], '/chuyenvdn/{id1}/user/{id2}', [UserController::class, 'chuyenvdn'])->name('chuyenvdn');

// đăng nhập đăng suất
Route::match(['get', 'post'], '/register', [UserController::class, 'register'])->name('register');
Route::get('/logout', [UserController::class, 'logout'])->name("logout");

// bài đăng của idol
Route::match(['get', 'post'], '/baidang/{id}', [BaidangController::class, 'baidang'])->name('baidang');
Route::match(['get', 'post'], '/baidangnd/{id}', [BaidangController::class, 'baidangnd'])->name('baidangnd');
Route::match(['get', 'post'], '/binhluanv/{id}', [BaidangController::class, 'binhluanv'])->name('binhluanv');
Route::match(['get', 'post'], '/thembd/{id}', [BaidangController::class, 'thembd'])->name('thembd');
Route::match(['get', 'post'], '/dangbai/{users_id}', [BaidangController::class, 'dangbai'])->name('dangbai');
Route::match(['get', 'post'], '/timbinhluan/{id}', [BaidangController::class, 'timbinhluan'])->name('timbinhluan');
Route::match(['get', 'post'], '/like/{baidang}', [LikeController::class, 'like'])->name('like');
Route::match(['get', 'post'], '/vbinhluan/{id}', [BinhluanController::class, 'vbinhluan'])->name('vbinhluan');
Route::match(['get', 'post'], '/ndbinhluan/{id1}/user/{id2}', [BinhluanController::class, 'ndbinhluan'])->name('ndbinhluan');
Route::match(['get', 'post'], '/binhluantheo/{id1}/user/{id2}', [BinhluanController::class, 'binhluantheo'])->name('binhluantheo');
Route::match(['get', 'post'], '/binhluan/{baidang}', [BinhluanController::class, 'binhluan'])->name('binhluan');
Route::match(['get', 'post'], '/binhluantheoid/{id}', [BinhluanController::class, 'binhluantheoid'])->name('binhluantheoid');
Route::match(['get', 'post'], '/binhluanvd/{baihat}', [BinhluanController::class, 'binhluanvd'])->name('binhluanvd');
Route::match(['get', 'post'], '/binhluannhac/{baihat}', [BinhluanController::class, 'binhluannhac'])->name('binhluannhac');
});


// không cần đăng nhập ctidolus   hoadon
Route::match(['get', 'post'], '/baihatview', [ChuyenhController::class, 'baihatview'])->name('baihatview');
Route::resource('/chuyenh', ChuyenhController::class);
Route::match(['get', 'post'], '/baidangall', [BaidangController::class, 'baidangall'])->name('baidangall');
Route::match(['get', 'post'], '/videocn', [BaihatController::class, 'videocn'])->name('videocn');
Route::match(['get', 'post'], '/congdien', [VexemController::class, 'congdien'])->name('congdien');

Route::match(['get', 'post'], '/login', [UserController::class, 'login'])->name('login');
Route::match(['get', 'post'], 'loginidol/{id}', [UserController::class, 'loginidol'])->name('loginidol');

Route::match(['get', 'post'], '/ttidol/{id}', [UserController::class, 'ttidol'])->name('ttidol');
// bài viết ko có người dùng
Route::match(['get', 'post'], '/viewbaiveit', [BaivietController::class, 'viewbaiveit'])->name('viewbaiveit');
Route::match(['get', 'post'], '/gioithieu', [BaivietController::class, 'gioithieu'])->name('gioithieu');



















