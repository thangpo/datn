@extends('layouts.app')

@section('content')
<h1>Thêm mới vé xem công diễn</h1>
<a href="{{route('themmoivx', $lichtrinh->id)}}" class="btn btn-primary float-end">Danh sách vé xem</a>



<div class="container">
    <div class="card">
        <div class="card-body">
            <form action="{{route('vexemtt')}}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="form-group">
                    <strong>Lịch trình</strong>
                    <input type="text" name="lichtrinh_id" class="form-control" value="{{$lichtrinh->id}}">
                </div>
                <div class="form-group">
                    <strong>Tên vé xem</strong>
                    <input type="text" name="tenve" class="form-control" value="{{$lichtrinh->tenlt}}">
                </div>
                <div class="form-group">
                    <strong>Giá vé xem</strong>
                    <input type="text" name="giave" class="form-control" placeholder="Nhập giá vé xem">
                </div>
                <div class="form-group">
                    <strong>Số lượng vé xem</strong>
                    <input type="text" name="soluong" class="form-control" placeholder="Nhập tên sản phẩm">
                </div>
                <div class="form-group">
                    <strong>Số lượng vé xem</strong>
                    <select name="loaighe">
                        <option value="1">Vé phổ thông</option>
                        <option value="2">Vé thượng gia</option>
                        <option value="3">Vé đặc biệt</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success mt-2">Thêm sản phẩm</button>
            </form>
        </div>
    </div>
</div>

@endsection