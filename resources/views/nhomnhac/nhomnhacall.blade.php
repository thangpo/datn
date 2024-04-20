<style>
.scale-in-ver-center {-webkit-animation: scale-in-ver-center 1s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;animation: scale-in-ver-center 1s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;}
@-webkit-keyframes scale-in-ver-center {0% {-webkit-transform: scaleY(0);transform: scaleY(0);opacity: 1;}100% {-webkit-transform: scaleY(1);transform: scaleY(1);opacity: 1;}}
@keyframes scale-in-ver-center {0% {-webkit-transform: scaleY(0);transform: scaleY(0);opacity: 1;}100% {-webkit-transform: scaleY(1);transform: scaleY(1);opacity: 1;}}
.tilt-in-top-1 {-webkit-animation: tilt-in-top-1 1s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;animation: tilt-in-top-1 1s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;}
@-webkit-keyframes tilt-in-top-1 {0% {-webkit-transform: rotateY(30deg) translateY(-300px) skewY(-30deg);transform: rotateY(30deg) translateY(-300px) skewY(-30deg);opacity: 0;}100% {-webkit-transform: rotateY(0deg) translateY(0) skewY(0deg);transform: rotateY(0deg) translateY(0) skewY(0deg);opacity: 1;}}
@keyframes tilt-in-top-1 {0% {-webkit-transform: rotateY(30deg) translateY(-300px) skewY(-30deg);transform: rotateY(30deg) translateY(-300px) skewY(-30deg);opacity: 0;}100% {-webkit-transform: rotateY(0deg) translateY(0) skewY(0deg);transform: rotateY(0deg) translateY(0) skewY(0deg);opacity: 1;}}
.swing-in-top-fwd {-webkit-animation: swing-in-top-fwd 1s cubic-bezier(0.175, 0.885, 0.320, 1.275) both;animation: swing-in-top-fwd 1s cubic-bezier(0.175, 0.885, 0.320, 1.275) both;}
@-webkit-keyframes swing-in-top-fwd {0% {-webkit-transform: rotateX(-100deg);transform: rotateX(-100deg);-webkit-transform-origin: top;transform-origin: top;opacity: 0;}100% {-webkit-transform: rotateX(0deg);transform: rotateX(0deg);-webkit-transform-origin: top;transform-origin: top;opacity: 1;}}
@keyframes swing-in-top-fwd { 0% {-webkit-transform: rotateX(-100deg);transform: rotateX(-100deg);-webkit-transform-origin: top;transform-origin: top;opacity: 0;}100% {-webkit-transform: rotateX(0deg);transform: rotateX(0deg);-webkit-transform-origin: top;transform-origin: top;opacity: 1;}}
.puff-in-bl {-webkit-animation: puff-in-bl 1s cubic-bezier(0.470, 0.000, 0.745, 0.715) both;animation: puff-in-bl 1s cubic-bezier(0.470, 0.000, 0.745, 0.715) both;}
@-webkit-keyframes puff-in-bl {0% {-webkit-transform: scale(2);transform: scale(2);-webkit-transform-origin: 0% 100%;transform-origin: 0% 100%;-webkit-filter: blur(4px);filter: blur(4px);opacity: 0;}100% {-webkit-transform: scale(1);transform: scale(1);-webkit-transform-origin: 0% 100%;transform-origin: 0% 100%;-webkit-filter: blur(0px);filter: blur(0px);opacity: 1;}}
@keyframes puff-in-bl {0% {-webkit-transform: scale(2);transform: scale(2);-webkit-transform-origin: 0% 100%;transform-origin: 0% 100%;-webkit-filter: blur(4px);filter: blur(4px);opacity: 0;}100% {-webkit-transform: scale(1);transform: scale(1);-webkit-transform-origin: 0% 100%;transform-origin: 0% 100%;-webkit-filter: blur(0px);filter: blur(0px);opacity: 1;}}
* {box-sizing:border-box}
.slideshow-container {max-width: 300px;max-height: 500px;position: relative;margin: auto;}
.mySlides {display: none;}
.prev, .next {cursor: pointer;position: absolute;top: 50%;width: auto;margin-top: -22px;padding: 16px;color: white;font-weight: bold;font-size: 18px;transition: 0.6s ease;border-radius: 0 3px 3px 0;}
.next {right: 0;border-radius: 3px 0 0 3px;}
.prev:hover, .next:hover {background-color: rgba(0,0,0,0.8);}
.text {color: #f2f2f2;font-size: 15px;padding: 8px 12px;position: absolute;bottom: 8px;width: 100%;text-align: center;}
.numbertext {color: #f2f2f2;font-size: 12px;padding: 8px 12px;position: absolute;top: 0;}
.dot {cursor: pointer;height: 15px;width: 15px;margin: 0 2px;background-color: #bbb;border-radius: 50%;display: inline-block;transition: background-color 0.6s ease;}
.active, .dot:hover {background-color: #717171;}
.fade {animation-name: fade;animation-duration: 1.5s;}
@keyframes fade {from {opacity: .4}to {opacity: 1}}
.slide-in-bck-center {-webkit-animation: slide-in-bck-center 0.7s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;animation: slide-in-bck-center 0.7s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;}
@-webkit-keyframes slide-in-bck-center {0% {-webkit-transform: translateZ(600px);transform: translateZ(600px);opacity: 0;}100% {-webkit-transform: translateZ(0);transform: translateZ(0);opacity: 1;}}
@keyframes slide-in-bck-center {0% {-webkit-transform: translateZ(600px);transform: translateZ(600px);opacity: 0;}100% {-webkit-transform: translateZ(0);transform: translateZ(0);opacity: 1;}}
.slide-in-elliptic-left-bck {-webkit-animation: slide-in-elliptic-left-bck 0.7s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;animation: slide-in-elliptic-left-bck 0.7s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;}
@-webkit-keyframes slide-in-elliptic-left-bck {0% {-webkit-transform: translateX(-800px) rotateY(-30deg) scale(6.5);transform: translateX(-800px) rotateY(-30deg) scale(6.5);-webkit-transform-origin: 200% 50%;transform-origin: 200% 50%;opacity: 0;}100% {-webkit-transform: translateX(0) rotateY(0) scale(1);transform: translateX(0) rotateY(0) scale(1);-webkit-transform-origin: -600px 50%;transform-origin: -600px 50%;opacity: 1;}}
@keyframes slide-in-elliptic-left-bck {0% {-webkit-transform: translateX(-800px) rotateY(-30deg) scale(6.5);transform: translateX(-800px) rotateY(-30deg) scale(6.5);-webkit-transform-origin: 200% 50%;transform-origin: 200% 50%;opacity: 0;}100% {-webkit-transform: translateX(0) rotateY(0) scale(1);transform: translateX(0) rotateY(0) scale(1);-webkit-transform-origin: -600px 50%;transform-origin: -600px 50%;opacity: 1;}}
.flicker-in-1 {-webkit-animation: flicker-in-1 2s linear both;animation: flicker-in-1 2s linear both;}
@-webkit-keyframes flicker-in-1 {0% {opacity: 0;}10% {opacity: 0;}10.1% {opacity: 1;}10.2% {opacity: 0;}20% {opacity: 0;}20.1% {opacity: 1;}20.6% {opacity: 0;}30% {opacity: 0;}30.1% {opacity: 1;}30.5% {opacity: 1;}30.6% {opacity: 0;}45% {opacity: 0;}45.1% {opacity: 1;}50% {opacity: 1;}55% {opacity: 1;}55.1% {opacity: 0;} 57% {opacity: 0;}57.1% {opacity: 1;}60% {opacity: 1;}60.1% {opacity: 0;}65% {opacity: 0;}65.1% {opacity: 1;}75% {opacity: 1;}75.1% {opacity: 0;}77% {opacity: 0;}77.1% {opacity: 1;}85% {opacity: 1;}85.1% {opacity: 0;}86% {opacity: 0;}86.1% {opacity: 1;}100% {opacity: 1;}}
@keyframes flicker-in-1 {0% {opacity: 0;}10% {opacity: 0;}10.1% {opacity: 1;}10.2% {opacity: 0;}20% {opacity: 0;}20.1% {opacity: 1;}20.6% {opacity: 0;}30% {opacity: 0;}30.1% {opacity: 1;}30.5% {opacity: 1;}30.6% {opacity: 0;}45% {opacity: 0;}45.1% {opacity: 1;}50% {opacity: 1;}55% {opacity: 1;}55.1% {opacity: 0;}57% {opacity: 0;}57.1% {opacity: 1;}60% {opacity: 1;}60.1% {opacity: 0;}65% {opacity: 0;}65.1% {opacity: 1;}75% {opacity: 1;}75.1% {opacity: 0;}77% {opacity: 0;}77.1% {opacity: 1;}85% {opacity: 1;}85.1% {opacity: 0;}86% {opacity: 0;}86.1% {opacity: 1;}100% {opacity: 1;}}
.image:hover {transform: scale(1.2);transition: all 0.7s ease;}
.card {width: 150px;height: 230px;background-image: linear-gradient(163deg, #00ff75 0%, #3700ff 100%);border-radius: 20px;transition: all .3s;}
.card2 {width: 150px;height: 230px;background-color: #1a1a1a;border-radius:;transition: all .2s;}
.card2:hover {transform: scale(0.98);border-radius: 20px;}
.card:hover {box-shadow: 0px 0px 30px 1px rgba(0, 255, 117, 0.30);}
.card3 {position: relative;width: 190px;height: 254px;display: flex;flex-direction: column;justify-content: end;padding: 12px; gap: 12px; border-radius: 8px;cursor: pointer;color: white;}
.card3::before {content: '';position: absolute;inset: 0;left: -5px;margin: auto;width: 200px;height: 264px;border-radius: 10px;background: linear-gradient(-45deg, #e81cff 0%, #40c9ff 100% );z-index: -10;pointer-events: none;transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);}
.card3::after {content: "";z-index: -1;position: absolute;inset: 0;background: linear-gradient(-45deg, #fc00ff 0%, #00dbde 100% );transform: translate3d(0, 0, 0) scale(0.95);filter: blur(20px);}
.heading {font-size: 20px;text-transform: capitalize;font-weight: 700;}
.card3 p:not(.heading) {font-size: 14px;}
.card3 p:last-child {color: #e81cff;font-weight: 600;}
.card3:hover::after {filter: blur(30px);}
.card3:hover::before {transform: rotate(-90deg) scaleX(1.34) scaleY(0.77);}
.box {position: relative;width: 220px;height: 300px;display: flex;justify-content: center;align-items: center;transition: 0.5s;z-index: 1;}
.box::before {content: ' ';position: absolute;top: 0;left: 50px;width: 50%;height: 100%;text-decoration: none;background: #fff;border-radius: 8px;transform: skewX(15deg);transition: 0.5s;}
.box::after {content: '';position: absolute;top: 0;left: 50;width: 50%;height: 100%;background: #fff;border-radius: 8px;transform: skewX(15deg);transition: 0.5s;filter: blur(30px);}
.box:hover:before,.box:hover:after {transform: skewX(0deg) scaleX(1.3);}
.box:before,.box:after {background: linear-gradient(315deg, #ffbc00, #ff0058)}
.box span {display: block;position: absolute;top: 0;left: 0;right: 0;bottom: 0;z-index: 5;pointer-events: none;}
.box span::before {content: '';position: absolute;top: 0;left: 0;width: 0;height: 0;border-radius: 8px;background: rgba(255, 255, 255, 0.1);backdrop-filter: blur(10px);opacity: 0;transition: 0.1s;animation: animate 2s ease-in-out infinite;box-shadow: 0 5px 15px rgba(0,0,0,0.08)}
.box span::before {top: -40px;left: 40px;width: 50px;height: 50px;opacity: 1;}
.box span::after {content: '';position: absolute;bottom: 0;right: 0;width: 100%;height: 100%;border-radius: 8px;background: rgba(255, 255, 255, 0.1);backdrop-filter: blur(10px);opacity: 0;transition: 0.5s;box-shadow: 0 5px 15px rgba(0,0,0,0.08);animation-delay: -1s;}
.box span:after {bottom: -40px;right: 40px;width: 50px;height: 50px;opacity: 1;}
.box .content {position: relative;width: 190px;height: 254px;padding: 20px 40px;background: rgba(255, 255, 255, 0.05);backdrop-filter: blur(10px);box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);border-radius: 8px;z-index: 1;transform: 0.5s;color: #fff;display: flex;justify-content: center;align-items: center;}
.box .content h2 {font-size: 20px;color: #fff;margin-bottom: 10px;}
.cards {perspective: 500px;}
.card4 {width: 170px;height: 290px;background: #16161d;border: 2px solid #555555;border-radius: 4px;position: relative;transform-style: preserve-3d;will-change: transform;transition: transform .5s;}
.card4:hover {transform: translateZ(10px) rotateX(20deg) rotateY(20deg);}
.card4:hover .card_title {transform: translateZ(50px);}
.card5 {position: relative;width: 190px;height: 254px;background: mediumturquoise;display: flex;align-items: center;justify-content: center;font-size: 25px;font-weight: bold;border-radius: 15px;cursor: pointer;}
.card5::before,.card5::after {position: absolute;content: "";width: 20%;height: 20%;display: flex;align-items: center;justify-content: center;font-size: 25px;font-weight: bold;background-color: lightblue;transition: all 0.5s;}
.card5::before {top: 0;right: 0;border-radius: 0 15px 0 100%;}
.card5::after {bottom: 0;left: 0;border-radius: 0 100%  0 15px;}
.card5:hover::before,.card5:hover:after {width: 100%;height: 100%;border-radius: 15px;transition: all 0.5s;}
.card6 { width: 190px;height: 254px;background: #07182E;position: relative; display: flex; place-content: center; place-items: center;overflow: hidden;border-radius: 20px;}
.card6 h2 {z-index: 1;color: white;font-size: 2em;}
.card6::before {content: '';position: absolute;width: 100px;background-image: linear-gradient(180deg, rgb(0, 183, 255), rgb(255, 48, 255));height: 130%;animation: rotBGimg 3s linear infinite;transition: all 0.2s linear;}
@keyframes rotBGimg {from {transform: rotate(0deg);}to {transform: rotate(360deg);}}
.card6::after {content: '';position: absolute;background: #07182E;;inset: 5px;border-radius: 15px;}  
/* .card:hover:before {
  background-image: linear-gradient(180deg, rgb(81, 255, 0), purple);
  animation: rotBGimg 3.5s linear infinite;
} */
.animated-button {position: relative;display: flex;align-items: center;gap: 4px;padding: 16px 36px;border: 4px solid;border-color: transparent;font-size: 16px;background-color: inherit;border-radius: 100px;font-weight: 600;color: greenyellow;box-shadow: 0 0 0 2px greenyellow;cursor: pointer;overflow: hidden;transition: all 0.6s cubic-bezier(0.23, 1, 0.32, 1);}
.animated-button svg {position: absolute;width: 24px;fill: greenyellow;z-index: 9;transition: all 0.8s cubic-bezier(0.23, 1, 0.32, 1);}
.animated-button .arr-1 {right: 16px;}
.animated-button .arr-2 {left: -25%;}
.animated-button .circle {position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);width: 20px;height: 20px;background-color: greenyellow;border-radius: 50%;opacity: 0;transition: all 0.8s cubic-bezier(0.23, 1, 0.32, 1);}
.animated-button .text {position: relative;z-index: 1;transform: translateX(-12px);transition: all 0.8s cubic-bezier(0.23, 1, 0.32, 1);}
.animated-button:hover {box-shadow: 0 0 0 12px transparent;color: #212121;border-radius: 12px;}
.animated-button:hover .arr-1 {right: -25%;}
.animated-button:hover .arr-2 {left: 16px;}
.animated-button:hover .text {transform: translateX(12px);}
.animated-button:hover svg {fill: #212121;}
.animated-button:active {scale: 0.95;box-shadow: 0 0 0 4px greenyellow;}
.animated-button:hover .circle {width: 220px;height: 220px;opacity: 1;}


</style>
<div>
    <div style="display: flex; gap: 10px; background-color: rgb(226, 188, 118);">
        <img src="https://www.snh48.com/images/temp/vote10/zx10_logo.png" alt="">
        <div>
            <p>Vào tối ngày 5 tháng 8, Lễ thanh niên thường niên "Mười năm tuổi trẻ,
                những ngôi sao sáng" 2023 SNH48 GROUP và Buổi hòa nhạc kỷ niệm 10 năm gia đình Siba do Mida Yuan Universe tổ chức đã kết thúc thành công tại Trung tâm thể thao phương Đông của Ngân hàng Phát triển Phố Đông Thượng Hải.
                Cuối cùng, tác phẩm "Luật rừng" của SNH48 Yuan Yiqi đã giành được Giải Vàng cho Thành viên có ảnh hưởng của năm và Danh hiệu NỮ HOÀNG cho Độ nổi tiếng cao nhất của năm. Tác phẩm "Mute" của SNH48 Wang Yi và tác phẩm "Brave Heart" của SNH48 Song Xinran lần lượt giành được giải Bạc và Đồng cho Thành viên có ảnh hưởng của năm.
                Tác phẩm "Night of the Night" do SNH48 Chu Shiyu, GNZ48 Zheng Danni, GNZ48 Chen hát Ke và GNZ48 Zeng Aijia "Truth",
                "Law of the Forest", "Walking" và "I Wanna PLAY" lần lượt giành được Giải thưởng Thành viên xuất sắc của năm.
            </p>
        </div>
    </div>
    <div style="margin-top: 10px;">

        <button class="animated-button">
            <svg viewBox="0 0 24 24" class="arr-2" xmlns="http://www.w3.org/2000/svg">
                <path
                d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"
                ></path>
            </svg>
            <span class="text" style="color: #000;"><a href="{{route('views', $users->id)}}">Quay lại trang chủ</a></span>
            <span class="circle"></span>
            <svg viewBox="0 0 24 24" class="arr-1" xmlns="http://www.w3.org/2000/svg">
                <path
                d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"
                ></path>
            </svg>
        </button>

        <h1 style="text-align: center;">Hoạt động của các nhóm nhạc</h1>

        <div style="display: flex; gap: 10px;">
        @foreach($lichtrinh as $lt)
            <img class="scale-in-ver-center" style="width: 50%; height: 500px;" src="{{asset('uploads/'.$lt->anhbn)}}" alt="">
        @endforeach  
        @foreach($banner as $bn)
            <img class="tilt-in-top-1" style="width: 50%;" src="{{asset('uploads/'.$bn->anhbn)}}" alt="">
        @endforeach
        </div>
        <div style="margin-top: 10px;">
            <img class="puff-in-bl" style="width: 100%;" src="https://www.snh48.com/attached/ad/2024-01-15/20240115167703.jpg" alt="">
        </div>

    </div>

    <div>
        
        <div style="display: flex;">
            <h1 style="float: right; width: 30%;">Nhóm nhạc TG48</h1>
            <h1 style="float: left; width: 70%;">Top 48 mùa 2023</h1>
        </div>
        <div style="display: flex; gap: 20px;">
            <!-- Slideshow container -->
            <div class="slideshow-container" style="float: left; width: 30%;">

                <!-- Full-width images with number and caption text -->
                <div class="mySlides fade">
                <div class="numbertext">1 / 5</div>
                <img class="slide-in-bck-center" src="https://www.snh48.com/images/index/about-logo-snh.png" style="width: 300px; height: 500px;">
                <div class="text">SNH48</div>
                </div>

                <div class="mySlides fade">
                <div class="numbertext">2 / 5</div>
                <img class="slide-in-elliptic-left-bck" src="https://www.snh48.com/images/index/about-logo-gnz.png" style="width: 300px; height: 500px;">
                <div class="text">GNZ48</div>
                </div>

                <div class="mySlides fade">
                <div class="numbertext">3 / 5</div>
                <img src="https://www.snh48.com/images/index/about-logo-bej.png" style="width: 300px; height: 500px;">
                <div class="text">BEJ48</div>
                </div>

                <div class="mySlides fade">
                <div class="numbertext">4 / 5</div>
                <img class="flicker-in-1" src="https://www.snh48.com/images/index/about-logo-ckg.png" style="width: 300px; height: 500px;">
                <div class="text">CKG48</div>
                </div>

                <div class="mySlides fade">
                <div class="numbertext">5 / 5</div>
                <img src="https://www.snh48.com/images/index/about-logo-cgt.png" style="width: 300px; height: 500px;">
                <div class="text">CGT48</div>
                </div>

                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
                <!-- The dots/circles -->
                <br>
                <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
                <span class="dot" onclick="currentSlide(5)"></span>
                </div>
            </div>

            <div style="float: left; width: 70%;">
            <div style="display: flex; gap: 5px;">
                <img src="https://www.snh48.com/images/temp/vote10/zx10_t1.png" style="width: 150px; height: 540px;">
                <div>
                    <div style="display: flex; gap: 5px;">
                        <img src="https://www.snh48.com/images/temp/vote10/zx10_t2.png" style="width: 80px; height: 130px;">
                        <img src="https://www.snh48.com/images/temp/vote10/zx10_t3.png" style="width: 80px; height: 130px;">

                        <div style="display: flex; gap: 5px;">
                            <img src="https://www.snh48.com/images/temp/vote10/zx10_t4.png" style="width: 52px; height: 130px;">
                            <img src="https://www.snh48.com/images/temp/vote10/zx10_t5.png" style="width: 52px; height: 130px;">
                            <img src="https://www.snh48.com/images/temp/vote10/zx10_t6.png" style="width: 52px; height: 130px;">
                            <img src="https://www.snh48.com/images/temp/vote10/zx10_t7.png" style="width: 52px; height: 130px;">
                            <img src="https://www.snh48.com/images/temp/vote10/zx10_t8.png" style="width: 52px; height: 130px;">
                            <img src="https://www.snh48.com/images/temp/vote10/zx10_t9.png" style="width: 52px; height: 130px;">
                            <img src="https://www.snh48.com/images/temp/vote10/zx10_t10.png" style="width: 52px; height: 130px;">
                            <img src="https://www.snh48.com/images/temp/vote10/zx10_t11.png" style="width: 52px; height: 130px;">
                            <img src="https://www.snh48.com/images/temp/vote10/zx10_t12.png" style="width: 52px; height: 130px;">
                            <img src="https://www.snh48.com/images/temp/vote10/zx10_t13.png" style="width: 52px; height: 130px;">
                            <img src="https://www.snh48.com/images/temp/vote10/zx10_t14.png" style="width: 52px; height: 130px;">
                            <img src="https://www.snh48.com/images/temp/vote10/zx10_t15.png" style="width: 52px; height: 130px;">
                        </div>

                    </div>

                    <div style="display: flex; gap: 5px; margin-top: 5px;">
                            <img src="https://www.snh48.com/images/temp/vote10/zx10_t16.png" style="width: 52px; height: 130px;">
                            <img src="https://www.snh48.com/images/temp/vote10/zx10_t17.png" style="width: 52px; height: 130px;">
                            <img src="https://www.snh48.com/images/temp/vote10/zx10_t18.png" style="width: 52px; height: 130px;">
                            <img src="https://www.snh48.com/images/temp/vote10/zx10_t19.png" style="width: 52px; height: 130px;">
                            <img src="https://www.snh48.com/images/temp/vote10/zx10_t20.png" style="width: 52px; height: 130px;">
                            <img src="https://www.snh48.com/images/temp/vote10/zx10_t21.png" style="width: 52px; height: 130px;">
                            <img src="https://www.snh48.com/images/temp/vote10/zx10_t22.png" style="width: 52px; height: 130px;">
                            <img src="https://www.snh48.com/images/temp/vote10/zx10_t23.png" style="width: 52px; height: 130px;">
                            <img src="https://www.snh48.com/images/temp/vote10/zx10_t24.png" style="width: 52px; height: 130px;">
                            <img src="https://www.snh48.com/images/temp/vote10/zx10_t25.png" style="width: 52px; height: 130px;">
                            <img src="https://www.snh48.com/images/temp/vote10/zx10_t26.png" style="width: 52px; height: 130px;">
                            <img src="https://www.snh48.com/images/temp/vote10/zx10_t27.png" style="width: 52px; height: 130px;">
                            <img src="https://www.snh48.com/images/temp/vote10/zx10_t28.png" style="width: 52px; height: 130px;">
                            <img src="https://www.snh48.com/images/temp/vote10/zx10_t29.png" style="width: 52px; height: 130px;">
                            <img src="https://www.snh48.com/images/temp/vote10/zx10_t30.png" style="width: 52px; height: 130px;">
                    </div>

                    <div style="display: flex; gap: 5px; margin-top: 5px;">
                            <img src="https://www.snh48.com/images/temp/vote10/zx10_t31.png" style="width: 52px; height: 130px;">
                            <img src="https://www.snh48.com/images/temp/vote10/zx10_t32.png" style="width: 52px; height: 130px;">
                            <img src="https://www.snh48.com/images/temp/vote10/zx10_t33.png" style="width: 52px; height: 130px;">
                            <img src="https://www.snh48.com/images/temp/vote10/zx10_t34.png" style="width: 52px; height: 130px;">
                            <img src="https://www.snh48.com/images/temp/vote10/zx10_t35.png" style="width: 52px; height: 130px;">
                            <img src="https://www.snh48.com/images/temp/vote10/zx10_t36.png" style="width: 52px; height: 130px;">
                            <img src="https://www.snh48.com/images/temp/vote10/zx10_t37.png" style="width: 52px; height: 130px;">
                            <img src="https://www.snh48.com/images/temp/vote10/zx10_t38.png" style="width: 52px; height: 130px;">
                            <img src="https://www.snh48.com/images/temp/vote10/zx10_t39.png" style="width: 52px; height: 130px;">
                            <img src="https://www.snh48.com/images/temp/vote10/zx10_t40.png" style="width: 52px; height: 130px;">
                            <img src="https://www.snh48.com/images/temp/vote10/zx10_t41.png" style="width: 52px; height: 130px;">
                            <img src="https://www.snh48.com/images/temp/vote10/zx10_t42.png" style="width: 52px; height: 130px;">
                            <img src="https://www.snh48.com/images/temp/vote10/zx10_t43.png" style="width: 52px; height: 130px;">
                            <img src="https://www.snh48.com/images/temp/vote10/zx10_t44.png" style="width: 52px; height: 130px;">
                            <img src="https://www.snh48.com/images/temp/vote10/zx10_t45.png" style="width: 52px; height: 130px;">
                    </div>
                    <div style="display: flex; gap: 5px; margin-top: 5px;">
                            <img src="https://www.snh48.com/images/temp/vote10/zx10_t46.png" style="width: 52px; height: 130px;">
                            <img src="https://www.snh48.com/images/temp/vote10/zx10_t47.png" style="width: 52px; height: 130px;">
                            <img src="https://www.snh48.com/images/temp/vote10/zx10_t48.png" style="width: 52px; height: 130px;">
                    </div>

                </div>
            </div>
            </div>
        </div>




    </div>
    <script>
  let slideIndex = 1;
  showSlides(slideIndex);

  // Next/previous controls
  function plusSlides(n) {
    showSlides(slideIndex += n);
  }

  // Thumbnail image controls
  function currentSlide(n) {
    showSlides(slideIndex = n);
  }

  function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
  }
</script>


<!--đây là nội dung nhóm nhạc và idol-->

@foreach($nhomnhac as  $nn)
<div style="margin-top: 40px;">
<h1>Thành viên của các nhóm nhạc TG48</h1>
<div style="display: flex; gap: 20px;">
    <div style="display: flex; gap: 50px;">
        <img class="image" src="{{asset('uploads/'.$nn->logonn)}}" style="width: 400px; height: 600px; margin-left: 20px;">
        <div style="border: 2px solid; width: 1px; height: 600px;"></div>
    </div>

    <div>
        <div>
            @if($nn->id == 1)
            <img src="https://www.snh48.com/images/ot/mem_b_bt.jpg" alt="">
            @endif
            @if($nn->id == 2)
            <img src="https://www.snh48.com/images/ot/mem_s_bt.jpg" alt="">
            @endif
            @if($nn->id == 3)
            <img src="https://www.snh48.com/images/ot/mem_h_bt.jpg" alt="">
            @endif
            @if($nn->id == 4)
            <img src="https://www.snh48.com/images/ot/mem_g_bt.jpg" alt="">
            @endif
            @if($nn->id == 5)
            <img src="https://www.snh48.com/images/ot/mem_cii_bt.jpg" alt="">
            @endif
            @if($nn->id == 6)
            <img src="https://www.snh48.com/images/ot/mem_c_bt.jpg" alt="">
            @endif


            <div style="display: flex; gap: 5px; margin-top: 10px;">

                <div style="display: grid; grid-template-columns: 1fr 1fr 1fr 1fr; gap: 20px;">
                    
                    @foreach($idol as $id)
                    @if($nn->id == $id->nhomnhac_id)
                        @if($id->nhomnhac_id == 1)
                            <div class="card">
                                <div class="card2">
                                    <img src="{{asset('uploads/'.$id->anh)}}" class="card2" alt="">
                                </div>
                            </div>
                        @endif

                        @if($id->nhomnhac_id == 2)
                            <div class="card3" style="background-color: #000;">
                            <img src="{{asset('uploads/'.$id->anh)}}" class="heading" style="height: 185px;">
                                <p style="text-align: center;">{{$id->tenid}}</p>
                            </div>
                        @endif

                        @if($id->nhomnhac_id == 3)
                            <div class="cards">
                                <img src="{{asset('uploads/'.$id->anh)}}" class="card4" style="height: 185px;">
                            </div>
                        @endif

                        @if($id->nhomnhac_id == 4)
                            <div class="box">
                                <span></span>
                                <div class="content">
                                    <img src="{{asset('uploads/'.$id->anh)}}" class="card4" style="height: 185px;">
                                </div>
                            </div>
                        @endif

                        @if($id->nhomnhac_id == 5)
                            <div class="card5">
                                <img src="{{asset('uploads/'.$id->anh)}}" style="height: 200px;">
                            </div>
                        @endif

                        @if($id->nhomnhac_id == 6)
                            <div class="card6">
                                <h2>
                                   <img src="{{asset('uploads/'.$id->anh)}}" style="height: 200px;">
                                </h2>
                            </div>
                        @endif

                    @endif
                    @endforeach

                </div>

            </div>
        </div>
    </div>
</div>
    

</div>
@endforeach

</div>