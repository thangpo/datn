<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@if (Session::has('thongbao'))
    <div class="alert alert-success">
        {{Session::get('thongbao')}}
    </div>
@endif



<div style="display: flex; gap: 50px;">

<div class="body" style="float: left;">
    <div style="">
        <div class="col1">
            <h1>Quản lý nhóm nhạc của TG 48</h1>
        </div>

        <div style="width: 200px; height: 30px; border: 1px solid; text-align: center; margin-top: 30px;">
            <a style="text-decoration: none;" href="{{ route('nhomnhac.create') }}">Thêm mới nhóm nhạc</a>
        </div>
        
        <div style="width: 200px; height: 30px; border: 1px solid; text-align: center; margin-top: 30px;">
            <a style="text-decoration: none;" href="{{ route('cauhinh.index') }}">Quay lại trang chủ</a>
        </div>
    </div>
</div>


<div style="height: 100%; margin-top: 20px; float: right;">
    <div style="display: flex; justify-content: center; align-items: center; ">
    <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 20px;">
 @foreach ($nhomnhac as $nn)
      <div style="display: flex; justify-content: center; align-items: center; border: 1px solid;">
        
        <div>
            <div style="display: flex; justify-content: center; align-items: center;">
              <img style="width: 200px; height: 200px; margin-top: 10px;" src="{{asset('uploads/'.$nn->logonn)}}" alt="">
            </div>
            

            <div style="text-align: center;">
              <h1>{{$nn->tennn}}</h1>
              <h2>Số lượng thành viên: {{$nn->idol_count}}</h2>
            </div>
            
            <div style="display: flex; justify-content: center; align-items: center;">
              <form action="{{route('nhomnhac.destroy', $nn->id)}}" method="POST" style="display: flex; gap: 20px;">
                <div style="width: 100px; border: 1px solid; text-align: center; background: white; height: 30px;">
                  <a href="{{route('nhomnhac.edit', $nn->id)}}" style="text-decoration: none;">Sửa</a>
                </div>
                @csrf
                @method('DELETE')
                <button type="submit" style="width: 100px;">Xóa</button>
            </form>
            </div>
        </div>
        

      </div>
      @endforeach
    </div>
  </div>
  </div>

  </div>
</body>
</html>