<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/viewmv.css') }}">
</head>

<body class="body1">
    <div class="container">
        <video src="{{asset('videos/'.$baihat1->nhac)}}" autoplay loop muted></video>
        <a href="#" class="logo">
            <p>TG 48 MUSIC</p>
        </a>

        <span>
            <i class="line"></i>
            <em>BẢN QUYỀN BỞI</em>
            <i class="line"></i>
        </span>

        <div class="download">
@foreach($nhomnhac as $nn)
            <a href="#">
                <div style="width: 200px; border: 1px solid; height: 60px; border-radius: 10%; display: flex; align-items: center; justify-content: center;">
                    <h1>{{$nn->tennn}}</h1>
                </div>
            </a>
@endforeach
        </div>

        <span>
            <i class="line"></i>
            <em>CÁC ĐỐI TÁC</em>
            <i class="line"></i>
        </span>

        <div class="social">
            <a href="#"><img src="https://h5.48.cn/pocket48/image/logo.png" style="width: 40px; height: 40px; border-radius: 50%;" alt=""></i></a>
            <a href="#"><img src="https://cdn2.iconfinder.com/data/icons/social-media-applications/64/social_media_applications_16-weibo-512.png" style="width: 40px; height: 40px; border-radius: 50%;" alt=""></i></a>
            <a href="#"><img src="https://yt3.ggpht.com/a/AATXAJw_UFFCoVcFK6CgQdiLQXXdaJzrQKBShfOaYw=s900-c-k-c0xffffffff-no-rj-mo" style="width: 40px; height: 40px; border-radius: 50%;" alt=""></i></a>
            <a href="#"><img src="https://android-artworks.25pp.com/fs08/2021/04/15/0/110_a1c6eb62a7b1139bee62358a2f0ebf02_con_130x130.png" style="width: 40px; height: 40px; border-radius: 50%;" alt=""></i></a>
            <a href="#"><img src="https://pbs.twimg.com/profile_images/1246473778684518403/VZbJBFSs_400x400.jpg" style="width: 40px; height: 40px; border-radius: 50%;" alt=""></i></a>
            <a href="#"><img src="https://static.vecteezy.com/system/resources/previews/020/927/757/non_2x/xiaomi-logo-brand-phone-symbol-white-design-chinese-mobile-illustration-with-orange-background-free-vector.jpg" style="width: 40px; height: 40px; border-radius: 50%;" alt=""></i></a>
            <a href="#"><img src="https://logodix.com/logo/91845.jpg" style="width: 40px; height: 40px; border-radius: 50%;" alt=""></i></a>
            <a href="#"><img src="https://img.ttshow.tw/images/author/dean/0702SONY21.jpg" style="width: 40px; height: 40px; border-radius: 50%;" alt=""></i></a>
        </div>
    </div>
</body>

<div style="text-align: center; margin-top: 40px;">
    <h1>MV có nhiều lượt xem nhiều nhất</h1>
</div>

<body class="body2" style="margin-top: 40px;">
    <section class="container2">
        <div class="category">
            @foreach($baihats as $bhs)
            <div class="content">
                <img src="{{asset('uploads/'.$bhs->anhbh)}}" class="profile_image" />
                <video autoplay muted loop src="{{asset('videos/'.$bhs->nhac)}}"></video>
                <div class="profile_detail">
                    <span>{{$bhs->tenbh}}</span>
                    <p>{{$bhs->tennn}}</p>
                </div>

                <div class="wrapper">
                    <div class="profile_quote">
                        <p>
                            Ngày phát hành: {{$bhs->ngayph}}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
    </section>
</body>

<div class="body3" style="margin-top: 40px;">
    <section class="container3">
        <div class="slider">
            @foreach($baihat as $bh)
            <div class="slide active">
                <img class="img1" src="{{asset('uploads/'.$bh->anhbh)}}">
                <div class="left-info">
                    <div class="penetrte-blur">
                        <h1 class="ha1">{{$bh->tennn}}</h1>
                    </div>
                    <div class="content2">
                        <h3 class="hb31">{{$bh->tenbh}}</h3>
                        <p>
                            Ngày phát hành {{$bh->ngayph}}
                        </p>
                        <a href="/videoctnd/{{$bh->id}}/user/{{$users->id}}" class="btn">Truy cập MV</a>
                    </div>
                </div>
                <div class="right-info">
                    <h1 class="ha1">TG</h1>
                    <h3 class="hb31">{{$bh->theloai}}</h3>
                </div>
            </div>
            @endforeach

        </div>

        <div class="navigation">
            <span class="prev-btn">
                <i class="fa-solid fa-chevron-left"></i>
            </span>
            <span class="next-btn">
                <i class="fa-solid fa-chevron-right"></i>
            </span>
        </div>
    </section>
</div>

<div style="display: flex; gap: 20px; margin-top: 730px; width: 100vw; height: 100%;">
    <div style="width: 15%;">
        <div class="input">
            <a href="{{route('kenhdadangky', $users->id)}}" class="value">
                <svg data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                    <path d="m1.5 13v1a.5.5 0 0 0 .3379.4731 18.9718 18.9718 0 0 0 6.1621 1.0269 18.9629 18.9629 0 0 0 6.1621-1.0269.5.5 0 0 0 .3379-.4731v-1a6.5083 6.5083 0 0 0 -4.461-6.1676 3.5 3.5 0 1 0 -4.078 0 6.5083 6.5083 0 0 0 -4.461 6.1676zm4-9a2.5 2.5 0 1 1 2.5 2.5 2.5026 2.5026 0 0 1 -2.5-2.5zm2.5 3.5a5.5066 5.5066 0 0 1 5.5 5.5v.6392a18.08 18.08 0 0 1 -11 0v-.6392a5.5066 5.5066 0 0 1 5.5-5.5z" fill="#7D8590"></path>
                </svg>
                Kênh đã đăng ký
            </a>
            <a href="{{route('thumucvd', $users->id)}}" class="value">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" id="Line">
                    <path d="m17.074 30h-2.148c-1.038 0-1.914-.811-1.994-1.846l-.125-1.635c-.687-.208-1.351-.484-1.985-.824l-1.246 1.067c-.788.677-1.98.631-2.715-.104l-1.52-1.52c-.734-.734-.78-1.927-.104-2.715l1.067-1.246c-.34-.635-.616-1.299-.824-1.985l-1.634-.125c-1.035-.079-1.846-.955-1.846-1.993v-2.148c0-1.038.811-1.914 1.846-1.994l1.635-.125c.208-.687.484-1.351.824-1.985l-1.068-1.247c-.676-.788-.631-1.98.104-2.715l1.52-1.52c.734-.734 1.927-.779 2.715-.104l1.246 1.067c.635-.34 1.299-.616 1.985-.824l.125-1.634c.08-1.034.956-1.845 1.994-1.845h2.148c1.038 0 1.914.811 1.994 1.846l.125 1.635c.687.208 1.351.484 1.985.824l1.246-1.067c.787-.676 1.98-.631 2.715.104l1.52 1.52c.734.734.78 1.927.104 2.715l-1.067 1.246c.34.635.616 1.299.824 1.985l1.634.125c1.035.079 1.846.955 1.846 1.993v2.148c0 1.038-.811 1.914-1.846 1.994l-1.635.125c-.208.687-.484 1.351-.824 1.985l1.067 1.246c.677.788.631 1.98-.104 2.715l-1.52 1.52c-.734.734-1.928.78-2.715.104l-1.246-1.067c-.635.34-1.299.616-1.985.824l-.125 1.634c-.079 1.035-.955 1.846-1.993 1.846zm-5.835-6.373c.848.53 1.768.912 2.734 1.135.426.099.739.462.772.898l.18 2.341 2.149-.001.18-2.34c.033-.437.347-.8.772-.898.967-.223 1.887-.604 2.734-1.135.371-.232.849-.197 1.181.089l1.784 1.529 1.52-1.52-1.529-1.784c-.285-.332-.321-.811-.089-1.181.53-.848.912-1.768 1.135-2.734.099-.426.462-.739.898-.772l2.341-.18h-.001v-2.148l-2.34-.18c-.437-.033-.8-.347-.898-.772-.223-.967-.604-1.887-1.135-2.734-.232-.37-.196-.849.089-1.181l1.529-1.784-1.52-1.52-1.784 1.529c-.332.286-.81.321-1.181.089-.848-.53-1.768-.912-2.734-1.135-.426-.099-.739-.462-.772-.898l-.18-2.341-2.148.001-.18 2.34c-.033.437-.347.8-.772.898-.967.223-1.887.604-2.734 1.135-.37.232-.849.197-1.181-.089l-1.785-1.529-1.52 1.52 1.529 1.784c.285.332.321.811.089 1.181-.53.848-.912 1.768-1.135 2.734-.099.426-.462.739-.898.772l-2.341.18.002 2.148 2.34.18c.437.033.8.347.898.772.223.967.604 1.887 1.135 2.734.232.37.196.849-.089 1.181l-1.529 1.784 1.52 1.52 1.784-1.529c.332-.287.813-.32 1.18-.089z" id="XMLID_1646_" fill="#7D8590"></path>
                    <path d="m16 23c-3.859 0-7-3.141-7-7s3.141-7 7-7 7 3.141 7 7-3.141 7-7 7zm0-12c-2.757 0-5 2.243-5 5s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5z" fill="#7D8590" id="XMLID_1645_"></path>
                </svg>
                Thư mục video
            </a>
            <a href="{{route('lichsuxem', $users->id)}}" class="value">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
                    <path d="m109.9 20.63a6.232 6.232 0 0 0 -8.588-.22l-57.463 51.843c-.012.011-.02.024-.031.035s-.023.017-.034.027l-4.721 4.722a1.749 1.749 0 0 0 0 2.475l.341.342-3.16 3.16a8 8 0 0 0 -1.424 1.967 11.382 11.382 0 0 0 -12.055 10.609c-.006.036-.011.074-.015.111a5.763 5.763 0 0 1 -4.928 5.41 1.75 1.75 0 0 0 -.844 3.14c4.844 3.619 9.4 4.915 13.338 4.915a17.14 17.14 0 0 0 11.738-4.545l.182-.167a11.354 11.354 0 0 0 3.348-8.081c0-.225-.02-.445-.032-.667a8.041 8.041 0 0 0 1.962-1.421l3.16-3.161.342.342a1.749 1.749 0 0 0 2.475 0l4.722-4.722c.011-.011.018-.025.029-.036s.023-.018.033-.029l51.844-57.46a6.236 6.236 0 0 0 -.219-8.589zm-70.1 81.311-.122.111c-.808.787-7.667 6.974-17.826 1.221a9.166 9.166 0 0 0 4.36-7.036 1.758 1.758 0 0 0 .036-.273 7.892 7.892 0 0 1 9.122-7.414c.017.005.031.014.048.019a1.717 1.717 0 0 0 .379.055 7.918 7.918 0 0 1 4 13.317zm5.239-10.131c-.093.093-.194.176-.293.26a11.459 11.459 0 0 0 -6.289-6.286c.084-.1.167-.2.261-.3l3.161-3.161 6.321 6.326zm7.214-4.057-9.479-9.479 2.247-2.247 9.479 9.479zm55.267-60.879-50.61 56.092-9.348-9.348 56.092-50.61a2.737 2.737 0 0 1 3.866 3.866z" fill="#7D8590"></path>
                </svg>
                Lịch sử xem
            </a>
            <button class="value">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" id="svg8">
                    <g transform="translate(-33.022 -30.617)" id="layer1">
                        <path d="m49.021 31.617c-2.673 0-4.861 2.188-4.861 4.861 0 1.606.798 3.081 1.873 3.834h-7.896c-1.7 0-3.098 1.401-3.098 3.1s1.399 3.098 3.098 3.098h4.377l.223 2.641s-1.764 8.565-1.764 8.566c-.438 1.642.55 3.355 2.191 3.795s3.327-.494 3.799-2.191l2.059-5.189 2.059 5.189c.44 1.643 2.157 2.631 3.799 2.191s2.63-2.153 2.191-3.795l-1.764-8.566.223-2.641h4.377c1.699 0 3.098-1.399 3.098-3.098s-1.397-3.1-3.098-3.1h-7.928c1.102-.771 1.904-2.228 1.904-3.834 0-2.672-2.189-4.861-4.862-4.861zm0 2c1.592 0 2.861 1.27 2.861 2.861 0 1.169-.705 2.214-1.789 2.652-.501.203-.75.767-.563 1.273l.463 1.254c.145.393.519.654.938.654h8.975c.626 0 1.098.473 1.098 1.1s-.471 1.098-1.098 1.098h-5.297c-.52 0-.952.398-.996.916l-.311 3.701c-.008.096-.002.191.018.285 0 0 1.813 8.802 1.816 8.82.162.604-.173 1.186-.777 1.348s-1.184-.173-1.346-.777c-.01-.037-3.063-7.76-3.063-7.76-.334-.842-1.525-.842-1.859 0 0 0-3.052 7.723-3.063 7.76-.162.604-.741.939-1.346.777s-.939-.743-.777-1.348c.004-.019 1.816-8.82 1.816-8.82.02-.094.025-.189.018-.285l-.311-3.701c-.044-.518-.477-.916-.996-.916h-5.297c-.627 0-1.098-.471-1.098-1.098s.472-1.1 1.098-1.1h8.975c.419 0 .793-.262.938-.654l.463-1.254c.188-.507-.062-1.07-.563-1.273-1.084-.438-1.789-1.483-1.789-2.652.001-1.591 1.271-2.861 2.862-2.861z" id="path26276" fill="#7D8590"></path>
                    </g>
                </svg>
                Accessibility
            </button>
            <button class="value">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 25" fill="none">
                    <path fill-rule="evenodd" fill="#7D8590" d="m11.9572 4.31201c-3.35401 0-6.00906 2.59741-6.00906 5.67742v3.29037c0 .1986-.05916.3927-.16992.5576l-1.62529 2.4193-.01077.0157c-.18701.2673-.16653.5113-.07001.6868.10031.1825.31959.3528.67282.3528h14.52603c.2546 0 .5013-.1515.6391-.3968.1315-.2343.1117-.4475-.0118-.6093-.0065-.0085-.0129-.0171-.0191-.0258l-1.7269-2.4194c-.121-.1695-.186-.3726-.186-.5809v-3.29037c0-1.54561-.6851-3.023-1.7072-4.00431-1.1617-1.01594-2.6545-1.67311-4.3019-1.67311zm-8.00906 5.67742c0-4.27483 3.64294-7.67742 8.00906-7.67742 2.2055 0 4.1606.88547 5.6378 2.18455.01.00877.0198.01774.0294.02691 1.408 1.34136 2.3419 3.34131 2.3419 5.46596v2.97007l1.5325 2.1471c.6775.8999.6054 1.9859.1552 2.7877-.4464.795-1.3171 1.4177-2.383 1.4177h-14.52603c-2.16218 0-3.55087-2.302-2.24739-4.1777l1.45056-2.1593zm4.05187 11.32257c0-.5523.44772-1 1-1h5.99999c.5523 0 1 .4477 1 1s-.4477 1-1 1h-5.99999c-.55228 0-1-.4477-1-1z" clip-rule="evenodd"></path>
                </svg>
                Notifications
            </button>
        </div>
    </div>
    <div style="width: 85%;">
        <h1 style="text-align: center; margin-top: 20px;">MV CỦA TẤT CẢ NHÓM NHẠC</h1>
        <div style="display: grid; grid-template-columns: 1fr 1fr 1fr 1fr; gap: 10px; margin-top: 20px;">
            @foreach($baihat as $bh)
            <a href="/videoctnd/{{$bh->id}}/user/{{$users->id}}">
                <div class="card3" style="margin-top: 10px;">
                    <div class="lmao">
                        <img style="width: 300px;" src="{{asset('uploads/'.$bh->anhbh)}}" alt="">
                    </div>
                    <div class="card__content">
                        <p class="card__title">{{$bh->tenbh}}</p>
                        <div class="card__description">
                            <div style="display: flex;  gap: 10px;">
                                <img style="width: 40px; height: 40px; border-radius: 50%;" src="{{asset('uploads/'.$bh->logonn)}}" alt="">
                                <h2>{{$bh->tennn}}</h2>
                            </div>

                            <h4 style="margin-top: 20px;">{{$bh->view_count}} Views • {{$bh->created_at}}</h4>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</div>

<script>
    const nxtBtn = document.querySelector('.next-btn');
    const prvBtn = document.querySelector('.prev-btn');
    const slides = document.querySelectorAll('.slide');
    const numberOfSlides = slides.length;
    let slideNumber = 0;

    nxtBtn.onclick = () => {
        slides.forEach((slide) => {
            slide.classList.remove('active');
        });

        slideNumber++;

        if (slideNumber > (numberOfSlides - 1)) {
            slideNumber = 0;
        }

        slides[slideNumber].classList.add('active');
    }

    prvBtn.onclick = () => {
        slides.forEach((slide) => {
            slide.classList.remove('active');
        });

        slideNumber--;

        if (slideNumber < 0) {
            slideNumber = numberOfSlides - 1;
        }

        slides[slideNumber].classList.add('active');
    }
</script>

</html>