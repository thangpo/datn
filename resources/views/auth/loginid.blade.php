
@extends('layouts.dangkdangn')
@section('content')
    <div class="container">
      <div class="content">
        <div class="logo">
          <img class="img1" src="img/T.png" alt="">
        </div>
        <div class="form">
          <form action="{{ route('loginidol', $id) }}" method="POST">
          <div class="top">
          <h2 class="hb1">Đăng nhập {{$previousRouteName}}</h2>
        </div>
        @csrf
        <input type="text" name="previousRouteName" value="{{$previousRouteName}}" style="display: none;">
        <div class="mb-4">
            <input class="input" type="email" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="email đăng ký">
        </div>
        <div class="mb-4">
            <input class="input" type="password" name="password" id="exampleInputPassword1" placeholder="mật khẩu">
        </div>

        <button type="submit" class="input">Đăng Nhập</button>
        <div class="icon">
          <span class="span fb"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
          </svg></span>
          <span class="span gg"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="15.25" viewBox="0 0 488 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"/></svg></span>
          <span class="span apple"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-apple" viewBox="0 0 16 16">
            <path d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43Zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282Z"/>
            <path d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43Zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282Z"/>
          </svg></span>
          <span class="span windows"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M0 93.7l183.6-25.3v177.4H0V93.7zm0 324.6l183.6 25.3V268.4H0v149.9zm203.8 28L448 480V268.4H203.8v177.9zm0-380.6v180.1H448V32L203.8 65.7z"/></svg></span>
        </div>
        <div class="forget">
          <input type="checkbox">
          <a href="{{route('chuyenh.index')}}">Quay về trang chủ</a>
        </div>
        <a href="{{ route('register') }}">Bạn Chưa có tài khoản</a>
      </form>
      </div>
      <div class="no-way">
        <div class="contact">
          <a href="#" class="aod active">Không đắng nhập được?</a>
          <a href="#" class="aod v">V73.0.3</a>
        </div>
        <div class="about">
          <p class="p1">Đây là trang đăng nhập của TG shop bạn có thắc mắc gì cứ đăng nhập hoặc đăng ký để được hỗ trợ nhiệt tình nhất Thank you các bạn của tôi</p>
        </div>
      </div>
    </div>

    <div class="TG">
      <img class="imgB" src="https://f.ptcdn.info/539/070/000/qf3invkpvO9q5QBDQE9-o.jpg" alt="">
    </div>
    </div>
@endsection