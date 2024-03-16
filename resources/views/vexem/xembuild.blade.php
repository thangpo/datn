<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Payment</title>
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
                <img style="width: 200px; height: 200px;" src="https://document-export.canva.com/P9EbM/DAF3uMP9EbM/3/thumbnail/0001.png?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAQYCGKMUHWDTJW6UD%2F20240201%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Date=20240201T025642Z&X-Amz-Expires=25988&X-Amz-Signature=bf629f41b8c6232a642528f1e98deeedd9e5a486837ee9a4e5731abba3ae7768&X-Amz-SignedHeaders=host&response-expires=Thu%2C%2001%20Feb%202024%2010%3A09%3A50%20GMT" alt="QR Code">
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

            <div style="width: 100%; height: 30px; text-align: center; border: 1px solid;">
                <form action="{{route('thanhtoannao')}}" enctype="multipart/form-data" method="POST">
                @csrf
                    <input type="text" style="position: absolute; left: -999px;" name="users_id" value="{{$us->id}}">
                    <input type="text" style="position: absolute; left: -999px;"  name="vexem_id" value="{{$vx->id}}">
                    <input type="text" style="position: absolute; left: -999px;"  name="nganhang" value="0">
                    <input type="text" style="position: absolute; left: -999px;"  name="soluongve" value="{{$bangthanhtoantg->soluongve}}">

                    <button type="submit">Xác nhận đặt hàng</button>
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
                        <img style="width: 150px; height: 150px; margin-top: 20px;" src="https://document-export.canva.com/P9EbM/DAF3uMP9EbM/3/thumbnail/0001.png?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAQYCGKMUHWDTJW6UD%2F20240130%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Date=20240130T025642Z&X-Amz-Expires=25988&X-Amz-Signature=375e89df7217f39ff579d569da4eb79cb3da70fc4a8cedcef99ad7965b6babdd&X-Amz-SignedHeaders=host&response-expires=Tue%2C%2030%20Jan%202024%2010%3A09%3A50%20GMT" alt="">
                    </div>
                </div>
                    <button type="submit" style="margin-top: 20px; width: 100%; height: 30px;">Thanh toán</button>
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
<div class="container">
        <h1 style="text-align: center;">Thanh toán qua Zalo pay</h1>

        <div style="display: flex; justify-content: center; align-items: center;">
            <div class="qr-code">
                <img src="https://document-export.canva.com/kWSac/DAF1cPkWSac/10/thumbnail/0001.png?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAQYCGKMUHWDTJW6UD%2F20240116%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Date=20240116T181953Z&X-Amz-Expires=63183&X-Amz-Signature=7f9a088314ff3b7311279d507d6f49e1420bfb42bef82e2513f2dff6bece03f4&X-Amz-SignedHeaders=host&response-expires=Wed%2C%2017%20Jan%202024%2011%3A52%3A56%20GMT" alt="QR Code">
                <div class="payment-details">
                </div>
            </div>
        </div>
        

        <h1 style="text-align: center;">Thông tin vé của bạn xem {{$vx->tenve}}</h1>
        <div style="display: flex; gap: 20px;">
            <div>
                <img style="width: 300px;" src="https://tse3.mm.bing.net/th?id=OIP.GtEo127m_vzHw4SOcz0B6gHaHa&pid=Api&P=0&h=180" alt="">
            </div>

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
    @endif


    @if($bangthanhtoantg->pttt == 4)
<div class="container">
        <h1 style="text-align: center;">Thanh toán qua Momo</h1>

        <div style="display: flex; justify-content: center; align-items: center;">
            <div class="qr-code">
                <img src="https://document-export.canva.com/kWSac/DAF1cPkWSac/10/thumbnail/0001.png?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAQYCGKMUHWDTJW6UD%2F20240116%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Date=20240116T181953Z&X-Amz-Expires=63183&X-Amz-Signature=7f9a088314ff3b7311279d507d6f49e1420bfb42bef82e2513f2dff6bece03f4&X-Amz-SignedHeaders=host&response-expires=Wed%2C%2017%20Jan%202024%2011%3A52%3A56%20GMT" alt="QR Code">
                <div class="payment-details">
                </div>
            </div>
        </div>
        

        <h1 style="text-align: center;">Thông tin vé của bạn xem {{$vx->tenve}}</h1>
        <div style="display: flex; gap: 20px;">
            <div>
                <img style="width: 300px;" src="https://tse3.mm.bing.net/th?id=OIP.GtEo127m_vzHw4SOcz0B6gHaHa&pid=Api&P=0&h=180" alt="">
            </div>

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
    @endif






@endif
@endforeach
@endforeach
@endforeach
@endforeach

</body>
</html>