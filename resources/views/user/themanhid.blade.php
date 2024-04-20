<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
body {font-family: Arial, sans-serif;margin: 0;padding: 0;}.profile-container {width: 100%;max-width: 600px;margin: 0 auto;padding: 20px;}.profile-header {display: flex;align-items: center;margin-bottom: 20px;}.profile-picture {width: 120px;height: 120px;border-radius: 50%;object-fit: cover;margin-right: 20px;}.profile-info {flex: 1;}.follow-info {display: flex;justify-content: space-between;margin-bottom: 10px;}.profile-description {margin-bottom: 20px;}.video-container {position: relative;padding-bottom: 56.25%;padding-top: 30px;height: 0;overflow: hidden;}.video-container iframe {position: absolute;top: 0;left: 0;width: 100%;height: 100%;}.profile-actions {display: flex;flex-direction: column;}.edit-profile-button {margin-bottom: 10px;}.link {margin-bottom: 5px;}
.cta {
  display: flex;
  padding: 11px 33px;
  text-decoration: none;
  font-family: 'Poppins', sans-serif;
  font-size: 25px;
  color: white;
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

.cta:hover  .second {
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
    <title>Profile Page</title>
</head>
<body>
    <div class="profile-container">
        <div class="profile-header" style="background-image: url(https://www.snh48.com/resize_483X278/attached/video/2023-12-21/20231221687745.png); height: 200px; position: relative;">
            <div style="position: relative; margin-top: 140px; margin-left: 20px;">
                <img style="border: 5px solid white;" src="{{asset('uploads/'.$idol->anh)}}" alt="Profile picture" class="profile-picture">
            </div>
        </div>

        <div class="profile-info" style="margin-top: 40px; display: flex; gap: 40px;">
            <div>
                <h1>{{$idol->tenid}}</h1>
            </div>

            <div style="margin-top: 30px; display: flex; gap: 30px;">
                <span>{{$nhomnhac->tennn}}</span>
                <span>52 Follower</span>
                <span>0 Thích</span>
            </div>
        </div>

        
        <div class="profile-content" style="margin-top: 40px;">

            <div class="profile-description" style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">

                <div style="border: 1px solid; text-align: center;">
                  <a style="text-decoration: none;" href="/xemanhct/{{$idol->id}}/user/{{$users->id}}"><p>Ảnh của bạn</p></a>
                </div>

                <div style="border: 1px solid; text-align: center;">
                   <a style="text-decoration: none;" href="/videoxemct/{{$idol->id}}/user/{{$users->id}}"><p>Video ngắn của bạn</p></a>
                </div>

            </div>

           
            <!--trang ảnh idol-->
            <button class="cta">
                <span class="span"><a style="text-decoration: none; color: white;" href="/themanhid/{{$idol->id}}/user/{{$users->id}}">Bạn muốn thêm ảnh mới</a></span>
                <span class="second">
                <svg width="50px" height="20px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <path class="one" d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                    <path class="two" d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                    <path class="three" d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z" fill="#FFFFFF"></path>
                    </g>
                </svg>
                </span> 
            </button>
            
            @if(empty($anhtheoid) != 'Null')
            @foreach($anhtheoid as $atid)
                <div style="">
                        <div style="border: 1px solid; height: 30px; text-align: center;">
                        @php
                            $anhid = json_decode($atid->anhid);
                        @endphp
                        </div>

                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px;">
                        @foreach ($anhid as $anhid)
                            <div style="">
                        
                                <img style="width: 300px; height: 400px;" src="{{asset('uploads/'.$anhid)}}" alt="">
                            
                            </div>
                        @endforeach

                        </div>
                </div>
            @endforeach
            @endif


       <!--đây là trang video-->
@if(empty($videongan) != 'Null')

       <div style="">

            <div style="border: 1px solid; height: 30px; text-align: center;">
                <a style="text-decoration: none;" href="/videothem/{{$idol->id}}/user/{{$users->id}}">Bạn muốn thêm video mới</a>
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-top: 20px;">
            @foreach($videongan as $vdn)
                <div style="">

<a href="/videonganct/{{$vdn->id}}/user/{{$users->id}}">
                    <video style="position: absolute; height: 405px; width: 300px;">
        
                        <source src="{{asset('videos/'.$vdn->video)}}">
                    
                    </video>
</a>

                    <div style="position: relative; margin-top: 370px; margin-left: 20px; display: flex; gap: 20px;">
                       <img style="width: 30px; height: 20px; margin-top: 10px;" src="https://tse1.mm.bing.net/th?id=OIP.Ke2RA_FoXZbHMYEUIm0XOQHaD2&pid=Api&P=0&h=180" alt="">
                       <p style="color: white;">123</p>
                       <p style="color: white;">{{$vdn->tieude}}</p>
                    </div>
                    
                </div>
                @endforeach
            </div>
       </div>

@endif

           
        </div>
    </div>
</body>
</html>