<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Animation xoay đĩa nhạc</title>
  <style>
.container {width: 300px;height: 300px;position: relative;}
.disc {width: 250px;height: 250px;border-radius: 50%;background-size: cover;position: absolute;top: 25px;left: 25px;animation: spin 5s linear infinite;}
@keyframes spin {
from {transform: rotate(0deg);}
to {transform: rotate(360deg);}}
@keyframes play {
0%, 10% {transform: rotate(-30deg);}
11%, 100% {transform: rotate(0deg);}}
  </style>
</head>
<body>

<div style="display: flex; gap: 200px;">
    @foreach ($nhomnhac as $nl)
        <div style="">
            <h1>Quản lý nhạc của nhóm nhạc {{$nl->tennn}}</h1>
        </div>

        <a style="text-decoration: none; background: gray; color: white; height: 90px;" href="{{route('themn', $nl->id)}}"><img src="{{asset('uploads/'.$nl->logonn)}}" style="max-width: 50px; max-height: 50px; margin-left: 80px;" class="card-img-top" alt="...">
            <h3>Thêm mới thành viên nhóm</h3>
        </a>

        <a style="text-decoration: none; background: gray; color: white; height: 90px;" href="{{route('nhac.index')}}">
            <h3>Quay về trang chủ</h3>
        </a>
    @endforeach
    </div>


@if (Session::has('thongbao'))
    <div class="alert alert-success">
        {{Session::get('thongbao')}}
    </div>
@endif



@foreach ($nhac as $n) 
<div style="border: 1px solid; margin-top: 100px;">
   <div class="container" style="display: flex; gap: 200px; ">
      <div>
         <div style="position: relative;">
            <img style="width: 300px; height: 300px;" src="{{asset('uploads/'.$n->anh)}}" alt="">
            <audio controls><source src="{{asset('audio/'.$n->nhac)}}" type="audio/mpeg"></audio>
         </div>
         <div class="disc" style="background-image: url({{asset('uploads/'.$n->anh)}}); margin-left: 150px;"></div>
         
      </div>

        <div style="width: 400px;">
        @foreach ($nhomnhac as $nl)
            <p style="width: 400px; font-size: 25px;">{{$n->tenn}} {{$nl->tennn}}</p>
        @endforeach
            <p style="width: 400px; font-size: 25px;">{{$n->loainhac}} {{$n->tacgia}}</p>


            <form action="{{route('nhac.destroy', $n->id)}}" method="POST" style="display: flex; gap: 20px;">
               <div style="width: 100px; border: 1px solid; text-align: center;">
                  <a href="{{route('nhac.edit', $n->id)}}" style="text-decoration: none;">Sửa</a>
               </div>
               @csrf
               @method('DELETE')
               <button type="submit" style="width: 100px;">Xóa</button>
           </form>
         </div>
      
   </div>
   </div>
   @endforeach
</body>
</html>