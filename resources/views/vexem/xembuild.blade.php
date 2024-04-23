<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Payment</title>
    <link rel="stylesheet" href="{{ asset('css/xembuild.css') }}">
</head>

<body>
    @foreach($userstg as $us)
    @foreach($vexemtg as $vx)
    @foreach($lichtrinhtg as $lt)
    @foreach($profiletg as $pr)
    @if($bangthanhtoantg->users_id == $us->id && $bangthanhtoantg->vexem_id == $vx->id && $bangthanhtoantg->lichtrinh_id == $lt->id && $bangthanhtoantg->profile_id == $pr->id)


    <!--Tiền mặt-->
    @if($bangthanhtoantg->pttt == 1)
    <div class="container">
        <h1 style="text-align: center;">Cảm ơn quý khách đã mua vé từ TG MUSIC</h1>
        <div style="display: flex; justify-content: center; align-items: center;">
            <div class="qr-code" style="display: flex;">
                <img style="width: 200px; height: 200px;" src="http://127.0.0.1:8000/uploads/1706175766.jpg" alt="QR Code">
                <div>
                    <img src="https://tse4.mm.bing.net/th?id=OIP.QXK4m7g9zHuwcYD7oO4M1AHaGE&pid=Api&P=0&h=180" alt="">
                </div>
            </div>
        </div>


        <h1 style="text-align: center;">Thông tin vé của bạn xem {{$vx->tenve}}</h1>
        <div style="display: flex; justify-content: center; align-items: center;">
            <div>
                <div style="display: flex; gap: 30px;">
                    <div>
                        <h3>Tên người mua: {{$pr->tennd}}</h3>
                        <p>Địa chỉ: {{$pr->diachi}}</p>
                        <p>Số điện thoại{{$pr->sdt}}</p>
                        <p>Số tiền phải thanh toán{{$bangthanhtoantg->tongtien}}</p>
                    </div>
                    <div>
                        <h3>Tên vé: {{$lt->tenlt}}</h3>
                        <p>Số lượng vé: {{$bangthanhtoantg->soluongve}}</p>
                        <p>Thời gian diễn ra: {{$lt->thoigian}}</p>
                        <p>Địa điểm tổ chức: {{$lt->diadiem}}</p>
                    </div>
                </div>

                <div style="width: 100%; height: 30px; text-align: center;">
                    <form action="{{route('thanhtoannao')}}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <input type="text" style="position: absolute; left: -999px;" name="users_id" value="{{$us->id}}">
                        <input type="text" style="position: absolute; left: -999px;" name="vexem_id" value="{{$vx->id}}">
                        <input type="text" style="position: absolute; left: -999px;" name="nganhang" value="0">
                        <input type="text" style="position: absolute; left: -999px;" name="soluongve" value="{{$bangthanhtoantg->soluongve}}">

                        <button class="Btn" type="submit" style="margin-top: 20px; width: 100%; height: 30px;">
                            Xác nhận thông tin đặt hàng
                            <svg viewBox="0 0 576 512" class="svgIcon">
                                <path d="M512 80c8.8 0 16 7.2 16 16v32H48V96c0-8.8 7.2-16 16-16H512zm16 144V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V224H528zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm56 304c-13.3 0-24 10.7-24 24s10.7 24 24 24h48c13.3 0 24-10.7 24-24s-10.7-24-24-24H120zm128 0c-13.3 0-24 10.7-24 24s10.7 24 24 24H360c13.3 0 24-10.7 24-24s-10.7-24-24-24H248z"></path>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>

    </div>
    @endif



    <!--Chuyển khoản ngân hàng-->
    @if($bangthanhtoantg->pttt == 2)
    <div style="display: flex; justify-content: center; align-items: center;">

        <div>
            <h1 style="text-align: center;">Thanh toán qua Ngân hàng</h1>

            <div style="display: flex; gap: 30px;">

                <div style="display: flex; justify-content: center; align-items: center;">
                    <div style="display: flex; justify-content: center; align-items: center; width: 600px; border: 1px solid;">
                        <form action="{{route('thanhtoannao')}}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <!--menu trai-->
                            <div style="display: flex; gap: 50px;">
                                <div style="float: left;">
                                    <p>Chọn ngân hàng của bạn</p>
                                    <select name="nganhang" style="width: 100%; height: 30px;">
                                        <option value="1">Ngân hàng MB</option>
                                        <option value="2">Ngân hàng VP</option>
                                        <option value="3">Ngân hàng AGB</option>
                                        <option value="4">Ngân hàng BIDV</option>
                                    </select>
                                    <div style="position: absolute; left: -999px;">
                                        <input type="text" name="users_id" style="width: 100%; height: 30px;" value="{{$us->id}}">
                                    </div>
                                    <div style="position: absolute; left: -999px;">
                                        <input type="text" name="vexem_id" style="width: 100%; height: 30px;" value="{{$vx->id}}">
                                    </div>

                                    <div style="">
                                        <p>Tên chủ thẻ</p>
                                        <input type="text" name="" placeholder="Nhập tên chủ thẻ" style="width: 100%; height: 30px;">
                                    </div>
                                    <div style="">
                                        <p>Số thẻ của bạn</p>
                                        <input type="number" name="" placeholder="Nhập số thẻ của bạn" style="width: 100%; height: 30px;">
                                    </div>
                                    <div style="">
                                        <p>Số lượng vé của bạn</p>
                                        <input type="number" name="soluongve" value="{{$bangthanhtoantg->soluongve}}" style="width: 100%; height: 30px;">
                                    </div>
                                </div>
                                <!--menu phải-->
                                <div style="float: right;">
                                    <div style="">
                                        <p>Số tiền phải thanh toán</p>
                                        <input type="text" name="" value="{{$bangthanhtoantg->tongtien}}" style="width: 100%; height: 30px;">
                                    </div>
                                    <img style="width: 150px; height: 150px; margin-top: 20px;" src="http://127.0.0.1:8000/uploads/1706175766.jpg" alt="">
                                </div>
                            </div>
                            <button class="Btn" type="submit" style="margin-top: 20px; width: 100%; height: 30px;">
                                Pay
                                <svg viewBox="0 0 576 512" class="svgIcon">
                                    <path d="M512 80c8.8 0 16 7.2 16 16v32H48V96c0-8.8 7.2-16 16-16H512zm16 144V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V224H528zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm56 304c-13.3 0-24 10.7-24 24s10.7 24 24 24h48c13.3 0 24-10.7 24-24s-10.7-24-24-24H120zm128 0c-13.3 0-24 10.7-24 24s10.7 24 24 24H360c13.3 0 24-10.7 24-24s-10.7-24-24-24H248z"></path>
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>


                <div style="border: 1px solid;">
                    <h1 style="text-align: center;">Thông tin vé của bạn xem {{$vx->tenve}}</h1>
                    <div style="display: flex; gap: 20px;">
                        <div style="display: flex; gap: 30px;">
                            <div>
                                <h3>Tên người mua: {{$pr->tennd}}</h3>
                                <p>Địa chỉ: {{$pr->diachi}}</p>
                                <p>Số điện thoại{{$pr->sdt}}</p>
                                <p>Số tiền phải thanh toán{{$bangthanhtoantg->tongtien}}</p>
                            </div>
                            <div>
                                <h3>Tên vé: {{$lt->tenlt}}</h3>
                                <p>Số lượng vé: {{$bangthanhtoantg->soluongve}}</p>
                                <p>Thời gian diễn ra: {{$lt->thoigian}}</p>
                                <p>Địa điểm tổ chức: {{$lt->diadiem}}</p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>
    @endif


    @if($bangthanhtoantg->pttt == 3)
    <div style="display: flex; justify-content: center; align-items: center;">

        <div>
            <h1 style="text-align: center;">Thanh toán qua zalo pay</h1>

            <div style="display: flex; gap: 30px;">

                <div style="display: flex; justify-content: center; align-items: center;">
                    <div style="display: flex; justify-content: center; align-items: center; width: 600px; border: 1px solid;">
                        <form action="{{route('thanhtoannao')}}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <!--menu trai-->
                            <div style="display: flex; gap: 50px;">
                                <div style="float: left;">
                                    <p>Chọn ngân hàng của bạn</p>
                                    <select name="nganhang" style="width: 100%; height: 30px;">
                                        <option value="5">Zalo pay</option>
                                    </select>
                                    <div style="position: absolute; left: -999px;">
                                        <input type="text" name="users_id" style="width: 100%; height: 30px;" value="{{$us->id}}">
                                    </div>
                                    <div style="position: absolute; left: -999px;">
                                        <input type="text" name="vexem_id" style="width: 100%; height: 30px;" value="{{$vx->id}}">
                                    </div>

                                    <div style="">
                                        <p>Tên chủ thẻ</p>
                                        <input type="text" name="" placeholder="Nhập tên chủ thẻ" style="width: 100%; height: 30px;">
                                    </div>
                                    <div style="">
                                        <p>Số thẻ của bạn</p>
                                        <input type="number" name="" placeholder="Nhập số thẻ của bạn" style="width: 100%; height: 30px;">
                                    </div>
                                    <div style="">
                                        <p>Số lượng vé của bạn</p>
                                        <input type="number" name="soluongve" value="{{$bangthanhtoantg->soluongve}}" style="width: 100%; height: 30px;">
                                    </div>
                                </div>
                                <!--menu phải-->
                                <div style="float: right;">
                                    <div style="">
                                        <p>Số tiền phải thanh toán</p>
                                        <input type="text" name="" value="{{$bangthanhtoantg->tongtien}}" style="width: 100%; height: 30px;">
                                    </div>
                                    <img style="width: 200px; height: 150px; margin-top: 20px;" src="https://tse1.mm.bing.net/th?id=OIP.ffuAxKEBvrIe1Cv8hWzH9wHaEK&pid=Api&P=0&h=180" alt="">
                                </div>
                            </div>
                            <button class="Btn" type="submit" style="margin-top: 20px; width: 100%; height: 30px;">
                                Pay
                                <svg viewBox="0 0 576 512" class="svgIcon">
                                    <path d="M512 80c8.8 0 16 7.2 16 16v32H48V96c0-8.8 7.2-16 16-16H512zm16 144V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V224H528zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm56 304c-13.3 0-24 10.7-24 24s10.7 24 24 24h48c13.3 0 24-10.7 24-24s-10.7-24-24-24H120zm128 0c-13.3 0-24 10.7-24 24s10.7 24 24 24H360c13.3 0 24-10.7 24-24s-10.7-24-24-24H248z"></path>
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>


                <div style="border: 1px solid;">
                    <h1 style="text-align: center;">Thông tin vé của bạn xem {{$vx->tenve}}</h1>
                    <div style="display: flex; gap: 20px;">
                        <div style="display: flex; gap: 30px;">
                            <div>
                                <h3>Tên người mua: {{$pr->tennd}}</h3>
                                <p>Địa chỉ: {{$pr->diachi}}</p>
                                <p>Số điện thoại{{$pr->sdt}}</p>
                                <p>Số tiền phải thanh toán{{$bangthanhtoantg->tongtien}}</p>
                            </div>
                            <div>
                                <h3>Tên vé: {{$lt->tenlt}}</h3>
                                <p>Số lượng vé: {{$bangthanhtoantg->soluongve}}</p>
                                <p>Thời gian diễn ra: {{$lt->thoigian}}</p>
                                <p>Địa điểm tổ chức: {{$lt->diadiem}}</p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>
    @endif


    @if($bangthanhtoantg->pttt == 4)
    <div style="display: flex; justify-content: center; align-items: center;">

        <div>
            <h1 style="text-align: center;">Thanh toán qua momo</h1>

            <div style="display: flex; gap: 30px;">

                <div style="display: flex; justify-content: center; align-items: center;">
                    <div style="display: flex; justify-content: center; align-items: center; width: 600px; border: 1px solid;">
                        <form action="{{route('thanhtoannao')}}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <!--menu trai-->
                            <div style="display: flex; gap: 50px;">
                                <div style="float: left;">
                                    <p>Chọn ngân hàng của bạn</p>
                                    <select name="nganhang" style="width: 100%; height: 30px;">
                                        <option value="6">momo</option>
                                    </select>
                                    <div style="position: absolute; left: -999px;">
                                        <input type="text" name="users_id" style="width: 100%; height: 30px;" value="{{$us->id}}">
                                    </div>
                                    <div style="position: absolute; left: -999px;">
                                        <input type="text" name="vexem_id" style="width: 100%; height: 30px;" value="{{$vx->id}}">
                                    </div>

                                    <div style="">
                                        <p>Tên chủ thẻ</p>
                                        <input type="text" name="" placeholder="Nhập tên chủ thẻ" style="width: 100%; height: 30px;">
                                    </div>
                                    <div style="">
                                        <p>Số thẻ của bạn</p>
                                        <input type="number" name="" placeholder="Nhập số thẻ của bạn" style="width: 100%; height: 30px;">
                                    </div>
                                    <div style="">
                                        <p>Số lượng vé của bạn</p>
                                        <input type="number" name="soluongve" value="{{$bangthanhtoantg->soluongve}}" style="width: 100%; height: 30px;">
                                    </div>
                                </div>
                                <!--menu phải-->
                                <div style="float: right;">
                                    <div style="">
                                        <p>Số tiền phải thanh toán</p>
                                        <input type="text" name="" value="{{$bangthanhtoantg->tongtien}}" style="width: 100%; height: 30px;">
                                    </div>
                                    <img style="width: 200px; height: 150px; margin-top: 20px;" src="https://tse3.mm.bing.net/th?id=OIP.3kX30pnlsvaerTOmYCgptgHaHa&pid=Api&P=0&h=180" alt="">
                                </div>
                            </div>
                            <button class="Btn" type="submit" style="margin-top: 20px; width: 100%; height: 30px;">
                                Pay
                                <svg viewBox="0 0 576 512" class="svgIcon">
                                    <path d="M512 80c8.8 0 16 7.2 16 16v32H48V96c0-8.8 7.2-16 16-16H512zm16 144V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V224H528zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm56 304c-13.3 0-24 10.7-24 24s10.7 24 24 24h48c13.3 0 24-10.7 24-24s-10.7-24-24-24H120zm128 0c-13.3 0-24 10.7-24 24s10.7 24 24 24H360c13.3 0 24-10.7 24-24s-10.7-24-24-24H248z"></path>
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>


                <div style="border: 1px solid;">
                    <h1 style="text-align: center;">Thông tin vé của bạn xem {{$vx->tenve}}</h1>
                    <div style="display: flex; gap: 20px;">
                        <div style="display: flex; gap: 30px;">
                            <div>
                                <h3>Tên người mua: {{$pr->tennd}}</h3>
                                <p>Địa chỉ: {{$pr->diachi}}</p>
                                <p>Số điện thoại{{$pr->sdt}}</p>
                                <p>Số tiền phải thanh toán{{$bangthanhtoantg->tongtien}}</p>
                            </div>
                            <div>
                                <h3>Tên vé: {{$lt->tenlt}}</h3>
                                <p>Số lượng vé: {{$bangthanhtoantg->soluongve}}</p>
                                <p>Thời gian diễn ra: {{$lt->thoigian}}</p>
                                <p>Địa điểm tổ chức: {{$lt->diadiem}}</p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>
    @endif






    @endif
    @endforeach
    @endforeach
    @endforeach
    @endforeach

</body>

</html>