<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/viewct.css') }}">
</head>

<body>
    <div class="tg">
        <a href="{{ route('danhmucsanpham', $user->id) }}" class="cssbuttons-io-button" style="text-align: center;">
            Quay lại sản phẩm
            <div class="icon">
                <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z" fill="currentColor"></path>
                </svg>
            </div>
        </a>
        <div class="body1">
            <div class="card1">

                <div class="body2">
                    <section class="wrapper">
                        <img id="preview" src="{{asset('uploads/'.$sanpham->hinh_anh)}}" style="height: 500px;">
                        <div class="thumbnails">
                            <img class="thumbnail active" src="{{asset('uploads/'.$sanpham->hinh_anh)}}" style="height: 100px;">
                            @if(empty($anhsp) != 'Null')
                            @php
                            $anh_phu = json_decode($anhsp->anh_phu);
                            @endphp
                            @foreach($anh_phu as $anh_phu)
                            <img class="thumbnail" src="{{asset('uploads/'.$anh_phu)}}" style="height: 100px;">
                            @endforeach
                            @endif
                        </div>
                    </section>
                </div>

                <div class="content1">
                    <h1 class="hz1">
                        {{$sanpham->ten_sanpham}}
                    </h1>
                    <form action="{{route('thongtindonhang', $user->id)}}" enctype="multipart/form-data" method="POST">
                        @csrf
                        @if($sanpham->loai_hang == 0)
                        <div>
                            <h3>Số lượng sản phẩm</h3>
                            <div class="product-quantity" style="display: flex; gap: 10px;">
                                <div class="decrease" style="width: 30px; height: 30px; display: flex; justify-content: center; align-items: center; border: 1px solid;">-</div>
                                <input type="number" value="1" min="1" max="20" name="so_luong" style="width: 30px; height: 30px; text-align: center;">
                                <div class="increase" style="width: 30px; height: 30px; display: flex; justify-content: center; align-items: center; border: 1px solid;">+</div>
                            </div>

                        </div>
                        @endif
                        <div>
                            <p>Giá sản phẩm: {{$sanpham->gia_sanpham}}.000 VND</p>
                            <p>Mô tả sản phẩm: {{$sanpham->mo_ta}}</p>
                        </div>
                        @if($sanpham->loai_hang == 0)
                        <input type="text" name="sanpham_id" value="{{$sanpham->id}}" style="display: none;">
                        <div style="display: flex; gap: 10px;">
                            <button class="btn-31" type="submit">
                                <span class="text-container">
                                    <span class="text">Mua và thanh toán</span>
                                </span>
                            </button>

                            <div data-tooltip="Thêm vào giỏ hàng" class="button">
                                <div class="button-wrapper">
                                    <div class="text">Thêm vào giỏ hàng</div>
                                    <span class="icon">
                                        <svg viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z">
                                            </path>
                                        </svg>
                                    </span>
                                </div>
                            </div>


                        </div>
                    </form>
                    @else
                    <div data-tooltip="Tham giá đấu giá" class="button">
                        <a href="/daugiasp/{{$sanpham->id}}/user/{{$user->id}}" class="button-wrapper">
                            <div class="text">Tham giá đấu giá</div>
                            <span class="icon">
                                <svg viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z">
                                    </path>
                                </svg>
                            </span>
                        </a>
                    </div>
                    @endif

                    <small>
                        Ngày tháng sản xuất: {{$sanpham->created_at}}
                    </small>
                </div>
            </div>
        </div>

        <div style="display: flex; justify-content: center; align-items: center;  background: #f4f4f6;">
            <div style=" width: 975px; border: 1px solid; height: 400px;">
                <div style="height: 84%; overflow-y: scroll;">
                    <h1>Bình luận</h1>
                    @foreach($binhluansp as $blsp)
                    @foreach($users as $us)
                    @foreach($profile as $prf)
                    @if($blsp->user_id == $us->id && $us->id == $prf->users_id)
                    <div class="card3">
                        <div><img src="{{asset('uploads/'.$prf->anhnd)}}" class="img" alt=""></div>
                        <div class="textBox">
                            <div class="textContent">
                                <p class="h1">{{$prf->tennd}}</p>
                                <span class="span">12 min ago</span>
                            </div>
                            <p class="p">{{$blsp->noi_dung}}</p>
                            <div>
                            </div>
                        </div>
                    </div>
                    <div style="display: flex; gap: 20px;">
                        <img src="{{asset('uploads/'.$blsp->hinh_anh)}}" style="width: 100px; height: 100px;" alt="">
                        <h3>Đánh giá: {{$blsp->so_sao}}</h3>
                    </div>
                    @endif
                    @endforeach
                    @endforeach
                    @endforeach

                </div>

                <form action="{{route('binhluansp')}}" enctype="multipart/form-data" method="POST">
                    @csrf

                    <input type="text" name="user_id" value="{{$user->id}}" style="display: none;">
                    <input type="text" name="sanpham_id" value="{{$sanpham->id}}" style="display: none;">
                    <div style="display: flex; gap: 10px;">
                        <div class="messageBox" style="width: 700px;">
                            <div class="fileUploadWrapper">
                                <label for="file">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 337 337">
                                        <circle stroke-width="20" stroke="#6c6c6c" fill="none" r="158.5" cy="168.5" cx="168.5">
                                        </circle>
                                        <path stroke-linecap="round" stroke-width="25" stroke="#6c6c6c" d="M167.759 79V259">
                                        </path>
                                        <path stroke-linecap="round" stroke-width="25" stroke="#6c6c6c" d="M79 167.138H259">
                                        </path>
                                    </svg>
                                    <span class="tooltip">Add an image</span>
                                </label>
                                <input type="file" id="file" name="hinh_anh" />
                            </div>
                            <input style="width: 600px;" name="noi_dung" required="" placeholder="Message..." type="text" id="messageInput" />
                            <button id="sendButton">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 664 663">
                                    <path fill="none" d="M646.293 331.888L17.7538 17.6187L155.245 331.888M646.293 331.888L17.753 646.157L155.245 331.888M646.293 331.888L318.735 330.228L155.245 331.888">
                                    </path>
                                    <path stroke-linejoin="round" stroke-linecap="round" stroke-width="33.67" stroke="#6c6c6c" d="M646.293 331.888L17.7538 17.6187L155.245 331.888M646.293 331.888L17.753 646.157L155.245 331.888M646.293 331.888L318.735 330.228L155.245 331.888">
                                    </path>
                                </svg>
                            </button>
                        </div>

                        <div class="rating">
                            <input type="radio" id="star5" name="so_sao" value="5" />
                            <label for="star5" title="text"></label>
                            <input type="radio" id="star4" name="so_sao" value="4" />
                            <label for="star4" title="text"></label>
                            <input type="radio" id="star3" name="so_sao" value="3" />
                            <label for="star3" title="text"></label>
                            <input type="radio" id="star2" name="so_sao" value="2" />
                            <label for="star2" title="text"></label>
                            <input checked="" type="radio" id="star1" name="so_sao" value="1" />
                            <label for="star1" title="text"></label>
                        </div>

                        <button type="submit" style="display: none;"></button>

                    </div>
                </form>

            </div>
        </div>


        <div class="body3">
            <h1>Sản phẩm giới hạn</h1>
            <div>
                <div class="container">
                    <div class="row">
                        @foreach($sanphams as $sp)
                        @if($sp->loai_hang == 1 && $sanpham->id != $sp->id)
                        <a class="col" href="/sanphamchitiet/{{$sp->id}}/user/{{$user->id}}">
                            <div class="photo" style="background-image:url({{asset('uploads/'.$sp->hinh_anh)}});">
                            </div>
                            <h2>{{$sp->ten_sanpham}}</h2>
                            <div class="slide">
                                <h3>{{$sp->gia_sanpham}}.000 VND</h3>
                                <p>
                                    {{$sp->mo_ta}}
                                </p>
                            </div>
                        </a>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <h1 style="text-align: center;">Sản phẩm cùng loại</h1>
        <div style="display: flex; justify-content: center; align-items: center;">
            <div style="display: grid; grid-template-columns: 1fr 1fr 1fr 1fr; gap: 10px; width: 975px;">
                @foreach($sanphams as $sp)
                @if($sp->loai_hang == 0 && $sanpham->id != $sp->id)
                <a class="col" href="/sanphamchitiet/{{$sp->id}}/user/{{$user->id}}">
                    <div class="card">
                        <div class="image"><span class="text"><img src="{{asset('uploads/'.$sp->hinh_anh)}}" alt=""></span></div>
                        <span class="title">{{$sp->ten_sanpham}}</span>
                        <span class="price">{{$sp->gia_sanpham}}.000 VND</span>
                    </div>
                </a>
                @endif
                @endforeach
            </div>
        </div>

    </div>


    <script>
        const $thumbnails = document.querySelectorAll('.thumbnail');
        const $preview = document.getElementById('preview');

        $thumbnails.forEach(($item) => {
            $item.addEventListener(
                'click',
                (event) => {
                    $thumbnails.forEach((i) => {
                        i.classList.remove('active');
                    });
                    $item.classList.add('active');
                    $preview.src = $item.src;
                },
            );
        });

        const decreaseBtn = document.querySelector('.decrease');
        const increaseBtn = document.querySelector('.increase');
        const quantityInput = document.querySelector('input[type="number"]');

        decreaseBtn.addEventListener('click', () => {
            if (quantityInput.value > 1) {
                quantityInput.value--;
            }
        });

        increaseBtn.addEventListener('click', () => {
            if (quantityInput.value < 20) {
                quantityInput.value++;
            }
        });
    </script>
</body>

</html>