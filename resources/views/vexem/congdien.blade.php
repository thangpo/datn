<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="text-align: center;">
        <h1>TG 48 Xin chào các bạn</h1>
    </div>

    <!--ko có user-->
    @foreach($nhomnhac as $nn)
    @foreach($lichtrinh as $lt)
    @if($nn->id == $lt->nhomnhac_id)
    <div style="display: flex; gap: 20px; margin-top: 40px;">
        <div style="float: left;">
            <img style="width: 800px; height: 400px;" src="{{asset('uploads/'.$lt->anhbn)}}" alt="">
        </div>
        <div style="float: right;">
            <div style="text-align: center; width: 500px;">
                <p style="font-size: 25px;">{{$lt->tenlt}}</p>
            </div>
            <p>Địa điểm: <strong>{{$lt->diadiem}}</strong></p>
            <p>Thời gian: <strong>{{$lt->thoigian}}</strong></p>
            @php
                $cktrinhdien = json_decode($lt->cktrinhdien);
            @endphp
            
            <p>Tên bài hát biểu diễn: @foreach($cktrinhdien as $ck) <strong>{{$ck}}</strong>,  @endforeach</p>
           

            <div>
                <img style="width: 200px; height: 200px;" src="{{asset('uploads/'.$nn->logonn)}}" alt="">

                <div style="border: 1px solid; width: 100%; height: 40px; text-align: center;">
                @if(empty($users))
                    <a style="text-decoration: none;" href="">Đăng nhập để đặt vé xem</a>
                @endif 
                @if(empty($users) != 'Null')
                    <a href="{{route('viewvexem', $users->id)}}">Mua vé ngay</a>
                @endif
                </div>

            </div>

        </div>
    </div>
    @endif
    @endforeach
    @endforeach         
</body>
</html>