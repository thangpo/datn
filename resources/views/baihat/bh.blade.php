@if (Session::has('thongbao'))
    <div class="alert alert-success">
        {{Session::get('thongbao')}}
    </div>
@endif

<div style="display: flex; gap: 20px;">

    <div style="float: left;">
            <div class="col1">
                <h1>Quản lý MV của nhóm {{$nhomnhac->tennn}}</h1>
            </div>
            <div style="display: flex; justify-content: center; align-items: center; text-align: center;">
                <a style="text-decoration: none;" href="{{route('thembh', $nhomnhac->id)}}"><img src="{{asset('uploads/'.$nhomnhac->logonn)}}" style="max-width: 200px; max-height: 200px;" class="card-img-top" alt="...">
                <h3>Thêm mới thành viên nhóm</h3>
                </a>
            </div>

            <div>
                <a href="{{route('baihat.index')}}">
                  <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M19 21a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14zM12 7v4h5v2h-5v4l-5-5 5-5z"></path></svg>
                </a>
            </div>
    </div>

    

<div style="float: right;">
@foreach ($baihat as $bh)
<div style="margin-top: 20px; display: flex;">

<div style="height: 200px;">
  <img style="width: 400px; height: 200px; position: absolute;" src="{{asset('uploads/'.$bh->anhbh)}}" alt="">
  <div style="position: absolute; color: white; margin-left: 40px; margin-top: 150px;">
    <p style="font-size: 18px;">[{{$nhomnhac->tennn}}], {{$bh->tenbh}}, {{$bh->theloai}}, {{$bh->view_count}}</p>
  </div>
</div>

<div style="margin-left: 400px;">
  <video width="400" height="200" controls class="thumb" data-full="{{ asset('videos/'.$bh->nhac) }}">
    <source src="{{ asset('videos/'.$bh->nhac) }}">
</video>
</div>

<div style="width: 100px;">
    <form action="{{route('thongbapvd', $bh->id)}}">
            @csrf
            <input type="text" name="nhomnhac_id" value="{{$nhomnhac->id}}" style="position: absolute; left: -999px;">
            <button type="submit">Thông báo người dùng</button>
        </form>

        <form action="{{route('baihat.destroy', $bh->id)}}" method="POST">
            <div style="width: 100%; border: 1px solid; height: 30px; text-align: center;">
                <a style="text-decoration: none;" href="{{route('baihat.edit', $bh->id)}}" class="btn btn-info">Sửa</a>
            </div>
            @csrf
            @method('DELETE')
            <button type="submit" style="width: 100%; margin-top: 85px; height: 30px;">Xóa</button>
    </form>
</div>
    
</div>
@endforeach
</div>

</div>