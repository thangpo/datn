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
            <form action="{{route('capnhatanh', $profile->id)}}" enctype="multipart/form-data" method="POST" style="border: 1px solid;">
                <h1 style="text-align: center;">Thêm thông tin khách hàng</h1>
                @csrf
                @method('PUT')
                <div style="display: flex; gap: 20px;">
                    <div>
                        <div>
                            <div class="row">
                                <div class="col-md-6">
                                <img style="width: 300px; height: 200px;" src="{{asset('uploads/'.$profile->anhnd)}}" id="img" height="500">
                                </div>
                                <input type="file" name="anhnd" accept="image/*" class="form-control-file" class="@error ('image') is-invalid @enderror" id="input">
                            </div>
                        </div>
                    </div>


                    <button type="submit" style="width: 100%; margin-top: 20px; height: 30px;">Sửa ảnh người dùng</button>
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