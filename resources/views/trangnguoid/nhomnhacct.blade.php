@extends('layouts.trangcc')

@section('content')
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
    controls.forEach(control => control.addEventListener('click', (e) => { slider.clickedControl(e) }));
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
    <h1 class="h1q">MV mới ra mắt</h1>
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
  counter.innerHTML = "<span>1</span><span>"+items.length+"</span>";

  if (items.length > 1) {
    nav.appendChild(prevbtn);
    nav.appendChild(counter);
    nav.appendChild(nextbtn);
    item.appendChild(nav);
  }

  items[current].className = "current";
  if (items.length > 1) items[items.length-1].className = "prev_slide";

  var navigate = function(dir) {
    items[current].className = "";

    if (dir === 'right') {
      current = current < items.length-1 ? current + 1 : 0;
    } else {
      current = current > 0 ? current - 1 : items.length-1;
    }

    var	nextCurrent = current < items.length-1 ? current + 1 : 0,
      prevCurrent = current > 0 ? current - 1 : items.length-1;

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
  },timeTrans);
  
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
    if ( ! xDown || ! yDown ) {
      return;
    }

    var xUp = evt.touches[0].clientX;
    var yUp = evt.touches[0].clientY;

    var xDiff = xDown - xUp;
    var yDiff = yDown - yUp;

    if ( Math.abs( xDiff ) > Math.abs( yDiff ) ) {/*most significant*/
      if ( xDiff > 0 ) {
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

[].slice.call(document.querySelectorAll('.cd-slider')).forEach( function(item) {
  init(item);
});

})();
  </script>
</div>

<div class="text-container">
  <div class="text-title">NHÀ ĐẦU TỪ</div>
  <div class="line"></div>
</div>

<div class="grid-container">
  <!-- Repeat this block for each logo -->
  <div class="grid-item">
    <img class="imgq" src="https://tse2.mm.bing.net/th?id=OIP.mU4aWiTHoqPTMn_jVr1LhAHaHa&pid=Api&P=0&h=180" alt="Brand Logo">
  </div>
  <div class="grid-item">
    <img class="imgq" src="https://tse4.mm.bing.net/th?id=OIP.TLrhq3NYNn3qXBLVG6NMRwHaFb&pid=Api&P=0&h=180" alt="Brand Logo">
  </div>
  <div class="grid-item">
    <img class="imgq" src="https://tse1.mm.bing.net/th?id=OIP.3JP6JL-sgfEKM8i-aXsWegHaHa&pid=Api&P=0&h=180" alt="Brand Logo">
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