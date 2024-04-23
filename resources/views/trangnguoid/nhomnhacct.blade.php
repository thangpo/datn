@extends('layouts.trangcc')

@section('content')
@if (empty($users))
<section>
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
      <li class="liidol"><a class="aidol" href="#">Trang chủ</a></li>
      <li class="liidol"><a class="aidol" href="{{route('baihatview')}}">Nhạc</a></li>
      <li class="liidol"><a class="aidol" href="{{route('videocn')}}">MV mới</a></li>
      <li class="liidol"><a class="aidol" href="#">Nhóm nhạc</a></li>
      <li class="liidol"><a class="aidol" href="{{route('congdien')}}">Công diễn</a></li>
      <li class="liidol"><a class="aidol" href="{{route('baidangall')}}">Bài đăng</a></li>
      <li class="liidol"><a class="aidol" href="{{route('viewbaiveit')}}">Tin tức</a></li>
      <li class="liidol"><a class="aidol" href="{{route('login')}}">Đăng nhập</a></li>
    </ul>
  </nav>
  </header>
</section>
@endif
@if(empty($users) != 'Null')
@foreach($users as $us)
<header>
  <section>
    @if(empty($idolsl) != 'Null')
    <a href="{{route('chuyentiep', $us->id)}}" id="logo" style="text-align: center;">
      <img style="width: 40px; height: 40px; border-radius: 50%;" src="{{asset('uploads/'.$idolsl->anh)}}" alt="">
      <p style="font-size: 15px;">Xin chào: {{$idolsl->tenid}}</p>
    </a>
    @endif

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
        <li class="liidol"><a class="aidol" href="{{route('hoadon', $us->id)}}">Lịch sử mua sắm</a></li>
        <li class="liidol"><a class="aidol" href="{{route('viewvexem', $us->id)}}">Đặt vé</a></li>
        <li class="liidol"><a class="aidol" href="{{route('videond', $us->id)}}">MV mới</a></li>
        <li class="liidol"><a class="aidol" href="{{route('baidangnd', $us->id)}}">Bài đăng</a></li>
        <li class="liidol"><a class="aidol" href="{{route('hienthinus', $us->id)}}">Nhạc</a></li>
        <li class="liidol"><a class="aidol" href="{{route('congdiens', $us->id)}}">Công diễn</a></li>
        @if($us->id > 0)
        @if($us->idol_id == 'Null')
        <li class="liidol"><a class="aidol" href="{{route('profilend', $us->id)}}">Profile</a></li>
        <li class="liidol"><a class="aidol" href="{{route('logout')}}">Đăng suất</a></li>
        @endif
        <li class="liidol"><a class="aidol" href="{{route('videonganctnd', $us->id)}}">Video ngắn</a></li>
        @endif
      </ul>
    </nav>
</header>
</section>
@endforeach

@endif

<div class="TG">
  <div class="body">
    <div class="content-width">
      @foreach ($nhomnhac as $nn)
      <h1 class="h1a">Thành viên nhóm nhạc: {{$nn->tennn}}</h1>
      @endforeach
      <div class="slideshow">
        <!-- Slideshow Items -->
        <div class="slideshow-items">
          @foreach ($idol as $nn)
          <div class="item">
            <div class="item-image-container">
              <img class="item-image" src="{{asset('uploads/'.$nn->anh)}}" />
            </div>
            <!-- Staggered Header Elements -->
            <div class="item-header">
              <span class="vertical-part"><b>{{$nn->tenid}}</b></span>
            </div>
            <!-- Staggered Description Elements -->
            <div class="item-description">
              <span class="vertical-part">
                <b>Tuổi thần tượng: {{$nn->tuoi}}</b>
              </span>
              <span class="vertical-part">
                <b>quê quán thần tượng: {{$nn->qquan}}</b>
              </span>
              <span class="vertical-part">
                <b>Chiều cao: {{$nn->chieucao}}</b>
              </span>
              <span class="vertical-part">
                <b>Cân nặng: {{$nn->cannang}}</b>
              </span>
              <span class="vertical-part">
                <b>Giới tính thần tượng: {{$nn->gioitinh == 0 ? 'nam' : 'nu'}}</b>
              </span>
            </div>
          </div>
          @endforeach


        </div>
        <div class="controls">
          <ul class="ulw">
            <li class="control liw" data-index="0"></li>
            <li class="control liw" data-index="1"></li>
            <li class="control liw" data-index="2"></li>
            <li class="control liw" data-index="3"></li>
            <li class="control liw" data-index="4"></li>
            <li class="control liw" data-index="5"></li>
            <li class="control liw" data-index="6"></li>
          </ul>
        </div>
      </div>
    </div>
    <script>
      const items = document.querySelectorAll('.item'),
        controls = document.querySelectorAll('.control'),
        headerItems = document.querySelectorAll('.item-header'),
        descriptionItems = document.querySelectorAll('.item-description'),
        activeDelay = .76,
        interval = 5000;

      let current = 0;

      const slider = {
        init: () => {
          controls.forEach(control => control.addEventListener('click', (e) => {
            slider.clickedControl(e)
          }));
          controls[current].classList.add('active');
          items[current].classList.add('active');
        },
        nextSlide: () => {
          slider.reset();
          if (current === items.length - 1) current = -1;
          current++;
          controls[current].classList.add('active');
          items[current].classList.add('active');
          slider.transitionDelay(headerItems);
          slider.transitionDelay(descriptionItems);
        },
        clickedControl: (e) => {
          slider.reset();
          clearInterval(intervalF);

          const control = e.target,
            dataIndex = Number(control.dataset.index);

          control.classList.add('active');
          items.forEach((item, index) => {
            if (index === dataIndex) {
              item.classList.add('active');
            }
          })
          current = dataIndex;
          slider.transitionDelay(headerItems);
          slider.transitionDelay(descriptionItems);
          intervalF = setInterval(slider.nextSlide, interval);
        },
        reset: () => {
          items.forEach(item => item.classList.remove('active'));
          controls.forEach(control => control.classList.remove('active'));
        },
        transitionDelay: (items) => {
          let seconds;

          items.forEach(item => {
            const children = item.childNodes;
            let count = 1,
              delay;

            item.classList.value === 'item-header' ? seconds = .015 : seconds = .007;

            children.forEach(child => {
              if (child.classList) {
                item.parentNode.classList.contains('active') ? delay = count * seconds + activeDelay : delay = count * seconds;
                child.firstElementChild.style.transitionDelay = `${delay}s`;
                count++;
              }
            })
          })
        },
      }

      let intervalF = setInterval(slider.nextSlide, interval);
      slider.init();
    </script>
  </div>



  <div class="ctg">
    <h1 class="h1q tracking-in-contract">MV mới ra mắt</h1>
    <div class="main">
      <div class="cd-slider">
        <ul class="ulq">
          @foreach ($baihat as $bh)
          <li class="liq">
            <div class="image" style="background-image:url({{asset('uploads/'.$bh->anhbh)}});"></div>
            <div class="content">
              <h2 class="h2q">{{$bh->tenbh}}</h2>
              <h2 class="h2q">{{$bh->ngayph}}</h2>
              <h2 class="h2q">{{$bh->theloai}}</h2>
              <a href="#" class="aq">Nghe nhạc</a>
            </div>
          </li>
          @endforeach
        </ul>
      </div>

    </div>
    <script>
      (function() {

        function init(item) {
          var items = item.querySelectorAll('li'),
            current = 0,
            autoUpdate = true,
            timeTrans = 4000;

          //create nav
          var nav = document.createElement('nav');
          nav.className = 'nav_arrows';

          //create button prev
          var prevbtn = document.createElement('button');
          prevbtn.className = 'prev';
          prevbtn.setAttribute('aria-label', 'Prev');

          //create button next
          var nextbtn = document.createElement('button');
          nextbtn.className = 'next';
          nextbtn.setAttribute('aria-label', 'Next');

          //create counter
          var counter = document.createElement('div');
          counter.className = 'counter';
          counter.innerHTML = "<span>1</span><span>" + items.length + "</span>";

          if (items.length > 1) {
            nav.appendChild(prevbtn);
            nav.appendChild(counter);
            nav.appendChild(nextbtn);
            item.appendChild(nav);
          }

          items[current].className = "current";
          if (items.length > 1) items[items.length - 1].className = "prev_slide";

          var navigate = function(dir) {
            items[current].className = "";

            if (dir === 'right') {
              current = current < items.length - 1 ? current + 1 : 0;
            } else {
              current = current > 0 ? current - 1 : items.length - 1;
            }

            var nextCurrent = current < items.length - 1 ? current + 1 : 0,
              prevCurrent = current > 0 ? current - 1 : items.length - 1;

            items[current].className = "current";
            items[prevCurrent].className = "prev_slide";
            items[nextCurrent].className = "";

            //update counter
            counter.firstChild.textContent = current + 1;
          }

          item.addEventListener('mouseenter', function() {
            autoUpdate = false;
          });

          item.addEventListener('mouseleave', function() {
            autoUpdate = true;
          });

          setInterval(function() {
            if (autoUpdate) navigate('right');
          }, timeTrans);

          prevbtn.addEventListener('click', function() {
            navigate('left');
          });

          nextbtn.addEventListener('click', function() {
            navigate('right');
          });

          //keyboard navigation
          document.addEventListener('keydown', function(ev) {
            var keyCode = ev.keyCode || ev.which;
            switch (keyCode) {
              case 37:
                navigate('left');
                break;
              case 39:
                navigate('right');
                break;
            }
          });

          // swipe navigation
          // from http://stackoverflow.com/a/23230280
          item.addEventListener('touchstart', handleTouchStart, false);
          item.addEventListener('touchmove', handleTouchMove, false);
          var xDown = null;
          var yDown = null;

          function handleTouchStart(evt) {
            xDown = evt.touches[0].clientX;
            yDown = evt.touches[0].clientY;
          };

          function handleTouchMove(evt) {
            if (!xDown || !yDown) {
              return;
            }

            var xUp = evt.touches[0].clientX;
            var yUp = evt.touches[0].clientY;

            var xDiff = xDown - xUp;
            var yDiff = yDown - yUp;

            if (Math.abs(xDiff) > Math.abs(yDiff)) {
              /*most significant*/
              if (xDiff > 0) {
                /* left swipe */
                navigate('right');
              } else {
                navigate('left');
              }
            }
            /* reset values */
            xDown = null;
            yDown = null;
          };


        }

        [].slice.call(document.querySelectorAll('.cd-slider')).forEach(function(item) {
          init(item);
        });

      })();
    </script>
  </div>


  <!--idol-->
  <h1 class="text-shadow-drop-bl" style="font-size: 40px;">THÀNH VIÊN CỦA NHÓM NHẠC</h1>
  <div class="line"></div>
  <div style="margin-top: 20px; display: grid; grid-template-columns: 1fr 1fr 1fr 1fr; gap: 20px;">
    @foreach($idols as $id)
    <div class="card">
      <div class="top">
        <img style="width: 290px; height: 300px;" src="{{asset('uploads/'.$id->anh)}}" alt="">

      </div>
      <p class="desc">
      <p class="title">
        {{$id->tenid}}
      </p>
      Quê quán: {{$id->qquan}}<br>Tuổi: {{$id->tuoi}}
      </p>
    </div>
    @endforeach
  </div>


  <!--âm nhạc-->
  <h1 class="text-shadow-drop-bl" style="font-size: 40px; margin-top: 20px;">BÀI HÁT CỦA NHÓM NHẠC</h1>
  <div class="line"></div>


  <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 20px; margin-top: 20px;">
  @foreach($baihat as $bh)
    <div class="card2">
      <div class="one">
        <span class="title2">Music</span>
        <div class="music">
          <img style="width: 75px; height: 75px;" src="{{asset('uploads/'.$bh->anhbh)}}" alt="">
        </div>
        <span class="name">
          <div></div>
          {{$bh->tenbh}}
        </span>
        <span class="name1">
          <div></div>
          Thể loại: {{$bh->theloai}}
        </span>
        <div class="bar">
          <svg viewBox="0 0 16 16" class="color bi bi-fast-forward-fill" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
            <path d="M7.596 7.304a.802.802 0 0 1 0 1.392l-6.363 3.692C.713 12.69 0 12.345 0 11.692V4.308c0-.653.713-.998 1.233-.696l6.363 3.692Z"></path>
            <path d="M15.596 7.304a.802.802 0 0 1 0 1.392l-6.363 3.692C8.713 12.69 8 12.345 8 11.692V4.308c0-.653.713-.998 1.233-.696l6.363 3.692Z"></path>
          </svg>
          <svg viewBox="0 0 16 16" class="color bi bi-caret-right-fill" fill="currentColor" height="18" width="18" xmlns="http://www.w3.org/2000/svg">
            <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"></path>
          </svg>
          <svg viewBox="0 0 16 16" class="color bi bi-fast-forward-fill" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
            <path d="M7.596 7.304a.802.802 0 0 1 0 1.392l-6.363 3.692C.713 12.69 0 12.345 0 11.692V4.308c0-.653.713-.998 1.233-.696l6.363 3.692Z"></path>
            <path d="M15.596 7.304a.802.802 0 0 1 0 1.392l-6.363 3.692C8.713 12.69 8 12.345 8 11.692V4.308c0-.653.713-.998 1.233-.696l6.363 3.692Z"></path>
          </svg>
        </div>
        <div class="bar">
          <svg viewBox="0 0 16 16" class="color1 bi bi-shuffle" fill="currentColor" height="14" width="14" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 3.5A.5.5 0 0 1 .5 3H1c2.202 0 3.827 1.24 4.874 2.418.49.552.865 1.102 1.126 1.532.26-.43.636-.98 1.126-1.532C9.173 4.24 10.798 3 13 3v1c-1.798 0-3.173 1.01-4.126 2.082A9.624 9.624 0 0 0 7.556 8a9.624 9.624 0 0 0 1.317 1.918C9.828 10.99 11.204 12 13 12v1c-2.202 0-3.827-1.24-4.874-2.418A10.595 10.595 0 0 1 7 9.05c-.26.43-.636.98-1.126 1.532C4.827 11.76 3.202 13 1 13H.5a.5.5 0 0 1 0-1H1c1.798 0 3.173-1.01 4.126-2.082A9.624 9.624 0 0 0 6.444 8a9.624 9.624 0 0 0-1.317-1.918C4.172 5.01 2.796 4 1 4H.5a.5.5 0 0 1-.5-.5z" fill-rule="evenodd"></path>
            <path d="M13 5.466V1.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192zm0 9v-3.932a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192z"></path>
          </svg>
          <svg viewBox="0 0 16 16" class="color1 bi bi-music-note-list" fill="currentColor" height="14" width="14" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 13c0 1.105-1.12 2-2.5 2S7 14.105 7 13s1.12-2 2.5-2 2.5.895 2.5 2z"></path>
            <path d="M12 3v10h-1V3h1z" fill-rule="evenodd"></path>
            <path d="M11 2.82a1 1 0 0 1 .804-.98l3-.6A1 1 0 0 1 16 2.22V4l-5 1V2.82z"></path>
            <path d="M0 11.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 .5 7H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 .5 3H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5z" fill-rule="evenodd"></path>
          </svg>
          <svg viewBox="0 0 16 16" class="color1 bi bi-suit-heart" fill="currentColor" height="14" width="14" xmlns="http://www.w3.org/2000/svg">
            <path d="m8 6.236-.894-1.789c-.222-.443-.607-1.08-1.152-1.595C5.418 2.345 4.776 2 4 2 2.324 2 1 3.326 1 4.92c0 1.211.554 2.066 1.868 3.37.337.334.721.695 1.146 1.093C5.122 10.423 6.5 11.717 8 13.447c1.5-1.73 2.878-3.024 3.986-4.064.425-.398.81-.76 1.146-1.093C14.446 6.986 15 6.131 15 4.92 15 3.326 13.676 2 12 2c-.777 0-1.418.345-1.954.852-.545.515-.93 1.152-1.152 1.595L8 6.236zm.392 8.292a.513.513 0 0 1-.784 0c-1.601-1.902-3.05-3.262-4.243-4.381C1.3 8.208 0 6.989 0 4.92 0 2.755 1.79 1 4 1c1.6 0 2.719 1.05 3.404 2.008.26.365.458.716.596.992a7.55 7.55 0 0 1 .596-.992C9.281 2.049 10.4 1 12 1c2.21 0 4 1.755 4 3.92 0 2.069-1.3 3.288-3.365 5.227-1.193 1.12-2.642 2.48-4.243 4.38z"></path>
          </svg>
          <svg viewBox="0 0 16 16" class="color1 bi bi-arrow-right" fill="currentColor" height="14" width="14" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" fill-rule="evenodd"></path>
          </svg>
        </div>
      </div>
      <div class="two"></div>
      <div class="three"></div>
    </div>
    @endforeach
  </div>


<div class="text-container">
  <div class="shine">NHÀ ĐẦU TỪ</div>
  <div class="line"></div>
</div>

<div class="grid-container">
  <!-- Repeat this block for each logo -->
  <div class="grid-item">
    <img class="imgq slide-in-bck-bottom" src="https://tse2.mm.bing.net/th?id=OIP.mU4aWiTHoqPTMn_jVr1LhAHaHa&pid=Api&P=0&h=180" alt="Brand Logo">
  </div>
  <div class="grid-item">
    <img class="imgq kenburns-top" src="https://tse4.mm.bing.net/th?id=OIP.TLrhq3NYNn3qXBLVG6NMRwHaFb&pid=Api&P=0&h=180" alt="Brand Logo">
  </div>
  <div class="grid-item">
    <img class="imgq flip-horizontal-bottom" src="https://tse1.mm.bing.net/th?id=OIP.3JP6JL-sgfEKM8i-aXsWegHaHa&pid=Api&P=0&h=180" alt="Brand Logo">
  </div>
  <div class="grid-item">
    <img class="imgq" src="https://tse2.mm.bing.net/th?id=OIP.VUCRFnKp_7C8Wl5RejspOgHaHt&pid=Api&P=0&h=180" alt="Brand Logo">
  </div>
  <!-- ... -->
</div>


<div class="text-container">
  <div class="text-title">CÁC HOẠT ĐỘNG CỦA NHÓM</div>
  <div class="line"></div>
</div>

<div class="gridh">
  @foreach ($lichtrinh as $lt)
  <div class="section">
    <img class="imgh" src="{{asset('uploads/'.$lt->anhbn)}}" alt="">
    <div class="title">Công diễn: {{$lt->tenlt}}</div>
    <div class="description">Địa điểm công diễn: {{$lt->diadiem}}<br>Tên các bài hát biểu diễn:
      @php
      $cktrinhdien = json_decode($lt->cktrinhdien);
      @endphp
      @foreach($cktrinhdien as $kc)
      {{$kc}} ||
      @endforeach
    </div>
    <a href="#" class="button" style="margin-top: 30px;">Xem thêm</a>
    <div class="timestamp">Thời Gian: {{$lt->thoigian}}</div>
  </div>
  @endforeach
</div>




</div>
@endsection