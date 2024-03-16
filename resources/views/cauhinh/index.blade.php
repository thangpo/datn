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
            <h1>Quản lý cấu hình trang website</h1>
        </div>
        <div class="col2">
            <a href="{{ route('cauhinh.create') }}" class="float-end">Thêm mới</a>
        </div>
    </div>
    <form action="" class="d-flex">
        <div class="form-group me-2">
            <input class="form-control" name="key" placeholder="Tìm kiếm banner">
        </div>
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-search">Tìm kiếm</i>
        </button>
    </form>
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
                    <th>Tên trang website</th>
                    <th>Địa chỉ</th>
                    <th>Số điện thoại</th>
                    <th>Email</th>
                    <th>Logo</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
        </table>
    </div>
    <div class="content">
        <table>
            <tbody>
                @foreach ($cauhinh as $ch)
                        <tr>
                            <td>{{$ch->id}}</td>
                            <td>{{$ch->tenws}}</td>
                            <td>{{$ch->diachi}}</td>
                            <td>{{$ch->sdt}}</td>
                            <td>{{$ch->email}}</td>
                            <td><img src="{{asset('uploads/'.$ch->logo)}}" style="max-width: 200px; max-height: 200px;" class="card-img-top" alt="..."></td>
                            <td>
                                <form action="{{route('cauhinh.destroy', $ch->id)}}" method="POST">
                                    <a href="{{route('cauhinh.edit', $ch->id)}}" class="btn btn-info">Sửa</a>
                                    @csrf
                                    @method('DELETE')
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