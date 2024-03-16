@foreach($users as $us)
<p>{{$us->name}}</p>
<p>{{$us->email}}</p>

@endforeach

@if(empty($profile))
<div class="container">
    <div class="card">
        <div class="card-body">
            <form action="{{route('pfnguoidung')}}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="form-group" style="width: 1px; height: 1px;">
                    @foreach ($users as $us)
                      <input style="width: 1px; height: 1px;" type="text" name="users_id" class="form-control" value="{{$us->id}}">
                    @endforeach
                </div>
                <div class="form-group">
                    <strong>Tên người dùng</strong>
                    <input type="text" name="tennd" class="form-control" placeholder="Nhập tên sản phẩm">
                </div>
                <div class="form-group">
                    <strong>Tuổi người dùng</strong>
                    <input type="text" name="tuoi" class="form-control" placeholder="Nhập tên sản phẩm">
                </div>
                <div class="form-group">
                    <strong>Nơi ở hiện tại</strong>
                    <input type="text" name="diachi" class="form-control" placeholder="Nhập tên sản phẩm">
                </div>
                <div class="form-group">
                    <strong>số điện thoại</strong>
                    <input type="text" name="sdt" class="form-control" placeholder="Nhập tên sản phẩm">
                </div>
                <div class="form-group">
                        <label for="photo">Giới tính</label>
                        <input type="radio" name="gioitinh" value="0" checked>
                        <label for="">Nam</label>
                        <input type="radio" name="gioitinh" value="1">
                        <label for="">Nữ</label><br>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <img src="https://document-export.canva.com/kWSac/DAF1cPkWSac/10/thumbnail/0001.png?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAQYCGKMUHWDTJW6UD%2F20231215%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Date=20231215T181953Z&X-Amz-Expires=59583&X-Amz-Signature=88e6abce275a355742eca1f57f1fc72c9a7107fe7b981a846bfa9fd43029aac0&X-Amz-SignedHeaders=host&response-expires=Sat%2C%2016%20Dec%202023%2010%3A52%3A56%20GMT" id="img" height="500">
                    </div>
                    <input type="file" name="anhnd" accept="image/*" class="form-control-file" class="@error ('image') is-invalid @enderror" id="input">
                </div>
                <button type="submit" class="btn btn-success mt-2">Thêm sản phẩm</button>
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
@endif


@if(empty($profile) != 'Null')
<div class="container">
    <div class="card">
        <div class="card-body">
            @foreach ($profile as $pf)
            <form action="{{route('capnhatnd', $pf->id)}}" enctype="multipart/form-data" method="POST">    
            @csrf
            @method('PUT')
                <div class="form-group" style="width: 1px; height: 1px;">
                      <input style="width: 1px; height: 1px;" type="text" name="users_id" class="form-control" value="{{$pf->users_id}}">
                </div>
                <div class="form-group">
                    <strong>Tên người dùng</strong>
                    <input type="text" name="tennd" class="form-control" value="{{$pf->tennd}}">
                </div>
                <div class="form-group">
                    <strong>Tuổi người dùng</strong>
                    <input type="text" name="tuoi" class="form-control" value="{{$pf->tuoi}}">
                </div>
                <div class="form-group">
                    <strong>Nơi ở hiện tại</strong>
                    <input type="text" name="diachi" class="form-control" value="{{$pf->diachi}}">
                </div>
                <div class="form-group">
                    <strong>số điện thoại</strong>
                    <input type="text" name="sdt" class="form-control" value="{{$pf->sdt}}">
                </div>
                <div class="form-group">
                        <label for="photo">Giới tính</label>
                        <input type="radio" name="gioitinh" value="0" {{ $pf->gioitinh == 0 ? 'checked' : '' }}>
                        <label for="">Nam</label>
                        <input type="radio" name="gioitinh" value="1" {{ $pf->gioitinh == 1 ? 'checked' : '' }}>
                        <label for="">Nữ</label>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{asset('uploads/'.$pf->anhnd)}}" id="img" height="500">
                    </div>
                    <input type="file" name="anhnd" accept="image/*" class="form-control-file" class="@error ('image') is-invalid @enderror" id="input">
                </div>
                @endforeach
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
@endif