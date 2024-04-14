@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">


        <div class="card-body" style="display: flex; justify-content: center; align-items: center; margin-top: 20px; gap: 20px;">

            <div>
                <div class="row">
                    <div class="col-md-6">
                        <img style="width: 450px; height: 450px;" src="http://127.0.0.1:8000/uploads/1706175766.jpg" alt="">
                    </div>
                </div>
            </div>
            <form action="{{route('capnhatttnd', $profile->id)}}" enctype="multipart/form-data" method="POST" style="border: 1px solid;">
                <h1 style="text-align: center;">Sửa thông tin khách hàng</h1>
                @csrf
                @method('PUT')
                <div style="display: flex; gap: 20px;">

                    <div>
                        <div class="mb-4" style="position: absolute; left: -999px;">
                            <input class="input" type="number" name="users_id" value="{{$users->id}}">
                        </div>
                        <div class="form-group" style="width: 300px; margin-left: 20px; margin-top: 20px;">
                            <strong>Tên Người dùng</strong><br>
                            <input style="width: 200px; height: 30px; border-top: none; border-left: none; border-right: none;" type="text" name="tennd" class="form-control" value="{{$profile->tennd}}">
                        </div>

                        <div class="form-group" style="width: 300px; margin-left: 20px; margin-top: 20px;">
                            <strong>Tuổi người dùng</strong><br>
                            <input style="width: 200px; height: 30px; border-top: none; border-left: none; border-right: none;" type="text" name="tuoi" class="form-control" value="{{$profile->tuoi}}">
                        </div>

                    </div>

                    <div>

                        <div class="form-group" style="width: 300px; margin-left: 20px; margin-top: 20px;">
                            <strong>Địa chỉ người dùng</strong><br>
                            <input style="width: 200px; height: 30px; border-top: none; border-left: none; border-right: none;" type="text" name="diachi" class="form-control" value="{{$profile->diachi}}">
                        </div>

                        <div class="form-group" style="width: 300px; margin-left: 20px; margin-top: 20px;">
                            <strong>số điện thoại</strong><br>
                            <input style="width: 200px; height: 30px; border-top: none; border-left: none; border-right: none;" type="number" name="sdt" class="form-control" value="{{$profile->sdt}}">
                        </div>

                        <div class="form-group" style="width: 300px; margin-top: 20px;">
                            <label for="photo">Giới tính</label>
                            <input type="radio" name="gioitinh" value="0" {{ $profile->gioitinh == 0 ? 'checked' : '' }}>
                            <label for="">Nam</label>
                            <input type="radio" name="gioitinh" value="1" {{ $profile->gioitinh == 1 ? 'checked' : '' }}>
                            <label for="">Nữ</label>
                        </div>
                    </div>
                </div>


                <button type="submit" style="width: 100%; margin-top: 20px; height: 30px;">Thêm thông tin người dùng</button>
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="{{ asset('upload_file/jquery/dist/jquery.min.js')}}"></script>
<script src="{{ asset('upload_file/input-mask/jquery.inputmask.js') }}"></script>
<script src="{{ asset('upload_file/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
<script>
    let img = document.getElementById('img');
    let input = document.getElementById('input');

    input.onchange = (e) => {
        if (input.files[0])
            img.src = URL.createObjectURL(input.files[0]);
    };
</script>

@endsection