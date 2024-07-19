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
          <h1>Quản lý danh mục sản phẩm ăn theo</h1>
        </div>

        <div style="width: 200px; height: 30px; border: 1px solid; text-align: center; margin-top: 30px;">
          <a style="text-decoration: none;" href="{{ route('themmoidm') }}">Thêm mới danh mục sản phẩm</a>
        </div>

        <div style="width: 200px; height: 30px; border: 1px solid; text-align: center; margin-top: 30px;">
          <a style="text-decoration: none;" href="{{ route('cauhinh.index') }}">Quay lại trang chủ</a>
        </div>

        <div style="width: 200px; height: 30px; border: 1px solid; text-align: center; margin-top: 30px;">
          <a style="text-decoration: none;" href="{{ route('thungracdm') }}">Các danh mục sản phẩm đã xóa</a>
        </div>

      </div>
    </div>


    <div style="height: 100%; margin-top: 20px; float: right;">
      <div style="display: flex; justify-content: center; align-items: center; ">
        <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 20px;">
          @foreach ($danhmuc as $dm)
          @if($dm->xoa_mem == 0)
          <div style="display: flex; justify-content: center; align-items: center; border: 1px solid;">

            <div>
              <a href="{{ route('danhsachsp', $dm->id) }}">
              <div style="display: flex; justify-content: center; align-items: center;">
                <img style="width: 200px; height: 200px; margin-top: 10px;" src="{{asset('uploads/'.$dm->hinh_anh)}}" alt="">
              </div>


              <div style="text-align: center;">
                <h1>{{$dm->ten_sanpham}}</h1>
              <!--  <h2>Số lượng thành viên: </h2> -->
              </div>

              <div style="display: flex; justify-content: center; align-items: center;">
                <form action="{{route('xoamemdm', $dm->id)}}" method="POST" style="display: flex; gap: 20px;">
                <div style="width: 100px; border: 1px solid; text-align: center; background: white; height: 30px;">
                    <a href="{{route('capnhatdm', $dm->id)}}" style="text-decoration: none;">Sửa</a>
                  </div>
                  @csrf
                  @method('PUT')
                  <input type="text" value="1" name="xoa_mem" style="display: none;">
                  <button type="submit" style="width: 100px;">chuyển vào thùng rác</button>
                </form>
              </div>
              </a>
            </div>
          </div>
          @endif
          @endforeach
        </div>
      </div>
    </div>

  </div>
</body>

</html>