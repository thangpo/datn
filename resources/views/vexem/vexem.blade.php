@extends('layouts.menu')

@section('content')

<div style="text-decoration: none;">
    <a style="text-decoration: none;" href="{{route('themvexem', $lichtrinh->id)}}">Thêm mới vé xem công diễn</a>
</div>

    <div class="header">
        <table>
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên lịch trình</th>
                    <th>Tên vé xem</th>
                    <th>Giá vé</th>
                    <th>Số lượng</th>
                    <th>loại vé</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
        </table>
    </div>
    <div class="content">
        <table>
            <tbody>
                @foreach ($vexem as $vx)
                <tr>
                    <td>{{$vx->id}}</td>
                    @foreach ($lichtrinhs as $lts)
                    <td>{{$lts->tenlt}}</td>
                    @endforeach
                    <td>{{$vx->tenve}}</td>
                    <td>{{$vx->giave}}</td>
                    <td>{{$vx->soluong}}</td>
                    <td>
                        @if($vx->loaighe == 1)
                        ghế thường thôi
                        @endif
                        @if($vx->loaighe == 2)
                        ghế thương gia
                        @endif
                        @if($vx->loaighe == 3)
                        ghế đặc biệt
                        @endif
                    </td>
                    <td>
                        <form action="{{route('xoavexemtt', $vx->id)}}" method="POST">
                            <a style="text-decoration: none;" href="{{route('suavexemtt', $vx->id)}}" class="btn btn-info">Sửa</a><br>
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