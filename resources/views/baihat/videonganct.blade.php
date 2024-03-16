<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TikTok</title>
    <style>
      * {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  height: 100vw;
  display: flex;
  flex-direction: column;
  font-family: sans-serif;
  background-color: #fff;
  overflow: hidden;
}

.navbar {
  display: flex;
  justify-content: space-around;
  align-items: center;
  height: 4rem;
  border-bottom: 1px solid rgb(200, 200, 200);
}

.logo {
  height: 140px;
  width: 180px;
}

.logo:hover {
  cursor: pointer;
}

.search-bar {
  display: flex;
}

.search-input {
  outline: none;
  background-color: rgb(235, 235, 235);
  border: none;
  border-top-left-radius: 50px;
  border-bottom-left-radius: 50px;
  height: 3rem;
  width: 17rem;
  text-indent: 20px;
  font-size: 15px;
}

.search-btn {
  position: relative;
  background-color: rgb(235, 235, 235);
  border: 1px solid rgb(200, 200, 200);
  border-left: none;
  border-top-right-radius: 50px;
  border-bottom-right-radius: 50px;
  width: 3rem;
  height: 3rem;
  border: none;
}

.search-btn:hover {
  background-color: rgb(220, 220, 220);
  cursor: pointer;
}

.search-btn::before {
  content: "";
  height: 70%;
  width: 1px;
  position: absolute;
  right: 100%;
  top: 15%;
  background-color: rgb(200, 200, 200);
}

.search-btn > i {
  color: rgb(180, 180, 180);
}

.nav-right {
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 15rem;
  margin-right: 4rem;
}

.upload-btn {
  background-color: transparent;
  border: none;
  color: #000;
  font-size: 0.9rem;
  font-weight: 600;
}

.upload-btn:hover {
  text-decoration: underline;
  cursor: pointer;
}

.login-btn {
  height: 2.3rem;
  width: 6rem;
  color: #fff;
  background-color: rgb(254, 44, 85);
  border: none;
  border-radius: 5px;
  font-size: 1rem;
  font-weight: 600;
}

.login-btn:hover {
  background-color: rgb(233, 37, 76);
  cursor: pointer;
}

.drop-down {
  background-color: transparent;
  border: none;
  position: relative;
}

.drop-down:hover {
  cursor: pointer;
}

.menu {
  position: absolute;
  top: 200%;
  right: 0;
  background-color: #fff;
  width: 14rem;
  border-radius: 5px;
  box-shadow: 5px 3px 5px 5px rgba(0, 0, 0, 0.097);
}

ul {
  display: flex;
  flex-direction: column;
  justify-content: space-evenly;
  align-items: center;
  list-style-type: none;
  height: 100%;
}

li {
  margin-top: 0.25rem;
  margin-bottom: 0.25rem;
  padding-top: 0.5rem;
  height: 2.5rem;
  width: 100%;
}

li:hover {
  background-color: rgb(245, 245, 245);
}

li > a {
  text-decoration: none;
  font-weight: 600;
  font-size: 0.9rem;
  color: #000;
}

li > a > i {
  margin-left: 1rem;
  margin-right: 1rem;
}

.hidden {
  display: none;
}

main {
  display: flex;
  width: 100vw;
}

.left {
  flex: 0.35;
  height: 90vh;
  overflow-y: hidden;
  overflow-x: hidden;
}

.left:hover {
  overflow-y: scroll;
}

.btns {
  display: flex;
  flex-direction: column;
  border-bottom: 1px solid rgb(200, 200, 200);
  padding-bottom: 1rem;
  margin-top: 1rem;
  margin-left: 8rem;
  margin-right: 1rem;
  width: 90%;
}

.btns > a {
  text-decoration: none;
  font-size: 1.2rem;
  color: rgb(22, 24, 35);
  font-weight: 600;
  padding-top: 1rem;
  padding-bottom: 1rem;
  padding-left: 1rem;
  border-radius: 5px;
}

.btns > a:hover {
  background-color: rgb(245, 245, 245);
}

.btns > a:first-child > i, .btns > a:first-child > span {
  color: rgb(254, 44, 85);
}

.btns > a > i {
  margin-right: 1rem;
}

.login {
  margin-top: 1rem;
  border-bottom: 1px solid rgb(200, 200, 200);
  padding-bottom: 1rem;
  margin-left: 8rem;
  margin-right: 1rem;
  width: 90%;
}

.login > p {
  color: rgba(22, 24, 35, 0.5);
  font-size: 0.9rem;
  line-height: 25px;
  width: 70%;
}

.login > button {
  margin-top: 1rem;
  background-color: transparent;
  border: 1px solid rgb(254, 44, 85);
  font-size: 1.2rem;
  font-weight: 600;
  color: rgb(254, 44, 85);
  cursor: pointer;
  border-radius: 5px;
  height: 3rem;
  width: 70%;
}

.login > button:hover {
  background-color: rgba(245, 44, 86, 0.05);
}

.accounts {
  display: flex;
  flex-direction: column;
  border-bottom: 1px solid rgb(200, 200, 200);
  padding-bottom: 1rem;
  margin-left: 8rem;
  margin-right: 1rem;
  width: 90%;
}

.accounts > p {
  margin-top: 1rem;
  color: rgb(22, 24, 35, 0.75);
  font-size: 0.8rem;
  font-weight: 600;
  margin-bottom: 1rem;
}

.user {
  display: flex;
  align-items: center;
  border-radius: 5px;
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  padding-left: 1rem;
}

.user:hover {
  background-color: rgb(245, 245, 245);
  cursor: pointer;
}

.user > img {
  height: 30px;
  width: 30px;
  border-radius: 50%;
  border: 0.5px solid #000;
}

.user > h6 {
  font-size: 0.9rem;
  font-weight: 600;
  margin-left: 1rem;
}

.tags {
  border-bottom: 1px solid rgb(200, 200, 200);
    padding-bottom: 1rem;
    margin-top: 1rem;
    margin-left: 8rem;
    margin-right: 1rem;
    width: 70%;
}

.tags > p {
    margin-top: 1rem;
    color: rgba(22,24,35,0.75);
    font-size: 0.8rem;
    font-weight: 600;
    margin-bottom: 1rem;
}

.tags > div {
    display: flex;
    flex-wrap: wrap;
    row-gap: 10px;
    column-gap: 5px;
}

.tags > div > a {
    text-decoration: none;
    color: rgba(22,24,35,0.75);
    font-size: 0.9rem;
    border: 1px solid rgb(200, 200, 200);
    border-radius: 5px;
    padding-left: 0.5rem;
    padding-right: 0.5rem;
}

.tags > div > a:hover {
    background-color: rgb(245, 245, 245);
}

.links {
    padding-bottom: 1rem;
    margin-top: 1rem;
    margin-left: 8rem;
    margin-right: 1rem;
    width: 60%;
}

.links > div {
    display: flex;
    flex-direction: column;
}

.link {
    display: flex;
    flex-wrap: wrap;
    row-gap: 10px;
    column-gap: 5px;
}

.link > a {
    font-size: 0.8rem;
    text-decoration: none;
    color: rgb(80,80,80);
}

.link > a:hover {
    text-decoration: underline;
}

.copyright {
    margin-top: 1rem;
    color: rgb(80,80,80);
}

::-webkit-scrollbar {
    width: 5px;
}

::-webkit-scrollbar-thumb {
    background-color: rgba(22,24,35,0.06);
}

.right {
    flex: 0.65;
    height: 90vh;
    overflow-y: scroll;
}

.post {
    margin-top: 2rem;
    margin-right: 4rem;
    height: 38rem;
    width: 80%;
    border-bottom: 1px solid rgb(200, 200, 200);
}

.post-info {
    display: flex;
    justify-content: space-between;
}

.post-info > .user:hover {
    background-color: transparent;
}

.post-info > .user > img {
    height: 60px;
    width: 60px;
}

.post-info > .user > div {
    display: flex;
    flex-direction: column;
    justify-content: space-evenly;
    height: 100%;
    margin-left: 0.5rem;
}

.post-info > .user > div > h6 {
    font-size: 1rem;
}

.post-info > .user > div > h6:hover {
    text-decoration: underline;
}

.post-info > .user > div > p {
    font-size: 0.8rem;
    font-weight: 600;
}
.post-info > button {margin-top: 1rem;background-color: transparent;border: 1px solid rgb(254,44,85);color: rgb(254, 44, 85);font-size: 0.9rem;font-weight: 600;cursor: pointer;border-radius: 5px;height: 1.7rem;width: 5.7rem;}
.post-info > button:hover {background-color: rgba(254,44,86,0.05);}
.post-content {display: flex;width: 20rem;margin-bottom: 1rem;position: relative;}
.post-content > video {width: 90%;border-radius: 10px;margin-left: 5rem;}
.video-icons {position: absolute;top: 55%;left: 120%;}
.video-icons > a {display: flex;flex-direction: column;align-items: center;justify-content: center;color: #000;text-decoration: none;}
.video-icons > a > i {display: flex;align-items: center;justify-content: center;background-color: rgb(245, 245, 245);border-radius: 50%;height: 50px;width: 50px;}
.video-icons > a > i:hover {background-color: rgb(230,230,230);}
.video-icons > a > span {font-size: 0.7rem;color: rgb(80,80,80);font-weight: 600;margin-bottom: 0.7rem;}
video::-webkit-media-controls-fullscreen-button,video::-webkit-media-controls-current-time-display,video::-webkit-media-controls-time-remaining-display {display: none;}
@media (max-width: 1000px) {body {overflow-x: hidden ;}.search-bar {display: none;}
.menu {z-index: 10;}
.left {flex: 0.1;border: none;border-right: 1px solid rgb(200, 200, 200);}
.left:hover {overflow: hidden;} 
.right {flex: 0.9;}
.btns {margin: 0;align-items: center;}
.btns > a > span {display: none;}
.login {display: none;}
.accounts {margin: 0;border: none;align-items: center;}
.accounts > p {display: none;}
.accounts > .user > h6 {display: none;}
.user {padding-left: 0;}
.tags {display: none;}
.links {display: none;}
.post-content > video {margin-left: 2rem;}
.video-icons {left: 100%;}}
    </style>
    <script
      src="https://kit.fontawesome.com/1a015cf62c.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <header>
      <nav class="navbar">
        <img class="logo" src="assets/logo.png" alt="Tiktok" />
        <div class="search-bar">
          <input
            type="text"
            class="search-input"
            placeholder="Search accounts and videos"
          />
          <button class="search-btn">
            <i class="fas fa-search"></i>
          </button>
        </div>

        <div class="nav-right">
          <button class="upload-btn">Upload video cảu bạn</button>
          <div class="drop-down">
            <i class="fas fa-ellipsis-v fa-lg"></i>
            <div class="menu hidden">
              <ul>
                <li>
                  <a href="#"><i class="fas fa-font fa-lg"></i> English</a>
                </li>
                <li>
                  <a href="#"
                    ><i class="far fa-question-circle fa-lg"></i>

                    Feedbackg and help</a
                  >
                </li>
                <li>
                  <a href="#"
                    ><i class="far fa-keyboard fa-lg"></i>Keyboard shortcuts</a
                  >
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </header>

    <main>
        <div class="left">
            <div class="btns">
              <!--Trang chủ-->
                <a href="{{route('views', $users->id)}}"><i class="fas fa-home"></i> <span>Quay về</span></a>
              <!--Số lượng follow-->  
                <a href="#"><i class="fas fa-user-friends"></i> <span>Người bạn theo dõi</span></a>
              </div>
            <div class="accounts">
                <p>Đề suất cho bạn</p>
                <div class="user">
                    <img src="assets/Cat.png" alt="avatar">
                    <h6 class="username">Cheshire_Cat</h6>
                </div>
                <div class="user">
                    <img src="assets/Frankenstein.png" alt="avatar">
                    <h6 class="username">Frank</h6>
                </div>
                <div class="user">
                    <img src="assets/Pirate.png" alt="avatar">
                    <h6 class="username">Pirate</h6>
                </div>
                <div class="user">
                    <img src="assets/Gypsy.png" alt="avatar">
                    <h6 class="username">Gypsy</h6>
                </div>
            </div>
            <div class="links">
                <div>
                    <div class="link">
                        <a href="#">About</a>
                        <a href="#">Newsroom</a>
                        <a href="#">Contact</a>
                        <a href="#">Careers</a>
                        <a href="#">ByteDance</a>
                        <a href="#">About</a>
                        <a href="#">Newsroom</a>
                        <a href="#">Contact</a>
                        <a href="#">Careers</a>
                        <a href="#">ByteDance</a>
                    </div>
                    <div class="copyright">
                        <h6>&copy; 2022 TikTok</h6>
                    </div>
                </div>
            </div>
        </div>


        <!--có idol id-->
        @if(empty($idol) != 'Null')
        <div class="right">


            <div class="post">
                <div class="post-info">
                    <div class="user">
                        <img src="{{asset('uploads/'.$idol->anh)}}" alt="avatar">
                        <div>
                            <h6>{{$idol->tenid}}</h6>
                            <p>{{$videongan->tieude}}</p>
                        </div>
                    </div>
                    <button>Follow</button>
                </div>
                <div class="post-content">
                    <video autoplay muted controls loop disablepictureinpicture controlslist="nodownload noplaybackrate" style="height: 500px;">
                        <source src="{{asset('videos/'.$videongan->video)}}" type="video/mp4">
                    </video>
                    <div class="video-icons">
                        <a href="#"><i class="fas fa-heart fa-lg"></i><span>1.6K</span></a>
                        <a href="#"><i class="fas fa-comment-dots fa-lg"></i><span>423</span></a>
                        <a href="#"><i class="fas fa-share fa-lg"></i> <span>150</span></a>
                    </div>
                </div>
            </div>



@foreach($videongans as $vdns)
            <div class="post">
                <div class="post-info">
                    <div class="user">
                        <img src="{{asset('uploads/'.$idol->anh)}}" alt="avatar">
                        <div>
                        <h6>{{$idol->tenid}}</h6>
                        <p>{{$vdns->tieude}}</p>
                        </div>
                    </div>
                    <button>Follow</button>
                </div>
                <div class="post-content">
                    <video autoplay muted controls loop disablepictureinpicture controlslist="nodownload noplaybackrate" style="height: 500px;">
                        <source src="{{asset('videos/'.$vdns->video)}}" type="video/mp4">
                    </video>
                    <div class="video-icons">
                        <a href="#"><i class="fas fa-heart fa-lg"></i><span>1.6K</span></a>
                        <a href="#"><i class="fas fa-comment-dots fa-lg"></i><span>423</span></a>
                        <a href="#"><i class="fas fa-share fa-lg"></i> <span>150</span></a>
                    </div>
                </div>
            </div>
@endforeach

        </div>
@endif



<!--ko có idol-->
@if(empty($idol))
        <div class="right">
@foreach($videongan as $vdns)
@foreach($videongans as $vdn)
@if($vdn->id == $vdns->id)

            <div class="post">
                <div class="post-info">
                    <div class="user">
                        <img src="{{asset('uploads/'.$vdns->anh)}}" alt="avatar">
                        <div>
                        <h6>{{$vdns->tenid}}</h6>
                        <p>{{$vdns->tieude}}</p>
                        </div>
                    </div>
                    <button>Follow</button>
                </div>
                <div class="post-content">
                    <video autoplay muted controls loop disablepictureinpicture controlslist="nodownload noplaybackrate" style="height: 500px;">
                        <source src="{{asset('videos/'.$vdns->video)}}" type="video/mp4">
                    </video>

<!--kiểm tra tim video-->
@foreach ($videon_id as $vdid)
@if($vdid == $vdns->id)
<div style="width: 50px; height: 50px; border-radius: 50%; border: none; margin-left: 50px;">
  <a href="/bolikevideongan/{{$vdns->id}}/user/{{$users->id}}">
    bỏ tim
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(228, 9, 9, 1);transform: ;msFilter:;"><path d="M20.205 4.791a5.938 5.938 0 0 0-4.209-1.754A5.906 5.906 0 0 0 12 4.595a5.904 5.904 0 0 0-3.996-1.558 5.942 5.942 0 0 0-4.213 1.758c-2.353 2.363-2.352 6.059.002 8.412L12 21.414l8.207-8.207c2.354-2.353 2.355-6.049-.002-8.416z"></path></svg>
  </a>
</div>
@endif
                    <div class="video-icons">
                    <form action="/likevideongan/{{$vdns->id}}/user/{{$users->id}}" method="POST">
                    @csrf
                        <button style="width: 50px; height: 50px; border-radius: 50%; border: none;" type="submit"><i class="fas fa-heart fa-lg"></i><br><span>{{$vdn->likevideon_count}}</span></button>
                    </form>

                    <!--comment-->
                        <a href="/binhluanvideon/{{$vdns->id}}/user/{{$users->id}}" style="margin: 5px;"><i class="fas fa-comment-dots fa-lg"></i><span>{{$vdn->binhluanvdngan_count}}</span></a>


                        <a href="#"><i class="fas fa-share fa-lg"></i> <span>150</span></a>
                    </div>

@endforeach
                </div>
            </div>

@endif
@endforeach
@endforeach
        </div>
@endif



    </main>

<script>
const menu = document.querySelector(".menu")
const dropDown = document.querySelector(".drop-down")

dropDown.addEventListener("mouseenter", () => {
    menu.classList.remove("hidden")
})

menu.addEventListener("mouseleave", () => {
    menu.classList.add("hidden")
})

let video = document.querySelectorAll("video")
video.forEach(video => {
    let playPromise = video.play()
    if(playPromise !== undefined) {
        playPromise.then(() => {
            let observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    video.muted = false
                    if(entry.intersectionRatio !== 1 && !video.paused){
                        video.pause()
                    } else if (entry.intersectionRatio > 0.5 && video.paused) {
                        video.play()
                    }
                })
            }, {threshold: 0.5})
            observer.observe(video)
        })
    }
})
    </script>
  </body>
</html>