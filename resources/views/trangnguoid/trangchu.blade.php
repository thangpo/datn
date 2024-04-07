@extends('layouts.trangchu')

@section('content')

@if (empty($users))
<section>
        <a href="#" id="logo" target="_blank">TG 48</a>

        <label for="toggle-1" class="toggle-menu"><ul><li></li> <li></li> <li></li></ul></label>
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
        @if(empty($idols) != 'Null')
        <div style="margin-top: 10px;">
          <img style="width: 40px; height: 40px; border-radius: 50%;" src="{{asset('uploads/'.$idols->anh)}}" alt="">
        </div>
        @endif

        @if(empty($profile) != 'Null')
        <div style="margin-top: 10px;">
          <img style="width: 40px; height: 40px; border-radius: 50%;" src="{{asset('uploads/'.$profile->anhnd)}}" alt="">
        </div>
        @endif


        <label for="toggle-1" class="toggle-menu"><ul><li></li> <li></li> <li></li></ul></label>
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
        <li class="liidol"><a class="aidol" href="{{route('profile', $us->id)}}">Profile</a></li>
        <li class="liidol"><a class="aidol" href="{{route('videonganctnd', $us->id)}}">Video ngắn</a></li>
        <li class="liidol"><a class="aidol" href="{{route('logout')}}">Đăng suất</a></li>
        @endif
        </ul>
        </nav>
        </header>
        </section>
        @endforeach
        
        @endif

    <div class="body4">
        <div class="main">
          <ul class="slider2">
          @foreach ($banner as $bn)
            <li class="item" style="background-image: url('{{asset('uploads/'.$bn->anhbn)}}');">
               <div class="content3">
               </div>
            </li>
          @endforeach
          </ul>
          <nav class="nav">
            <icon-icon class="btn2 prev" name="arrow-back-outline"></icon-icon>
            <icon-icon class="btn2 next" name="arrow-forward-outline"></icon-icon>
          </nav>
        </div>
        </div>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script>
          const slider2 = document.querySelector('.slider2');
        
          function activate(e){
            const items = document.querySelectorAll('.item');
            e.target.matches('.next') && slider2.append(items[0])
            e.target.matches('.prev') && slider2.prepend(items[items.length-1]);
          }
        
          document.addEventListener('click', activate,false);
        </script>

    <section class="home">
    @foreach ($cauhinh as $ch)
        <div class="content">
            <h2 class="h21">Chào mừng bạn đến với: <span class="spa1">{{$ch->tenws}}</span></h2>
            <h4 class="h41">{{$ch->email}}</h4>
            <p class="p1">Đến với website {{$ch->tenws}} chúng tôi chuyên cung cấp dịch vụ đặt vé live stream của các idol giới trẻ với mục dích phục vụ các fan của 
              các idol mà công ty quản lý với địa chỉ {{$ch->diachi}} và số điện thoại {{$ch->sdt}} và địa chỉ email của TG Idol {{$ch->email}}
            </p>

                <div class="grup-tombol">
                    <a class="a1" href="{{route('gioithieu')}}">Xem chi tiết</a>
                    <a class="a1" href="#">Trang đặt vé</a>
                </div>

                <div class="sosmed">
                @foreach ($nhomnhac as $nn)
                    <a href="#" class="a1"><i class="i1 bx bxl-facebook-circle"></i><img class="a1 i1" src="{{asset('uploads/'.$nn->logonn)}}" alt=""></a>
                    @endforeach
                </div>
        </div>
        <div class="bb">
                  <img style="width: 700px; margin-left: 20px;" class="img3 blue active2" src="{{asset('uploads/'.$ch->logo)}}" alt="">
              @endforeach
        </div>
    </section>
    
<h1 class="h11" style="margin-top: 20px;">Bài hát mới</h1>
<div class="body3">
<div class="container3">
@foreach ($baihat as $bh)
    <div class="box">
        <div class="videoBx">
            <video src="{{ asset('videos/'.$bh->nhac) }}" muted autoplay loop></video>
        </div>
        <div class="contentBx">
            <div class="content4">
                <h2 class="h23">Nhóm nhạc biểu diễn: {{$bh->tennn}}</h2>
                <p class="p3">Tên bài hát: {{$bh->tenbh}} <br>
                    Ngày phát hành: {{$bh->ngayph}} <br>
                    Thể loại nhạc: {{$bh->theloai}}</p>
            </div>
        </div>
    </div>
  @endforeach

</div>
</div>

<!--ko có user-->
@if(empty($users))
@foreach($nhomnhac as $nn)
<div class="body">
<div class="container">
<h1 class="h11">Thành viên nhóm nhạc: BEJ48</h1>
@foreach ($idol as $id)
@if($id->nhomnhac_id == $nn->id)
<div class="boxa1 filter Camara">
           <a href="{{route('ttidol', $id->id)}}"><img class="imga" src="{{asset('uploads/'.$id->anh)}}" alt=""></a>
        </div>
        @endif
@endforeach
    </div>
</div>
@endforeach
@endif


<!--có user-->
@if(empty($users) != 'Null')
@foreach($nhomnhac as $nn)
<div class="body">
<div class="container">
<h1 class="h11">Thành viên nhóm nhạc: BEJ48</h1>
@foreach ($idol as $id)
@if($id->nhomnhac_id == $nn->id)
<div class="boxa1 filter Camara">
           <a href="/ctidolus/{{$id->id}}/user/{{$usernd->id}}"><img class="imga" src="{{asset('uploads/'.$id->anh)}}" alt=""></a>
        </div>
        @endif
@endforeach
    </div>
</div>
@endforeach
@endif


  <div class="body6">
    <div class="conteudo">

        <div class="lista__cards">
            <button class="lista__cards__btn btn btn-esquerda">
                <div class="icone">
                    <svg>
                        <use xlink:href="#flexa-esquerda"></use>
                    </svg>
                </div>
            </button>

            <div class="conteudo__cards">
                <div class="card card--corrente">
                    <div class="imagem--card">
                        <img src="http://www.email5566.com/wordpress/wp-content/uploads/2015/07/d8cb8a4d0ad61709697546.jpg" />
                    </div>
                </div>

                <div class="card card--proximo">
                    <div class="imagem--card">
                        <img src="https://appimg.dzwww.com/dzcloud/20210628/4633e40223bcbe9b00ddc28b23249d05.jpg" />
                    </div>
                </div>

                <div class="card card--anterior">
                    <div class="imagem--card">
                        <img src="http://p2.music.126.net/8xsCkxY6GXVS29ZHLyaeEg==/109951164077781229.jpg" />
                    </div>
                </div>
            </div>

            <button class="lista__cards__btn btn btn--direita">
                <div class="icone">
                    <svg>
                        <use xlink:href="#arrow-right"></use>
                    </svg>
                </div>
            </button>
        </div>

        <div class="listagem__informacoes">
            <div class="conteudo__informacoes">
                <div class="info informacoes__corrente">
                    <h1 class="texto nome">SNH48</h1>
                    <h4 class="texto localizacao">NHÓM NHẠC ĐỘC QUYỀN</h4>
                    <p class="texto descricao">TÌM HIỂU</p>
                </div>

                <div class="info informacoes__seguinte">
                    <h1 class="texto nome">Thành viên của năm</h1>
                    <h4 class="texto localizacao">Châu Thị Vũ</h4>
                    <p class="texto descricao">Nhóm SNH48</p>
                </div>

                <div class="info informacoes__anterior">
                    <h1 class="texto nome">Bài hát của năm</h1>
                    <h4 class="texto localizacao">Tình Yêu màu năng</h4>
                    <p class="texto descricao">16/02/2022</p>
                </div>
            </div>
        </div>


        <div class="conteudo__background">
            <div class="conteudo__backgorund__imagem imagem--corrente">
                <img src="https://tse3.mm.bing.net/th?id=OIP.Umtpr4HtCj23EC3L6v-i-QHaEK&pid=Api&P=0&h=180" alt="" />
            </div>
            <div class="conteudo__backgorund__imagem imagem--proxima">
                <img src="https://snh48.me/wp-content/uploads/snh48_colorgirls_shaonvzhongmozhengzhan201805221642a-e1527604765260.jpg" alt="" />
            </div>
            <div class="conteudo__backgorund__imagem imagem--anterior">
                <img src="http://www.nautiljon.com/images/people/00/17/snh48_36271.jpg?1495710623" alt="" />
            </div>
        </div>
    </div>

    <div class="conteudo__carregamento">
        <div class="carregamento"></div>
    </div>


    <svg class="icones" style="display: none;">
        <symbol id="flexa-esquerda" xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'>
            <polyline points='328 112 184 256 328 400'
                style='fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px' />
        </symbol>
        <symbol id="arrow-right" xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'>
            <polyline points='184 112 328 256 184 400'
                style='fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px' />
        </symbol>
    </svg>
    <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.3/gsap.min.js"></script>
    <script>
        console.clear();

const { gsap, imagesLoaded } = window;

const buttons = {
  prev: document.querySelector(".btn-esquerda"),
  next: document.querySelector(".btn--direita"),
};
const cardsContainerEl = document.querySelector(".conteudo__cards");
const appBgContainerEl = document.querySelector(".conteudo__background");

const cardInfosContainerEl = document.querySelector(".conteudo__informacoes");

buttons.next.addEventListener("click", () => swapCards("right"));

buttons.prev.addEventListener("click", () => swapCards("left"));

function swapCards(direction) {
  const currentCardEl = cardsContainerEl.querySelector(".card--corrente");
  const previousCardEl = cardsContainerEl.querySelector(".card--anterior");
  const nextCardEl = cardsContainerEl.querySelector(".card--proximo");

  const currentBgImageEl = appBgContainerEl.querySelector(".imagem--corrente");
  const previousBgImageEl = appBgContainerEl.querySelector(".imagem--anterior");
  const nextBgImageEl = appBgContainerEl.querySelector(".imagem--proxima");

  changeInfo(direction);
  swapCardsClass();

  removeCardEvents(currentCardEl);

  function swapCardsClass() {
    currentCardEl.classList.remove("card--corrente");
    previousCardEl.classList.remove("card--anterior");
    nextCardEl.classList.remove("card--proximo");

    currentBgImageEl.classList.remove("imagem--corrente");
    previousBgImageEl.classList.remove("imagem--anterior");
    nextBgImageEl.classList.remove("imagem--proxima");

    currentCardEl.style.zIndex = "50";
    currentBgImageEl.style.zIndex = "-2";

    if (direction === "right") {
      previousCardEl.style.zIndex = "20";
      nextCardEl.style.zIndex = "30";

      nextBgImageEl.style.zIndex = "-1";

      currentCardEl.classList.add("card--anterior");
      previousCardEl.classList.add("card--proximo");
      nextCardEl.classList.add("card--corrente");

      currentBgImageEl.classList.add("imagem--anterior");
      previousBgImageEl.classList.add("imagem--proxima");
      nextBgImageEl.classList.add("imagem--corrente");
    } else if (direction === "left") {
      previousCardEl.style.zIndex = "30";
      nextCardEl.style.zIndex = "20";

      previousBgImageEl.style.zIndex = "-1";

      currentCardEl.classList.add("card--proximo");
      previousCardEl.classList.add("card--corrente");
      nextCardEl.classList.add("card--anterior");

      currentBgImageEl.classList.add("imagem--proxima");
      previousBgImageEl.classList.add("imagem--corrente");
      nextBgImageEl.classList.add("imagem--anterior");
    }
  }
}

function changeInfo(direction) {
  let currentInfoEl = cardInfosContainerEl.querySelector(
    ".informacoes__corrente"
  );
  let previousInfoEl = cardInfosContainerEl.querySelector(
    ".informacoes__anterior"
  );
  let nextInfoEl = cardInfosContainerEl.querySelector(".informacoes__seguinte");

  gsap
    .timeline()
    .to([buttons.prev, buttons.next], {
      duration: 0.2,
      opacity: 0.5,
      pointerEvents: "none",
    })
    .to(
      currentInfoEl.querySelectorAll(".texto"),
      {
        duration: 0.4,
        stagger: 0.1,
        translateY: "-120px",
        opacity: 0,
      },
      "-="
    )
    .call(() => {
      swapInfosClass(direction);
    })
    .call(() => initCardEvents())
    .fromTo(
      direction === "right"
        ? nextInfoEl.querySelectorAll(".texto")
        : previousInfoEl.querySelectorAll(".texto"),
      {
        opacity: 0,
        translateY: "40px",
      },
      {
        duration: 0.4,
        stagger: 0.1,
        translateY: "0px",
        opacity: 1,
      }
    )
    .to([buttons.prev, buttons.next], {
      duration: 0.2,
      opacity: 1,
      pointerEvents: "all",
    });

  function swapInfosClass() {
    currentInfoEl.classList.remove("informacoes__corrente");
    previousInfoEl.classList.remove("informacoes__anterior");
    nextInfoEl.classList.remove("informacoes__seguinte");

    if (direction === "right") {
      currentInfoEl.classList.add("informacoes__anterior");
      nextInfoEl.classList.add("informacoes__corrente");
      previousInfoEl.classList.add("informacoes__seguinte");
    } else if (direction === "left") {
      currentInfoEl.classList.add("informacoes__seguinte");
      nextInfoEl.classList.add("informacoes__anterior");
      previousInfoEl.classList.add("informacoes__corrente");
    }
  }
}

function updateCard(e) {
  const card = e.currentTarget;
  const box = card.getBoundingClientRect();
  const centerPosition = {
    x: box.left + box.width / 2,
    y: box.top + box.height / 2,
  };
  let angle = Math.atan2(e.pageX - centerPosition.x, 0) * (35 / Math.PI);
  gsap.set(card, {
    "--current-card-rotation-offset": `${angle}deg`,
  });
  const currentInfoEl = cardInfosContainerEl.querySelector(
    ".informacoes__corrente"
  );
  gsap.set(currentInfoEl, {
    rotateY: `${angle}deg`,
  });
}

function resetCardTransforms(e) {
  const card = e.currentTarget;
  const currentInfoEl = cardInfosContainerEl.querySelector(
    ".informacoes__corrente"
  );
  gsap.set(card, {
    "--current-card-rotation-offset": 0,
  });
  gsap.set(currentInfoEl, {
    rotateY: 0,
  });
}

function initCardEvents() {
  const currentCardEl = cardsContainerEl.querySelector(".card--corrente");
  currentCardEl.addEventListener("pointermove", updateCard);
  currentCardEl.addEventListener("pointerout", (e) => {
    resetCardTransforms(e);
  });
}

initCardEvents();

function removeCardEvents(card) {
  card.removeEventListener("pointermove", updateCard);
}

function init() {
  let tl = gsap.timeline();

  tl.to(cardsContainerEl.children, {
    delay: 0.15,
    duration: 0.5,
    stagger: {
      ease: "power4.inOut",
      from: "right",
      amount: 0.1,
    },
    "--card-translateY-offset": "0%",
  })
    .to(
      cardInfosContainerEl
        .querySelector(".informacoes__corrente")
        .querySelectorAll(".texto"),
      {
        delay: 0.5,
        duration: 0.4,
        stagger: 0.1,
        opacity: 1,
        translateY: 0,
      }
    )
    .to(
      [buttons.prev, buttons.next],
      {
        duration: 0.4,
        opacity: 1,
        pointerEvents: "all",
      },
      "-=0.4"
    );
}

const waitForImages = () => {
  const images = [...document.querySelectorAll("img")];
  const totalImages = images.length;
  let loadedImages = 0;
  const loaderEl = document.querySelector(".loader span");

  gsap.set(cardsContainerEl.children, {
    "--card-translateY-offset": "100vh",
  });
  gsap.set(
    cardInfosContainerEl
      .querySelector(".informacoes__corrente")
      .querySelectorAll(".texto"),
    {
      translateY: "40px",
      opacity: 0,
    }
  );
  gsap.set([buttons.prev, buttons.next], {
    pointerEvents: "none",
    opacity: "0",
  });

  images.forEach((image) => {
    imagesLoaded(image, (instance) => {
      if (instance.isComplete) {
        loadedImages++;
        let loadProgress = loadedImages / totalImages;

        gsap.to(loaderEl, {
          duration: 1,
          scaleX: loadProgress,
          backgroundColor: `hsl(${loadProgress * 120}, 100%, 50%`,
        });

        if (totalImages == loadedImages) {
          gsap
            .timeline()
            .to(".conteudo__carregamento", {
              duration: 0.8,
              opacity: 0,
              pointerEvents: "none",
            })
            .call(() => init());
        }
      }
    });
  });
};

waitForImages();
    </script>

  </div>

  <div class="body2">
  <div class="iia">
      <h1 class="h11">CÁC NHÓM NHẠC THUỘC CÔNG TY</h1>
      <div class="idol">
      @foreach ($nhomnhac as $nl)
      <div class="idol2">
      <a href="{{route('hienthict', $nl->id)}}"><img src="{{asset('uploads/'.$nl->logonn)}}" style="width: 200px; height: 200px;" class="card-img-top" alt="..."></a>
      <h3 class="h31">{{$nl->tennn}}</h3>
      </div>
      @endforeach
      </div>
      </div>
  </div>


@endsection