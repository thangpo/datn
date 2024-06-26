<link rel="stylesheet" href="{{asset('css/hoadon.css')}}">
<div style="text-align: center;">
    <a style="text-decoration: none;" href="{{url()->previous()}}"><button>
            <svg height="16" width="16" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1024 1024">
                <path d="M874.690416 495.52477c0 11.2973-9.168824 20.466124-20.466124 20.466124l-604.773963 0 188.083679 188.083679c7.992021 7.992021 7.992021 20.947078 0 28.939099-4.001127 3.990894-9.240455 5.996574-14.46955 5.996574-5.239328 0-10.478655-1.995447-14.479783-5.996574l-223.00912-223.00912c-3.837398-3.837398-5.996574-9.046027-5.996574-14.46955 0-5.433756 2.159176-10.632151 5.996574-14.46955l223.019353-223.029586c7.992021-7.992021 20.957311-7.992021 28.949332 0 7.992021 8.002254 7.992021 20.957311 0 28.949332l-188.073446 188.073446 604.753497 0C865.521592 475.058646 874.690416 484.217237 874.690416 495.52477z"></path>
            </svg>
            <span>Quay lại</span>
        </button></a>
    <h1>Thông tin các đơn hàng của {{$users->name}}</h1>
</div>

@foreach($donhang as $dh)
@foreach($vexem as $vx)
@foreach($lichtrinh as $lt)
@if($dh->users_id == $users->id && $dh->vexem_id == $vx->id && $vx->lichtrinh_id == $lt->id)
<div class="hoadon1">

    <div class="hoadon2">
        <div>
            <img class="hoadonimg1" src="{{asset('uploads/'.$lt->anhbn)}}" alt="">
        </div>
        <div>
            <h3>Tên vé bạn mua: {{$lt->tenlt}}</h3>
            @foreach($bangthanhtoan as $btt)
            <p>Tổng tiền: {{$btt->tongtien}}</p>
            @endforeach
            <p>Ngày mua: {{$dh->created_at}}</p>
            <p>Địa điểm: {{$lt->diadiem}}</p>
        </div>
        <div>
            <p>Tên người mua: {{$profile->tennd}}</p>
            <p>Số điện thoại: {{$profile->sdt}}</p>
            <p>Loại vé: @if($vx->loaighe == 1)vé phổ thông @endif @if($vx->loaighe == 2) vé thương gia @endif @if($vx->loaighe == 3) vé đặc biệt @endif</p>
            <p>Số lượng vé: {{$btt->soluongve}}</p>
            <p>Thanh toán qua: @if($dh->nganhang == 0)Tiền mặt @endif @if($dh->nganhang == 1)MB bank @endif @if($dh->nganhang == 2)VP bank @endif @if($dh->nganhang == 3) AGB bank @endif @if($dh->nganhang == 4) BIDV bank @endif</p>
        </div>
    </div>

</div>
@endif
@endforeach
@endforeach
@endforeach