<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* From Uiverse.io by waleedlh10 */
        .card {
            width: 280px;
            background: white;
            border-radius: 10px;
            box-shadow: 0px 0px 14px -2px #bebebe;
            transition: 0.2s ease-in-out;
        }

        .card:hover {
            cursor: pointer;
        }

        .img {
            width: 100%;
            height: 7em;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            background: linear-gradient(#7980c5, #9198e5);
            display: flex;
            align-items: top;
            justify-content: right;
        }

        .save {
            transition: 0.2s ease-in-out;
            border-radius: 10px;
            margin: 20px;
            width: 30px;
            height: 30px;
            background-color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .save .svg {
            transition: 0.2s ease-in-out;
            width: 15px;
            height: 15px;
        }

        .save:hover .svg {
            fill: #ced8de;
        }

        .text {
            padding: 7px 20px;
            display: flex;
            flex-direction: column;
            align-items: space-around;
        }

        .text .h3 {
            font-family: system-ui;
            font-size: medium;
            font-weight: 600;
            color: black;
            text-align: center;
        }

        .text .p {
            font-family: system-ui;
            color: #999999;
            font-size: 13px;
            margin: 0px;
            text-align: center;
            padding: 5px;
        }

        .icon-box {
            margin: 10px;
            padding: 12px;
            background-color: #7980c5;
            border-radius: 10px;
            text-align: center;
        }

        .icon-box .span {
            font-family: system-ui;
            font-size: small;
            font-weight: 500;
            color: #fff;
        }
    </style>
</head>

<body>
    <h1 style="text-align: center;">Kênh đã đăng ký</h1>
    <div style="display: flex; align-items: center; justify-content: center;">
        <div style="display: grid; grid-template-columns: 1fr 1fr 1fr 1fr; gap: 20px;">
            @foreach($dangkykenh as $kdk)
            @foreach($nhomnhackenh as $nn)
            @if($nn->id == $kdk->nhomnhac_id)
            <div class="card">
                <div class="img">
                    <img style="width: 100%;" src="{{asset('uploads/'.$nn->logonn)}}" alt="">
                </div>

                <div class="text">
                    <p class="h3">{{$nn->tennn}}</p>
                    <p class="p">Ngày thành lập: {{$nn->ngaytl}}</p>

                    <div class="icon-box">
                        <a style="text-decoration: none;" href="" class="span">Truy cập</a>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
            @endforeach

        </div>
    </div>
</body>

</html>