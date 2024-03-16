<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
body {font-family: Arial, sans-serif;margin: 0;padding: 0;}
.profile-container {width: 100%;max-width: 600px;margin: 0 auto;padding: 20px;}
.profile-header {display: flex;align-items: center;margin-bottom: 20px;}
.profile-picture {width: 120px;height: 120px;border-radius: 50%;object-fit: cover;margin-right: 20px;}
.profile-info {flex: 1;}
.follow-info {display: flex;justify-content: space-between;margin-bottom: 10px;}
.profile-description {margin-bottom: 20px;}
.video-container {position: relative;padding-bottom: 56.25%;padding-top: 30px;height: 0;overflow: hidden;}
.video-container iframe {position: absolute;top: 0;left: 0;width: 100%;height: 100%;}
.profile-actions {display: flex;flex-direction: column;}
.edit-profile-button {margin-bottom: 10px;}
.link {margin-bottom: 5px;}
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
@if(empty($anhtheoid) != 'Null')
@foreach($anhtheoid as $atid)
       <div style="">
            <div style="border: 1px solid; height: 30px; text-align: center;">
            @php
                $anhid = json_decode($atid->anhid);
            @endphp
                <a style="text-decoration: none;" href="/themanhid/{{$idol->id}}/user/{{$users->id}}">Bạn muốn thêm ảnh mới</a>
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