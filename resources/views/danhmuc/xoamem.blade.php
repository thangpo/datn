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
                    <a style="text-decoration: none;" href="{{ route('danhsachdm') }}">Quay lại trang chủ</a>
                </div>

            </div>
        </div>


        <div style="height: 100%; margin-top: 20px; float: right;">
            <div style="display: flex; justify-content: center; align-items: center; ">
                <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 20px;">
                    @foreach ($danhmuc as $dm)
                    @if($dm->xoa_mem == 1)
                    <div style="display: flex; justify-content: center; align-items: center; border: 1px solid;">

                        <div>
                            <div style="display: flex; justify-content: center; align-items: center;">
                                <img style="width: 200px; height: 200px; margin-top: 10px;" src="{{asset('uploads/'.$dm->hinh_anh)}}" alt="">
                            </div>


                            <div style="text-align: center;">
                                <h1>{{$dm->ten_sanpham}}</h1>
                                <!--  <h2>Số lượng thành viên: </h2> -->
                            </div>

                            <div style="display: flex; justify-content: center; align-items: center;">
                                <form action="{{route('xoamemdm', $dm->id)}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input type="text" value="0" name="xoa_mem" style="display: none;">
                                    <button type="submit" style="width: 100px;">Quay lại</button>
                                </form>

                                <form action="{{route('xoavinhvien', $dm->id)}}" method="POST">
                                    @csrf
                                    <input type="text" value="0" name="xoa_mem" style="display: none;">
                                    <button type="submit" style="width: 100px;">Xóa vĩnh viễn</button>
                                </form>
                            </div>
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