<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
.parent {width: 300px;padding: 20px;perspective: 1000px;}
.card {padding-top: 50px;/* border-radius: 10px; */border: 3px solid rgb(255, 255, 255);transform-style: preserve-3d;background: linear-gradient(135deg,#0000 18.75%,#f3f3f3 0 31.25%,#0000 0),repeating-linear-gradient(45deg,#f3f3f3 -6.25% 6.25%,#ffffff 0 18.75%);background-size: 60px 60px;background-position: 0 0, 0 0;background-color: #f0f0f0;width: 100%;box-shadow: rgba(142, 142, 142, 0.3) 0px 30px 30px -10px;transition: all 0.5s ease-in-out;}
.card:hover {background-position: -100px 100px, -100px 100px;transform: rotate3d(0.5, 1, 0, 30deg);}
.content-box {background: rgba(4, 193, 250, 0.732);/* border-radius: 10px 100px 10px 10px; */transition: all 0.5s ease-in-out;padding: 60px 25px 25px 25px;transform-style: preserve-3d;}
.content-box .card-title {display: inline-block;color: white;font-size: 25px;font-weight: 900;transition: all 0.5s ease-in-out;transform: translate3d(0px, 0px, 50px);}
.content-box .card-title:hover {transform: translate3d(0px, 0px, 60px);}
.content-box .card-content {margin-top: 10px;font-size: 12px;font-weight: 700;color: #f2f2f2;transition: all 0.5s ease-in-out;transform: translate3d(0px, 0px, 30px);}
.content-box .card-content:hover {transform: translate3d(0px, 0px, 60px);}
.content-box .see-more {cursor: pointer;margin-top: 1rem;display: inline-block;font-weight: 900;font-size: 9px;text-transform: uppercase;color: rgb(7, 185, 255);/* border-radius: 5px; */background: white;padding: 0.5rem 0.7rem;transition: all 0.5s ease-in-out;transform: translate3d(0px, 0px, 20px);}
.content-box .see-more:hover {transform: translate3d(0px, 0px, 60px);}
.date-box {position: absolute;top: 30px;right: 30px;height: 60px;width: 60px;background: white;border: 1px solid rgb(7, 185, 255);/* border-radius: 10px; */padding: 10px;transform: translate3d(0px, 0px, 80px);box-shadow: rgba(100, 100, 111, 0.2) 0px 17px 10px -10px;}
.date-box span {display: block;text-align: center;}
.date-box .month {color: rgb(4, 193, 250);font-size: 9px;font-weight: 700;}
.date-box .date {font-size: 20px;font-weight: 900;color: rgb(4, 193, 250);}
 
    </style>
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
                            <a style="text-decoration: none;" href="">Đăng nhập để đặt vé xem</a>
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