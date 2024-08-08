<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/billthanht.css') }}">
</head>

<body>
    <div style="display: flex; justify-content: center; align-items: center; gap: 40px;">
        <div class="master-container" style="width: 400px;">
            <div class="card cart">
                <h2 class="title">Thông tin đơn hàng: {{$sanpham->ten_sanpham}}</h2>
                <div class="products">
                    <div class="product">
                        <svg fill="none" viewBox="0 0 60 60" height="60" width="60" xmlns="http://www.w3.org/2000/svg">
                            <rect fill="#FFF6EE" rx="8.25" height="60" width="60"></rect>
                            <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.25" stroke="#FF8413" fill="#FFB672" d="M34.2812 18H25.7189C21.9755 18 18.7931 20.5252 17.6294 24.0434C17.2463 25.2017 17.0547 25.7808 17.536 26.3904C18.0172 27 18.8007 27 20.3675 27H39.6325C41.1993 27 41.9827 27 42.4639 26.3904C42.9453 25.7808 42.7538 25.2017 42.3707 24.0434C41.207 20.5252 38.0246 18 34.2812 18Z">
                            </path>
                            <path fill="#FFB672" d="M18 36H17.25C16.0074 36 15 34.9926 15 33.75C15 32.5074 16.0074 31.5 17.25 31.5H29.0916C29.6839 31.5 30.263 31.6754 30.7557 32.0039L33.668 33.9453C34.1718 34.2812 34.8282 34.2812 35.332 33.9453L38.2443 32.0039C38.7371 31.6754 39.3161 31.5 39.9084 31.5H42.75C43.9926 31.5 45 32.5074 45 33.75C45 34.9926 43.9926 36 42.75 36H42M18 36L18.6479 38.5914C19.1487 40.5947 20.9486 42 23.0135 42H36.9865C39.0514 42 40.8513 40.5947 41.3521 38.5914L42 36M18 36H28.5ZM42 36H39.75Z">
                            </path>
                            <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.25" stroke="#FF8413" d="M18 36H17.25C16.0074 36 15 34.9926 15 33.75C15 32.5074 16.0074 31.5 17.25 31.5H29.0916C29.6839 31.5 30.263 31.6754 30.7557 32.0039L33.668 33.9453C34.1718 34.2812 34.8282 34.2812 35.332 33.9453L38.2443 32.0039C38.7371 31.6754 39.3161 31.5 39.9084 31.5H42.75C43.9926 31.5 45 32.5074 45 33.75C45 34.9926 43.9926 36 42.75 36H42M18 36L18.6479 38.5914C19.1487 40.5947 20.9486 42 23.0135 42H36.9865C39.0514 42 40.8513 40.5947 41.3521 38.5914L42 36M18 36H28.5M42 36H39.75">
                            </path>
                            <path stroke-linejoin="round" stroke-linecap="round" stroke-width="3" stroke="#FF8413" d="M34.512 22.5H34.4982"></path>
                            <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.25" stroke="#FF8413" d="M27.75 21.75L26.25 23.25"></path>
                        </svg>
                        <div>
                            <span>{{$sanpham->ten_sanpham}}</span>
                            <p>Số lượng</p>
                            <p>No mayo</p>
                        </div>
                        <div class="quantity">
                            <button>
                                <svg fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#47484b" d="M20 12L4 12"></path>
                                </svg>
                            </button>
                            <label>{{$so_luong}}</label>
                            <button>
                                <svg fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#47484b" d="M12 4V20M20 12H4"></path>
                                </svg>
                            </button>
                        </div>
                        <label class="price small">{{$sanpham->gia_sanpham}}.000 VND</label>
                    </div>
                </div>
            </div>

            <div class="card coupons">
                <h2 class="title">Phương thức thanh toán</h2>
                <div class="radio-inputs">
                    <label>
                        <input class="radio-input instagram" type="checkbox" value="1" name="" />
                        <span class="radio-tile instagram">
                            <span class="radio-icon">
                                <svg class="instagram" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bank" viewBox="0 0 16 16">
                                    <path d="m8 0 6.61 3h.89a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v7a.5.5 0 0 1 .485.38l.5 2a.498.498 0 0 1-.485.62H.5a.498.498 0 0 1-.485-.62l.5-2A.5.5 0 0 1 1 13V6H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 3h.89zM3.777 3h8.447L8 1zM2 6v7h1V6zm2 0v7h2.5V6zm3.5 0v7h1V6zm2 0v7H12V6zM13 6v7h1V6zm2-1V4H1v1zm-.39 9H1.39l-.25 1h13.72z" />
                                </svg>
                            </span>
                        </span>
                    </label>

                    <label>
                        <input class="radio-input twitter" type="checkbox" value="2" name="" />
                        <span class="radio-tile twitter">
                            <span class="radio-icon">
                                <svg class="twitter" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8m5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0" />
                                    <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195z" />
                                    <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083q.088-.517.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1z" />
                                    <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 6 6 0 0 1 3.13-1.567" />
                                </svg>
                            </span>
                        </span>
                    </label>

                    <label>
                        <input class="radio-input discord" type="checkbox" value="3" name="" />
                        <span class="radio-tile discord">
                            <span class="radio-icon">
                                    <svg class="discord" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-paypal" viewBox="0 0 16 16">
                                        <path d="M14.06 3.713c.12-1.071-.093-1.832-.702-2.526C12.628.356 11.312 0 9.626 0H4.734a.7.7 0 0 0-.691.59L2.005 13.509a.42.42 0 0 0 .415.486h2.756l-.202 1.28a.628.628 0 0 0 .62.726H8.14c.429 0 .793-.31.862-.731l.025-.13.48-3.043.03-.164.001-.007a.35.35 0 0 1 .348-.297h.38c1.266 0 2.425-.256 3.345-.91q.57-.403.993-1.005a4.94 4.94 0 0 0 .88-2.195c.242-1.246.13-2.356-.57-3.154a2.7 2.7 0 0 0-.76-.59l-.094-.061ZM6.543 8.82a.7.7 0 0 1 .321-.079H8.3c2.82 0 5.027-1.144 5.672-4.456l.003-.016q.326.186.548.438c.546.623.679 1.535.45 2.71-.272 1.397-.866 2.307-1.663 2.874-.802.57-1.842.815-3.043.815h-.38a.87.87 0 0 0-.863.734l-.03.164-.48 3.043-.024.13-.001.004a.35.35 0 0 1-.348.296H5.595a.106.106 0 0 1-.105-.123l.208-1.32z" />
                                    </svg>
                            </span>
                        </span>
                    </label>
                </div>

            </div>

            <div class="card checkout">
                <label class="title">Hóa đơn</label>
                <div class="details">
                    <span>Tổng thanh toán:</span>
                    <span>{{$tong_tien}}.000 VND</span>
                    <span>Giá sản phẩm:</span>
                    <span>{{$sanpham->gia_sanpham}}.000 VND</span>
                    <span>Số lượng: </span>
                    <span>{{$so_luong}}</span>
                </div>
                <div class="checkout--footer">
                    <label class="price">{{$tong_tien}}.000 VND</label>
                </div>
            </div>
        </div>

        <div>

            <form action="{{route('thanhtoansp')}}" enctype="multipart/form-data" method="POST" class="form" style="width: 500px;">
            @csrf
                <p class="title2">TG MUSIC 48 </p>
                <p class="message">Nhập thông tin người nhận hàng </p>

                <label>
                    <input type="text" name="users_id" value="{{$user->id}}" style="display: none;">
                    <input type="text" name="sanpham_id" value="{{$sanpham->id}}" style="display: none;">
                    <input type="text" name="soluongve" value="{{$so_luong}}" style="display: none;">
                    <input type="text" name="tongtien" value="{{$tong_tien}}" style="display: none;">
                    <input type="text" name="pttt" value="1" style="display: none;">
                    <input type="text" value="{{$profile->tennd}}" class="input">
                    <span>nhập tên người mua</span>
                </label>

                <label>
                    <input value="{{$profile->sdt}}" type="number" class="input">
                    <span>Số điện thoại</span>
                </label>
                <label>
                    <input placeholder="Vui lòng nhập địa chỉ" type="text" class="input">
                    <span>Địa chỉ nhận hàng</span>
                </label>
                <button class="submit">Xác nhận</button>
            </form>
        </div>
    </div>
</body>

</html>