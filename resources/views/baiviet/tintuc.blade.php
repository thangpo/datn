<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div style="display: flex; justify-content: center; align-items: center;">
        <div>
            <h1 style="text-align: center; font-size: 35px;">Tin tức mới nhất</h1>

            <div style="border: 1px solid; width: 200px; text-align: center;">
                <a style="text-decoration: none;" href="http://127.0.0.1:8000/chuyenh">Quay về trang chủ</a>
            </div>
            @foreach ($baiviet as $bv)
            <div style="display: flex; gap: 20px; margin-top: 20px; border: 1px solid;">
                <div>
                    <img style="width: 400px; height: 200px;" src="{{asset('uploads/'.$bv->hinhanh)}}" alt="">
                </div>
                <div>
                    <h1>{{$bv->tieude}}</h1>
                    <h3>{{$bv->noidung}}</h3>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>

</html>