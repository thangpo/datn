@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">


        <div class="card-body" style="display: flex; justify-content: center; align-items: center; margin-top: 20px; gap: 20px;">

            <div>
                <div class="row">
                    <div class="col-md-6">
                        <img style="width: 450px; height: 450px;" src="https://document-export.canva.com/P9EbM/DAF3uMP9EbM/3/thumbnail/0001.png?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAQYCGKMUHWDTJW6UD%2F20240124%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Date=20240124T025642Z&X-Amz-Expires=29588&X-Amz-Signature=01a0abb538839fe53501673280bbad26680a047498fd1e8d427ebee22de97dcb&X-Amz-SignedHeaders=host&response-expires=Wed%2C%2024%20Jan%202024%2011%3A09%3A50%20GMT" alt="">
                    </div>
                    <div style="text-align: center; border: 1px solid; height: 20px;">
                        <a style="text-decoration: none;" href="{{route('danhsachdm')}}" class="btn btn-primary float-end">Danh sách danh mục</a>
                    </div>
                </div>
            </div>

            <form action="{{route('suadm', $danhmuc->id)}}" enctype="multipart/form-data" method="POST" style="border: 1px solid;">
                <h1 style="text-align: center;">Thêm mới danh mục</h1>
                @csrf
                @method('PUT')
                <div style="display: flex; gap: 20px;">

                    <div>
                        <input type="text" value="0" name="xoa_mem" style="display: none;">
                        <div class="form-group" style="width: 300px; margin-left: 20px; margin-top: 20px;">
                            <strong>Tên danh mục</strong><br>
                            <input style="width: 200px; height: 30px; border-top: none; border-left: none; border-right: none;" type="text" name="ten_sanpham" class="form-control" value="{{$danhmuc->ten_sanpham}}">
                        </div>
                    </div>

                    <div>
                        <div class="row">
                            <div class="col-md-6">
                                <img style="width: 300px; height: 200px;" src="{{asset('uploads/'.$danhmuc->hinh_anh)}}" id="img" height="500">
                            </div>
                            <input type="file" name="hinh_anh" accept="image/*" class="form-control-file" class="@error ('image') is-invalid @enderror" id="input">
                        </div>
                    </div>
                </div>


                <button type="submit" style="width: 100%; margin-top: 20px; height: 30px;">Thêm danh mục</button>
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