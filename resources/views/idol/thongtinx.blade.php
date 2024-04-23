<style>
button {position: relative;padding: 12px 35px;background: #4c83fa;font-size: 17px;font-weight: 1000;color: #ffffff;border: 3px solid #4c83fa; border-radius: 8px; box-shadow: 0 0 0 #ffffff;transition: all 0.3s ease-in-out;cursor: pointer;}
.star-1 {position: absolute;top: 20%;left: 20%;width: 25px;height: auto;filter: drop-shadow(0 0 0 #4c83fa);z-index: -5;transition: all 1s cubic-bezier(0.05, 0.83, 0.43, 0.96);}
.star-2 {position: absolute;top: 45%;left: 45%;width: 15px;height: auto;filter: drop-shadow(0 0 0 #4c83fa);z-index: -5;transition: all 1scubic-bezier(0, 0.4, 0, 1.01);}
.star-3 {position: absolute;top: 40%;left: 40%;width: 5px;height: auto;filter: drop-shadow(0 0 0 #4c83fa);z-index: -5;transition: all 1s cubic-bezier(0, 0.4, 0, 1.01);}
.star-4 {position: absolute;top: 20%;left: 40%;width: 8px;height: auto;filter: drop-shadow(0 0 0 #4c83fa); z-index: -5;transition: all 0.8s cubic-bezier(0, 0.4, 0, 1.01);}
.star-5 {position: absolute;top: 25%;left: 45%;width: 15px;height: auto;filter: drop-shadow(0 0 0 #4c83fa);z-index: -5;transition: all 0.6s cubic-bezier(0, 0.4, 0, 1.01);}.star-6 {position: absolute;top: 5%;left: 50%;width: 5px;height: auto;filter: drop-shadow(0 0 0 #4c83fa);z-index: -5;transition: all 0.8s ease;}
button:hover {background: transparent;color: #4c83fa;box-shadow: 0 0 0px #4c83fa;}button:hover .star-1 {position: absolute;top: -80%;left: -30%;width: 25px;height: auto;filter: drop-shadow(0 0 0px #4c83fa);z-index: 2;}button:hover .star-2 {position: absolute;top: -0%;left: 10%;width: 15px;height: auto;filter: drop-shadow(0 0 0px #4c83fa);z-index: 2;}
button:hover .star-3 {position: absolute;top: 55%;left: 25%;width: 5px;height: auto;filter: drop-shadow(0 0 0px #4c83fa);z-index: 2;}
button:hover .star-4 {position: absolute; top: 30%;left: 80%;width: 8px;height: auto;filter: drop-shadow(0 0 0px #4c83fa);z-index: 2;}
button:hover .star-5 {position: absolute;top: 25%;left: 115%;width: 15px;height: auto; filter: drop-shadow(0 0 0px #4c83fa);z-index: 2;}button:hover .star-6 {position: absolute;top: 5%;left: 60%; width: 5px;height: auto;filter: drop-shadow(0 0 0px #4c83fa);z-index: 2;}
.fil0 {fill: #4c83fa;}.btn-conteiner {display: flex;justify-content: center;--color-text: #ffffff;--color-background: #ff135a;--color-outline: #ff145b80;--color-shadow: #00000080;}.btn-content {display: flex;align-items: center;padding: 5px 30px;text-decoration: none;font-family: 'Poppins', sans-serif;font-weight: 600;font-size: 30px;color: var(--color-text);background: var(--color-background);transition: 1s;border-radius: 100px;box-shadow: 0 0 0.2em 0 var(--color-background);}
.btn-content:hover, .btn-content:focus {transition: 0.5s;-webkit-animation: btn-content 1s;animation: btn-content 1s;outline: 0.1em solid transparent;outline-offset: 0.2em;box-shadow: 0 0 0.4em 0 var(--color-background);}.btn-content .icon-arrow {transition: 0.5s;margin-right: 0px;transform: scale(0.6);}.btn-content:hover .icon-arrow {transition: 0.5s;margin-right: 25px;}.icon-arrow {width: 20px;margin-left: 15px;position: relative;top: 6%;}/* SVG */#arrow-icon-one {transition: 0.4s;transform: translateX(-60%);}
#arrow-icon-two {transition: 0.5s;transform: translateX(-30%);}.btn-content:hover #arrow-icon-three {animation: color_anim 1s infinite 0.2s;}.btn-content:hover #arrow-icon-one {transform: translateX(0%);animation: color_anim 1s infinite 0.6s;}.btn-content:hover #arrow-icon-two {transform: translateX(0%);animation: color_anim 1s infinite 0.4s;}
/* SVG animations */@keyframes color_anim {0% {fill: white;}50% {fill: var(--color-background);}100% {fill: white;}}
/* Button animations */@-webkit-keyframes btn-content {0% {outline: 0.2em solid var(--color-background);outline-offset: 0;}}@keyframes btn-content {0% {outline: 0.2em solid var(--color-background);outline-offset: 0;}}

.btn {--color: #fd9843;position: relative;display: flex;justify-content: center;align-items: center;transition: all .5s;border: none;background-color: transparent;}
.btn div {letter-spacing: 2px;font-weight: bold;background: var(--color);border-radius: 2rem;color: white;padding: 1rem;}.btn::before {content: '';z-index: -1;background-color: var(--color);border: 2px solid white;border-radius: 2rem;width: 110%;height: 100%;position: absolute;transform: rotate(10deg);transition: .5s;opacity: 0.2;}.btn:hover {cursor: pointer;filter: brightness(1.2);transform: scale(1.1);}.btn:hover::before {transform: rotate(0deg);opacity: 1;}.btn svg {transform: translateX(-200%);transition: .5s;width: 0;opacity: 0;}.btn:hover svg {width: 25px;transform: translateX(0%);opacity: 1;}.btn:active {filter: brightness(1.4);}

.btn2 {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 17rem;
  overflow: hidden;
  margin-top: 20px;
  height: 3rem;
  background-size: 300% 300%;
  backdrop-filter: blur(1rem);
  border-radius: 5rem;
  transition: 0.5s;
  animation: gradient_301 5s ease infinite;
  border: double 4px transparent;
  background-image: linear-gradient(#212121, #212121),  linear-gradient(137.48deg, #ffdb3b 10%,#FE53BB 45%, #8F51EA 67%, #0044ff 87%);
  background-origin: border-box;
  background-clip: content-box, border-box;
}

#container-stars {
  position: absolute;
  z-index: -1;
  width: 100%;
  height: 100%;
  overflow: hidden;
  transition: 0.5s;
  backdrop-filter: blur(1rem);
  border-radius: 5rem;
}

strong {
  z-index: 2;
  font-family: 'Avalors Personal Use';
  font-size: 12px;
  letter-spacing: 5px;
  color: #FFFFFF;
  text-shadow: 0 0 4px white;
}

#glow {
  position: absolute;
  display: flex;
  width: 12rem;
}

.circle {
  width: 100%;
  height: 30px;
  filter: blur(2rem);
  animation: pulse_3011 4s infinite;
  z-index: -1;
}

.circle:nth-of-type(1) {
  background: rgba(254, 83, 186, 0.636);
}

.circle:nth-of-type(2) {
  background: rgba(142, 81, 234, 0.704);
}

.btn2:hover #container-stars {z-index: 1;background-color: #212121;}.btn2:hover {transform: scale(1.1)}.btn2:active {border: double 4px #FE53BB;background-origin: border-box;background-clip: content-box, border-box;animation: none;}.btn2:active .circle {background: #FE53BB;}
#stars {position: relative;background: transparent;width: 200rem;height: 200rem;}
#stars::after {content: "";position: absolute;top: -10rem;left: -100rem;width: 100%;height: 100%;animation: animStarRotate 90s linear infinite;}
#stars::after {background-image: radial-gradient(#ffffff 1px, transparent 1%);background-size: 50px 50px;}
#stars::before {content: "";position: absolute;top: 0;left: -50%;width: 170%;height: 500%;animation: animStar 60s linear infinite;}#stars::before {background-image: radial-gradient(#ffffff 1px, transparent 1%);background-size: 50px 50px;opacity: 0.5;}
@keyframes animStar {from {transform: translateY(0);}to {transform: translateY(-135rem);}}@keyframes animStarRotate {from {transform: rotate(360deg);}to {transform: rotate(0);}}
@keyframes gradient_301 {0% {background-position: 0% 50%;}50% {background-position: 100% 50%;}100% {background-position: 0% 50%;}}@keyframes pulse_3011 {0% {transform: scale(0.75);box-shadow: 0 0 0 0 rgba(0, 0, 0, 0.7);}70% {transform: scale(1);box-shadow: 0 0 0 10px rgba(0, 0, 0, 0);}100% {transform: scale(0.75);box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);}}

.cssbuttons-io-button {
  background: #a370f0;
  color: white;
  font-family: inherit;
  padding: 0.35em;
  padding-left: 1.2em;
  font-size: 17px;
  font-weight: 500;
  border-radius: 0.9em;
  border: none;
  letter-spacing: 0.05em;
  display: flex;
  align-items: center;
  box-shadow: inset 0 0 1.6em -0.6em #714da6;
  overflow: hidden;
  position: relative;
  height: 2.8em;
  padding-right: 3.3em;
  cursor: pointer;
}

.cssbuttons-io-button .icon {
  background: white;
  margin-left: 1em;
  position: absolute;
  display: flex;
  align-items: center;
  justify-content: center;
  height: 2.2em;
  width: 2.2em;
  border-radius: 0.7em;
  box-shadow: 0.1em 0.1em 0.6em 0.2em #7b52b9;
  right: 0.3em;
  transition: all 0.3s;
}

.cssbuttons-io-button:hover .icon {
  width: calc(100% - 0.6em);
}

.cssbuttons-io-button .icon svg {
  width: 1.1em;
  transition: transform 0.3s;
  color: #7b52b9;
}

.cssbuttons-io-button:hover .icon svg {
  transform: translateX(0.1em);
}

.cssbuttons-io-button:active .icon {
  transform: scale(0.95);
}


</style>

<div style="display: flex; justify-content: center; align-items: center;">
    @foreach ($users as $us)
    <div>
        <div style="display: flex; gap: 20px;">
            @foreach ($idol as $id)
            <div style="width: 500px;">
                <img style="width: 400px;" src="{{asset('uploads/'.$id->anh)}}" alt="">
                <div style="margin-top: 20px; text-align: center;">
                
                <button>
                <a style="text-decoration: none;" href="{{route('suaanhid', $id->id)}}">Thay ảnh đại diện</a>
  <div class="star-1">
    <svg
      xmlns="http://www.w3.org/2000/svg"
      xml:space="preserve"
      version="1.1"
      style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
      viewBox="0 0 784.11 815.53"
      xmlns:xlink="http://www.w3.org/1999/xlink"
    >
      <defs></defs>
      <g id="Layer_x0020_1">
        <metadata id="CorelCorpID_0Corel-Layer"></metadata>
        <path
          class="fil0"
          d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z"
        ></path>
      </g>
    </svg>
  </div>
  <div class="star-2">
    <svg
      xmlns="http://www.w3.org/2000/svg"
      xml:space="preserve"
      version="1.1"
      style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
      viewBox="0 0 784.11 815.53"
      xmlns:xlink="http://www.w3.org/1999/xlink"
    >
      <defs></defs>
      <g id="Layer_x0020_1">
        <metadata id="CorelCorpID_0Corel-Layer"></metadata>
        <path
          class="fil0"
          d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z"
        ></path>
      </g>
    </svg>
  </div>
  <div class="star-3">
    <svg
      xmlns="http://www.w3.org/2000/svg"
      xml:space="preserve"
      version="1.1"
      style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
      viewBox="0 0 784.11 815.53"
      xmlns:xlink="http://www.w3.org/1999/xlink"
    >
      <defs></defs>
      <g id="Layer_x0020_1">
        <metadata id="CorelCorpID_0Corel-Layer"></metadata>
        <path
          class="fil0"
          d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z"
        ></path>
      </g>
    </svg>
  </div>
  <div class="star-4">
    <svg
      xmlns="http://www.w3.org/2000/svg"
      xml:space="preserve"
      version="1.1"
      style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
      viewBox="0 0 784.11 815.53"
      xmlns:xlink="http://www.w3.org/1999/xlink"
    >
      <defs></defs>
      <g id="Layer_x0020_1">
        <metadata id="CorelCorpID_0Corel-Layer"></metadata>
        <path
          class="fil0"
          d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z"
        ></path>
      </g>
    </svg>
  </div>
  <div class="star-5">
    <svg
      xmlns="http://www.w3.org/2000/svg"
      xml:space="preserve"
      version="1.1"
      style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
      viewBox="0 0 784.11 815.53"
      xmlns:xlink="http://www.w3.org/1999/xlink"
    >
      <defs></defs>
      <g id="Layer_x0020_1">
        <metadata id="CorelCorpID_0Corel-Layer"></metadata>
        <path
          class="fil0"
          d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z"
        ></path>
      </g>
    </svg>
  </div>
  <div class="star-6">
    <svg
      xmlns="http://www.w3.org/2000/svg"
      xml:space="preserve"
      version="1.1"
      style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
      viewBox="0 0 784.11 815.53"
      xmlns:xlink="http://www.w3.org/1999/xlink"
    >
      <defs></defs>
      <g id="Layer_x0020_1">
        <metadata id="CorelCorpID_0Corel-Layer"></metadata>
        <path
          class="fil0"
          d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z"
        ></path>
      </g>
    </svg>
  </div>
</button>


<a href="" class="cssbuttons-io-button" style="margin-top: 20px; text-decoration: none;">
  Quay lại trang chủ
  <div class="icon">
    <svg
      height="24"
      width="24"
      viewBox="0 0 24 24"
      xmlns="http://www.w3.org/2000/svg"
    >
      <path d="M0 0h24v24H0z" fill="none"></path>
      <path
        d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"
        fill="currentColor"
      ></path>
    </svg>
  </div>
</a>


                    
                </div>


            </div>
            <div style="width: 500px;">

                <h1>Tên người dùng: {{$id->tenid}}</h1>
                @foreach ($nhomnhac as $nn)
                <h3 class="name">Nhóm nhạc: {{$nn->tennn}}</h3>
                @endforeach
                <h3>Tuổi người dùng: {{$id->tuoi}}</h3>
                <h3>Email: {{$us->email}}</h3>
                <h3>Chiều cao: {{$id->chieucao}}CM</h3>
                <h3>Cân năng: {{$id->cannang}}</h3>
                <h3>Địa chỉ: {{$id->qquan}}</h3>
                <h3>Giới tính: {{$id->gioitinh == 0 ? 'Nam' : 'Nữ'}}</h3>
                <div style="text-align: left;">
                    <div style="display: inline-block;width: 24px;height: 24px;background: #ddd;margin: 0 5px;"><img style="width: 25px;height: 25px;" src="https://tse1.mm.bing.net/th?id=OIP.0hjuzKoA33K1Ml_znxAaOQHaHa&pid=Api&P=0&h=180" alt=""></div>
                    <div style="display: inline-block;width: 24px;height: 24px;background: #ddd;margin: 0 5px;"><img style="width: 25px;height: 25px;" src="https://tse4.mm.bing.net/th?id=OIP.0ZvKtmqALnKw74ofDZQKTQHaHa&pid=Api&P=0&h=180" alt=""></div>
                    <div style="display: inline-block;width: 24px;height: 24px;background: #ddd;margin: 0 5px;"><img style="width: 25px;height: 25px;" src="https://h5.48.cn/pocket48/image/logo.png" alt=""></div>
                </div>
                
                <div style="">

                <div class="btn-conteiner">
                    <a class="btn-content" href="{{route('logout')}}">
                        <span class="btn-title">LOGOUT</span>
                        <span class="icon-arrow">
                        <svg width="66px" height="43px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <path id="arrow-icon-one" d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                            <path id="arrow-icon-two" d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                            <path id="arrow-icon-three" d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z" fill="#FFFFFF"></path>
                            </g>
                        </svg>
                        </span> 
                    </a>
                </div>


                <div>
                <a href="{{route('suattidol', $id->id)}}" class="btn2" style="text-decoration: none;">
                <strong>Thay đổi thông tin của bạn</strong>
                <div id="container-stars">
                    <div id="stars"></div>
                </div>

                <div id="glow">
                    <div class="circle"></div>
                    <div class="circle"></div>
                </div>
                </a>
                </div>


                </div>
                <div style="margin-top: 50px; display: flex; justify-content: center; align-items: center;">
                    @foreach ($idol as $id)
                    <div style="border: 1px solid; width: 300px; text-align: center; background: blue;">

                    <div class="btn">
                        <div><a href="/anhchitiet/{{$id->id}}/user/{{$us->id}}" style="text-decoration: none; color: white;">Thêm ảnh mới của bạn</a></div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" viewBox="0 0 24 24" fill="none">
                        <path d="M11.6801 14.62L14.2401 12.06L11.6801 9.5" stroke="white" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M4 12.0601H14.17" stroke="white" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M12 4C16.42 4 20 7 20 12C20 17 16.42 20 12 20" stroke="white" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>

                        
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @endforeach
</div>