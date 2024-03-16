<h1>hhahha</h1>
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3>Tùy chỉnh trang chủ</h3>
                </div>
                <div class="col-md-6">
                    <a href="{{route('idol.index')}}" class="btn btn-primary float-end">Danh sách tùy chỉnh trang chủ</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{route('idol.store')}}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="form-group">
                    <strong>Nhóm</strong>
                    @foreach ($users as $nl)
                      <input type="text" name="nhomnhac_id" class="form-control" value="{{$nl->id}}">{{$nl->tenn}}
                    @endforeach
                </div>
                <div class="form-group">
                    <strong>Tên thần tượng</strong>
                    <input type="text" name="tenid" class="form-control" placeholder="Nhập tên sản phẩm">
                </div>
                <div class="form-group">
                    <strong>Tuổi của thần tượng</strong>
                    <input type="text" name="tuoi" class="form-control" placeholder="Nhập tên sản phẩm">
                </div>
                <div class="form-group">
                    <strong>Quê quán thần tượng</strong>
                    <input type="text" name="qquan" class="form-control" placeholder="Nhập tên sản phẩm">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <img src="https://document-export.canva.com/kWSac/DAF1cPkWSac/10/thumbnail/0001.png?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAQYCGKMUHWDTJW6UD%2F20231215%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Date=20231215T181953Z&X-Amz-Expires=59583&X-Amz-Signature=88e6abce275a355742eca1f57f1fc72c9a7107fe7b981a846bfa9fd43029aac0&X-Amz-SignedHeaders=host&response-expires=Sat%2C%2016%20Dec%202023%2010%3A52%3A56%20GMT" id="img" height="500">
                    </div>
                    <input type="file" name="anh" accept="image/*" class="form-control-file" class="@error ('image') is-invalid @enderror" id="input">
                </div>
                <div class="form-group">
                    <strong>chiều cao</strong>
                    <input type="text" name="chieucao" class="form-control" placeholder="Nhập tên sản phẩm">
                </div>
                <div class="form-group">
                    <strong>Cân nặng</strong>
                    <input type="text" name="cannang" class="form-control" placeholder="Nhập tên sản phẩm">
                </div>
                <div class="form-group">
                        <label for="photo">Mô ta</label>
                        <input type="radio" name="gioitinh" value="0" checked>
                        <label for="">Nam</label>
                        <input type="radio" name="gioitinh" value="1">
                        <label for="">Nữ</label><br>
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
