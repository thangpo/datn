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
            <h1>Quản lý banner trang chủ</h1>
        </div>
        <div class="col2">
            <a href="{{ route('banner.create') }}" class="float-end">Thêm mới Banner</a>
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
                    <th>banner1</th>
                    <th>ngày thêm</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
        </table>
    </div>
    <div class="content">
        <table>
            <tbody>
                @foreach ($banner as $bn)
                        <tr>
                            <td>{{$bn->id}}</td>
                            <td><img src="{{asset('uploads/'.$bn->anhbn)}}" style="max-width: 200px; max-height: 200px;" class="card-img-top" alt="..."></td>
                            <td>{{$bn->	created_at}}</td>
                            <td>
                                <form action="{{route('banner.destroy', $bn->id)}}" method="POST">
                                    <a href="{{route('banner.edit', $bn->id)}}" class="btn btn-info">Sửa</a>
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