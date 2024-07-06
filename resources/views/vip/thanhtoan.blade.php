<div style="display: flex; justify-content: center; align-items: center;">
    <div>
        <h1>Thông tin VIP mà bạn muốn mua {{ $uservip->ten_vip }}</h1>
        <div style="text-align: center;">
        @if(empty($uservip))
        <p>Giá: {{($uservip->gia)}} VND</p>
        @endif
        @if(empty($uservip) != 'Null')
        <p>Giá: {{($uservip->gia)/2}} VND</p>
        @endif
            <p>Thời gian hết hạn: {{ $uservip->ngay_hh }} ngày sau khi mua + 30 ngày</p>
            <p>Đặc quyền: {{ $uservip->dac_quyen }}</p>
            <p>Tên người mua: {{ $profile->tennd }}</p>
        </div>
        
        <div>
            <h1>chọn phương thức thanh toán</h1>
            <div style="display: flex; gap: 20px;">
                <a href="/thanhtoanvp/{{$uservip->id}}/user/{{$users->id}}">ZALO PAY</a>
                <a href="">MOMO</a>
                <a href="">CHUYỂN KHOẢN</a>
            </div>
        </div>
    </div>
</div>