<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/congdien.css')}}">
</head>

<body>
    <div style="text-align: center;">
        <h1>Vé xem của hệ thống TG MUSIC</h1>
    </div>

    <!--ko có user-->
    @foreach($nhomnhac as $nn)
    @if($nn->id == $lichtrinh->nhomnhac_id)
    <div style="display: flex; margin-top: 40px; gap: 20px;">

        <div style="float: left;">
            <img style="width: 100%; height: 300px;" src="{{asset('uploads/'.$lichtrinh->anhbn)}}" alt="">
        </div>
        <div style="float: right;">
            @php
            $cktrinhdien = json_decode($lichtrinh->cktrinhdien);
            @endphp
            <div style="display: flex; gap: 30px;">
                @foreach ($vexem as $vx)

                @if($vx->loaighe == 2)
                <div style="border: 1px solid; justify-content: center; align-items: center; background: yellow; color: black; width: 200px; height: 300px;">
                    <div style="margin-left: 5px;">
                        <h3>Loại vé thương gia</h3>
                        <h3>{{$vx->tenve}}</h3>
                        <p style="text-align: left;">Giá vé: {{$vx->giave}}</p>
                        <p style="text-align: left;">Số lượng vé: {{$vx->soluong}}</p>
                        <p style="text-align: left;">Thời gian tổ chức: {{$lichtrinh->thoigian}}</p>
                        <p style="text-align: left;">Địa điểm tổ chức: {{$lichtrinh->diadiem}}</p>
                        <a class="fancy" style="width: 200px;" href="/thongtindv/{{$vx->id}}/user/{{$users->id}}">
                            <span class="top-key"></span>
                            <span class="text">Mua vé</span>
                            <span class="bottom-key-1"></span>
                            <span class="bottom-key-2"></span>
                        </a>
                    </div>
                </div>
                @endif

                @if($vx->loaighe == 3)
                <div style="border: 1px solid; justify-content: center; align-items: center; background: rgb(80, 199, 199); color: black; width: 200px; height: 300px;">
                    <div style="margin-left: 5px;">
                        <h3>Loại vé thương gia</h3>
                        <h3>{{$vx->tenve}}</h3>
                        <p style="text-align: left;">Giá vé: {{$vx->giave}}</p>
                        <p style="text-align: left;">Số lượng vé: {{$vx->soluong}}</p>
                        <p style="text-align: left;">Thời gian tổ chức: {{$lichtrinh->thoigian}}</p>
                        <p style="text-align: left;">Địa điểm tổ chức: {{$lichtrinh->diadiem}}</p>
                        <a class="fancy" style="width: 200px;" href="/thongtindv/{{$vx->id}}/user/{{$users->id}}">
                            <span class="top-key"></span>
                            <span class="text">Mua vé</span>
                            <span class="bottom-key-1"></span>
                            <span class="bottom-key-2"></span>
                        </a>
                    </div>
                </div>
                @endif

                @if($vx->loaighe == 1)
                <div style="border: 1px solid; justify-content: center; align-items: center; background: gray; color: white; width: 200px; height: 300px;">
                    <div style="margin-left: 5px;">
                        <h3>Loại vé thường</h3>
                        <h3>{{$vx->tenve}}</h3>
                        <p style="text-align: left;">Giá vé: {{$vx->giave}}</p>
                        <p style="text-align: left;">Số lượng vé: {{$vx->soluong}}</p>
                        <p style="text-align: left;">Thời gian tổ chức: {{$lichtrinh->thoigian}}</p>
                        <p style="text-align: left;">Địa điểm tổ chức: {{$lichtrinh->diadiem}}</p>
                        <a class="fancy" style="width: 200px;" href="/thongtindv/{{$vx->id}}/user/{{$users->id}}">
                            <span class="top-key"></span>
                            <span class="text">Mua vé</span>
                            <span class="bottom-key-1"></span>
                            <span class="bottom-key-2"></span>
                        </a>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </div>
    @endif
    @endforeach
</body>

</html>