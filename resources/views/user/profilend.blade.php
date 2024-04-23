<style>
button,button::after {padding: 10px 50px;font-size: 20px;border: none;border-radius: 5px;color: black;background-color: transparent;position: relative;}
button::after {--move1: inset(50% 50% 50% 50%);--move2: inset(31% 0 40% 0);--move3: inset(39% 0 15% 0);--move4: inset(45% 0 40% 0);--move5: inset(45% 0 6% 0);--move6: inset(14% 0 61% 0);clip-path: var(--move1);content: 'Thay ảnh đại diện';position: absolute;top: 0;left: 0;right: 0;bottom: 0;display: block;}
button:hover::after {animation: glitch_4011 1s;text-shadow: 10 10px 10px black;animation-timing-function: steps(2, end);text-shadow: -3px -3px 0px #1df2f0, 3px 3px 0px #E94BE8;background-color: transparent;border: 3px solid rgb(0, 255, 213);}button:hover {text-shadow: -1px -1px 0px #1df2f0, 1px 1px 0px #E94BE8;}button:hover {background-color: transparent;border: 1px solid rgb(0, 255, 213);box-shadow: 0px 10px 10px -10px rgb(0, 255, 213);}
@keyframes glitch_4011 {0% {clip-path: var(--move1);transform: translate(0px, -10px);}10% {clip-path: var(--move2);transform: translate(-10px, 10px);}20% {clip-path: var(--move3);transform: translate(10px, 0px);}30% {clip-path: var(--move4);transform: translate(-10px, 10px);}40% {clip-path: var(--move5);transform: translate(10px, -10px);}50% {clip-path: var(--move6);transform: translate(-10px, 10px);}60% {clip-path: var(--move1);transform: translate(10px, -10px);}70% {clip-path: var(--move3);transform: translate(-10px, 10px);}80% {clip-path: var(--move2);transform: translate(10px, -10px);}90% {clip-path: var(--move4);transform: translate(-10px, 10px);}100% {clip-path: var(--move1);transform: translate(0);}}

.button {position: relative;padding: 10px 22px;border-radius: 6px;border: none;width: 400px;color: #fff;cursor: pointer;background-image: linear-gradient(-60deg, #ff5858 0%, #f09819 100%);transition: all 0.2s ease;}.button:active {transform: scale(0.96);}
.button:before,.button:after {position: absolute;content: "";width: 150%;left: 50%;height: 100%;transform: translateX(-50%);z-index: -1000;background-repeat: no-repeat;}
.button:hover:before {top: -70%;background-image: radial-gradient(circle, #a89215 20%, transparent 20%),radial-gradient(circle, transparent 20%, #13a5be 20%, transparent 30%),radial-gradient(circle, #a3b82d 20%, transparent 20%),radial-gradient(circle, #590cbe 20%, transparent 20%),radial-gradient(circle, transparent 10%, #bd1717 15%, transparent 20%),radial-gradient(circle, #2a7ce8 20%, transparent 20%),radial-gradient(circle, #30e82a 20%, transparent 20%),radial-gradient(circle, #e92c75 20%, transparent 20%),radial-gradient(circle, #914fe7 20%, transparent 20%);background-size: 10% 10%, 20% 20%, 15% 15%, 20% 20%, 18% 18%, 10% 10%, 15% 15%,10% 10%, 18% 18%;background-position: 50% 120%;animation: greentopBubbles 0.6s ease;}
@keyframes greentopBubbles {0% {background-position: 5% 90%, 10% 90%, 10% 90%, 15% 90%, 25% 90%, 25% 90%,40% 90%, 55% 90%, 70% 90%;}
50% {background-position: 0% 80%, 0% 20%, 10% 40%, 20% 0%, 30% 30%, 22% 50%,50% 50%, 65% 20%, 90% 30%;}
100% {background-position: 0% 70%, 0% 10%, 10% 30%, 20% -10%, 30% 20%, 22% 40%,50% 40%, 65% 10%, 90% 20%;background-size: 0% 0%, 0% 0%, 0% 0%, 0% 0%, 0% 0%, 0% 0%;}}
.button:hover::after {bottom: -70%;background-image: radial-gradient(circle, #ff93db 20%, transparent 20%),radial-gradient(circle, #2ae8df 20%, transparent 20%),radial-gradient(circle, transparent 10%, #71ffbd 15%, transparent 20%),radial-gradient(circle, #2a9ce8 20%, transparent 20%),radial-gradient(circle, #7814fc 20%, transparent 20%),radial-gradient(circle, #73e4f8 20%, transparent 20%),radial-gradient(circle, #f8d3a9 20%, transparent 20%);background-size: 15% 15%, 20% 20%, 18% 18%, 20% 20%, 15% 15%, 20% 20%, 18% 18%;background-position: 50% 0%;animation: greenbottomBubbles 0.6s ease;}
@keyframes greenbottomBubbles {0% {background-position: 10% -10%, 30% 10%, 55% -10%, 70% -10%, 85% -10%,70% -10%, 70% 0%;}50% {background-position: 0% 80%, 20% 80%, 45% 60%, 60% 100%, 75% 70%, 95% 60%,105% 0%;}100% {background-position: 0% 90%, 20% 90%, 45% 70%, 60% 110%, 75% 80%, 95% 70%,110% 10%;background-size: 0% 0%, 0% 0%, 0% 0%, 0% 0%, 0% 0%, 0% 0%;}}
.box {--clr-shadow__border: #d9a1ff;--clr-text: #F6F4EB;--clr-space: #120e1e;--clr-space-gr: #271950;--clr-star: #E9F8F9;--size: 3rem;position: relative;outline: 1px solid var(--clr-shadow__border);}
.button2 {font-weight: 600;font-size: 1.5rem;letter-spacing: 0.2rem;background: transparent;padding: calc(var(--size) / 3) var(--size);border: none;cursor: pointer;color: var(--clr-text);text-shadow: 2px 0px var(--clr-shadow__border), 0px 2px var(--clr-shadow__border),-2px 0px var(--clr-shadow__border), 0px -2px var(--clr-shadow__border);}
.space {width: 100%;height: 100%;bottom: 0%;gap: 1.5rem;transition: 0.5s ease-in-out;z-index: -1;opacity: 0;overflow: hidden;position: absolute;display: flex;background: linear-gradient( 160deg, var(--clr-space), var(--clr-space-gr));}.box:hover .space {opacity: 1;}
.star {height: 4rem;width: 0.3rem;transition: 0.5s;border-radius: 50px;clip-path: polygon(50% 0%, 100% 100%, 0% 100%);position: relative;background-color: var(--clr-star);animation: space-animation calc(0.1s * var(--i)) linear infinite;}
@keyframes space-animation {0% {transform: rotate(-30deg) translateY(calc(-52% * var(--i)));}100% {transform: rotate(-30deg) translateY(calc(52% * var(--i)));}}
.btn2 {color: purple;text-transform: uppercase;text-decoration: none;border: 2px solid purple;padding: 10px 20px;font-size: 17px;font-weight: bold;background: transparent;position: relative;transition: all 1s;overflow: hidden;}.btn2:hover {color: white;}
.btn2::before {content: '';position: absolute;height: 100%;width: 0%;top: 0;left: -40px;transform: skewX(45deg);background-color: purple;z-index: -1;transition: all 1s;}.btn2:hover::before {width: 160%;}

</style>

<div style="display: flex; justify-content: center; align-items: center;">
  @foreach ($users as $us)
  <div>
    <div style="display: flex; gap: 20px;">
      @foreach ($profile as $pf)
      <div style="width: 500px;">
        <img style="width: 400px;" src="{{asset('uploads/'.$pf->anhnd)}}" alt="">
        <button style="width: 400px; margin-top: 20px;">
          <a style="text-decoration: none;" href="/suaanhnd/{{$pf->id}}/user/{{$us->id}}">Thay ảnh đại diện</a>
        </button>
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
        <div style="margin-top: 20px; width: 400px;">
          <a style="text-decoration: none; width: 400px;" href="{{route('logout')}}" class="button">Đăng suất</a>
        </div>

        <div class="box" style="margin-top: 20px;">
          <a style="text-decoration: none;" href="/suattnd/{{$pf->id}}/user/{{$us->id}}" class="button2">Thay đổi thông tin tài khoản</a>
          <div class="space">
            <span style="--i: 31" class="star"></span>
            <span style="--i: 12" class="star"></span>
            <span style="--i: 57" class="star"></span>
            <span style="--i: 93" class="star"></span>
            <span style="--i: 23" class="star"></span>
            <span style="--i: 70" class="star"></span>
            <span style="--i: 6" class="star"></span>
          </div>
        </div>

        <div style="margin-top: 20px;">
          <a style="text-decoration: none;" href="{{route('views', $us->id)}}" class="btn2">
            quay lại trang chủ
          </a>
        </div>

      </div>
      @endforeach
    </div>
  </div>
  @endforeach
</div>