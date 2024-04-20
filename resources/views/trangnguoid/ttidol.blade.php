<style>
.card {width: 450px;height: 300px;display: flex;flex-direction: column;align-items: center;justify-content: center;text-align: center;gap: 10px;background-color: #fffffe;border-radius: 15px;position: relative;overflow: hidden;}.card::before {content: "";width: 450px;height: 100px;position: absolute;top: 0;border-top-left-radius: 15px;border-top-right-radius: 15px;border-bottom: 3px solid #fefefe;background: linear-gradient(40deg, rgba(131, 58, 180, 1) 0%, rgba(253, 29, 29, 1) 50%, rgba(252, 176, 69, 1) 100%);transition: all 0.5s ease;}.card * {z-index: 1;}
.image {width: 100px;height: 100px;background-color: #1468BF;border-radius: 50%;border: 4px solid #fefefe;margin-top: 30px;transition: all 0.5s ease;}.card-info {display: flex;flex-direction: column;align-items: center;gap: 15px;transition: all 0.5s ease;}.card-info span {font-weight: 600;font-size: 24px;color: #161A42;margin-top: 15px;line-height: 5px;}.card-info p {color: rgba(0, 0, 0, 0.5);}
.button {text-decoration: none;background-color: #1468BF;color: white;padding: 5px 20px;border-radius: 5px;border: 1px solid white;transition: all 0.5s ease;}.card:hover::before {width: 450px;height: 300px;border-bottom: none;border-bottom-left-radius: 15px;border-bottom-right-radius: 15px;transform: scale(0.95);}.card:hover .card-info {transform: translate(0%, -25%);}.card:hover .image {transform: scale(2) translate(-60%, -40%);}
.button:hover {background-color: #FF6844;transform: scale(1.1);}

.parent {width: 450px;height: 300px;perspective: 1000px;}
.card2 {height: 100%;border-radius: 50px;background: linear-gradient(135deg, rgb(0, 255, 214) 0%, rgb(8, 226, 96) 100%);transition: all 0.5s ease-in-out;transform-style: preserve-3d;box-shadow: rgba(5, 71, 17, 0) 40px 50px 25px -40px, rgba(5, 71, 17, 0.2) 0px 25px 25px -5px;}
.glass {transform-style: preserve-3d;position: absolute;inset: 8px;border-radius: 55px;border-top-right-radius: 100%;background: linear-gradient(0deg, rgba(255, 255, 255, 0.349) 0%, rgba(255, 255, 255, 0.815) 100%);/* -webkit-backdrop-filter: blur(5px);backdrop-filter: blur(5px); */transform: translate3d(0px, 0px, 25px);border-left: 1px solid white;border-bottom: 1px solid white;transition: all 0.5s ease-in-out;}
.content {padding: 100px 60px 0px 30px;transform: translate3d(0, 0, 26px);}.content .title {display: block;color: #00894d;font-weight: 900;font-size: 20px;}.content .text {display: block;color: rgba(0, 137, 78, 0.7647058824);font-size: 15px;margin-top: 20px;}
.bottom {padding: 10px 12px;transform-style: preserve-3d;position: absolute;bottom: 20px;left: 20px;right: 20px;display: flex;align-items: center;justify-content: space-between;transform: translate3d(0, 0, 26px);}.bottom .view-more {display: flex;align-items: center;width: 40%;justify-content: flex-end;transition: all 0.2s ease-in-out;}.bottom .view-more:hover {transform: translate3d(0, 0, 10px);}.bottom .view-more .view-more-button {background: none;border: none;color: #00c37b;font-weight: bolder;font-size: 12px;}.bottom .view-more .svg {fill: none;stroke: #00c37b;stroke-width: 3px;max-height: 15px;}.bottom .social-buttons-container {display: flex;gap: 10px;transform-style: preserve-3d;}.bottom .social-buttons-container .social-button {width: 30px;aspect-ratio: 1;padding: 5px;background: rgb(255, 255, 255);border-radius: 50%;border: none;display: grid;place-content: center;box-shadow: rgba(5, 71, 17, 0.5) 0px 7px 5px -5px;}.bottom .social-buttons-container .social-button:first-child {transition: transform 0.2s ease-in-out 0.4s, box-shadow 0.2s ease-in-out 0.4s;}.bottom .social-buttons-container .social-button:nth-child(2) {transition: transform 0.2s ease-in-out 0.6s, box-shadow 0.2s ease-in-out 0.6s;}.bottom .social-buttons-container .social-button:nth-child(3) {transition: transform 0.2s ease-in-out 0.8s, box-shadow 0.2s ease-in-out 0.8s;}.bottom .social-buttons-container .social-button .svg {width: 15px;fill: #00894d;}.bottom .social-buttons-container .social-button:hover {background: black;}.bottom .social-buttons-container .social-button:hover .svg {fill: white;}.bottom .social-buttons-container .social-button:active {background: rgb(255, 234, 0);}.bottom .social-buttons-container .social-button:active .svg {fill: black;}
.logo {position: absolute;right: 0;top: 0;transform-style: preserve-3d;}.logo .circle {display: block;position: absolute;aspect-ratio: 1;border-radius: 50%;top: 0;right: 0;box-shadow: rgba(100, 100, 111, 0.2) -10px 10px 20px 0px;-webkit-backdrop-filter: blur(5px);backdrop-filter: blur(5px);background: rgba(0, 249, 203, 0.2);transition: all 0.5s ease-in-out;}.logo .circle1 {width: 170px;transform: translate3d(0, 0, 20px);top: 8px;right: 8px;}.logo .circle2 {width: 140px;transform: translate3d(0, 0, 40px);top: 10px;right: 10px;-webkit-backdrop-filter: blur(1px);backdrop-filter: blur(1px);transition-delay: 0.4s;}.logo .circle3 {width: 110px;transform: translate3d(0, 0, 60px);top: 17px;right: 17px;transition-delay: 0.8s;}.logo .circle4 {width: 80px;transform: translate3d(0, 0, 80px);top: 23px;right: 23px;transition-delay: 1.2s;}.logo .circle5 {width: 50px;transform: translate3d(0, 0, 100px);top: 30px;right: 30px;display: grid;place-content: center;transition-delay: 1.6s;}.logo .circle5 .svg {width: 20px;fill: white;}
.parent:hover .card2 {transform: rotate3d(1, 1, 0, 30deg);box-shadow: rgba(5, 71, 17, 0.3) 30px 50px 25px -40px, rgba(5, 71, 17, 0.1) 0px 25px 30px 0px;}.parent:hover .card2 .bottom .social-buttons-container .social-button {transform: translate3d(0, 0, 50px);box-shadow: rgba(5, 71, 17, 0.2) -5px 20px 10px 0px;}.parent:hover .card2 .logo .circle2 {transform: translate3d(0, 0, 60px);}.parent:hover .card2 .logo .circle3 {transform: translate3d(0, 0, 80px);}.parent:hover .card2 .logo .circle4 {transform: translate3d(0, 0, 100px);}.parent:hover .card2 .logo .circle5 {transform: translate3d(0, 0, 120px);}

.container {overflow: auto;display: flex;scroll-snap-type: x mandatory;width: 90%;margin: 0 auto;padding: 0 15px;}
.card3 {background: rgba(255, 255, 255, 0.25);box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);backdrop-filter: blur(7px);-webkit-backdrop-filter: blur(7px);border-radius: 10px;padding: 2rem;margin: 1rem;width: 100%;}
.title2 {width: 100%;display: inline-block;word-break: break-all;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;text-align: center;margin: 1rem auto;}

.main {
  background-color: white;
  padding: 1em;
  padding-bottom: 1.1em;
  border-radius: 15px;
  margin: 1em;
}

.loader {
  display: flex;
  flex-direction: row;
  height: 4em;
  padding-left: 1em;
  padding-right: 1em;
  transform: rotate(180deg);
  justify-content: right;
  border-radius: 10px;
  transition: .4s ease-in-out;
}

.loader:hover {
  cursor: pointer;
  background-color: lightgray;
}

.currentplaying {
  display: flex;
  margin: 1em;
}

.soundcloud {
  width: 50px;
  height: 50px;
  margin-right: 0.6em;
}

.heading {
  color: black;
  font-size: 1.1em;
  font-weight: bold;
  align-self: center;
}

.loading {
  display: flex;
  margin-top: 1em;
  margin-left: 0.3em;
}

.load {
  width: 2px;
  height: 33px;
  background-color: #ff8800;
  animation: 1s move6 infinite;
  border-radius: 5px;
  margin: 0.1em;
}

.load:nth-child(1) {
  animation-delay: 0.2s;
}

.load:nth-child(2) {
  animation-delay: 0.4s;
}

.load:nth-child(3) {
  animation-delay: 0.6s;
}

.play {position: relative;left: 0.35em;height: 1.6em;width: 1.6em;clip-path: polygon(50% 50%, 100% 50%, 75% 6.6%);background-color: black;transform: rotate(-90deg);align-self: center;margin-top: 0.7em;justify-self: center;}.albumcover {position: relative;margin-right: 1em;height: 40px;width: 40px;background-color: rgb(233, 232, 232);align-self: center;border-radius: 5px;}
.song {position: relative;transform: rotate(180deg);margin-right: 1em;color: black;align-self: center;}.artist {font-size: 0.6em;}
@keyframes move6 {0% {height: 0.2em;}25% {height: 0.7em;}50% {height: 1.5em;}100% {height: 0.2em;}}


* {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {
  max-width: 300px;
  position: relative;
  margin: auto;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}
</style>



@foreach ($idol as $nn)
<div style="display: flex; justify-content: center; align-items: center;">

  <div style="display: flex; gap: 10px;">

    <!---->
    <div class="card" style="margin-top: 20px;">
        <img class="image" src="{{asset('uploads/'.$nn->anh)}}" alt="">
      <div class="card-info">
        <span>{{$nn->tenid}}</span>
        @foreach ($tdidol as $td)
        @if($td->id == $nn->id)
          <p>Số người theo dõi: {{$td->theodoi_count}}</p>
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
        <a href="{{route('login')}}">Đăng nhập để theo dõi</a>
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
                <span class="text">Chiều cao: <strong>{{$nn->chieucao}}cm || Tuổi thần tượng: <strong>{{$nn->tuoi}}</span>
                <span class="text">cân nặng: <strong>{{$nn->cannang}}KG || Quê quán: <strong>{{$nn->qquan}}</span>
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
                @foreach ($users as $nn)
                    <button class="view-more-button">    
                      Email liên hệ: {{$nn->email}}
                    </button>
                @endforeach   
                    <svg class="svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"></path></svg>
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
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
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