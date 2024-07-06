<div style="display: flex; justify-content: center; align-items: center;">

    <div style="display: flex; gap: 20px;">

        <div style="width: 500px; border: 1px solid;">
            <h1>Thông tin VIP mà bạn muốn mua {{ $uservip->ten_vip }}</h1>
            <div style="text-align: center;">
                <p>{{ number_format($gia) }} VND</p>
                <p>Thời gian hết hạn: {{$ngayhh}}</p>
                <p>Đặc quyền: {{ $uservip->dac_quyen }}</p>
                <p>Tên người mua: {{ $profile->tennd }}</p>
            </div>
        </div>


        <div style="width: 500px; border: 1px solid;">
            @if(empty($uservip))
            <h1>Thanh toán qua zalo momo và chuyển khoản</h1>
            <form action="{{route('thanhtoanzalo')}}" style="margin-left: 5px;" method="POST">
                @csrf
                <div>
                    <input type="text" name="id_user" value="{{$users->id}}" style="display: none;">
                    <input type="text" name="id_vip" value="{{$uservip->id}}" style="display: none;">
                    <input type="text" name="so_tien" value="{{$gia}}" style="display: none;">
                    <input type="text" name="ngayhethan" value="{{$ngayhh}}" style="display: none;">
                    <input type="text" name="pttt" value="1" style="display: none;">
                </div>
                <div style="width: 100%;">
                    <label>Tên chủ thẻ</label><br>
                    <input type="text" style="width: 100%; height: 30px;">
                </div>
                <div style="margin-top: 20px;">
                    <label>Mật khẩu</label><br>
                    <input type="text" style="width: 100%; height: 30px;">
                </div>

                <button type="submit" style="margin-top: 20px; width: 100%; height: 30px;">Thanh toán</button>
            </form>
            @endif

            @if(empty($uservip) != 'Null')
            <h1>Nâng cấp qua zalo momo và chuyển khoản</h1>
            <form action="{{route('thanhtoannangcap', $thanhtoan->id)}}" style="margin-left: 5px;" method="POST">
                @csrf
                @method('PUT')
                <div>
                    <input type="text" name="id_user" value="{{$users->id}}" style="display: none;">
                    <input type="text" name="id_vip" value="{{$uservip->id}}" style="display: none;">
                    <input type="text" name="so_tien" value="{{$gia}}" style="display: none;">
                    <input type="text" name="ngayhethan" value="{{$ngayhh}}" style="display: none;">
                    <input type="text" name="pttt" value="1" style="display: none;">
                </div>
                <div style="width: 100%;">
                    <label>Tên chủ thẻ</label><br>
                    <input type="text" style="width: 100%; height: 30px;">
                </div>
                <div style="margin-top: 20px;">
                    <label>Mật khẩu</label><br>
                    <input type="text" style="width: 100%; height: 30px;">
                </div>

                <button type="submit" style="margin-top: 20px; width: 100%; height: 30px;">nâng cấp</button>
            </form>
            @endif
        </div>


    </div>

</div>