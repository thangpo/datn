<div style="display: flex; justify-content: center; align-items: center;">
  <div style="display: flex; gap: 20px;">
    @foreach($uservip as $usv)
    @if($usv->id != $thanhtoan->id_vip && $thanhtoan->id_vip <= $usv->id)

    <div style="border: 1px solid; width: 400px;">
      <div style="margin-left: 15px; height: 500px;">
        <h1>{{$usv->ten_vip}}</h1>
        <h3>Giá VIP: {{$usv->gia}}</h3>
        <h3>Số ngày VIP tồn tại: {{$usv->ngay_hh}}</h3>
        <h3>Các đặc quyền: {{$usv->dac_quyen}}</h3>
      </div>
      <div style="border: 1px solid; width: 100%; text-align: center; height: 30px;">
        <a href="/thongtindv/{{$usv->id}}/user/{{$users->id}}" style="text-decoration: none;">@if(empty($thanhtoan))Mua gói VIP @endif @if(empty($thanhtoan) != 'Null')nâng cấp gói VIP @endif</a>
      </div>
    </div>

    @endif
    @endforeach
  </div>
</div>
@if(empty($thanhtoan) != 'Null')
<div>
  <h1>các khuyến mại khi nâng cấp VIP</h1>

  <h3>Giảm giá đi 50% tặng <br> thêm 30 ngày dùng nữa</h3>
</div>
@endif
@if($thanhtoan->id_vip == $uservipmax)
<div>
  <h1>Bạn đã mua hết VIP rồi</h1>

  <h3>Giảm giá đi 50% tặng <br> thêm 30 ngày dùng nữa</h3>
</div>
@endif