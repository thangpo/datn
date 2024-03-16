@extends('layouts.app')

@section('content')
<div class="container">
    <div style="display: flex; justify-content: center; align-items: center; margin-top: 20px; gap: 20px;">

        <div>
            <div class="row">
                <div class="col-md-6">
                    <img style="width: 450px; height: 450px;" src="https://document-export.canva.com/P9EbM/DAF3uMP9EbM/3/thumbnail/0001.png?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAQYCGKMUHWDTJW6UD%2F20240124%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Date=20240124T025642Z&X-Amz-Expires=29588&X-Amz-Signature=01a0abb538839fe53501673280bbad26680a047498fd1e8d427ebee22de97dcb&X-Amz-SignedHeaders=host&response-expires=Wed%2C%2024%20Jan%202024%2011%3A09%3A50%20GMT" alt="">
                </div>
                <div style="text-align: center; border: 1px solid; height: 20px;">
                    <a style="text-decoration: none;" href="{{route('banner.index')}}" class="btn btn-primary float-end">Danh sách Banner trang chủ</a>
                </div>
            </div>
        </div>

        @if ($errors->any())
        @foreach ($errors->all() as $error)
           <p>{{ $error }}</p>
        @endforeach
        @endif


        <div class="card-body">
            <form action="{{route('banner.update', $banner->id)}}" enctype="multipart/form-data" method="POST" style="border: 1px solid; width: 450px; height: 450px;">
            <h1 style="text-align: center;">Sửa lại banner trang chủ</h1>
                @csrf
                @method('PUT')
                <div style="display: flex; justify-content: center; align-items: center;">
                    <div>
                        <div class="col-md-6">
                            <img style="width: 300px; height: 300px;" src="{{asset('uploads/'.$banner->anhbn)}}" id="img" height="500">
                        </div>
                        <input type="file" name="anhbn" accept="image/*" class="form-control-file" class="@error ('image') is-invalid @enderror" id="input">
                    </div>
                </div>

                <button type="submit" style="margin-top: 20px; width: 100%; height: 30px;">Sửa Banner</button>
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
    if(input.files[0])
    img.src = URL.createObjectURL(input.files[0]);
   };
</script>

@endsection