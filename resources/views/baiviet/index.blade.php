@extends('layouts.menu')

@section('content')
<div class="body">
    <div class="row">
        <div class="col1">
            <h1>Quản lý bài viết</h1>
        </div>
        <div class="col2">
            <a href="{{ route('thembaiviet') }}" class="float-end">Thêm mới bài viết</a>
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
                    <th>Tiêu đề bài viết</th>
                    <th>Nội dung bài viết</th>
                    <th>Hình ảnh</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
        </table>
    </div>
    <div class="content">
        <table>
            <tbody>
                @foreach ($baiviet as $bv)
                        <tr>
                            <td>{{$bv->id}}</td>
                            <td>{{$bv->tieude}}</td>
                            <td>{{$bv->noidung}}</td>
                            <td><img src="{{asset('uploads/'.$bv->hinhanh)}}" style="max-width: 200px; max-height: 200px;" class="card-img-top" alt="..."></td>
                            <td>
                                <form action="{{route('baiviet.destroy', $bv->id)}}" method="POST">
                                    <a href="{{route('suabai', $bv->id)}}" class="btn btn-info">Sửa</a>
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