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
                    <a style="text-decoration: none;" href="{{route('baihat.index')}}" class="btn btn-primary float-end">Danh sách nhóm nhạc</a>
                </div>
            </div>
        </div>

            <form action="{{route('nhac.update', $nhac->id)}}" enctype="multipart/form-data" method="POST" style="border: 1px solid;">
               <h1 style="text-align: center;">Thêm mới nhóm nhạc</h1>
                @csrf
                @method('PUT')
                <div style="display: flex; gap: 20px;">

                    <div>
                                <div style="width: 300px; margin-left: 20px; margin-top: 20px;">
                                    <strong>Nhóm</strong><br>
                                    <input type="text" name="nhomnhac_id" style="width: 200px; height: 30px; border-top: none; border-left: none; border-right: none;" value="{{$nhac->nhomnhac_id}}">
                                </div>

                                <div style="width: 300px; margin-left: 20px; margin-top: 20px;">
                                <strong>Tên bài hát</strong><br>
                                    <input style="width: 200px; height: 30px; border-top: none; border-left: none; border-right: none;" type="text" name="tenn" class="form-control" value="{{$nhac->tenn}}">
                                </div>

                                <div style="width: 300px; margin-left: 20px; margin-top: 20px;">
                                <strong>Loại nhạc</strong><br>
                                    <input style="width: 200px; height: 30px; border-top: none; border-left: none; border-right: none;" type="text" name="loainhac" value="{{$nhac->loainhac}}">
                                </div>

                                <div style="width: 300px; margin-left: 20px; margin-top: 20px;">
                                    <strong>Tác giả</strong><br>
                                    <input type="text" name="tacgia" style="width: 200px; height: 30px; border-top: none; border-left: none; border-right: none;" value="{{$nhac->tacgia}}">
                                </div>

                    </div>

                    <div>

                                <div class="row">
                                    <div class="col-md-6">
                                    <img style="width: 300px; height: 200px;" src="{{asset('uploads/'.$nhac->anh)}}" id="img" height="500">
                                    </div>
                                    <input type="file" name="anh" accept="image/*" class="form-control-file" class="@error ('image') is-invalid @enderror" id="input">
                                </div>

                                <div class="form-group">
                                <strong>Bài hát</strong>
                                    <div style="display: block; width: 100px;">  
                                        <audio id="audio-player" controls>
                                        <source id="audio-source" src="{{asset('audio/'.$nhac->nhac)}}" type="audio/mpeg">
                                        </audio>
                                        <input type="file" id="file-input" name="nhac" accept="audio/*">
                                    </div>
                                </div>
                                
                    </div>
                </div>


                <button type="submit" style="width: 100%; margin-top: 20px; height: 30px;">Thêm thần tượng mới</button>
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


  var fileInput = document.getElementById("file-input");
  var audioPlayer = document.getElementById("audio-player");
  var audioSource = document.getElementById("audio-source");

  // Thêm sự kiện onchange cho thẻ input
  fileInput.onchange = function() {
    // Lấy file nhạc được chọn từ máy tính
    var file = this.files[0];
    // Tạo một đối tượng URL cho file nhạc
    var url = URL.createObjectURL(file);
    // Cập nhật src của thẻ source
    audioSource.src = url;
    // Load lại trình phát nhạc
    audioPlayer.load();
  };
</script>

@endsection