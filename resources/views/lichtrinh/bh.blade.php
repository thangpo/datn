<div class="body">
    <div class="row">
    @foreach ($nhomnhac as $nl)
        <div class="col1">
            <h1>Quản lý lịch trình nhóm {{$nl->tennn}}</h1>
        </div>
        <div style="display: flex; gap: 30px;">
        <div style="width: 400px; border: 1px solid; text-align: center;">
            <a style="text-decoration: none;" href="{{route('lichtrinh.index')}}"><h3>Quay lại trang quản lý</h3></a>
        </div>
        <div style="width: 400px; border: 1px solid; text-align: center;">
            <a style="text-decoration: none;" href="{{route('themmoilt', $nl->id)}}"><h3>Thêm mới lịch trình</h3></a>
        </div>
        </div>
        
        
    @endforeach
    </div>
</div>
@if (Session::has('thongbao'))
    <div class="alert alert-success">
        {{Session::get('thongbao')}}
    </div>
@endif
    

<div style="display: flex; gap: 60px;">

<div style="float: left;">
@foreach ($lichtrinh as $lt)
    <div style="display: flex; gap: 50px; margin-top: 20px;">
      <div>
        <img style="width: 400px; height: 200px;" src="{{asset('uploads/'.$lt->anhbn)}}" alt="">
        @foreach ($nhomnhac as $nl)
        <p>{{$nl->tennn}}</p>
        @endforeach
      </div>
      <div style="border: 1px solid;">
      </div>
      <div>
        <p>{{$lt->tenlt}}</p>
        <p>{{$lt->thoigian}}</p>
        <p>{{$lt->diadiem}}</p>
      </div>
      @php
        $cktrinhdien = json_decode($lt->cktrinhdien);
      @endphp
      <div>
      @foreach($cktrinhdien as $kc)
        <p>{{$kc}}</p>
    @endforeach
      </div>

      <div style="margin-left: 50px; margin-top: 20px;">
        @foreach ($nhomnhac as $nl)
        <div style="width: 100%; border: 1px solid; margin-top: 10px;">
            <a style="text-decoration: none;" href="/emaillichtrinh/{{$nl->id}}/lichtrinh/{{$lt->id}}">Thông báo đến thành viên nhóm</a><br>
        </div>
        @endforeach
          <form action="{{route('lichtrinh.destroy', $lt->id)}}" method="POST">
            <div style="width: 100%; border: 1px solid; text-align: center; margin-top: 10px;"><a style="text-decoration: none;" href="{{route('lichtrinh.edit', $lt->id)}}" class="btn btn-info">Sửa</a></div>
                <div style="width: 100%; border: 1px solid; text-align: center; margin-top: 10px;">
                    <a style="text-decoration: none;" href="{{route('themmoivx', $lt->id)}}" class="btn btn-info">Them moi ve</a>
                </div>
                
                @csrf
                @method('DELETE')
              <button type="submit" style="width: 100%; margin-top: 10px;">Xóa</button>
          </form>
      </div>
    </div>
    @endforeach
    </div>

<div style="float: right;">
    <div style="display: flex; justify-content: center; align-items: center;">
        <img src="{{asset('uploads/'.$nl->logonn)}}" style="max-width: 400px; max-height: 400px;" class="card-img-top" alt="...">
            
    </div>
</div>


  </div>