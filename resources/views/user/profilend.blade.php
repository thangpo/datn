<div style="display: flex; justify-content: center; align-items: center;">
    @foreach ($users as $us)
    <div>
        <div style="display: flex; gap: 20px;">
            @foreach ($profile as $pf)
            <div style="width: 500px;">
                <img style="width: 400px;" src="{{asset('uploads/'.$pf->anhnd)}}" alt="">
                <div style="border: 1px solid; margin-top: 20px; text-align: center;">
                    <a style="text-decoration: none;" href="">Thay ảnh đại diện</a>
                </div>
            </div>
            <div style="width: 500px;">
                <h1>Tên người dùng: {{$pf->tennd}}</h1>
                <h3>Tuổi người dùng: {{$pf->tuoi}}</h3>
                <h3>Email: {{$us->email}}</h3>
                <h3>Chiều cao: {{$pf->diachi}}</h3>
                <h3>Cân năng: {{$pf->sdt}}</h3>
                <h3>Giới tính: {{$pf->gioitinh == 0 ? 'Nam' : 'Nữ'}}</h3>
                <div style="text-align: left;">
                    <div style="display: inline-block;width: 24px;height: 24px;background: #ddd;margin: 0 5px;"><img style="width: 25px;height: 25px;" src="https://tse1.mm.bing.net/th?id=OIP.0hjuzKoA33K1Ml_znxAaOQHaHa&pid=Api&P=0&h=180" alt=""></div>
                    <div style="display: inline-block;width: 24px;height: 24px;background: #ddd;margin: 0 5px;"><img style="width: 25px;height: 25px;" src="https://tse4.mm.bing.net/th?id=OIP.0ZvKtmqALnKw74ofDZQKTQHaHa&pid=Api&P=0&h=180" alt=""></div>
                    <div style="display: inline-block;width: 24px;height: 24px;background: #ddd;margin: 0 5px;"><img style="width: 25px;height: 25px;" src="https://h5.48.cn/pocket48/image/logo.png" alt=""></div>
                    <div style="display: inline-block;width: 24px;height: 24px;background: #ddd;margin: 0 5px;"><img style="width: 25px;height: 25px;" src="http://127.0.0.1:8000/uploads/1705396030.jpg" alt=""></div>
                </div>
                <div style="border: 1px solid; text-align: center;">
                    <a href="{{route('logout')}}">đăng xuất</a>
                </div>
                <div style="border: 1px solid; text-align: center;">
                    <a href="{{route('views', $us->id)}}">quay lại trang chủ</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @endforeach
</div>