<style>
    .card {
        width: 190px;
        height: 254px;
        border-radius: 20px;
        background: #f5f5f5;
        position: relative;
        padding: 1.8rem;
        border: 2px solid #c3c6ce;
        transition: 0.5s ease-out;
        overflow: visible;
    }

    .card-details {
        color: black;
        height: 100%;
        gap: .5em;
        display: grid;
        place-content: center;
    }

    .card-button {
        transform: translate(-50%, 125%);
        width: 60%;
        border-radius: 1rem;
        border: none;
        background-color: #008bf8;
        color: #fff;
        font-size: 1rem;
        padding: .5rem 1rem;
        position: absolute;
        text-decoration: none;
        text-align: center;
        left: 50%;
        bottom: 0;
        opacity: 0;
        transition: 0.3s ease-out;
    }

    .text-body {
        color: rgb(134, 134, 134);
    }

    /*Text*/
    .text-title {
        font-size: 1.5em;
        font-weight: bold;
    }

    /*Hover*/
    .card:hover {
        border-color: #008bf8;
        box-shadow: 0 4px 18px 0 rgba(0, 0, 0, 0.25);
    }

    .card:hover .card-button {
        transform: translate(-50%, 50%);
        opacity: 1;
    }

    body {
        height: 100vh;
        margin: 0;
        display: grid;
        place-items: center;
        background-color: #f2f8ff;
    }

    .wrapper {
        width: 485px;
    }

    #preview {
        width: 100%;
        box-sizing: border-box;
        border: 15px solid #d8dee6;
        margin-bottom: 10px;
    }

    .thumbnails {
        width: 100%;
        display: flex;
        gap: 15px;
        justify-content: center;
    }

    .thumbnail {
        width: 100px;
        height: 130px;
        cursor: pointer;
        box-sizing: border-box;
    }

    .thumbnail.active {
        border: 5px solid #d8dee6;
    }

    .thumbnail:hover {
        transform: scale(1.1);
    }

    /* */
    .action_has {
        --color: 0 0% 60%;
        --color-has: 211deg 100% 48%;
        --sz: 1rem;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        height: calc(var(--sz) * 2.5);
        width: calc(var(--sz) * 2.5);
        padding: 0.4rem 0.5rem;
        border-radius: 0.375rem;
        border: 0.0625rem solid hsl(var(--color));
    }

    .has_saved:hover {
        border-color: hsl(var(--color-has));
    }

    .has_liked:hover svg,
    .has_saved:hover svg {
        color: hsl(var(--color-has));
    }

    .has_liked svg,
    .has_saved svg {
        overflow: visible;
        height: calc(var(--sz) * 1.75);
        width: calc(var(--sz) * 1.75);
        --ease: cubic-bezier(0.5, 0, 0.25, 1);
        --zoom-from: 1.75;
        --zoom-via: 0.75;
        --zoom-to: 1;
        --duration: 1s;
    }

    .has_saved:hover path[data-path="box"] {
        transition: all 0.3s var(--ease);
        animation: has-saved var(--duration) var(--ease) forwards;
        fill: hsl(var(--color-has) / 0.35);
    }

    .has_saved:hover path[data-path="line-top"] {
        animation: has-saved-line-top var(--duration) var(--ease) forwards;
    }

    .has_saved:hover path[data-path="line-bottom"] {
        animation: has-saved-line-bottom var(--duration) var(--ease) forwards,
            has-saved-line-bottom-2 calc(var(--duration) * 1) var(--ease) calc(var(--duration) * 0.75);
    }

    @keyframes has-saved-line-top {
        33.333% {
            transform: rotate(0deg) translate(1px, 2px) scale(var(--zoom-from));
            d: path("M 3 5 L 3 8 L 3 8");
        }

        66.666% {
            transform: rotate(20deg) translate(2px, -2px) scale(var(--zoom-via));
        }

        99.999% {
            transform: rotate(0deg) translate(0px, 0px) scale(var(--zoom-to));
        }
    }

    @keyframes has-saved-line-bottom {
        33.333% {
            transform: rotate(0deg) translate(1px, 2px) scale(var(--zoom-from));
            d: path("M 17 20 L 17 13 L 7 13 L 7 20");
        }

        66.666% {
            transform: rotate(20deg) translate(2px, -2px) scale(var(--zoom-via));
        }

        99.999% {
            transform: rotate(0deg) translate(0px, 0px) scale(var(--zoom-to));
            d: path("M 17 21 L 17 21 L 7 21 L 7 21");
        }
    }

    @keyframes has-saved-line-bottom-2 {
        from {
            d: path("M 17 21 L 17 21 L 7 21 L 7 21");
        }

        to {
            transform: rotate(0deg) translate(0px, 0px) scale(var(--zoom-to));
            d: path("M 17 20 L 17 13 L 7 13 L 7 20");
            fill: white;
        }
    }

    @keyframes has-saved {
        33.333% {
            transform: rotate(0deg) translate(1px, 2px) scale(var(--zoom-from));
        }

        66.666% {
            transform: rotate(20deg) translate(2px, -2px) scale(var(--zoom-via));
        }

        99.999% {
            transform: rotate(0deg) translate(0px, 0px) scale(var(--zoom-to));
        }
    }

    /* */
    .Btn {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: flex-start;
        width: 100px;
        height: 40px;
        border: none;
        padding: 0px 20px;
        background-color: black;
        color: white;
        font-weight: 700;
        cursor: pointer;
        border-radius: 10px;
        box-shadow: 5px 5px 0px black;
        transition-duration: 0.3s;
    }

    .svg {
        width: 13px;
        position: absolute;
        right: 0;
        margin-right: 20px;
        fill: white;
        transition-duration: 0.3s;
    }

    .Btn:hover {
        color: transparent;
    }

    .Btn:hover svg {
        right: 43%;
        margin: 0;
        padding: 0;
        border: none;
        transition-duration: 0.3s;
    }

    .Btn:active {
        transform: translate(3px, 3px);
        transition-duration: 0.3s;
        box-shadow: 2px 2px 0px white;
    }

    /**/
    button {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 1em;
        border: 0px solid transparent;
        background-color: rgba(100, 77, 237, 0.08);
        border-radius: 1.25em;
        transition: all 0.2s linear;
    }

    button:hover {
        box-shadow: 3.4px 2.5px 4.9px rgba(0, 0, 0, 0.025),
            8.6px 6.3px 12.4px rgba(0, 0, 0, 0.035),
            17.5px 12.8px 25.3px rgba(0, 0, 0, 0.045),
            36.1px 26.3px 52.2px rgba(0, 0, 0, 0.055),
            99px 72px 143px rgba(0, 0, 0, 0.08);
    }

    .tooltip {
        position: relative;
        display: inline-block;
    }

    .tooltip .tooltiptext {
        visibility: hidden;
        width: 4em;
        background-color: rgba(0, 0, 0, 0.253);
        color: #fff;
        text-align: center;
        border-radius: 6px;
        padding: 5px 0;
        position: absolute;
        z-index: 1;
        top: 25%;
        left: 110%;
    }

    .tooltip .tooltiptext::after {
        content: "";
        position: absolute;
        top: 50%;
        right: 100%;
        margin-top: -5px;
        border-width: 5px;
        border-style: solid;
        border-color: transparent rgba(0, 0, 0, 0.253) transparent transparent;
    }

    .tooltip:hover .tooltiptext {
        visibility: visible;
    }

    /* */
    .cta {
        display: flex;
        padding: 11px 33px;
        text-decoration: none;
        font-family: 'Poppins', sans-serif;
        font-size: 25px;
        color: white;
        height: 40px;
        background: #6225E6;
        transition: 1s;
        box-shadow: 6px 6px 0 black;
        transform: skewX(-15deg);
        border: none;
    }

    .cta:focus {
        outline: none;
    }

    .cta:hover {
        transition: 0.5s;
        box-shadow: 10px 10px 0 #FBC638;
    }

    .cta .second {
        transition: 0.5s;
        margin-right: 0px;
    }

    .cta:hover .second {
        transition: 0.5s;
        margin-right: 45px;
    }

    .span {
        transform: skewX(15deg)
    }

    .second {
        width: 20px;
        margin-left: 30px;
        position: relative;
        top: 12%;
    }

    .one {
        transition: 0.4s;
        transform: translateX(-60%);
    }

    .two {
        transition: 0.5s;
        transform: translateX(-30%);
    }

    .cta:hover .three {
        animation: color_anim 1s infinite 0.2s;
    }

    .cta:hover .one {
        transform: translateX(0%);
        animation: color_anim 1s infinite 0.6s;
    }

    .cta:hover .two {
        transform: translateX(0%);
        animation: color_anim 1s infinite 0.4s;
    }

    @keyframes color_anim {
        0% {
            fill: white;
        }

        50% {
            fill: #FBC638;
        }

        100% {
            fill: white;
        }
    }
</style>
<div style="display: flex; gap: 20px;">
    <div style="width: 50%;">
        <div>
            <div style="display: flex; gap: 20px;">
                <a href="{{ route('viewanhphu', $sanpham->id) }}" class="action_has has_saved" aria-label="save" type="button">
                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="20" height="20" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" fill="none">
                        <path d="m19,21H5c-1.1,0-2-.9-2-2V5c0-1.1.9-2,2-2h11l5,5v11c0,1.1-.9,2-2,2Z" stroke-linejoin="round" stroke-linecap="round" data-path="box"></path>
                        <path d="M7 3L7 8L15 8" stroke-linejoin="round" stroke-linecap="round" data-path="line-top"></path>
                        <path d="M17 20L17 13L7 13L7 20" stroke-linejoin="round" stroke-linecap="round" data-path="line-bottom"></path>
                    </svg>
                </a>
                <a href="{{ route('danhsachsp', $danhmuc->id) }}" class="cta" style="text-decoration: none;"><span class="span">Quay lại danh sách sản phẩm</span>
                    <span class="second">
                        <svg width="50px" height="20px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <path class="one" d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                                <path class="two" d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                                <path class="three" d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z" fill="#FFFFFF"></path>
                            </g>
                        </svg>
                    </span> </a>
            </div>
            <section class="wrapper">
                <img id="preview" src="{{asset('uploads/'.$sanpham->hinh_anh)}}" style="width: 500px; height: 550px;">
                <div class="thumbnails">
                    <img class="thumbnail active" src="{{asset('uploads/'.$sanpham->hinh_anh)}}">
                    @foreach($anhsp as $asp)
                    @php
                    $anh_phu = json_decode($asp->anh_phu);
                    @endphp
                    @foreach($anh_phu as $anh_phu)
                    <img class="thumbnail" src="{{asset('uploads/'.$anh_phu)}}">
                    @endforeach
                    @endforeach
                </div>
            </section>
        </div>
    </div>
    <div style="display: flex; justify-content: center; align-items: center; width: 50%;">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px;">
            @foreach($anhsp as $asp)
            @php
            $anh_phu = json_decode($asp->anh_phu);
            @endphp
            @foreach($anh_phu as $anh_phu)
            <div class="card">
                <div class="card-details">
                    <img src="{{asset('uploads/'.$anh_phu)}}" alt="" width="200px">
                </div>
            </div>
            @endforeach
            <div class="card">
                <div class="card-details">
                    <form action="{{route('xoamemsp', $asp->id)}}" method="POST" style="display: flex; gap: 20px;">
                        <a href="{{route('suaanhsp', $asp->id)}}" class="Btn" style="text-decoration: none;">Sửa <svg class="svg" viewBox="0 0 512 512">
                                <path d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"></path>
                            </svg></a>
                        @csrf
                        @method('PUT')
                        <div class="form-group" style="display: none;">
                            <input type="text" name="xoa_mem" class="form-control" value="1">
                        </div>
                        <button type="submit" class="tooltip"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" height="25" width="25">
                                <path fill="#6361D9" d="M8.78842 5.03866C8.86656 4.96052 8.97254 4.91663 9.08305 4.91663H11.4164C11.5269 4.91663 11.6329 4.96052 11.711 5.03866C11.7892 5.11681 11.833 5.22279 11.833 5.33329V5.74939H8.66638V5.33329C8.66638 5.22279 8.71028 5.11681 8.78842 5.03866ZM7.16638 5.74939V5.33329C7.16638 4.82496 7.36832 4.33745 7.72776 3.978C8.08721 3.61856 8.57472 3.41663 9.08305 3.41663H11.4164C11.9247 3.41663 12.4122 3.61856 12.7717 3.978C13.1311 4.33745 13.333 4.82496 13.333 5.33329V5.74939H15.5C15.9142 5.74939 16.25 6.08518 16.25 6.49939C16.25 6.9136 15.9142 7.24939 15.5 7.24939H15.0105L14.2492 14.7095C14.2382 15.2023 14.0377 15.6726 13.6883 16.0219C13.3289 16.3814 12.8414 16.5833 12.333 16.5833H8.16638C7.65805 16.5833 7.17054 16.3814 6.81109 16.0219C6.46176 15.6726 6.2612 15.2023 6.25019 14.7095L5.48896 7.24939H5C4.58579 7.24939 4.25 6.9136 4.25 6.49939C4.25 6.08518 4.58579 5.74939 5 5.74939H6.16667H7.16638ZM7.91638 7.24996H12.583H13.5026L12.7536 14.5905C12.751 14.6158 12.7497 14.6412 12.7497 14.6666C12.7497 14.7771 12.7058 14.8831 12.6277 14.9613C12.5495 15.0394 12.4436 15.0833 12.333 15.0833H8.16638C8.05588 15.0833 7.94989 15.0394 7.87175 14.9613C7.79361 14.8831 7.74972 14.7771 7.74972 14.6666C7.74972 14.6412 7.74842 14.6158 7.74584 14.5905L6.99681 7.24996H7.91638Z" clip-rule="evenodd" fill-rule="evenodd"></path>
                            </svg>
                            <span class="tooltiptext">Cho vào thùng rác</span></button>
                    </form>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</div>
<script>
    const $thumbnails = document.querySelectorAll('.thumbnail');
    const $preview = document.getElementById('preview');

    $thumbnails.forEach(($item) => {
        $item.addEventListener(
            'click',
            (event) => {
                $thumbnails.forEach((i) => {
                    i.classList.remove('active');
                });
                $item.classList.add('active');
                $preview.src = $item.src;
            },
        );
    });
</script>