<link rel="stylesheet" href="{{ asset('css/viewvexem.css') }}">
<div>
    <h1 style="font-size: 30xp; text-align: center;">Vé nhạc biểu diễn của các nhóm nhạc</h1>

    <!--Vé xem nhạc-->
    @foreach ($nhomnhac as $nn)

    <div style="margin-top: 50px;">
        <div style="display: flex; gap: 10px;">
            <img style="border-radius: 50%; width: 100px; height: 100px;" src="{{asset('uploads/'.$nn->logonn)}}" alt="">
            <h1>{{$nn->tennn}}</h1>
        </div>

        <div style="display: flex; justify-content: center; align-items: center;">

            <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 20px; ">
                @foreach ($lichtrinh as $lt)
                @foreach ($vexem as $vx)
                @if($nn->id == $lt->nhomnhac_id && $lt->id == $vx->lichtrinh_id)

                @if($vx->loaighe == 1)
                <div style="border: 1px solid; display: flex; justify-content: center; align-items: center; background: gray; width: 300px; margin-top: 50px;">
                    <div>
                        <img style="width: 300px; height: 300px;" src="{{asset('uploads/'.$lt->anhbn)}}" alt="">
                        <h3 style="text-align: center;">Loại vé thường</h3>
                        <h3 style="text-align: center;">{{$vx->tenve}}</h3>
                        <p style="text-align: left;">Giá vé: {{$vx->giave}}</p>
                        <p style="text-align: left;">Số lượng vé: {{$vx->soluong}}</p>
                        <p style="text-align: left;">Thời gian tổ chức: {{$lt->thoigian}}</p>
                        <p style="text-align: left;">Địa điểm tổ chức: {{$lt->diadiem}}</p>
                        <a class="fancy" style="width: 300px;" href="/thongtindv/{{$vx->id}}/user/{{$users->id}}">
                            <span class="top-key"></span>
                            <span class="text">Mua vé</span>
                            <span class="bottom-key-1"></span>
                            <span class="bottom-key-2"></span>
                        </a>
                    </div>

                </div>
                @endif
                @if($vx->loaighe == 2)
                <div style="border: 1px solid; display: flex; justify-content: center; align-items: center; background: yellow; width: 300px; margin-top: 50px;">
                    <div>
                        <img style="width: 300px; height: 300px;" src="{{asset('uploads/'.$lt->anhbn)}}" alt="">
                        <h3 style="text-align: center;">Loại thương gia</h3>
                        <h3 style="text-align: center;">{{$vx->tenve}}</h3>
                        <p style="text-align: left;">Giá vé: {{$vx->giave}}</p>
                        <p style="text-align: left;">Số lượng vé: {{$vx->soluong}}</p>
                        <p style="text-align: left;">Thời gian tổ chức: {{$lt->thoigian}}</p>
                        <p style="text-align: left;">Địa điểm tổ chức: {{$lt->diadiem}}</p>
                        <a href="/thongtindv/{{$vx->id}}/user/{{$users->id}}"><button><span></span>mua</button></a>
                    </div>

                </div>
                @endif
                @if($vx->loaighe == 3)
                <div style="border: 1px solid; display: flex; justify-content: center; align-items: center; background: rgb(80, 199, 199); width: 300px; margin-top: 50px;">
                    <div>
                        <img style="width: 300px; height: 300px;" src="{{asset('uploads/'.$lt->anhbn)}}" alt="">
                        <h3 style="text-align: center;">Loại vé đặc biệt</h3>
                        <h3 style="text-align: center;">{{$vx->tenve}}</h3>
                        <p style="text-align: left;">Giá vé: {{$vx->giave}}</p>
                        <p style="text-align: left;">Số lượng vé: {{$vx->soluong}}</p>
                        <p style="text-align: left;">Thời gian tổ chức: {{$lt->thoigian}}</p>
                        <p style="text-align: left;">Địa điểm tổ chức: {{$lt->diadiem}}</p>
                        <div class="btn" style="width: 300px; height: 50px;">
                            <svg height="24" width="24" fill="#FFFFFF" viewBox="0 0 24 24" data-name="Layer 1" id="Layer_1" class="sparkle">
                                <path d="M10,21.236,6.755,14.745.264,11.5,6.755,8.255,10,1.764l3.245,6.491L19.736,11.5l-6.491,3.245ZM18,21l1.5,3L21,21l3-1.5L21,18l-1.5-3L18,18l-3,1.5ZM19.333,4.667,20.5,7l1.167-2.333L24,3.5,21.667,2.333,20.5,0,19.333,2.333,17,3.5Z"></path>
                            </svg>
                            <a class="text" style="text-decoration: none;" href="/thongtindv/{{$vx->id}}/user/{{$users->id}}">mua</a>
                        </div>

                    </div>

                </div>
                @endif

                @endif
                @endforeach
                @endforeach

            </div>
        </div>



    </div>

    @endforeach
</div>