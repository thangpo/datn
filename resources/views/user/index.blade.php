@extends('layouts.menu')

@section('content')
<div class="body">
    <div class="row">
    @foreach ($idol as $id)
        <div class="col1">
            <h1>Quản lý thành viên nhóm nhạc {{$id->tenid}}</h1>
        </div>
        @if($users->isEmpty())
        <a href="/themus/{{$idols->id}}/nhomnhac/{{$nhomnhac->id}}"><img src="{{asset('uploads/'.$id->anh)}}" style="max-width: 200px; max-height: 200px;" class="card-img-top" alt="...">
            <h3>Thêm mới thành viên nhóm</h3>
        </a>
        @endif
    @endforeach
    </div>
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
                    <th>Tên thành viên</th>
                    <th>Tên tài khoản</th>
                    <th>Email</th>
                    <th>Phân quyền</th>
                    <th>Ảnh</th>
                    <th>Quê quán</th>
                    <th>ẢNh</th>
                    <th>Cân nặng</th>
                </tr>
            </thead>
        </table>
    </div>
    <div class="content">
        <table>
            <tbody>
                @foreach ($users as $nn)
                        <tr>
                            <td>{{$nn->id}} </td>
                            @foreach ($idol as $nl)
                             <td>{{$nl->tenid}}</td>
                            @endforeach
                            <td>{{$nn->email}}</td>
                            <td>{{$nn->name}}</td>
                            <td>
                                @if($nn->role == 0)
                                <p>Người dùng</p>
                                @endif
                                @if($nn->role == 1)
                                <p>Thần tượng</p>
                                @endif
                                @if($nn->role == 2)
                                <p>Admin</p>
                                @endif
                            </td>
                            @foreach ($idol as $nl)
                            <td>{{$nl->qquan}}</td>
                            @endforeach
                            @foreach ($idol as $nl)
                            <td><img src="{{asset('uploads/'.$nl->anh)}}" style="max-width: 200px; max-height: 200px;" class="card-img-top" alt="..."></td>
                            @endforeach
                            @foreach ($idol as $nl)
                            <td>{{$nl->cannang}}</td>
                            @endforeach
                            @foreach ($idol as $nl)
                            <td>{{$nl->gioitinh == 0 ? 'nam' : 'nu'}}</td>
                            @endforeach
                            <td>
                            <form method="POST">
                            <a href="{{route('user.edit', $nn->id)}}" class="btn btn-info">Sửa</a>
                                </form>
                        </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
@endsection