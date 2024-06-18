<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <!-- CSS File -->
    <link rel="stylesheet" href="styles/index.css" />
    <title>Youtube Clone with HTML & CSS</title>
    <link rel="stylesheet" href="{{ asset('css/video.css') }}">
  </head>
  <body>
      <header class="header">
 <div class="logo left">
   <i id="menu" class="material-icons">menu</i>
   <img src="https://www.freecodecamp.org/news/content/images/2022/01/yt-logo.png">
 </div>
 
 <div class="search center">
   <form action="">
     <input type="text" placeholder="Search" />
     <button><i class="material-icons">search</i></button>
   </form>
   <i class="material-icons mic">mic</i>
 </div>
 
 <div class="icons right" style="display: flex;">
   <i class="material-icons">videocam</i>
   <i class="material-icons">apps</i>

@if(empty($users) != 'Null')
   @if($thongbaond == 0)
   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);"><path d="M12 22a2.98 2.98 0 0 0 2.818-2H9.182A2.98 2.98 0 0 0 12 22zm8.707-5.707L19 14.586V10c0-3.217-2.185-5.926-5.145-6.743C13.562 2.52 12.846 2 12 2s-1.562.52-1.855 1.258C7.185 4.074 5 6.783 5 10v4.586l-1.707 1.707A.997.997 0 0 0 3 17v1a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1v-1a.997.997 0 0 0-.293-.707zM16 12H8v-2h8v2z"></path></svg>
   @else
    <a href="{{route('chitietthongbao', $users->id)}}">
      <div style="display: flex;">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(42, 42, 194, 1);"><path d="m6.516 14.323-1.49 6.452a.998.998 0 0 0 1.529 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082a1 1 0 0 0-.59-1.74l-5.701-.454-2.467-5.461a.998.998 0 0 0-1.822 0L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.214 4.107zm2.853-4.326a.998.998 0 0 0 .832-.586L12 5.43l1.799 3.981a.998.998 0 0 0 .832.586l3.972.315-3.271 2.944c-.284.256-.397.65-.293 1.018l1.253 4.385-3.736-2.491a.995.995 0 0 0-1.109 0l-3.904 2.603 1.05-4.546a1 1 0 0 0-.276-.94l-3.038-2.962 4.09-.326z"></path></svg>
        <p style="color: red;">{{$thongbaond}}</p>
      </div>
    </a> 
   @endif
@endif

@if(empty($profile))
   <i class="material-icons display-this"></i><p></p>
@endif

@if(empty($profile) != 'Null')
@foreach($profile as $pb)
   <div>
      <img style="width: 40px; height: 40px; border-radius: 50%; border: 1px solid;" src="{{asset('uploads/'.$pb->anhnd)}}" alt="">
   </div>
@endforeach
@endif

 </div>
      </header>
      <main>
          <div class="side-bar">
            <!-- <div class=”side-bar”> -->
@if(empty($users) != 'Null')
   <div class="nav">
      <a class="nav-link active" href="{{route('videond', $users->id)}}">
        <i class="material-icons">home</i>
        <span>Trang chủ</span>
      </a>


    <a class="nav-link" href="{{route('kenhdadangky', $users->id)}}">
        <i class="material-icons">subscriptions</i>
        <span>Kênh đã đăng ký</span>
    </a>


    <a class="nav-link" href="{{route('thumucvd', $users->id)}}">
       <i class="material-icons">library_add_check</i>
       <span>Thư mục video của bạn</span>
    </a>


    <a class="nav-link" href="{{route('lichsuxem', $users->id)}}">
       <i class="material-icons">history</i>
       <span>Lịch sử xem</span>
    </a>


    <a class="nav-link" href="{{route('thumucvd', $users->id)}}">
       <i class="material-icons">watch_later</i>
       <span>Xem sau</span>
    </a>


    <a class="nav-link" href="{{route('alllikevideo', $users->id)}}">
       <i class="material-icons">thumb_up</i>
       <span>Liked Videos</span>
    </a>
    @endif
  </div>
<!-- </div> -->
          </div>
          <div class="content">
          <div class="videos">
            <!-- a video starts -->
            @if(empty($users))
            @foreach ($baihat as $bh)
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
                    @endforeach
                    @endif


                    @if(empty($users) != 'Null')
                    @if(empty($likevideo))
                    @foreach ($baihat as $bh)
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
                                    <span>  {{$bh->view_count}} Views • {{$bh->created_at}} </span>
                                </div>
                            </div>

                            </div>
                            </a>
                    @endforeach
@endif

                    @if(empty($likevideo) != 'Null')
                    @foreach ($baihat as $bh)
                    @foreach ($likevideo as $lkvd)
                    @if($users->id == $lkvd->users_id && $bh->id == $lkvd->baihat_id)
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
                                      <span>  {{$bh->view_count}} Views • {{$bh->created_at}} </span>
                                  </div>
                              </div>

                              </div>
                              </a>
                              @endif
                      @endforeach
                      
                      @endforeach
                    @endif



                    @endif




            <!-- a video Ends -->
            </div>
          </div>
      </main>
  <!-- Main Body Ends -->
</body>
</html>