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
        <h1>TG 48 Xin chào các bạn đã đến lịch công diễn</h1>
    </div>

    <!--ko có user-->
    @foreach($nhomnhac as $nn)
    @foreach($lichtrinh as $lt)
    @if($nn->id == $lt->nhomnhac_id)
    <div style="display: flex; margin-top: 40px;">
        <div style="float: left;">
            <img style="width: 800px; height: 300px;" src="{{asset('uploads/'.$lt->anhbn)}}" alt="">
        </div>
        <div style="float: right;">
            @php
                $cktrinhdien = json_decode($lt->cktrinhdien);
            @endphp
            <div class="parent">
                <div class="card">
                    <div class="content-box">
                        <span class="card-title">{{$lt->tenlt}}</span>
                        <p class="card-content">
                        Địa điểm: <strong>{{$lt->diadiem}}, Thời gian: <strong>{{$lt->thoigian}} 
                        Tên bài hát biểu diễn: @foreach($cktrinhdien as $ck) <strong>{{$ck}}</strong>,  @endforeach
                        </p>
                        <span class="see-more">
                        @if(empty($users))
                            <a style="text-decoration: none;" href="{{route('loginidol', $lt->id)}}">Đăng nhập để đặt vé xem</a>
                        @endif 
                        @if(empty($users) != 'Null')
                            <a href="{{route('viewvexem', $users->id)}}">Mua vé ngay</a>
                        @endif
                        </span>
                    </div>
                    <div class="date-box">
                        <img style="width: 80px; height: 80px;" src="{{asset('uploads/'.$nn->logonn)}}" alt="">
                    </div>
                </div>
            </div>

        </div>
    </div>
    @endif
    @endforeach
    @endforeach         
</body>
</html>