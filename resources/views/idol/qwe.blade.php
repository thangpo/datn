<div style="display: flex; gap: 20px;">

    <div style="float: left;">
      <img style="width: 1000px;" src="https://www.snh48.com/images/ot/mem_h_bt.jpg" alt="">
    
    <!--đặt foreach-->
    <div style="display: grid; grid-template-columns: 1fr 1fr 1fr 1fr; gap: 10px;"> 
    @foreach ($idol as $nn)
    <div style="border: 1px solid; width: 250px; display: flex; justify-content: center; align-items: center;">
      <div style="margin-top: 20px;">
      <div style="border: 1px solid; width: 200px; border-radius: 50%;">
        <img style="width: 200px; height: 200px; border-radius: 50%;" src="{{asset('uploads/'.$nn->anh)}}" alt="">
      </div>
      <div style="text-align: center;">
        <p>{{$nn->tenid}} Tuổi: {{$nn->tuoi}}</p>
        <p>Quên quán: {{$nn->qquan}} Giới tính: {{$nn->gioitinh == 0 ? 'Nam' : 'Nữ'}}</p>
        <p>Cân năng: {{$nn->cannang}} chiều cao: {{$nn->chieucao}}</p>
        <div>
          <form action="{{route('idol.destroy', $nn->id)}}" method="POST">
            <div style="width: 100%; height: 20px; border: 1px solid;">
               <a style="text-decoration: none;" href="{{route('idol.edit', $nn->id)}}">Sửa</a>
            </div>
            @csrf
            @method('DELETE')
            <button type="submit" style="width: 100%; height: 25px; margin-top: 10px;">Xóa</button>
        </form>
        @foreach ($nhomnhac as $nl)
        <div style="width: 100%; height: 20px; border: 1px solid;">
           <a style="text-decoration: none;" href="/hienthius/{{$nn->id}}/nhomnhac/{{$nl->id}}">Cập nhật tk</a>
        </div>
        @endforeach
        </div>
      </div>
    </div>
  </div>
  @endforeach
</div> 

</div>


<div style="float: right; width: 300px;">
    <div class="body">
    <div class="row">
    @foreach ($nhomnhac as $nl)
        <div class="col1">
            <h1>Quản lý thành viên nhóm nhạc {{$nl->tennn}}</h1>
        </div>
<div style="display: flex; align-items: center; justify-content: center; text-align: center;">
        <a style="text-decoration: none;" href="{{route('themmoi', $nl->id)}}"><img src="{{asset('uploads/'.$nl->logonn)}}" style="max-width: 200px; max-height: 200px;" class="card-img-top" alt="...">
           <h3>Thêm mới thành viên nhóm</h3>
        </a>
</div>
<div style="text-align: center; border: 1px solid; height: 20px;">
        <a style="text-decoration: none;" href="{{route('idol.index')}}" class="btn btn-primary float-end">Danh sách tùy chỉnh trang chủ</a>
</div>
    @endforeach
    </div>
</div>
@if (Session::has('thongbao'))
    <div class="alert alert-success">
        {{Session::get('thongbao')}}
    </div>
@endif
    </div>

  </div>