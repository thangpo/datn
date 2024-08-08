<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/viewsp.css') }}">
    <link rel="stylesheet" href="https://codepen.io/GreenSock/pen/xxmzBrw.css">
</head>

<body>
    <div class="wrapper">
        <div class="content">

            <section class="section hero">
                <div style="display: flex; justify-content: center; align-items: center; height: 100vh;">
                    @foreach($nhomnhac as $nn)
                    <div>
                        <img style="width: 550px; height: 550px;" src="{{asset('uploads/'.$nn->logonn)}}" alt="">
                    </div>
                    @endforeach
                </div>
            </section>

            <div class="bd1">
                <h1 class="block-effect" style="--td: 2.5s">
                    <div class="block-reveal" style="--bc: #4040bf; --d: .1s">CHÀO MỪNG BẠN ĐÃ ĐẾN VỚI</div>
                    <div class="block-reveal" style="--bc: #bf4060; --d: .5s">CỬA HÀNG SẢN PHẨM ĂN THEO TG MUSIC</div>
                </h1>
            </div>
            <div style="margin-top: 100px; width: 100%;">
                <div class="body">
                    <div class="card">
                        <img class="img2" src="https://th.bing.com/th/id/OIP.BSYZUkVXfN9T1qQLWkhVXwHaNK?rs=1&pid=ImgDetMain" width="512" height="512">
                        <div class="content">
                            <small>
                                TG 48 SNH 48 GNZ 48
                            </small>
                            <h1>
                                BỘ SƯU TẦM ẢNH KỸ SỬU 48
                            </h1>
                            <small>
                                May 28, 2024
                            </small>
                        </div>
                    </div>
                </div>

                <div class="body2">
                    <h2 style="color: black;">DANH MỤC SẢN PHẨM CỦA NHÓM TG 48 GZ 48 SNH 48</h2>
                    <div class="card-slider">
                        <div class="container2" style="display: grid; grid-template-columns: 1fr 1fr 1fr 1fr; gap: 10px;">
                            @foreach($danhmuc as $dm)
                            <div class="image2 sepia">
                                <img class="img3" src="{{asset('uploads/'.$dm->hinh_anh)}}">
                                <p class="p1">{{$dm->ten_sanpham}}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>



                <div class="body3">
                    <h2 style="color: black;">DANH SÁCH SẢN PHẨM CÓ THỂ BẠN THÍCH</h2>
                    <div class="card-slider">
                        <div class="container3" style="display: grid; grid-template-columns: 1fr 1fr 1fr 1fr 1fr; gap: 10px;">

                            @foreach($sanpham as $sp)
                            @if($sp->loai_hang == 0)
                            <a href="/sanphamchitiet/{{$sp->id}}/user/{{$user->id}}">
                                <div class="card-wrap">
                                    <div class="card2">
                                        <div class="card-bg" style="background-image: url({{asset('uploads/'.$sp->hinh_anh)}});">
                                        </div>
                                        <div class="card-info">
                                            <h1 class="ha2">{{$sp->ten_sanpham}}</h1>
                                            <p class="p2">Giá sản phẩm: {{$sp->gia_sanpham}}.000 VND</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            @endif
                            @endforeach
                        </div>
                    </div>

                </div>

                <div class="body4">
                    <h2 style="text-align: center; color: black;">BỘ SƯU TẬP ĐẶC BIẾT PHẢI ĐẤU GIÁ ĐỂ SỞ HỮU</h2>
                    <div class="content4">
                        <button id="prev" class="btn" style="background-color: black;">
                            <i class='bx bxs-chevron-left'></i>
                        </button>

                        <div class="con-cards">
                            @foreach($sanpham as $sp)
                            @if($sp->loai_hang == 1)
                            <a href="/sanphamchitiet/{{$sp->id}}/user/{{$user->id}}">
                                <div class="card3">
                                    <h3>{{$sp->gia_sanpham}}.000 VND</h3>
                                    <i class='bx bx-heart'></i>
                                    <div class="con-img">
                                        <img class="img4" src="{{asset('uploads/'.$sp->hinh_anh)}}" alt="">
                                        <img class="blur img4" src="{{asset('uploads/'.$sp->hinh_anh)}}" alt="">
                                    </div>
                                    <div class="con-text">
                                        <h2 class="htg2">
                                            {{$sp->ten_sanpham}}
                                        </h2>
                                        <p class="p3">
                                            {{$sp->mo_ta}}
                                        </p>
                                    </div>
                                </div>
                            </a>
                            @endif
                            @endforeach

                        </div>
                        <button id="next" class="btn" style="background-color: black;">
                            <i class='bx bxs-chevron-right'></i>
                        </button>
                    </div>
                </div>

            </div>

        </div>
        <div class="image-container">
            <img class="img" src="https://assets-global.website-files.com/63ec206c5542613e2e5aa784/643312a6bc4ac122fc4e3afa_main%20home.webp" alt="image">
        </div>
    </div>
    <script src="https://unpkg.com/gsap@3/dist/gsap.min.js"></script>
    <script src="https://unpkg.com/gsap@3/dist/ScrollTrigger.min.js"></script>
    <script>
        console.clear();

        gsap.registerPlugin(ScrollTrigger);

        window.addEventListener("load", () => {
            gsap
                .timeline({
                    scrollTrigger: {
                        trigger: ".wrapper",
                        start: "top top",
                        end: "+=150%",
                        pin: true,
                        scrub: true,
                        markers: true
                    }
                })
                .to(".img", {
                    scale: 2,
                    z: 350,
                    transformOrigin: "center center",
                    ease: "power1.inOut"
                })
                .to(
                    ".section.hero", {
                        scale: 1.1,
                        transformOrigin: "center center",
                        ease: "power1.inOut"
                    },
                    "<"
                );
        });


        const next = document.querySelector('#next')
        const prev = document.querySelector('#prev')

        function handleScrollNext(direction) {
            const cards = document.querySelector('.con-cards')
            cards.scrollLeft = cards.scrollLeft += window.innerWidth / 2 > 600 ? window.innerWidth / 2 : window.innerWidth - 100
        }

        function handleScrollPrev(direction) {
            const cards = document.querySelector('.con-cards')
            cards.scrollLeft = cards.scrollLeft -= window.innerWidth / 2 > 600 ? window.innerWidth / 2 : window.innerWidth - 100
        }

        next.addEventListener('click', handleScrollNext)
        prev.addEventListener('click', handleScrollPrev)
    </script>
</body>

</html>