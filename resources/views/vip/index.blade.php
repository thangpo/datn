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
                <h1>Quản lý người đùng mua vip</h1>
            </div>
        </div>
    </div>
    <div class="col2">
        <a href="{{ route('themvip') }}" class="float-end">Thêm mới vip</a>
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
                    <th>Tên VIP</th>
                    <th>Giá bán</th>
                    <th>Ngày hết hạn</th>
                    <th>Đặc quyền</th>
                    <th>Ngày khởi tạo</th>
                    <th></th>
                </tr>
            </thead>
        </table>
    </div>
    <div class="content">
        <table>
            <tbody>
                @foreach ($uservip as $usv)
                <tr>
                    <td>{{$usv->id}}</td>
                    <td>{{$usv->ten_vip}}</td>
                    <td>{{$usv->gia}}</td>
                    <td>{{$usv->ngay_hh}}</td>
                    <td>{{$usv->dac_quyen}}</td>
                    <td>{{$usv->created_at}}</td>
                    <td>
                        <form action="{{route('xoavip', $usv->id)}}" method="POST">
                            <a href="{{route('capnhatvip', $usv->id)}}" class="btn btn-info">Sửa</a>
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