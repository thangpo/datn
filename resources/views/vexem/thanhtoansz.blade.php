<div style="display: flex; justify-content: center; align-items: center;">
    <div style="">
        <div>
            <img style="width: 600px; height: 200px;" src="{{asset('uploads/'.$lichtrinh->anhbn)}}" alt="">
            <h1>Cảm ơn sự ủng hộ của quý khách với TG48</h1>

            <div>
              <p>Tên người mua: {{$profile->tennd}}</p>
              <p>Địa chỉ: {{$lichtrinh->diadiem}}</p>
              <p>Ngày công diễn: {{$lichtrinh->thoigian}}</p>
              @foreach($bangthanhtoan as $btt)
              @if($users->id == $btt->users_id && $vexem->id == $btt->vexem_id && $btt->pttt == 2) 
              <p>Tổng số tiền: {{$btt->tongtien}}</p>
              @endif
              @endforeach
              <p>Tên công diễn: {{$lichtrinh->tenlt}}</p>
            </div>
        </div>
        <div style="width: 100%; border: 1px solid; text-align: center;">
          <a style="text-decoration: none;" href="{{route('views', $users->id)}}">Quay lại trang chủ</a>
        </div>
    </div>
</div>