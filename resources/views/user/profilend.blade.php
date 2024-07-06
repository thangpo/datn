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
    <div>
      <div class="profile-1">

        <div class="profile-2">
          @if(empty($thanhtoan))
          <img class="profile-img-1" src="{{asset('uploads/'.$profile->anhnd)}}" alt="">
          @endif
          @if(empty($thanhtoan) != 'Null')
          @if($uservip->ten_vip == "VIP I")
          <img class="profile-img-1" style="border-radius: 50%; border: 5px gray solid;" src="{{asset('uploads/'.$profile->anhnd)}}" alt="">
          @endif
          @if($uservip->ten_vip == "VIP II")
          <img class="profile-img-1" style="border-radius: 50%; border: 5px yellow solid;" src="{{asset('uploads/'.$profile->anhnd)}}" alt="">
          @endif
          @if($uservip->ten_vip == "VIP III")
          <img class="profile-img-1 animated-border" style="border-radius: 50%;" src="{{asset('uploads/'.$profile->anhnd)}}" alt="">
          @endif
          @endif
          <button class="profile-button-1">
            <a class="profile-a-1" href="/suaanhnd/{{$profile->id}}/user/{{$users->id}}">Thay ảnh đại diện</a>
          </button>
        </div>
        <div class="profile-2">
          @if(empty($thanhtoan))
          <h1>Tên người dùng: {{$profile->tennd}}</h1>
          @endif
          @if(empty($thanhtoan) != 'Null')
          @if($uservip->ten_vip == "VIP I")
          <div style="border: 1px solid yellow; background-color: gray; text-align: center;">
            <h1 style="color: whitesmoke;">Tên người dùng: {{$profile->tennd}} {{$uservip->ten_vip}}</h1>
          </div>
          @endif
          @if($uservip->ten_vip == "VIP II")
          <div style="border: 1px solid yellow; background-color: yellow; text-align: center;">
            <h1 style="color: #30D5C8;">Tên người dùng: {{$profile->tennd}} {{$uservip->ten_vip}}</h1>
          </div>
          @endif
          @if($uservip->ten_vip == "VIP III")
          <div style="border: 1px solid yellow; background-color: #30D5C8; text-align: center;">
            <h1 style="font-size: 24px; font-weight: bold; background-image: linear-gradient(to right, #FF0000, #FF7F00, #FFFF00, #00FF00, #0000FF, #4B0082, #9400D3); background-clip: text;
            -webkit-background-clip: text;
            color: transparent;">Tên người dùng: {{$profile->tennd}} {{$uservip->ten_vip}}</h1>
          </div>
          @endif
          @endif
          <h3>Tuổi người dùng: {{$profile->tuoi}}</h3>
          <h3>Email: {{$users->email}}</h3>
          <h3>Chiều cao: {{$profile->diachi}}</h3>
          <h3>Cân năng: {{$profile->sdt}}</h3>
          <h3>Giới tính: {{$profile->gioitinh == 0 ? 'Nam' : 'Nữ'}}</h3>
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
            <a class="profile-a-2" href="/suattnd/{{$profile->id}}/user/{{$users->id}}" class="button">Thay đổi thông tin tài khoản</a>
          </div>

          <div class="profile-dx">
            <a class="profile-a-2" href="{{route('views', $users->id)}}" class="button">quay lại trang chủ</a>
          </div>
          @if($users->role == 2)
          <div class="profile-dx">
            <a class="profile-a-2" href="{{ route('cauhinh.index') }}" class="button">Đăng nhập vào admin</a>
          </div>
          @endif

          <div class="profile-dx">
            <a class="profile-a-2" href="{{route('vipuser', $users->id)}}" class="button">@if(empty($thanhtoan) != 'Null') nâng câp VIP @endif @if(empty($thanhtoan)) mua gói VIP @endif</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>