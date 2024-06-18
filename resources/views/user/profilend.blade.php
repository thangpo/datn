<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
</head>
<body>
<div class="profile-containel">
  @foreach ($users as $us)
  <div>
    <div class="profile-1">
      @foreach ($profile as $pf)
      <div class="profile-2">
        <img class="profile-img-1" src="{{asset('uploads/'.$pf->anhnd)}}" alt="">
        <button class="profile-button-1">
          <a class="profile-a-1" href="/suaanhnd/{{$pf->id}}/user/{{$us->id}}">Thay ảnh đại diện</a>
        </button>
      </div>
      <div class="profile-2">
        <h1>Tên người dùng: {{$pf->tennd}}</h1>
        <h3>Tuổi người dùng: {{$pf->tuoi}}</h3>
        <h3>Email: {{$us->email}}</h3>
        <h3>Chiều cao: {{$pf->diachi}}</h3>
        <h3>Cân năng: {{$pf->sdt}}</h3>
        <h3>Giới tính: {{$pf->gioitinh == 0 ? 'Nam' : 'Nữ'}}</h3>
        <div class="profile-text-1">
          <div class="profile-display-1"><img class="profile-img-2" src="https://tse1.mm.bing.net/th?id=OIP.0hjuzKoA33K1Ml_znxAaOQHaHa&pid=Api&P=0&h=180" alt=""></div>
          <div class="profile-display-1"><img class="profile-img-2" src="https://tse4.mm.bing.net/th?id=OIP.0ZvKtmqALnKw74ofDZQKTQHaHa&pid=Api&P=0&h=180" alt=""></div>
          <div class="profile-display-1"><img class="profile-img-2" src="https://h5.48.cn/pocket48/image/logo.png" alt=""></div>
          <div class="profile-display-1"><img class="profile-img-2" src="http://127.0.0.1:8000/uploads/1705396030.jpg" alt=""></div>
        </div>



        <div class="profile-dx">
          <a class="profile-a-2" href="{{route('logout')}}" class="button">Đăng suất</a>
        </div>

        <div class="profile-dx">
          <a class="profile-a-2" href="/suattnd/{{$pf->id}}/user/{{$us->id}}" class="button">Thay đổi thông tin tài khoản</a>
        </div>

        <div class="profile-dx">
          <a class="profile-a-2" href="{{route('views', $us->id)}}" class="button">quay lại trang chủ</a>
        </div>
@if($us->role == 2)
        <div class="profile-dx">
          <a class="profile-a-2" href="{{ route('cauhinh.index') }}" class="button">Đăng nhập vào admin</a>
        </div>
@endif
      </div>
      @endforeach
    </div>
  </div>
  @endforeach
</div>
</body>
</html>