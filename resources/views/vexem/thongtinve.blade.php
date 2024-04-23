<link rel="stylesheet" href="{{ asset('css/thongtinve.css') }}">
@foreach ($nhomnhac as $nn)
@foreach ($lichtrinh as $lt)
@if($lt->nhomnhac_id == $nn->id)

@if($vexem->loaighe == 1)
<div style="display: flex; justify-content: center; align-items: center;">
    <div style="background: gray;">
        <h1>Thông tin vé mà bạn vừa đặt</h1>
        <div style="text-align: center;">
            <h2>{{$vexem->tenve}}</h2>
            <p id="giat">{{$vexem->giave}}</p>
            <p id="soluongv">{{$vexem->soluong}}</p>
            <p>Loại vé: vé thương</p>
            <p>Tên nhóm nhạc: {{$nn->tennn}}</p>
            <p>Thời gian tổ chức: {{$lt->thoigian}}</p>
            <p>Địa điểm tổ chức{{$lt->diadiem}}</p>
            <p>Tên người đặt: {{$profile->tennd}}</p>
            <p>Địa chỉ người đặt{{$profile->diachi}}</p>
            <p>Số điện thoại người đặt: {{$profile->sdt}}</p>
        </div>

        <div>
            <form action="{{route('thongtinbuild')}}" enctype="multipart/form-data" method="POST">
                @csrf
                <input type="text" name="users_id" value="{{$users->id}}" style="position: absolute; left: -999px;">
                <input type="text" name="vexem_id" value="{{$vexem->id}}" style="position: absolute; left: -999px;">
                <input type="text" name="lichtrinh_id" value="{{$lt->id}}" style="position: absolute; left: -999px;">
                <input type="text" name="profile_id" value="{{$profile->id}}" style="position: absolute; left: -999px;">

                <!--thanh toán-->
                <div style="display: flex; height: 30px; gap: 10px;">

                    <select name="soluongve" id="slv">
                        <option value="1">1 vé</option>
                        <option value="2">2 vé</option>
                        <option value="3">3 vé</option>
                        <option value="4">4 vé</option>
                        <option value="5">5 vé</option>
                        <option value="6">6 vé</option>
                        <option value="7">7 vé</option>
                        <option value="8">8 vé</option>
                        <option value="9">9 vé</option>
                        <option value="10">10 vé</option>
                    </select>

                    <p>Tổng tiền:</p>

                    <input style="width: 100px;" type="text" name="tongtien" id="tongt">$

                    <select name="pttt">
                        <option value="1">Tiền mặt</option>
                        <option value="2">Chuyển khoản</option>
                        <option value="3">Zalo Pay</option>
                        <option value="4">Mono</option>
                    </select>

                </div>
                <!--kết thúc thanh toán-->
                <button type="submit" id="btn" style="margin-top: 20px; width: 100%; height: 50px;">Xác nhận đặt vé</button>
            </form>
        </div>


    </div>
    <div>
        <img style="width: 800px; height: 550px;" src="{{asset('uploads/'.$lt->anhbn)}}" alt="">
    </div>
</div>
@endif
@if($vexem->loaighe == 2)
<div style="display: flex; justify-content: center; align-items: center;">
    <div style="background: yellow;">
        <h1>Thông tin vé mà bạn vừa đặt</h1>
        <div style="text-align: center;">
            <h2>{{$vexem->tenve}}</h2>
            <p id="giat">{{$vexem->giave}}</p>
            <p id="soluongv">{{$vexem->soluong}}</p>
            <p>Loại vé: vé thương gia</p>
            <p>Tên nhóm nhạc: {{$nn->tennn}}</p>
            <p>Thời gian tổ chức: {{$lt->thoigian}}</p>
            <p>Địa điểm tổ chức{{$lt->diadiem}}</p>
            <p>Tên người đặt: {{$profile->tennd}}</p>
            <p>Địa chỉ người đặt{{$profile->diachi}}</p>
            <p>Số điện thoại người đặt: {{$profile->sdt}}</p>
        </div>

        <div>
            <form action="{{route('thongtinbuild')}}" enctype="multipart/form-data" method="POST">
                @csrf
                <input type="text" name="users_id" value="{{$users->id}}" style="position: absolute; left: -999px;">
                <input type="text" name="vexem_id" value="{{$vexem->id}}" style="position: absolute; left: -999px;">
                <input type="text" name="lichtrinh_id" value="{{$lt->id}}" style="position: absolute; left: -999px;">
                <input type="text" name="profile_id" value="{{$profile->id}}" style="position: absolute; left: -999px;">

                <!--thanh toán-->
                <div style="display: flex; height: 30px; gap: 10px;">

                    <select name="soluongve" id="slv">
                        <option value="1">1 vé</option>
                        <option value="2">2 vé</option>
                        <option value="3">3 vé</option>
                        <option value="4">4 vé</option>
                        <option value="5">5 vé</option>
                        <option value="6">6 vé</option>
                        <option value="7">7 vé</option>
                        <option value="8">8 vé</option>
                        <option value="9">9 vé</option>
                        <option value="10">10 vé</option>
                    </select>

                    <p>Tổng tiền:</p>

                    <input style="width: 100px;" type="text" name="tongtien" id="tongt">$

                    <select name="pttt">
                        <option value="1">Tiền mặt</option>
                        <option value="2">Chuyển khoản</option>
                        <option value="3">Zalo Pay</option>
                        <option value="4">Mono</option>
                    </select>

                </div>
                <!--kết thúc thanh toán-->
                <button type="submit" id="btn" style="margin-top: 20px; width: 100%; height: 50px;">Xác nhận đặt vé</button>
            </form>
        </div>

    </div>

    <div>
        <img style="width: 800px; height: 550px;" src="{{asset('uploads/'.$lt->anhbn)}}" alt="">
    </div>
</div>
@endif
@if($vexem->loaighe == 3)
<div style="display: flex; justify-content: center; align-items: center;">
    <div style="background: rgb(80, 199, 199);">
        <h1>Thông tin vé mà bạn vừa đặt</h1>
        <div style="text-align: center;">
            <h2>{{$vexem->tenve}}</h2>
            <p id="giat">{{$vexem->giave}}</p>
            <p id="soluongv">{{$vexem->soluong}}</p>
            <p>Loại vé: vé thường</p>
            <p>Tên nhóm nhạc: {{$nn->tennn}}</p>
            <p>Thời gian tổ chức: {{$lt->thoigian}}</p>
            <p>Địa điểm tổ chức{{$lt->diadiem}}</p>
            <p>Tên người đặt: {{$profile->tennd}}</p>
            <p>Địa chỉ người đặt{{$profile->diachi}}</p>
            <p>Số điện thoại người đặt: {{$profile->sdt}}</p>
        </div>

        <div>
            <form action="{{route('thongtinbuild')}}" enctype="multipart/form-data" method="POST">
                @csrf
                <input type="text" name="users_id" value="{{$users->id}}" style="position: absolute; left: -999px;">
                <input type="text" name="vexem_id" value="{{$vexem->id}}" style="position: absolute; left: -999px;">
                <input type="text" name="lichtrinh_id" value="{{$lt->id}}" style="position: absolute; left: -999px;">
                <input type="text" name="profile_id" value="{{$profile->id}}" style="position: absolute; left: -999px;">

                <!--thanh toán-->
                <div style="display: flex; height: 30px; gap: 10px;">

                    <select name="soluongve" id="slv">
                        <option value="1">1 vé</option>
                        <option value="2">2 vé</option>
                        <option value="3">3 vé</option>
                        <option value="4">4 vé</option>
                        <option value="5">5 vé</option>
                        <option value="6">6 vé</option>
                        <option value="7">7 vé</option>
                        <option value="8">8 vé</option>
                        <option value="9">9 vé</option>
                        <option value="10">10 vé</option>
                    </select>

                    <p>Tổng tiền:</p>

                    <input style="width: 100px;" type="text" name="tongtien" id="tongt">$

                    <select name="pttt">
                        <option value="1">Tiền mặt</option>
                        <option value="2">Chuyển khoản</option>
                        <option value="3">Zalo Pay</option>
                        <option value="4">Mono</option>
                    </select>

                </div>
                <!--kết thúc thanh toán-->
                <button type="submit" id="btn" style="margin-top: 20px; width: 100%; height: 50px;">Xác nhận đặt vé</button>
            </form>
        </div>

    </div>
    <div>
        <img style="width: 800px; height: 550px;" src="{{asset('uploads/'.$lt->anhbn)}}" alt="">
    </div>
</div>
@endif

@endif
@endforeach
@endforeach
<script>
    var p = document.getElementById("giat");
    var giatien = p.innerHTML;

    var sl = document.getElementById("soluongv");
    var soluongv = sl.innerHTML;

    var tongt = document.getElementById("tongt");
    tongt.value = giatien;

    function tonggiave() {
        var solve = document.getElementById("slv");
        var p = document.getElementById("giat");
        var tongt = document.getElementById("tongt");
        var sl = document.getElementById("soluongv");
        var btn = document.getElementById("btn");

        var soluongv = sl.innerHTML;
        var soluongve = solve.value;
        var giatien = p.innerHTML;

        soluongv = Number(soluongv);
        soluongve = Number(soluongve);
        giatien = Number(giatien);

        if (soluongv >= soluongve) {
            btn.style.display = "block";
            var thanhtien = soluongve * giatien;
            tongt.value = thanhtien;
        } else {
            btn.style.display = "none";
            var thanhtien = "Số lượng vé không đủ";
            tongt.value = thanhtien;
        }
    }
    slv.onchange = tonggiave;
</script>