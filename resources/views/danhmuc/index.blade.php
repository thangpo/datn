<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="{{ asset('css/danhmuc.css') }}">
</head>

<body>
  @if (Session::has('thongbao'))
  <div class="alert alert-success">
    {{Session::get('thongbao')}}
  </div>
  @endif



  <div style="display: flex; gap: 50px;">

    <div class="body" style="float: left;">
      <div>
        <div class="col1">
          <h1>Quản lý danh mục sản phẩm ăn theo</h1>
        </div>


        <a style="text-decoration: none;" href="{{ route('themmoidm') }}" class="continue-application">
          <div>
            <div class="pencil"></div>
            <div class="folder">
              <div class="top">
                <svg viewBox="0 0 24 27">
                  <path d="M1,0 L23,0 C23.5522847,-1.01453063e-16 24,0.44771525 24,1 L24,8.17157288 C24,8.70200585 23.7892863,9.21071368 23.4142136,9.58578644 L20.5857864,12.4142136 C20.2107137,12.7892863 20,13.2979941 20,13.8284271 L20,26 C20,26.5522847 19.5522847,27 19,27 L1,27 C0.44771525,27 6.76353751e-17,26.5522847 0,26 L0,1 C-6.76353751e-17,0.44771525 0.44771525,1.01453063e-16 1,0 Z"></path>
                </svg>
              </div>
              <div class="paper"></div>
            </div>
          </div>
          Thêm mới danh mục sản phẩm
        </a>

        <a style="text-decoration: none;" href="{{ route('cauhinh.index') }}" class="cta">
          <span class="hover-underline-animation"> Quay lại trang chủ </span>
          <svg id="arrow-horizontal" xmlns="http://www.w3.org/2000/svg" width="30" height="10" viewBox="0 0 46 16">
            <path id="Path_10" data-name="Path 10" d="M8,0,6.545,1.455l5.506,5.506H-30V9.039H12.052L6.545,14.545,8,16l8-8Z" transform="translate(30)"></path>
          </svg>
        </a>

        <a style="text-decoration: none;" href="{{ route('thungracdm') }}" class="buttons">
          <button class="btn"><span></span>
            <p data-start="good luck!" data-text="start!" data-title="Vào thừng rác"></p>
          </button>
        </a>

      </div>
    </div>


    <div style="height: 100%; margin-top: 20px; float: right;">
      <div style="display: flex; justify-content: center; align-items: center; ">
        <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 20px;">
          @foreach ($danhmuc as $dm)
          @if($dm->xoa_mem == 0)
          <div style="display: flex; justify-content: center; align-items: center; border: 1px solid; width: 300px;">

            <div>
              <a href="{{ route('danhsachsp', $dm->id) }}" style="text-decoration: none;">
                <div style="display: flex; justify-content: center; align-items: center;">
                  <img style="width: 200px; height: 200px; margin-top: 10px;" src="{{asset('uploads/'.$dm->hinh_anh)}}" alt="">
                </div>


                <div style="text-align: center;">
                  <h1>{{$dm->ten_sanpham}}</h1>
                  <h2>Số lượng sản phẩm: {{$dm->san_pham_an_theo_count}}</h2>
                </div>

                <div style="display: flex; justify-content: center; align-items: center;">
                  <form action="{{route('xoamemdm', $dm->id)}}" method="POST" style="display: flex; gap: 20px;">
                    <div>
                      <a href="{{route('capnhatdm', $dm->id)}}" class="Btn">Sửa
                        <svg viewBox="0 0 512 512" class="svg">
                          <path d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"></path>
                        </svg></a>
                    </div>
                    @csrf
                    @method('PUT')
                    <input type="text" value="1" name="xoa_mem" style="display: none;">
                    <button type="submit" class="button"><svg viewBox="0 0 448 512" class="svgIcon">
                        <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"></path>
                      </svg></button>
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