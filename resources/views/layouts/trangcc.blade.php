<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/trangcc.css') }}">
</head>
<body>
<header>
        <section>
        <a href="#" id="logo" target="_blank">TG 48</a>

        <label for="toggle-1" class="toggle-menu"><ul><li></li> <li></li> <li></li></ul></label>
        <input type="checkbox" id="toggle-1">

        <nav class="navidol">
        <ul class="ulidol">
        <li class="liidol"><a class="aidol" href="#">Trang chủ</a></li>
        <li class="liidol"><a class="aidol" href="#">Giới thiệu</a></li>
        <li class="liidol"><a class="aidol" href="#">Đặt vé</a></li>
        <li class="liidol"><a class="aidol" href="#">Nhóm nhạc</a></li>
        <li class="liidol"><a class="aidol" href="#">Công diễn</a></li>
        <li class="liidol"><a class="aidol" href="#">Đăng nhập</a></li>
        <li class="liidol"><a class="aidol" href="#"><img class="imgidol" src="https://www.snh48.com/images/member/zp_10288.jpg" alt=""></a></li>
        </ul>
        </nav>
        </header>
        </section>
    <div class="main">
        @yield('content')
    </div>
</body>
</html>