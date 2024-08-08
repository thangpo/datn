<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/sanpham.css') }}">
</head>

<body>
    @extends('layouts.menu')

    @section('content')
    <div class="col1">
        <h1>Quản lý danh mục sản phẩm {{$danhmuc->ten_sanpham}}</h1>
    </div>
    <div style="display: flex; gap: 20px;">

        <a href="{{ route('danhsachdm') }}" class="button2">
            <svg height="16" width="16" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1024 1024">
                <path d="M874.690416 495.52477c0 11.2973-9.168824 20.466124-20.466124 20.466124l-604.773963 0 188.083679 188.083679c7.992021 7.992021 7.992021 20.947078 0 28.939099-4.001127 3.990894-9.240455 5.996574-14.46955 5.996574-5.239328 0-10.478655-1.995447-14.479783-5.996574l-223.00912-223.00912c-3.837398-3.837398-5.996574-9.046027-5.996574-14.46955 0-5.433756 2.159176-10.632151 5.996574-14.46955l223.019353-223.029586c7.992021-7.992021 20.957311-7.992021 28.949332 0 7.992021 8.002254 7.992021 20.957311 0 28.949332l-188.073446 188.073446 604.753497 0C865.521592 475.058646 874.690416 484.217237 874.690416 495.52477z"></path>
            </svg>
            <span>Quay lại danh mục</span>
        </a>

        <div>
            <a style="text-decoration: none;" href="{{ route('thungracsp', $danhmuc->id) }}" class="btn2"><i class="animation"></i>Thùng rác<i class="animation"></i></a>
        </div>

        <a href="{{ route('themsp', $danhmuc->id) }}" style="text-decoration: none;" class="continue-application">
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
            </div>Thêm mới sản phẩm
        </a>
    </div>
    @foreach ($anhsp as $asp)
    @endforeach
    @if (Session::has('thongbao'))
    <div class="alert alert-success">
        {{Session::get('thongbao')}}
    </div>
    @endif

    <div class="scrollable-div">
        @foreach ($anhsp as $asp)
        @if($asp->xoa_mem == 0 && $danhmuc->id == $asp->danhmuc_id)
        <div class="card">
            <div class="bg">
                @foreach ($sanpham as $sp)
                @if($sp->id == $asp->sanpham_id)
                <a href="{{ route('listanh', $sp->id) }}">
                    <img src="{{asset('uploads/'.$sp->hinh_anh)}}" style="width: 100%; max-height: 200px;" class="card-img-top" alt="...">
                </a>
                @endif
                @endforeach
                <div style="text-align: center;">
                    <div style="height: 200px;">
                        <h1 @if($asp->loai_hang == 1)  style="color: red;" @endif>{{$asp->ten_sanpham}}</h1>
                        <h5>Giá bán: {{$asp->gia_sanpham}}</h5>
                        <h5>Mô tả: {{$asp->mo_ta}}</h5>
                        <h5>Ngày ra mắt: {{$asp->created_at}}</h5>
                    </div>

                    <div style="width: 100%; display: flex; justify-content: center; align-items: center;">
                        <div style="margin-top: 60px;">
                            @foreach ($sanpham as $sp)
                            @if($sp->id == $asp->sanpham_id)
                            <form action="{{route('xoamemsp', $sp->id)}}" method="POST" style="display: flex; gap: 20px;">
                                <a href="{{route('suasp', $sp->id)}}" class="Btn">Sửa <svg class="svg" viewBox="0 0 512 512">
                                        <path d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"></path>
                                    </svg></a>
                                @csrf
                                @method('PUT')
                                <div class="form-group" style="display: none;">
                                    <input type="text" name="xoa_mem" class="form-control" value="1">
                                </div>
                                <button type="submit" class="tooltip"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" height="25" width="25">
                                        <path fill="#6361D9" d="M8.78842 5.03866C8.86656 4.96052 8.97254 4.91663 9.08305 4.91663H11.4164C11.5269 4.91663 11.6329 4.96052 11.711 5.03866C11.7892 5.11681 11.833 5.22279 11.833 5.33329V5.74939H8.66638V5.33329C8.66638 5.22279 8.71028 5.11681 8.78842 5.03866ZM7.16638 5.74939V5.33329C7.16638 4.82496 7.36832 4.33745 7.72776 3.978C8.08721 3.61856 8.57472 3.41663 9.08305 3.41663H11.4164C11.9247 3.41663 12.4122 3.61856 12.7717 3.978C13.1311 4.33745 13.333 4.82496 13.333 5.33329V5.74939H15.5C15.9142 5.74939 16.25 6.08518 16.25 6.49939C16.25 6.9136 15.9142 7.24939 15.5 7.24939H15.0105L14.2492 14.7095C14.2382 15.2023 14.0377 15.6726 13.6883 16.0219C13.3289 16.3814 12.8414 16.5833 12.333 16.5833H8.16638C7.65805 16.5833 7.17054 16.3814 6.81109 16.0219C6.46176 15.6726 6.2612 15.2023 6.25019 14.7095L5.48896 7.24939H5C4.58579 7.24939 4.25 6.9136 4.25 6.49939C4.25 6.08518 4.58579 5.74939 5 5.74939H6.16667H7.16638ZM7.91638 7.24996H12.583H13.5026L12.7536 14.5905C12.751 14.6158 12.7497 14.6412 12.7497 14.6666C12.7497 14.7771 12.7058 14.8831 12.6277 14.9613C12.5495 15.0394 12.4436 15.0833 12.333 15.0833H8.16638C8.05588 15.0833 7.94989 15.0394 7.87175 14.9613C7.79361 14.8831 7.74972 14.7771 7.74972 14.6666C7.74972 14.6412 7.74842 14.6158 7.74584 14.5905L6.99681 7.24996H7.91638Z" clip-rule="evenodd" fill-rule="evenodd"></path>
                                    </svg>
                                    <span class="tooltiptext">Cho vào thùng rác</span></button>
                            </form>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="blob"></div>
        </div>
        @endif
        @endforeach

        @foreach ($sanphamchuaanh as $sp)
        @if($sp->xoa_mem == 0 && $danhmuc->id == $sp->danhmuc_id)
        <div class="card" style="background-color: gray;">
            <div class="bg">
                <a href="{{ route('listanh', $sp->id) }}">
                    <img src="{{asset('uploads/'.$sp->hinh_anh)}}" style="width: 100%; max-height: 200px;" class="card-img-top" alt="...">
                </a>
                <div style="text-align: center;">
                    <div style="height: 200px;">
                        <a href="{{ route('listanh', $sp->id) }}" style="text-decoration: none;">
                            <h1 @if($sp->loai_hang == 1)  style="color: red;" @endif> Vui lòng thêm ảnh phụ</h1>
                        </a>
                    </div>

                    <div style="width: 100%; display: flex; justify-content: center; align-items: center;">
                        <div style="margin-top: 60px;">
                            <form action="{{route('xoamemsp', $sp->id)}}" method="POST" style="display: flex; gap: 20px;">
                                <a href="{{route('suasp', $sp->id)}}" class="Btn">Sửa <svg class="svg" viewBox="0 0 512 512">
                                        <path d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"></path>
                                    </svg></a>
                                @csrf
                                @method('PUT')
                                <div class="form-group" style="display: none;">
                                    <input type="text" name="xoa_mem" class="form-control" value="1">
                                </div>
                                <button type="submit" class="tooltip"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" height="25" width="25">
                                        <path fill="#6361D9" d="M8.78842 5.03866C8.86656 4.96052 8.97254 4.91663 9.08305 4.91663H11.4164C11.5269 4.91663 11.6329 4.96052 11.711 5.03866C11.7892 5.11681 11.833 5.22279 11.833 5.33329V5.74939H8.66638V5.33329C8.66638 5.22279 8.71028 5.11681 8.78842 5.03866ZM7.16638 5.74939V5.33329C7.16638 4.82496 7.36832 4.33745 7.72776 3.978C8.08721 3.61856 8.57472 3.41663 9.08305 3.41663H11.4164C11.9247 3.41663 12.4122 3.61856 12.7717 3.978C13.1311 4.33745 13.333 4.82496 13.333 5.33329V5.74939H15.5C15.9142 5.74939 16.25 6.08518 16.25 6.49939C16.25 6.9136 15.9142 7.24939 15.5 7.24939H15.0105L14.2492 14.7095C14.2382 15.2023 14.0377 15.6726 13.6883 16.0219C13.3289 16.3814 12.8414 16.5833 12.333 16.5833H8.16638C7.65805 16.5833 7.17054 16.3814 6.81109 16.0219C6.46176 15.6726 6.2612 15.2023 6.25019 14.7095L5.48896 7.24939H5C4.58579 7.24939 4.25 6.9136 4.25 6.49939C4.25 6.08518 4.58579 5.74939 5 5.74939H6.16667H7.16638ZM7.91638 7.24996H12.583H13.5026L12.7536 14.5905C12.751 14.6158 12.7497 14.6412 12.7497 14.6666C12.7497 14.7771 12.7058 14.8831 12.6277 14.9613C12.5495 15.0394 12.4436 15.0833 12.333 15.0833H8.16638C8.05588 15.0833 7.94989 15.0394 7.87175 14.9613C7.79361 14.8831 7.74972 14.7771 7.74972 14.6666C7.74972 14.6412 7.74842 14.6158 7.74584 14.5905L6.99681 7.24996H7.91638Z" clip-rule="evenodd" fill-rule="evenodd"></path>
                                    </svg>
                                    <span class="tooltiptext">Cho vào thùng rác</span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blob"></div>
        </div>

        @endif
        @endforeach
    </div>

    @endsection
</body>

</html>