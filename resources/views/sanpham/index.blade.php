<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="table.css">
</head>

<body>
    @extends('layouts.menu')

    @section('content')
    <div class="body">
        <div class="row">
            <div class="col1">
                <h1>Quản lý danh mục sản phẩm {{$danhmuc->ten_sanpham}}</h1>
            </div>
        </div>
    </div>
    <div class="col2">
        <a href="{{ route('themsp', $danhmuc->id) }}" class="float-end">Thêm mới sản phẩm</a>
    </div>
    @if (Session::has('thongbao'))
    <div class="alert alert-success">
        {{Session::get('thongbao')}}
    </div>
    @endif
    <div class="header">
        <table>
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá bán</th>
                    <th>Hình ảnh</th>
                    <th>Mô tả sản phẩm</th>
                    <th>ngày tạo sản phẩm'</th>
                    <th>Chức năng</th>
                </tr>
            </thead>
        </table>
    </div>
    <div class="content">
        <table>
            <tbody>
                @foreach ($sanpham as $sp)
                <tr>
                    <td>{{$sp->id}}</td>
                    <td>{{$sp->ten_sanpham}}</td>
                    <td>{{$sp->gia_sanpham}}</td>
                    <td><img src="{{asset('uploads/'.$sp->hinh_anh)}}" style="max-width: 200px; max-height: 200px;" class="card-img-top" alt="..."></td>
                    <td>{{$sp->mo_ta}}</td>
                    <td>{{$sp->created_at}}</td>
                    <td>
                        <form action="{{route('xoavip', $sp->id)}}" method="POST">
                            <a href="{{route('capnhatvip', $sp->id)}}" class="btn btn-info">Sửa</a>
                            @csrf
                            <button type="submit" class="btn btn-danger">Xóa</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endsection
</body>

</html>