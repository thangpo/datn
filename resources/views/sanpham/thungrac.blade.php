<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="table.css">
    <style>
        .card {
            position: relative;
            width: 300px;
            height: 550px;
            border-radius: 14px;
            z-index: 1111;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            box-shadow: 20px 20px 60px #bebebe, -20px -20px 60px #ffffff;
            ;
        }

        .bg {
            position: absolute;
            top: 5px;
            left: 5px;
            width: 290px;
            height: 540px;
            z-index: 2;
            background: rgba(255, 255, 255, .95);
            backdrop-filter: blur(24px);
            border-radius: 10px;
            overflow: hidden;
            outline: 2px solid white;
        }

        .blob {
            position: absolute;
            z-index: 1;
            top: 50%;
            left: 50%;
            width: 250px;
            height: 550px;
            border-radius: 50%;
            background-color: #ff0000;
            opacity: 1;
            filter: blur(12px);
            animation: blob-bounce 5s infinite ease;
        }

        @keyframes blob-bounce {
            0% {
                transform: translate(-100%, -100%) translate3d(0, 0, 0);
            }

            25% {
                transform: translate(-100%, -100%) translate3d(100%, 0, 0);
            }

            50% {
                transform: translate(-100%, -100%) translate3d(100%, 100%, 0);
            }

            75% {
                transform: translate(-100%, -100%) translate3d(0, 100%, 0);
            }

            100% {
                transform: translate(-100%, -100%) translate3d(0, 0, 0);
            }
        }

        .Btn {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            width: 100px;
            height: 50px;
            border: none;
            padding: 0px 20px;
            background-color: rgb(168, 38, 255);
            color: white;
            font-weight: 500;
            cursor: pointer;
            border-radius: 10px;
            box-shadow: 5px 5px 0px rgb(140, 32, 212);
            transition-duration: .3s;
        }

        .svg {
            width: 13px;
            position: absolute;
            right: 0;
            margin-right: 20px;
            fill: white;
            transition-duration: .3s;
        }

        .Btn:hover {
            color: transparent;
        }

        .Btn:hover svg {
            right: 43%;
            margin: 0;
            padding: 0;
            border: none;
            transition-duration: .3s;
        }

        .Btn:active {
            transform: translate(3px, 3px);
            transition-duration: .3s;
            box-shadow: 2px 2px 0px rgb(140, 32, 212);
        }

        button {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 1em;
            border: 0px solid transparent;
            background-color: rgba(100, 77, 237, 0.08);
            border-radius: 1.25em;
            transition: all 0.2s linear;
        }

        button:hover {
            box-shadow: 3.4px 2.5px 4.9px rgba(0, 0, 0, 0.025),
                8.6px 6.3px 12.4px rgba(0, 0, 0, 0.035),
                17.5px 12.8px 25.3px rgba(0, 0, 0, 0.045),
                36.1px 26.3px 52.2px rgba(0, 0, 0, 0.055),
                99px 72px 143px rgba(0, 0, 0, 0.08);
        }

        .tooltip {
            position: relative;
            display: inline-block;
        }

        .tooltip .tooltiptext {
            visibility: hidden;
            width: 4em;
            background-color: rgba(0, 0, 0, 0.253);
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 5px 0;
            position: absolute;
            z-index: 1;
            top: 25%;
            left: 110%;
        }

        .tooltip .tooltiptext::after {
            content: "";
            position: absolute;
            top: 50%;
            right: 100%;
            margin-top: -5px;
            border-width: 5px;
            border-style: solid;
            border-color: transparent rgba(0, 0, 0, 0.253) transparent transparent;
        }

        .tooltip:hover .tooltiptext {
            visibility: visible;
        }


        .continue-application {
            --color: #fff;
            --background: #404660;
            --background-hover: #3A4059;
            --background-left: #2B3044;
            --folder: #F3E9CB;
            --folder-inner: #BEB393;
            --paper: #FFFFFF;
            --paper-lines: #BBC1E1;
            --paper-behind: #E1E6F9;
            --pencil-cap: #fff;
            --pencil-top: #275EFE;
            --pencil-middle: #fff;
            --pencil-bottom: #5C86FF;
            --shadow: rgba(13, 15, 25, .2);
            border: none;
            outline: none;
            cursor: pointer;
            position: relative;
            border-radius: 5px;
            font-size: 14px;
            font-weight: 500;
            line-height: 19px;
            -webkit-appearance: none;
            -webkit-tap-highlight-color: transparent;
            padding: 17px 29px 17px 69px;
            transition: background 0.3s;
            color: var(--color);
            background: var(--bg, var(--background));
        }

        .continue-application>div {
            top: 0;
            left: 0;
            bottom: 0;
            width: 53px;
            position: absolute;
            overflow: hidden;
            border-radius: 5px 0 0 5px;
            background: var(--background-left);
        }

        .continue-application>div .folder {
            width: 23px;
            height: 27px;
            position: absolute;
            left: 15px;
            top: 13px;
        }

        .continue-application>div .folder .top {
            left: 0;
            top: 0;
            z-index: 2;
            position: absolute;
            transform: translateX(var(--fx, 0));
            transition: transform 0.4s ease var(--fd, 0.3s);
        }

        .continue-application>div .folder .top svg {
            width: 24px;
            height: 27px;
            display: block;
            fill: var(--folder);
            transform-origin: 0 50%;
            transition: transform 0.3s ease var(--fds, 0.45s);
            transform: perspective(120px) rotateY(var(--fr, 0deg));
        }

        .continue-application>div .folder:before,
        .continue-application>div .folder:after,
        .continue-application>div .folder .paper {
            content: "";
            position: absolute;
            left: var(--l, 0);
            top: var(--t, 0);
            width: var(--w, 100%);
            height: var(--h, 100%);
            border-radius: 1px;
            background: var(--b, var(--folder-inner));
        }

        .continue-application>div .folder:before {
            box-shadow: 0 1.5px 3px var(--shadow), 0 2.5px 5px var(--shadow), 0 3.5px 7px var(--shadow);
            transform: translateX(var(--fx, 0));
            transition: transform 0.4s ease var(--fd, 0.3s);
        }

        .continue-application>div .folder:after,
        .continue-application>div .folder .paper {
            --l: 1px;
            --t: 1px;
            --w: 21px;
            --h: 25px;
            --b: var(--paper-behind);
        }

        .continue-application>div .folder:after {
            transform: translate(var(--pbx, 0), var(--pby, 0));
            transition: transform 0.4s ease var(--pbd, 0s);
        }

        .continue-application>div .folder .paper {
            z-index: 1;
            --b: var(--paper);
        }

        .continue-application>div .folder .paper:before,
        .continue-application>div .folder .paper:after {
            content: "";
            width: var(--wp, 14px);
            height: 2px;
            border-radius: 1px;
            transform: scaleY(0.5);
            left: 3px;
            top: var(--tp, 3px);
            position: absolute;
            background: var(--paper-lines);
            box-shadow: 0 12px 0 0 var(--paper-lines), 0 24px 0 0 var(--paper-lines);
        }

        .continue-application>div .folder .paper:after {
            --tp: 6px;
            --wp: 10px;
        }

        .continue-application>div .pencil {
            height: 2px;
            width: 3px;
            border-radius: 1px 1px 0 0;
            top: 8px;
            left: 105%;
            position: absolute;
            z-index: 3;
            transform-origin: 50% 19px;
            background: var(--pencil-cap);
            transform: translateX(var(--pex, 0)) rotate(35deg);
            transition: transform 0.4s ease var(--pbd, 0s);
        }

        .continue-application>div .pencil:before,
        .continue-application>div .pencil:after {
            content: "";
            position: absolute;
            display: block;
            background: var(--b, linear-gradient(var(--pencil-top) 55%, var(--pencil-middle) 55.1%, var(--pencil-middle) 60%, var(--pencil-bottom) 60.1%));
            width: var(--w, 5px);
            height: var(--h, 20px);
            border-radius: var(--br, 2px 2px 0 0);
            top: var(--t, 2px);
            left: var(--l, -1px);
        }

        .continue-application>div .pencil:before {
            -webkit-clip-path: polygon(0 5%, 5px 5%, 5px 17px, 50% 20px, 0 17px);
            clip-path: polygon(0 5%, 5px 5%, 5px 17px, 50% 20px, 0 17px);
        }

        .continue-application>div .pencil:after {
            --b: none;
            --w: 3px;
            --h: 6px;
            --br: 0 2px 1px 0;
            --t: 3px;
            --l: 3px;
            border-top: 1px solid var(--pencil-top);
            border-right: 1px solid var(--pencil-top);
        }

        .continue-application:before,
        .continue-application:after {
            content: "";
            position: absolute;
            width: 10px;
            height: 2px;
            border-radius: 1px;
            background: var(--color);
            transform-origin: 9px 1px;
            transform: translateX(var(--cx, 0)) scale(0.5) rotate(var(--r, -45deg));
            top: 26px;
            right: 16px;
            transition: transform 0.3s;
        }

        .continue-application:after {
            --r: 45deg;
        }

        .continue-application:hover {
            --cx: 2px;
            --bg: var(--background-hover);
            --fx: -40px;
            --fr: -60deg;
            --fd: .15s;
            --fds: 0s;
            --pbx: 3px;
            --pby: -3px;
            --pbd: .15s;
            --pex: -24px;
        }



        .button {
            padding: 0;
            margin: 0;
            border: none;
            background: none;
            cursor: pointer;
        }

        .button {
            --primary-color: #111;
            --hovered-color: #c84747;
            position: relative;
            display: flex;
            font-weight: 600;
            font-size: 20px;
            gap: 0.5rem;
            align-items: center;
        }

        .button p {
            margin: 0;
            position: relative;
            font-size: 20px;
            color: var(--primary-color);
        }

        .button::after {
            position: absolute;
            content: "";
            width: 0;
            left: 0;
            bottom: -7px;
            background: var(--hovered-color);
            height: 2px;
            transition: 0.3s ease-out;
        }

        .button p::before {
            position: absolute;
            /*   box-sizing: border-box; */
            content: "Quay lại trang chủ";
            width: 0%;
            inset: 0;
            color: var(--hovered-color);
            overflow: hidden;
            transition: 0.3s ease-out;
        }

        .button:hover::after {
            width: 100%;
        }

        .button:hover p::before {
            width: 100%;
        }

        .button:hover svg {
            transform: translateX(4px);
            color: var(--hovered-color);
        }

        .button svg {
            color: var(--primary-color);
            transition: 0.2s;
            position: relative;
            width: 15px;
            transition-delay: 0.2s;
        }

        .scrollable-div {
            display: grid; 
            grid-template-columns: 1fr 1fr 1fr; 
            gap: 20px; margin-top: 90px;
            height: 600px;
            /* Đặt chiều cao của phần tử */
            overflow-y: scroll;
            /* Hiển thị thanh trượt dọc */
        }
    </style>
</head>

<body>
    @extends('layouts.menu')

    @section('content')
    <div class="col1">
        <h1>Quản lý danh mục sản phẩm {{$danhmuc->ten_sanpham}}</h1>
    </div>
    <div class="col2">
        <a href="{{ route('danhsachsp', $danhmuc->id) }}" style="text-decoration: none;" class="continue-application">
            <div>
                <div class="pencil"></div>
                <div class="folder">
                    <div class="top">
                        <svg viewBox="0 0 24 27">
                            <path d="M1,0 L23,0 C23.5522847,-1.01453063e-16 24,0.44771525 24,1 L24,8.17157288 C24,8.70200585 23.7892863,9.21071368 23.4142136,9.58578644 L20.5857864,12.4142136 C20.2107137,12.7892863 20,13.2979941 20,13.8284271 L20,26 C20,26.5522847 19.5522847,27 19,27 L1,27 C0.44771525,27 6.76353751e-17,26.5522847 0,26 L0,1 C-6.76353751e-17,0.44771525 0.44771525,1.01453063e-16 1,0 Z"></path>
                        </svg>
                    </div>
                    <div class="paper"></div>
                </div>
            </div>Quay lại trang sản phẩm
        </a>
    </div>
    @if (Session::has('thongbao'))
    <div class="alert alert-success">
        {{Session::get('thongbao')}}
    </div>
    @endif

    <div class="scrollable-div">
        @foreach ($sanpham as $sp)
        @if($sp->xoa_mem == 1)
        <div class="card">
            <div class="bg">
                <img src="{{asset('uploads/'.$sp->hinh_anh)}}" style="width: 100%; max-height: 200px;" class="card-img-top" alt="...">
                <div style="text-align: center;">
                    <div style="height: 200px;">
                        <h1>{{$sp->ten_sanpham}}</h1>
                        <h5>Giá bán: {{$sp->gia_sanpham}}</h5>
                        <h5>Mô tả: {{$sp->mo_ta}}</h5>
                        <h5>Ngày ra mắt: {{$sp->created_at}}</h5>
                    </div>

                    <div style="width: 100%; display: flex; justify-content: center; align-items: center;">
                        <div style="margin-top: 60px; display: flex; gap: 20px;">
                            <form action="{{route('xoamemsp', $sp->id)}}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group" style="display: none;">
                                    <input type="text" name="xoa_mem" class="form-control" value="0">
                                </div>
                                <button type="submit" class="button">
                                    <p>Quay lại trang chủ</p>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                    </svg>
                                </button>
                            </form>
                            <form action="{{route('xoavv', $sp->id)}}" method="POST">
                                @csrf
                                <div class="form-group" style="display: none;">
                                    <input type="text" name="xoa_mem" class="form-control" value="0">
                                </div>
                                <button type="submit" class="tooltip"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" height="25" width="25">
                                        <path fill="#6361D9" d="M8.78842 5.03866C8.86656 4.96052 8.97254 4.91663 9.08305 4.91663H11.4164C11.5269 4.91663 11.6329 4.96052 11.711 5.03866C11.7892 5.11681 11.833 5.22279 11.833 5.33329V5.74939H8.66638V5.33329C8.66638 5.22279 8.71028 5.11681 8.78842 5.03866ZM7.16638 5.74939V5.33329C7.16638 4.82496 7.36832 4.33745 7.72776 3.978C8.08721 3.61856 8.57472 3.41663 9.08305 3.41663H11.4164C11.9247 3.41663 12.4122 3.61856 12.7717 3.978C13.1311 4.33745 13.333 4.82496 13.333 5.33329V5.74939H15.5C15.9142 5.74939 16.25 6.08518 16.25 6.49939C16.25 6.9136 15.9142 7.24939 15.5 7.24939H15.0105L14.2492 14.7095C14.2382 15.2023 14.0377 15.6726 13.6883 16.0219C13.3289 16.3814 12.8414 16.5833 12.333 16.5833H8.16638C7.65805 16.5833 7.17054 16.3814 6.81109 16.0219C6.46176 15.6726 6.2612 15.2023 6.25019 14.7095L5.48896 7.24939H5C4.58579 7.24939 4.25 6.9136 4.25 6.49939C4.25 6.08518 4.58579 5.74939 5 5.74939H6.16667H7.16638ZM7.91638 7.24996H12.583H13.5026L12.7536 14.5905C12.751 14.6158 12.7497 14.6412 12.7497 14.6666C12.7497 14.7771 12.7058 14.8831 12.6277 14.9613C12.5495 15.0394 12.4436 15.0833 12.333 15.0833H8.16638C8.05588 15.0833 7.94989 15.0394 7.87175 14.9613C7.79361 14.8831 7.74972 14.7771 7.74972 14.6666C7.74972 14.6412 7.74842 14.6158 7.74584 14.5905L6.99681 7.24996H7.91638Z" clip-rule="evenodd" fill-rule="evenodd"></path>
                                    </svg>
                                    <span class="tooltiptext">Xóa vĩnh viễn</span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blob"></div>
        </div>
        @endif
        @endforeach
    </div>

    @endsection
</body>

</html>