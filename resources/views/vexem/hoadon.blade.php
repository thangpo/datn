<div style="text-align: center;">
    <h1>Thông tin các đơn hàng của {{$users->name}}</h1>
    <a style="text-decoration: none;" href="{{route('views', $users->id)}}">Quay lại trang chủ</a>
</div>

@foreach($donhang as $dh)
@foreach($vexem as $vx)
@foreach($lichtrinh as $lt)
@if($dh->users_id == $users->id && $dh->vexem_id == $vx->id && $vx->lichtrinh_id == $lt->id)
<div style="display: flex; justify-content: center; align-items: center; margin-top: 40px;">

    <div style="display: flex; border: 1px solid; gap: 40px;">
        <div>
            <img style="width: 300px; height: 150px;" src="{{asset('uploads/'.$lt->anhbn)}}" alt="">
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