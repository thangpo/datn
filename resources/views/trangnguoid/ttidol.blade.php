@extends('layouts.ctidol')

@section('content')
<section>
        <a href="#" id="logo">TG 48</a>

        <label for="toggle-1" class="toggle-menu"><ul><li></li> <li></li> <li></li></ul></label>
        <input type="checkbox" id="toggle-1">

        <nav class="navidol">
        <ul class="ulidol">
        @if(empty($usernd) != 'Null')
        <li class="liidol"><a class="aidol" href="{{route('views', $usernd->id)}}">Trang chủ</a></li>
        <li class="liidol"><a class="aidol" href="{{route('viewvexem', $usernd->id)}}">Đặt vé</a></li>
        <li class="liidol"><a class="aidol" href="{{route('videond', $usernd->id)}}">MV mới</a></li>
        <li class="liidol"><a class="aidol" href="{{route('baidangnd', $usernd->id)}}">Bài đăng</a></li>
        <li class="liidol"><a class="aidol" href="{{route('hienthinus', $usernd->id)}}">Nhạc</a></li>
      @endif
      @if(empty($usernd))
        <li class="liidol"><a class="aidol" href="#">Trang chủ</a></li>
        <li class="liidol"><a class="aidol" href="{{route('baihatview')}}">Nhạc</a></li>
        <li class="liidol"><a class="aidol" href="{{route('videocn')}}">MV mới</a></li>
        <li class="liidol"><a class="aidol" href="#">Đặt vé</a></li>
        <li class="liidol"><a class="aidol" href="#">Nhóm nhạc</a></li>
        <li class="liidol"><a class="aidol" href="#">Công diễn</a></li>
        <li class="liidol"><a class="aidol" href="{{route('baidangall')}}">Bài đăng</a></li>
      @endif
      </ul>
        </nav>
        </header>
        </section>
@foreach ($idol as $nn)
<div class="profile-container">

  <div class="profile-header">
      <img class="profile-photo" src="{{asset('uploads/'.$nn->anh)}}" alt="">
    @if(empty($usernd) != 'Null')
      @if(empty($theodoi))
      <form action="{{route('theodoi', $usernd->id)}}" method="POST">
           @csrf
           <input type="text" name="idol_id" value="{{$nn->id}}" style="position: absolute; left: -999px;">
           <button type="submit" style="width: 300px; height: 30px;">Theo dõi idol</button>
      </form>
      @foreach ($tdidol as $td)
      @if($td->id == $nn->id)
      <p>Số người theo dõi: {{$td->theodoi_count}}</p>
      @endif
      @endforeach
      @endif
@endif

@if(empty($usernd))
<div style="width: 100%; border: 1px solid;">
  <a href="{{route('login')}}">Đăng nhập để theo dõi</a>
</div>
  @foreach ($tdidol as $td)
    @if($td->id == $nn->id)
      <p>Số người theo dõi: {{$td->theodoi_count}}</p>
    @endif
  @endforeach
@endif
      
@if(empty($usernd) != 'Null')
      @if(empty($theodoi) != 'Null')
      <button style="width: 300px; height: 30px;"><a href="/botheodoi/{{$nn->id}}/user/{{$usernd->id}}">Bỏ theo dõi</a></button>
      @foreach ($tdidol as $td)
      @if($td->id == $nn->id)
      <p>Số người theo dõi: {{$td->theodoi_count}}</p>
      @endif
      @endforeach
      @endif
@endif   
  </div>



  <div class="profile-info">
    <h2>Tên thần tượng: {{$nn->tenid}} - Nhóm nhạc: ({{$nhomnhac->tennn}})</h2>
    <div class="tth" style="margin-top: 30px;">
       <div class="tth2">
       @foreach ($idol as $nn)
        <p style="margin-top: 10px;">Chiều cao: <strong>{{$nn->chieucao}}cm</strong></p>
        <p style="margin-top: 10px;">cân nặng: <strong>{{$nn->cannang}}KG</strong></p>
        <p style="margin-top: 10px;">Tuổi thần tượng: <strong>{{$nn->tuoi}}</strong></p>
        <p style="margin-top: 10px;">Quê quán: <strong>{{$nn->qquan}}</strong></p>
        @foreach ($users as $nn)
        <p>Email liên hệ: {{$nn->email}}</p>
        @endforeach
       </div>
       <div class="tth3" style="margin-left: 40px;">
        <img class="imgtt" src="{{asset('uploads/'.$nhomnhac->logonn)}}" alt="">
       </div>
    </div>

    @endforeach

<div style="margin-top: 50px;">
    @foreach ($idol as $nn)
    <h2>Hoạt động của {{$nn->tenid}} sắp tới</h2>
    @endforeach
    <div class="social-icons">
      <div class="container">
        @foreach ($lichtrinh as $lt)
        <div class="item">
          <h2 class="h22">{{$lt->tenlt}}</h2>
          <p class="p2">
            Thời gian diễn ra: {{$lt->thoigian}}, Địa điểm tổ chức: {{$lt->diadiem}},
            Số lượng người xem: {{$lt->slve}}.
          </p>
          @php
            $cktrinhdien = json_decode($lt->cktrinhdien);
          @endphp
          <div class="tth">
          <h4 class="h42">@foreach($cktrinhdien as $kc)
                                <p>{{$kc}}</p>
                            @endforeach</h4>
          <img class="img2" src="{{asset('uploads/'.$lt->anhbn)}}" alt="">
          </div>
        </div>
        @endforeach
       
      </div>
    </div>
  </div>


  </div>
</div>
@endforeach

<div style="width: 100%; border: 1px solid; text-align: center;">
  <h1>MV đã tham gia của</h1>
</div>

<div>
<style>
.container2 {width: 300px;height: 300px;position: relative;}
.disc {width: 250px;height: 250px;border-radius: 50%;background-size: cover;position: absolute;top: 25px;left: 25px;animation: spin 5s linear infinite;}
@keyframes spin {
from {transform: rotate(0deg);}
to {transform: rotate(360deg);}}
@keyframes play {
0%, 10% {transform: rotate(-30deg);}
11%, 100% {transform: rotate(0deg);}}
  </style>
@foreach ($nhac as $n) 
<div style="border: 1px solid; margin-top: 100px;">
   <div class="container2" style="display: flex; gap: 200px; ">
      <div>
         <div style="position: relative;">
            <img style="width: 300px; height: 300px;" src="{{asset('uploads/'.$n->anh)}}" alt="">
            <audio controls><source src="{{asset('audio/'.$n->nhac)}}" type="audio/mpeg"></audio>
         </div>
         <div class="disc" style="background-image: url({{asset('uploads/'.$n->anh)}}); margin-left: 150px;"></div>
         
      </div>

        <div style="width: 400px;"> 
            <p style="width: 400px; font-size: 25px;">{{$n->tenn}} {{$nhomnhac->tennn}}</p>
            <p style="width: 400px; font-size: 25px;">{{$n->loainhac}} {{$n->tacgia}}</p>
         </div>
      
   </div>
   </div>
   @endforeach
</div>

@endsection