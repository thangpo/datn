<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

    <style>
body { margin: 0;padding: 0;font-family: Roboto, Arial, sans-serif;}
svg {fill: rgb(96, 96, 96);}
.navigation {padding: 0 16px;display: flex;justify-content: space-between;height: 56px;position: fixed;top: 0;right: 0;left: 0;background-color: white;}
.navigation__button {border: none;padding: 5px 10px;background-color: transparent;cursor: pointer;line-height: 5px;}
.navigation__menu,
.navigation__search,
.navigation__options {display: flex;align-items: center;}
.navigation__options .navigation__button {margin-right: 8px;}
.navigation__menu img {margin-left: 5px;}
.navigation__menu__button svg {height: 24px;}
.navigation__search input {width: 360px;height: 32px;border: 1px solid rgb(211, 211, 211);font-size: 16px;padding: 3px 8px;}
.navigation__search__icon {border: 1px solid rgb(211, 211, 211);border-left: none;height: 32px;width: 65px;}
.navigation__search__icon:hover {background-color: #e4e4e4;}
.navigation__search__icon svg {height: 20px;width: 20px;}
.navigation__options {display: flex;}
.video {width: 270px;margin-bottom: 30px;}
.navigation__icon {width: 24px;height: 24px;}
.thumbnail {width: 100%;height: 170px;}
.title {display: flex;flex-direction: column;}
.title h3 {color: rgb(3, 3, 3);line-height: 18px;font-size: 14px;margin-bottom: 6px;}
.title a,span {text-decoration: none;color: rgb(96, 96, 96);font-size: 12px;}
.thumbnail img {object-fit: cover;height: 94%;width: 100%;}
.author img {object-fit: cover;border-radius: 50%;height: 40px;width: 40px;margin-right: 10px;}
.details {display: flex;}
.navigation__avatar {width: 32px;height: 32px;border-radius: 50%;background-color: grey;}
    </style>
    <title>YouTube Clone UI</title>
</head>
<body>
    <nav class="navigation">
        <div class="navigation__menu">
            <!-- menu button -->
            <button class="navigation__button navigation__menu__button">
                <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false"><g><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path></g></svg>
            </button>

            <!-- youtube logo -->
            <a href="{{route('videocn')}}"><img src="https://github.com/imtiyazshamim/Youtube-clone/blob/main/youtube-clone/assets/youtube-logo.png?raw=true" alt="youTube logo"></a>
            
        </div>

        <div class="navigation__search">
            <!-- search field -->
            <input type="search" placeholder="Search">

            <!-- search button -->
            <button class="navigation__button navigation__search__icon">
                <svg viewBox="0 0 24 24" class="navigation__icon">
                    <g>
                        <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" ></path>
                    </g>
                </svg>
            </button>
            <!-- voice button -->
            <button class="navigation__button">
                <svg viewBox="0 0 24 24" class="navigation__icon"><g ><path d="M12 14c1.66 0 2.99-1.34 2.99-3L15 5c0-1.66-1.34-3-3-3S9 3.34 9 5v6c0 1.66 1.34 3 3 3zm5.3-3c0 3-2.54 5.1-5.3 5.1S6.7 14 6.7 11H5c0 3.41 2.72 6.23 6 6.72V21h2v-3.28c3.28-.48 6-3.3 6-6.72h-1.7z" ></path></g></svg>
            </button>
        </div>

        <div class="navigation__options">
            <!-- create button -->
            <button class="navigation__button">
                <svg viewBox="0 0 24 24" class="navigation__icon"><g><path d="M17 10.5V7c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1v10c0 .55.45 1 1 1h12c.55 0 1-.45 1-1v-3.5l4 4v-11l-4 4zM14 13h-3v3H9v-3H6v-2h3V8h2v3h3v2z" ></path></g></svg>
            </button>
            <!-- youtube apps button -->
            <button class="navigation__button">
                <svg viewBox="0 0 24 24" class="navigation__icon"><g><path d="M4 8h4V4H4v4zm6 12h4v-4h-4v4zm-6 0h4v-4H4v4zm0-6h4v-4H4v4zm6 0h4v-4h-4v4zm6-10v4h4V4h-4zm-6 4h4V4h-4v4zm6 6h4v-4h-4v4zm0 6h4v-4h-4v4z"></path></g></svg>
            </button>
            <!-- notifications button -->
            <button class="navigation__button">
                <svg viewBox="0 0 24 24" class="navigation__icon"><g><path d="M12 22c1.1 0 2-.9 2-2h-4c0 1.1.9 2 2 2zm6-6v-5c0-3.07-1.64-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.63 5.36 6 7.92 6 11v5l-2 2v1h16v-1l-2-2z"></path></g></svg>
            </button>
        </div>
    </nav>

    <section style="display: flex; gap: 10px; margin-top: 100px;">
        <div class="ytb" style="height: 900px;">
        @foreach ($baihats as $bhs)
        @foreach ($nhomnhac as $nn)
        @if($bhs->id == $baihaty->id)
        <video controls autoplay style="width: 900px; margin-left: 100px; border-radius: 1%;">
        
            <source src="{{asset('videos/'.$bhs->nhac)}}">
        
        </video>
        <!--phần đăng ký kênh và like đây là có users-->
        <h1 style="margin-left: 100px;">{{$bhs->tenbh}} Ngày phát hành: {{$bhs->created_at}}</h1>
        <div class="details" style="margin-left: 100px;">
            <div class="author">

                <a href="/videotheonhomnhac/{{$nn->id}}/user/{{$users->id}}"><img src="{{asset('uploads/'.$nn->logonn)}}" alt="" /></a>                                   
                                    
                </div>
            <div class="title">
                    <a href="">
                                            
                        {{$nn->tennn}}
                                        
                    </a>
                    <span> {{$bhs->view_count}} Views • {{$bhs->created_at}} </span>
            </div>

            <div style="display: flex; gap: 50px; margin-left: 500px; margin-top: 4px;">
                <div>
                <form action="{{route('likevideo', $bhs->id)}}" method="POST">
                    @csrf
                    <button type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M20 8h-5.612l1.123-3.367c.202-.608.1-1.282-.275-1.802S14.253 2 13.612 2H12c-.297 0-.578.132-.769.36L6.531 8H4c-1.103 0-2 .897-2 2v9c0 1.103.897 2 2 2h13.307a2.01 2.01 0 0 0 1.873-1.298l2.757-7.351A1 1 0 0 0 22 12v-2c0-1.103-.897-2-2-2zM4 10h2v9H4v-9zm16 1.819L17.307 19H8V9.362L12.468 4h1.146l-1.562 4.683A.998.998 0 0 0 13 10h7v1.819z"></path></svg>
                    </button>
                    {{$bhs->likevideo_count}}
                </form>
                </div>

                <a href="/thumuctuvd/{{$bhs->id}}/user/{{$users->id}}">
                  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M20 5h-9.586L8.707 3.293A.997.997 0 0 0 8 3H4c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V7c0-1.103-.897-2-2-2zm-4 9h-3v3h-2v-3H8v-2h3V9h2v3h3v2z"></path></svg>
              </a>
            </div>
        </div>
        <!--phần bình luận-->
        @foreach ($profile as $pf)
        @if(empty($users) != 'Null')
        <form action="{{route('binhluanvd', $bhs->id)}}" method="POST">
        @csrf 
        <input style="position: absolute; left: -999px;" type="text" name="users_id" value="{{$users->id}}">
        <div style="margin-left: 100px; margin-top: 50px;">
            <div style="display: flex; gap: 20px;">
              <img style="border-radius: 50%; width: 50px; height: 50px;" src="{{asset('uploads/'.$pf->anhnd)}}" alt="">
              <input name="noidung" style="border-left: none; border-right: none; border-top: none; width: 800px;" type="text" name="" placeholder="Viết bình luận của bạn vào đây">
              <button style="position: absolute; left: -999px;" type="submit" class="btn btn-primary"></button>
        </div>
        </form>
        @endif
        @foreach ($binhluan as $bl)
        @if(empty($users))
        @if($bhs->id == $bl->baihat_id)
             <div style="display: flex; gap: 20px; margin-top: 30px; margin-left: 100px;"> 
                <img style="border-radius: 50%; width: 50px; height: 50px;" src="{{asset('uploads/'.$pf->anhnd)}}" alt="">
                <div>
                   <p style="font-size: 12px;">{{$pf->tennd}}     {{$bl->created_at}}</p>
                   <p style="font-size: 13px;">{{$bl->noidung}}</p>
                </div>
            </div>  
        @endif 
        @endif
        @if(empty($users) != 'Null')
        @if($bhs->id == $bl->baihat_id && $users->id == $bl->users_id)
             <div style="display: flex; gap: 20px; margin-top: 30px;"> 
                <img style="border-radius: 50%; width: 50px; height: 50px;" src="{{asset('uploads/'.$pf->anhnd)}}" alt="">
                <div>
                   <p style="font-size: 12px;">{{$pf->tennd}}     {{$bl->created_at}}</p>
                   <p style="font-size: 13px;">{{$bl->noidung}}</p>
                </div>
            </div>  
        @endif 
        


        @endif 
        @endforeach
        @endforeach
        </div>
        @endif
        @endforeach
        @endforeach
        </div>

        <div class="dcyt" style="margin-left: 100px;"> 
        @foreach ($baihat as $bh)
        @if($bh->id != $baihaty->id)
        @if(empty($users))
        <div>
                    <a href="{{route('videoct', $bh->id)}}">
                                <div class="video">
                                <div class="thumbnail">
                                    <img src="{{asset('uploads/'.$bh->anhbh)}}" alt="" />
                                    </div>

                                    <div class="details">
                                        <div class="author">
                                        
                                        
                                            <img src="{{asset('uploads/'.$bh->logonn)}}" alt="" />
                                    
                                        </div>
                                        <div class="title">
                                            <h3>
                                             {{$bh->tenbh}}
                                            </h3>
                                            <a href="">
                                            
                                                   {{$bh->tennn}}
                                        
                                            </a>
                                            <span> {{$bh->view_count}} Views • {{$bh->created_at}} </span>
                                        </div>
                                    </div>

                                    </div>
                                    </a>
                                   
                    </div>
                    @endif

                    @if(empty($users) != 'Null')
                    <div>
                    <a href="/videoctnd/{{$bh->id}}/user/{{$users->id}}">
                                <div class="video">
                                <div class="thumbnail">
                                    <img src="{{asset('uploads/'.$bh->anhbh)}}" alt="" />
                                    </div>

                                    <div class="details">
                                        <div class="author">
                                        
                                        
                                            <img src="{{asset('uploads/'.$bh->logonn)}}" alt="" />
                                    
                                        </div>
                                        <div class="title">
                                            <h3>
                                             {{$bh->tenbh}}
                                            </h3>
                                            <a href="">
                                            
                                                   {{$bh->tennn}}
                                        
                                            </a>
                                            <span> {{$bh->view_count}} Views • {{$bh->created_at}} </span>
                                        </div>
                                    </div>

                                    </div>
                                    </a>
                                   
                    </div>
                    @endif

                    @endif
                    
                    
                    @endforeach
                    
        </div>
    </section>
</body>
</html>