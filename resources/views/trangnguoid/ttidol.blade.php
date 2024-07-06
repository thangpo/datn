<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="{{asset('css/ttiddol.css')}}">
</head>

<body>
  @if(empty($usernd))
  <section>
    <header>
      <a href="#" id="logo" target="_blank">TG 48</a>

      <label for="toggle-1" class="toggle-menu">
        <ul>
          <li></li>
          <li></li>
          <li></li>
        </ul>
      </label>
      <input type="checkbox" id="toggle-1">

      <nav class="navidol">
        <ul class="ulidol">
          <li class="liidol"><a class="aidol" href="{{route('chuyenh.index')}}">Trang chủ</a></li>
          <li class="liidol"><a class="aidol" href="{{route('baihatview')}}">Nhạc</a></li>
          <li class="liidol"><a class="aidol" href="{{route('videocn')}}">MV mới</a></li>
          <li class="liidol"><a class="aidol" href="#">Nhóm nhạc</a></li>
          <li class="liidol"><a class="aidol" href="{{route('congdien')}}">Công diễn</a></li>
          <li class="liidol"><a class="aidol" href="{{route('baidangall')}}">Bài đăng</a></li>
          <li class="liidol"><a class="aidol" href="{{route('viewbaiveit')}}">Tin tức</a></li>
          @foreach ($idol as $nn)
          <li class="liidol"><a class="aidol" href="{{route('loginidol', $nn->id)}}">Đăng nhập</a></li>
          @endforeach
        </ul>
      </nav>
    </header>
  </section>
  @endif

  @if(empty($usernd) != 'Null')
  <header>
    <section>
      @if(empty($profile) != 'Null')
      <a href="{{route('profilend', $us->id)}}" id="logo" style="text-align: center;">
        <img style="width: 40px; height: 40px; border-radius: 50%;" src="{{asset('uploads/'.$profile->anhnd)}}" alt="">
        <p style="font-size: 15px;">Xin chào: {{$profile->tennd}}</p>
      </a>
      @if(empty($profile))
      <a href="{{route('themprf', $us->id)}}">Thêm mới thông tin khách hàng</a>
      @endif
      @endif
      <label for="toggle-1" class="toggle-menu">
        <ul>
          <li></li>
          <li></li>
          <li></li>
        </ul>
      </label>
      <input type="checkbox" id="toggle-1">

      <nav class="navidol">
        <ul class="ulidol">
          <li class="liidol"><a class="aidol" href="{{route('views', $usernd->id)}}">trang chủ</a></li>
          <li class="liidol"><a class="aidol" href="{{route('hoadon', $usernd->id)}}">Lịch sử mua sắm</a></li>
          <li class="liidol"><a class="aidol" href="{{route('viewvexem', $usernd->id)}}">Đặt vé</a></li>
          <li class="liidol"><a class="aidol" href="{{route('videond', $usernd->id)}}">MV mới</a></li>
          <li class="liidol"><a class="aidol" href="{{route('baidangnd', $usernd->id)}}">Bài đăng</a></li>
          <li class="liidol"><a class="aidol" href="{{route('hienthinus', $usernd->id)}}">Nhạc</a></li>
          <li class="liidol"><a class="aidol" href="{{route('congdiens', $usernd->id)}}">Công diễn</a></li>
          @if($usernd->id > 0)
          <li class="liidol"><a class="aidol" href="{{route('videonganctnd', $usernd->id)}}">Video ngắn</a></li>
          @endif
        </ul>
      </nav>
  </header>
  </section>
  @endif

  @foreach ($idol as $nn)
  <div class="idol-1">

    <div class="idol-2">

      <!---->
      <div class="card" style="margin-top: 20px;">
        <img class="image" src="{{asset('uploads/'.$nn->anh)}}" alt="">
        <div class="card-info">
          <span>{{$nn->tenid}}</span>
          @foreach ($tdidol as $td)
          @if($td->id == $nn->id)
          <p>Số người theo dõi: {{$td->theodoi_count}}</p>
          <a href="/tinnhan/{{$nn->id}}/user/{{$usernd->id}}">Nhắn tin với idol</a>
          @endif
          @endforeach
        </div>
        <!--theo dõi người dùng-->
        @if(empty($usernd) != 'Null')
        @if(empty($theodoi))
        <form action="{{route('theodoi', $usernd->id)}}" method="POST">
          @csrf
          <input type="text" name="idol_id" value="{{$nn->id}}" style="position: absolute; left: -999px;">
          <button type="submit" class="button">Theo dõi idol</button>
        </form>
        @endif
        @endif

        @if(empty($usernd))
        <div class="button">
          <a href="{{route('login')}}" style="text-decoration: none; color: white;">Đăng nhập để theo dõi</a>
        </div>
        @foreach ($tdidol as $td)
        @if($td->id == $nn->id)
        <p>Số người theo dõi: {{$td->theodoi_count}}</p>
        @endif
        @endforeach
        @endif

        @if(empty($usernd) != 'Null')
        @if(empty($theodoi) != 'Null')
        <button class="button"><a style="text-decoration: none; color: #fefefe;" href="/botheodoi/{{$nn->id}}/user/{{$usernd->id}}">Bỏ theo dõi</a></button>
        @endif
        @endif
      </div>
      <!---->


      <!--thông tin cá nhân-->
      <div class="profile-info">
        <h2></h2>


        <div class="parent">
          <div class="card2">
            <div class="logo">
              <span class="circle circle1"></span><span class="circle circle2"></span><span class="circle circle3"></span><span class="circle circle4"></span><span class="circle circle5">
                <img style="border-radius: 50%; width: 50px; height: 50px;" src="{{asset('uploads/'.$nhomnhac->logonn)}}" alt="">
            </div>

            <div class="glass"></div>

            <div class="content">
              <span class="title">Nhóm nhạc: ({{$nhomnhac->tennn}})</span>
              <span style="color: #00894d;">Chiều cao: <strong>{{$nn->chieucao}}cm || Tuổi thần tượng: <strong>{{$nn->tuoi}}</span>
              <span style="color: #00894d;">cân nặng: <strong>{{$nn->cannang}}KG || Quê quán: <strong>{{$nn->qquan}}</span>
            </div>

            <div class="bottom">

              <div class="social-buttons-container">
                <button class="social-button .social-button1">
                  <svg viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg" class="svg">
                    <path d="M 9.9980469 3 C 6.1390469 3 3 6.1419531 3 10.001953 L 3 20.001953 C 3 23.860953 6.1419531 27 10.001953 27 L 20.001953 27 C 23.860953 27 27 23.858047 27 19.998047 L 27 9.9980469 C 27 6.1390469 23.858047 3 19.998047 3 L 9.9980469 3 z M 22 7 C 22.552 7 23 7.448 23 8 C 23 8.552 22.552 9 22 9 C 21.448 9 21 8.552 21 8 C 21 7.448 21.448 7 22 7 z M 15 9 C 18.309 9 21 11.691 21 15 C 21 18.309 18.309 21 15 21 C 11.691 21 9 18.309 9 15 C 9 11.691 11.691 9 15 9 z M 15 11 A 4 4 0 0 0 11 15 A 4 4 0 0 0 15 19 A 4 4 0 0 0 19 15 A 4 4 0 0 0 15 11 z"></path>
                  </svg></button>
                <button class="social-button .social-button2">
                  <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" class="svg">
                    <path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path>
                  </svg>
                </button>
                <button class="social-button .social-button3">
                  <svg viewBox="0 0 640 512" xmlns="http://www.w3.org/2000/svg" class="svg">
                    <path d="M524.531,69.836a1.5,1.5,0,0,0-.764-.7A485.065,485.065,0,0,0,404.081,32.03a1.816,1.816,0,0,0-1.923.91,337.461,337.461,0,0,0-14.9,30.6,447.848,447.848,0,0,0-134.426,0,309.541,309.541,0,0,0-15.135-30.6,1.89,1.89,0,0,0-1.924-.91A483.689,483.689,0,0,0,116.085,69.137a1.712,1.712,0,0,0-.788.676C39.068,183.651,18.186,294.69,28.43,404.354a2.016,2.016,0,0,0,.765,1.375A487.666,487.666,0,0,0,176.02,479.918a1.9,1.9,0,0,0,2.063-.676A348.2,348.2,0,0,0,208.12,430.4a1.86,1.86,0,0,0-1.019-2.588,321.173,321.173,0,0,1-45.868-21.853,1.885,1.885,0,0,1-.185-3.126c3.082-2.309,6.166-4.711,9.109-7.137a1.819,1.819,0,0,1,1.9-.256c96.229,43.917,200.41,43.917,295.5,0a1.812,1.812,0,0,1,1.924.233c2.944,2.426,6.027,4.851,9.132,7.16a1.884,1.884,0,0,1-.162,3.126,301.407,301.407,0,0,1-45.89,21.83,1.875,1.875,0,0,0-1,2.611,391.055,391.055,0,0,0,30.014,48.815,1.864,1.864,0,0,0,2.063.7A486.048,486.048,0,0,0,610.7,405.729a1.882,1.882,0,0,0,.765-1.352C623.729,277.594,590.933,167.465,524.531,69.836ZM222.491,337.58c-28.972,0-52.844-26.587-52.844-59.239S193.056,219.1,222.491,219.1c29.665,0,53.306,26.82,52.843,59.239C275.334,310.993,251.924,337.58,222.491,337.58Zm195.38,0c-28.971,0-52.843-26.587-52.843-59.239S388.437,219.1,417.871,219.1c29.667,0,53.307,26.82,52.844,59.239C470.715,310.993,447.538,337.58,417.871,337.58Z"></path>
                  </svg>
                </button>
              </div>
              <div class="view-more">
                <button class="view-more-button">
                  @if(empty($users) != 'Null')
                    Email liên hệ: {{$users->email}}
                  @endif
                </button>
                <svg class="svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                  <path d="m6 9 6 6 6-6"></path>
                </svg>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!---->
    </div>
  </div>
  @endforeach


  @foreach ($idol as $nn)
  <h2 style="text-align: center; margin-top: 20px;">Hoạt động của {{$nn->tenid}} sắp tới</h2>
  @endforeach

  <div class="container">
    @foreach ($lichtrinh as $lt)
    <div class="card3">
      <p class="title2">
        {{$lt->tenlt}}
      <p>
        Thời gian diễn ra: {{$lt->thoigian}}, Địa điểm tổ chức: {{$lt->diadiem}},
        Số lượng người xem: {{$lt->slve}}.
      </p>
      <img style="width: 140px; height: 80px;" src="{{asset('uploads/'.$lt->anhbn)}}" alt="">
      </p>
    </div>
    @endforeach
  </div>




  <div style="width: 100%; text-align: center;">
    <h1>MV đã tham gia của</h1>
  </div>

  <div style="display: flex; justify-content: center; align-items: center;">
    <div style="display: flex; gap: 20px; width: 800px;">

      <div class="main" style="margin-left: 250px;">
        <div class="currentplaying">
          <img src="http://127.0.0.1:8000/uploads/1706175766.jpg" style="width: 40px; height: 40px;" alt="">
          <p class="heading">TG 48</p>
        </div>
        @foreach ($nhac as $n)
        <div class="loader">
          <div class="song">
            <p class="name">{{$n->tenn}} {{$nhomnhac->tennn}}</p>
            <p class="artist">{{$n->loainhac}} {{$n->tacgia}}</p>
          </div>
          <img class="albumcover" src="{{asset('uploads/'.$n->anh)}}" alt="">
          <div class="loading">
            <div class="load"></div>
            <div class="load"></div>
            <div class="load"></div>
            <div class="load"></div>
          </div>
        </div>
        @endforeach
      </div>
    </div>


    <div class="slideshow-container">

      <!-- Full-width images with number and caption text -->
      @foreach($anhtheoid as $atid)
      @php
      $anhid = json_decode($atid->anhid);
      @endphp
      @foreach($anhid as $anhid)
      <div class="mySlides fade">
        <img class="slide-in-bck-center" src="{{asset('uploads/'.$anhid)}}" style="width: 300px; height: 500px;">
      </div>
      @endforeach
      @endforeach
      <!-- Next and previous buttons -->
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
      <!-- The dots/circles -->
      <br>
      <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        <span class="dot" onclick="currentSlide(5)"></span>
      </div>
    </div>

  </div>
  <script>
    let slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
      if (n > slides.length) {
        slideIndex = 1
      }
      if (n < 1) {
        slideIndex = slides.length
      }
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
    }
  </script>

  <div style="display: flex; margin-top: 20px; background-color:  #f0e7ff;">
    <div style="margin-top: 20px; float: left; width: 50%;">
      <h1>Các công ty trực thuộc TG 48</h1>
      <div style="display: flex; gap: 10px; margin-top: 20px;">
        <img style="width: 100px; height: 100px;" src="http://127.0.0.1:8000/uploads/1705396030.jpg" alt="">
        <img style="width: 100px; height: 100px;" src="https://www.snh48.com/images/index/top_ng_3.jpg" alt="">
        <img style="width: 100px; height: 100px;" src="https://tse4.mm.bing.net/th?id=OIP.idvZXsQmQA-bbNhWI9mruQHaHa&pid=Api&P=0&h=180" alt="">
        <img style="width: 100px; height: 100px;" src="https://www.snh48.com/images/index/b_group1.jpg" alt="">
        <img style="width: 100px; height: 100px;" src="https://www.snh48.com/images/index/b_group2.jpg" alt="">
      </div>
    </div>

    <div style="float: right; width: 50%;">
      <h1 style="margin-top: 8px;">Công ty TNHH Tập đoàn Truyền thông Văn hóa TG 48 và TG</h1>
      <p>Shanghai ICP số 14039775-2 Giấy phép biểu diễn thương mại:
        Biểu diễn văn hóa Thượng Hải (Kinh tế) 00-0178 Giấy phép kinh doanh văn hóa Internet: Huwangwen (2021) số 1544-112 Mạng lưới an ninh công cộng Thượng Hải số 31010902001118
        Giấy phép kinh doanh xuất bản: Xinfa Hu Ling Zi số H6165 Giấy phép kinh doanh viễn thông giá trị gia tăng: Thượng Hải B2-20211154

        Giấy phép sản xuất và hoạt động chương trình phát thanh, truyền hình: Thượng Hải số 1131, Thượng Hải số 1289
      </p>
      <div style="display: flex; gap: 10px; margin-top: 20px;">
        <img style="width: 70px; height: 50px;" src="https://www.snh48.com/images/ico-shjbzx.jpg" alt="">
        <img style="width: 70px; height: 50px;" src="https://www.snh48.com/images/ico-12377.jpg" alt="">
      </div>
    </div>
  </div>

  <div style="display: flex; background-color:  #f0e7ff;">
    <div style="margin-top: 20px; float: left; width: 50%;">
      <h1>Bạn có thế nghe nhạc của TG 48 qua các nền tảng</h1>
      <div style="display: flex; gap: 10px; margin-top: 20px;">
        <img style="width: 100px; height: 100px;" src="https://tse3.mm.bing.net/th?id=OIP.7-zsNfcPGE0yVmUjF8AKEAHaFj&pid=Api&P=0&h=180" alt="">
        <img style="width: 100px; height: 100px;" src="https://tse4.mm.bing.net/th?id=OIP.XnxAp7M4BkEKdxJWuuhjQgHaHa&pid=Api&P=0&h=180" alt="">
        <img style="width: 100px; height: 100px;" src="https://tse3.mm.bing.net/th?id=OIP.OlHWM-7qhO7Dt86ddR3gsgAAAA&pid=Api&P=0&h=180" alt="">
        <img style="width: 100px; height: 100px;" src="https://tse4.mm.bing.net/th?id=OIP.S5A9RrfZ66bE76yPtCgnYAHaHa&pid=Api&P=0&h=180" alt="">
        <img style="width: 100px; height: 100px;" src="https://tse1.mm.bing.net/th?id=OIP.5_X81BrLgxKRLKgAyWzaHAHaHa&pid=Api&P=0&h=180" alt="">
      </div>
    </div>

    <div>
      <h1 style="margin-top: 12px;">Thông tin liên hệ</h1>
      <p>Địa chỉ 1: Tổ 11 Việt Quang, Bắc Quang, Hà Giang</p>
      <p>Địa chỉ 2: 105 Doãn Kế Thiện, Mai Dịch, Cầy Giấy, Hà Nội</p>
      <p>Số điện thoại: 0349585108</p>
      <p>Tổng đài hỗ trợ: 0984103329</p>
      <p>Email: Giangthangc3@gmail.com</p>
      <p>Email hỗ trợ: Thangvipporo@gmail.com</p>
    </div>
  </div>

</body>

</html>