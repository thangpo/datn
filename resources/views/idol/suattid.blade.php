
<div class="container">
    <div class="card">


        



        <div class="card-body" style="display: flex; justify-content: center; align-items: center; margin-top: 20px; gap: 20px;">

        <div>
            <div class="row">
                <div class="col-md-6">
                    <img style="width: 450px; height: 450px;" src="{{asset('uploads/'.$idol->anh)}}" alt="">
                </div>
            </div>
        </div>

            <form action="{{route('capnhatttidol', $idol->id)}}" enctype="multipart/form-data" method="POST" style="border: 1px solid;">
               <h1 style="text-align: center;">chỉnh sửa thông tin của: {{$idol->tenid}}</h1>
                @csrf
                @method('PUT')

                <div style="display: flex; gap: 20px;">

                    <div>
                                <div class="form-group" style="width: 300px; margin-left: 20px;">
                                    <strong>Nhóm</strong><br>
                                    <input style="width: 200px; height: 30px; border-top: none; border-left: none; border-right: none;" type="text" name="nhomnhac_id" value="{{$idol->nhomnhac_id}}">
                                </div>

                                <div class="form-group" style="width: 300px; margin-left: 20px; margin-top: 20px;">
                                    <strong>Tên thần tượng</strong><br>
                                    <input style="width: 200px; height: 30px; border-top: none; border-left: none; border-right: none;" type="text" name="tenid" value="{{$idol->tenid}}">
                                </div>

                                <div class="form-group" style="width: 300px; margin-left: 20px; margin-top: 20px;">
                                    <strong>Tuổi của thần tượng</strong><br>
                                    <input style="width: 200px; height: 30px; border-top: none; border-left: none; border-right: none;" type="text" name="tuoi" value="{{$idol->tuoi}}">
                                </div>
                                
                                <div class="form-group" style="width: 300px; margin-left: 20px; margin-top: 20px;">
                                    <strong>Quê quán thần tượng</strong><br>
                                    <input style="width: 200px; height: 30px; border-top: none; border-left: none; border-right: none;" type="text" name="qquan" value="{{$idol->qquan}}">
                                </div>

                                <div class="form-group" style="width: 300px; margin-left: 20px; margin-top: 20px;">
                                    <strong>Cân nặng</strong><br>
                                    <input style="width: 200px; height: 30px; border-top: none; border-left: none; border-right: none;" type="text" name="cannang" value="{{$idol->cannang}}">
                                </div>

                    </div>

                    <div>
                                <div class="form-group" style="width: 300px; margin-top: 20px;">
                                    <strong>chiều cao</strong><br>
                                    <input style="width: 200px; height: 30px; border-top: none; border-left: none; border-right: none;" type="text" name="chieucao" value="{{$idol->chieucao}}">
                                </div>

                            

                                <div class="form-group" style="width: 300px; margin-top: 20px;">
                                        <label for="photo">Giới tính</label>
                                        <input type="radio" name="gioitinh" value="0" {{ $idol->gioitinh == 0 ? 'checked' : '' }}>
                                        <label for="">Nam</label>
                                        <input type="radio" name="gioitinh" value="1" {{ $idol->gioitinh == 1 ? 'checked' : '' }}>
                                        <label for="">Nữ</label>
                                </div>
                    </div>
                </div>


                <button type="submit" style="width: 100%; margin-top: 20px; height: 30px;">Sửa đổi thông tin của bạn</button>
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
