<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/lichsumv.css') }}">
</head>

<body>
    <h1 style="text-align: center;">Lịch sử xem video của bạn</h1>
    <div style="display: flex; justify-content: center; align-items: center;">

        <div style="display: grid; grid-template-columns: 1fr 1fr 1fr 1fr; gap: 10px;">
            @foreach($lichsuxem as $lsx)
            @foreach($baihat as $bh)
            @if($bh->id == $lsx->baihat_id)
            <div class="card">
                <div>
                    <video autoplay muted loop src="{{asset('videos/'.$bh->nhac)}}"></video>
                </div>
                <div class="card__content">
                    <p class="card__title">{{$bh->tenbh}}</p>
                    <p class="card__description">{{$bh->ngayph}}</p>
                    <a style="text-decoration: none;" href="/videoctnd/{{$bh->id}}/user/{{$users->id}}" class="card__button">xem ngay</a>
                    <button class="card__button secondary">{{$bh->tennn}}</button>
                </div>
            </div>
            @endif
            @endforeach
            @endforeach
        </div>


    </div>
</body>

</html>