<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/daugia.css') }}">
</head>

<body>
    <div>
        <div class="card">
            <header>
                <div style="display: flex;">
                    <div class="loader">
                        <svg viewBox="0 0 80 80">
                            <rect x="8" y="8" width="64" height="64"></rect>
                            <text x="50%" y="60%" text-anchor="middle" fill="#acbbd7" font-size="24" font-weight="bold">
                                T
                            </text>
                        </svg>
                    </div>

                    <div class="loader">
                        <svg viewBox="0 0 80 80">
                            <rect x="8" y="8" width="64" height="64"></rect>
                            <text x="50%" y="60%" text-anchor="middle" fill="#acbbd7" font-size="24" font-weight="bold">
                                G
                            </text>
                        </svg>
                    </div>

                    <div class="loader">
                        <svg viewBox="0 0 80 80">
                            <rect x="8" y="8" width="64" height="64"></rect>
                            <text x="50%" y="60%" text-anchor="middle" fill="#acbbd7" font-size="24" font-weight="bold">
                                4
                            </text>
                        </svg>
                    </div>

                    <div class="loader">
                        <svg viewBox="0 0 80 80">
                            <rect x="8" y="8" width="64" height="64"></rect>
                            <text x="50%" y="60%" text-anchor="middle" fill="#acbbd7" font-size="24" font-weight="bold">
                                8
                            </text>
                        </svg>
                    </div>

                    <a href="">
                        <img src="https://th.bing.com/th/id/OIP.lClJC7gqneGsGQvrIjemSQAAAA?rs=1&pid=ImgDetMain">
                    </a>
                </div>


                <div style="border: 1px solid; margin-top: 20px; height: 240px; color: white; overflow-y: scroll;">
                    <p style="text-align: center;">thông tin đấu giá</p>
                    @foreach($thanhtoan as $tt)
                    @foreach($users as $us)
                    @foreach($profile as $pf)
                    @if($tt->users_id == $us->id && $us->id == $pf->users_id)
                    <div style="background: #acbbd7; height: 50px; display: flex; gap: 30px; margin-top: 20px;">
                        <div style="display: flex; gap: 10px; margin-left: 10px; width: 230px;">
                            <img src="{{asset('uploads/'.$pf->anhnd)}}" style="width: 50px; height: 50px;" alt="">
                            <p>{{$pf->tennd}}</p>
                        </div>
                        <div>
                            <p>{{$tt->tongtien}}.000 VND</p>
                        </div>
                    </div>
                    @endif
                    @endforeach
                    @endforeach
                    @endforeach
                </div>

                <div style="border: 1px solid; height: 300px;">
                    <div>
                        <p style="text-align: center;">Thông tin sản phẩm</p>
                        @if (Session::has('thongbao'))
                        <div style="color: red;">
                            {{Session::get('thongbao')}}
                        </div>
                        @endif
                        <p style="margin-left: 10px;">Số người tham gia: {{$onlineUsersCount}}Người</p>
                        <p style="margin-left: 10px;">Giá hiện tại: @if(empty($thanhtoan)) {{$sanpham->gia_sanpham}} @else {{$thanhtoans->tongtien}} @endif.000 VND</p>
                    </div>
                    <hr>
                    <div>
                        <p style="text-align: center;">Số tiền hiện có: @if(empty($taisan) != 'Null'){{$taisan->so_tien}}.000 VND @endif</p>
                        @if(empty($taisan) != 'Null')
                        @if(empty($thanhtoan))
                        <form action="{{route('daugia', $taisan->id)}}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <input type="text" name="users_id" value="{{$user->id}}" style="display: none;">
                            <input type="text" name="sanpham_id" value="{{$sanpham->id}}" style="display: none;">
                            <div class="coolinput">
                                <input type="text" placeholder="Nhập giá tiền mà bạn muốn" name="tongtien" class="input">
                            </div>
                            <input type="text" name="giaht" value="{{$sanpham->gia_sanpham}}" style="display: none;">
                            <hr>
                            <div style="display: flex; align-items: center;  justify-content: center;">
                                <button class="btn"> Đấu giá </button>
                            </div>
                        </form>
                        @else

                        @foreach($thanhtoan as $tt)
                        @if($tt->users_id == $user->id)
                        <form action="{{route('capnhatdaugia', $tt->id)}}" enctype="multipart/form-data" method="POST">
                            @csrf
                            @method('PUT')
                            <input type="text" name="users_id" value="{{$user->id}}" style="display: none;">
                            <input type="text" name="sanpham_id" value="{{$sanpham->id}}" style="display: none;">
                            <div class="coolinput">
                                <input type="text" placeholder="Nhập giá tiền mà bạn muốn" name="tongtien" class="input">
                            </div>
                            <input type="text" name="giaht" value="{{$thanhtoans->tongtien}}" style="display: none;">
                            <hr>
                            <div style="display: flex; align-items: center;  justify-content: center;">
                                <button class="btn"> Đấu giá </button>
                            </div>
                        </form>
                        @endif
                        @endforeach

                        @endif
                        @endif
                    </div>
                </div>
            </header>



            <nav>
                <a href="/sanphamchitiet/{{$sanpham->id}}/user/{{$user->id}}" aria-current="page">Quay lại</a>
                <a href="{{route('nguontien', $user->id)}}">Nạp tiền</a>
                <a href="{{route('qualythoigian')}}">Số người {{$onlineUsersCount}}</a>
            </nav>
            <main>
                <div style="display: flex; gap: 50px;">
                    <h1>
                        <span>TG<sub>48</sub>MUSIC</span> {{$sanpham->ten_sanpham}}
                    </h1>
                </div>




                <div style="border: 1px solid #504949; height: 300px;">
                    <!--phần hiển thị bình luận-->
                    <div style="height: 260px; overflow-y: scroll;">
                        <div style="background: #acbbd7 100% linear-gradient(#6a696d 0%, #504949 50%, #acbbd7 50%, #acbbd7 100%); height: 40px;"></div>
                        @foreach($binhluansp as $bl)
                        @foreach($users as $us)
                        @foreach($profile as $pf)
                        @if($bl->user_id == $us->id && $us->id == $pf->users_id)
                        <div>
                            <div style="display: flex; gap: 10px;">
                                <img src="{{asset('uploads/'.$pf->anhnd)}}" style="width: 40px; height: 40px; border-radius: 50%;" alt="">
                                <p style="font-size: 10px;">{{$pf->tennd}}</p>
                            </div>
                            <div class="noidung">
                                <p>{{$bl->noi_dung}}</p>
                                @if($bl->hinh_anh != null)
                                <img src="{{asset('uploads/'.$bl->hinh_anh)}}" alt="" style="width: 50px; height: 50px;">
                                @endif
                            </div>
                        </div>
                        <hr>
                        @endif
                        @endforeach
                        @endforeach
                        @endforeach
                    </div>
                    <!--form bình luận bình luận-->
                    <form action="{{route('binhluansp')}}" id="messageForm" enctype="multipart/form-data" method="POST">
                        @csrf
                        <input type="text" name="user_id" value="{{$user->id}}" style="display: none;">
                        <input type="text" name="sanpham_id" value="{{$sanpham->id}}" style="display: none;">
                        <div class="messageBox">
                            <div class="fileUploadWrapper">
                                <label for="file">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 337 337">
                                        <circle stroke-width="20" stroke="#6c6c6c" fill="none" r="158.5" cy="168.5" cx="168.5"></circle>
                                        <path stroke-linecap="round" stroke-width="25" stroke="#6c6c6c" d="M167.759 79V259"></path>
                                        <path stroke-linecap="round" stroke-width="25" stroke="#6c6c6c" d="M79 167.138H259"></path>
                                    </svg>
                                    <span class="tooltip">Gửi ảnh kèm theo</span>
                                </label>
                                <input type="file" id="file" name="hinh_anh" />
                            </div>
                            <input required="" placeholder="Gửi lời yêu thương" type="text" id="messageInput" name="noi_dung" />
                            <button id="sendButton">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 664 663">
                                    <path fill="none" d="M646.293 331.888L17.7538 17.6187L155.245 331.888M646.293 331.888L17.753 646.157L155.245 331.888M646.293 331.888L318.735 330.228L155.245 331.888">
                                    </path>
                                    <path stroke-linejoin="round" stroke-linecap="round" stroke-width="33.67" stroke="#6c6c6c" d="M646.293 331.888L17.7538 17.6187L155.245 331.888M646.293 331.888L17.753 646.157L155.245 331.888M646.293 331.888L318.735 330.228L155.245 331.888">
                                    </path>
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>

            </main>
        </div>
    </div>
    
</body>

</html>