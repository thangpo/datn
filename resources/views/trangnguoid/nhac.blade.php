<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Spotify Clone Project</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="styles.css" />
    <style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');
* {margin: 0;padding: 0;box-sizing: border-box;font-family: 'Poppins', sans-serif;}
.App {--vertical-nav-width: 232px;--now-playing-bar-height: 11vh;width: 100vw;height: 100vh;background-color: darkgray;overflow-x: hidden;overflow-y: hidden;display: grid;grid-template-areas: "nav-bar main-view" "now-playing-bar now-playing-bar";grid-template-columns: auto 1fr;grid-template-rows: 1fr auto;position: relative;scrollbar-width: none;font-size: 16px;}
.App::-webkit-scrollbar {display: none;}
.App .test {border: 1px solid magenta;}
.App__top-bar {grid-area: main-view;height: 60px;z-index: 2;}
.App__nav-bar {grid-area: nav-bar;width: var(--vertical-nav-width);height: 100%;min-height: 100%;background-color: #000;padding-top: 24px;padding-bottom: var(--now-playing-bar-height);}
.App__logo {display: grid;place-items: center;}
.App__categories-nav {color: #c4c4c4;padding: 18px 12px;}
.App__category-item--selected {color: #fff;background-color: rgba(50, 50, 50, 0.6);border-radius: 5px;}
.App__category-item {padding: 5px 16px;display: flex;flex-direction: row;align-items: center;margin: 5px 0;}
.App__category-item .icon {width: 36px;height: 36px;display: grid;place-items: center;margin-right: 10px;}
.App__category-item .icon svg {width: 24px;height: 24px;}
.App__playlists-nav {color: #c4c4c4;padding: 18px 12px;}
.App__now-playing-bar {grid-area: now-playing-bar;background-color: #181818;border-top: 1px solid #202020;height: var(--now-playing-bar-height);z-index: 4;}
.App__main-view {grid-area: main-view;background-color: #121212;position: relative;z-index: 1;max-height: calc(100vh - var(--now-playing-bar-height));overflow-x: hidden;overflow-y: scroll;scrollbar-width: none;}
.App__main-view::-webkit-scrollbar {display: none;}
.App__header {width: 100%;height: 60px;display: flex;flex-direction: row;justify-content: space-between;padding: 16px 32px;}
.App__song-navigation {display: flex;flex-direction: row;}
.App__song-navigation-prev, .App__song-navigation-next {width: 32px;height: 32px;border-radius: 50%;background-color: rgba(0, 0, 0, 0.5);color: #fff;display: grid;place-items: center;margin-right: 16px;cursor: not-allowed;}
.App__song-navigation-prev svg, .App__song-navigation-next svg {color: #fff;}
.App__user {border: 0;display: flex;flex-direction: row;align-items: center;height: 32px;border-radius: 16px;padding: 1px;background-color: #000;}
.App__figure {width: 25px;height: 25px;background-color: #2a2a2a;border-radius: 50%;margin-right: 8px;margin-left: 2px;display: grid;place-items: center;}
.App__username {color: #fff;font-size: 0.9em;margin-right: 8px;}
.App__expand-arrow {transform: rotateZ(180deg);margin-right: 8px;}
.App__top-gradient {height: 332px;width: 100%;margin-top: -60px;background-image: linear-gradient(rgba(0, 0, 0, 0.6) 0%, #121212 100%);background-color: #5028f0;position: absolute;top: 0;right: 0;z-index: -1;}
.App__header-placeholder {height: 60px;width: 100%;}
.App__section {padding: 16px 32px;color: #fff;}
.App__quick-links-container {display: grid;grid-template-columns: repeat(auto-fill, minmax(270px, 1fr));gap: 24px;margin-top: 16px;}
.App__quick-link {background-color: #30294b;height: 80px;border-radius: 4px;display: flex;flex-direction: row;align-items: center;box-shadow: 2px 0px 10px rgba(0, 0, 0, 0.2);}
.App__quick-link-featured-img {height: 80px;width: 80px;border-radius: 4px 0 0 4px;background-color: #efefef;box-shadow: 2px 0px 10px rgba(0, 0, 0, 0.5);margin-right: 16px;background-image: linear-gradient(to bottom right, blue, white);}
.App__quick-link-featured-img:nth-of-type(1) {font-size: 2em;display: grid;place-items: center;}
.App__section-header {display: flex;flex-direction: row;justify-content: space-between;}
.App__section-header span {color: #686868;font-size: 0.8em;}
.App__section-grid-container {display: grid;grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));column-gap: 24px;margin-top: 16px;grid-template-rows: 1fr;grid-auto-rows: 0;overflow-y: hidden;}
.App__section-grid-item {background-color: #242424;width: 100%;height: auto;min-height: 150px;padding: 10%;border-radius: 4px;}
.App__section-grid-item .featured-image {width: 100%;height: 0;padding-bottom: 100%;border-radius: 4px;background-image: linear-gradient(to bottom right, blue, white);background-size: cover;margin-bottom: 16px;box-shadow: 2px 0px 10px rgba(0, 0, 0, 0.5);}
.App__section-grid-item:nth-of-type(1) .featured-image {background-image: url("https://i.scdn.co/image/239649cd6dfd2296632d269b115d1e147695a0a8");}
.App__section-grid-item:nth-of-type(2) .featured-image {background-image: url("https://i.scdn.co/image/1ec33564b0c0c1db64babdcf678a5246a4605c6f");}
.App__section-grid-item:nth-of-type(3) .featured-image {background-image: url("https://i.scdn.co/image/50a4653e91a472a85b6759225ffd5a2f71d8a9ba");}
.App__section-grid-item:nth-of-type(4) .featured-image {background-image: url("https://i.scdn.co/image/8feb7ba9f991af98307ae1de9c491c43754765dc");}
.App__section-grid-item:nth-of-type(5) .featured-image {background-image: url("https://i.scdn.co/image/15488d6d07e4d31d388be232f921569bd32d1ac3");}
.App__section-grid-item h3 {margin-bottom: 8px;}
.App__section-grid-item span {color: #686868;font-size: 0.8em;}
.function{display: flex;justify-content: center;width: auto;background-color: rgb(27, 27, 27);}
.function .music{width: 20vw;height: 11vh;display: flex;align-items: center;margin-left: 0.5vh;background-color: transparent;}
.function .music img{width:10vh;height: 10vh;border: 0px solid;border-radius: 2vh;}
.function .music .details{display: flex;flex-direction: column;justify-content: center;color: white;font-family: 'Inter', sans-serif;margin-left: 2vh;padding-bottom: 1vh;background-color: transparent;}
.function .music .details .name{font-size: 3vh;justify-content: left;display: flex;background-color: transparent;font-weight: bold;padding-left: 0px;}
.function .music .details .artist{font-size: 2vh;background-color: transparent;}
.function .music .love{background-color: transparent;}
.function .music .love img{background-color: transparent;padding: 0px;margin-left: 2vh;margin-right: 2vh;width: 4vh;height: 4vh;}
.function .playback{display: flex;flex-direction: column;justify-content: center;align-items: center;margin-top: 1vh;width: 60vw;height: 4vh;background-color: transparent;}
.function .playback .upper{width: 50vw;background-color: transparent;height: 6vh;margin-top: 3vh;margin-bottom: 1vh;display: flex;align-items: center;justify-content: center;}
.function .playback .upper img{width: 3vh;height:3vh;margin-left: 1vh;margin-right: 1vh;background-color: transparent;filter: invert();}
.function .playback .upper img.pause{width: 4vh;height: 4vh;}
.function .playback .lower{width: 50vw;background-color: transparent;display: flex;align-items: center;justify-content: center;font-family: 'Inter', sans-serif;font-size: 1.5vh;color: white;}
.function .playback .lower .line{width: 50vh;height: 1vh;background-color: white;border: 0px 0px 0px 0px solid;border-radius: 1vh;}
.function .playback .lower .text{background-color: transparent;margin-left: 1vh;margin-right: 1vh;}
.function .control{width: 20vw;height: 11vh;display: flex;flex-direction: column;align-items: center;justify-content: center;background-color: transparent;}
.function .control .images{display: flex;justify-content: center;background-color: transparent;align-items: center;}
.function .control .images img{width: 3vh;height: 3vh;background-color: transparent;filter: invert();margin-left: 1vh;margin-right: 1vh;}
.function .control .images .line{width: 13vh;height: 1vh;background-color: white;border: 0px 0px 0px 0px solid;border-radius: 1vh;padding-left: 1vh;padding-right: 1vh;}
audio {display: block;width: 100%;margin: 20px 0;padding: 10px;background: #181818;}
audio::-webkit-media-controls-panel {padding: 10px;}
audio::-webkit-media-controls-play-button {width: 50px;height: 50px;margin: 0 10px;}
audio::-webkit-media-controls-volume-slider {width: 100px;height: 5px;}
audio::-webkit-media-controls-volume-slider::-webkit-slider-thumb {width: 10px;height: 10px;}  
    </style>
  </head>
  <body>
    <div class="App">
      <div class="App__top-bar">
        <div class="App__header">
          <div class="App__song-navigation">
            <div class="App__song-navigation-prev">
              <svg role="img" focusable="false" height="24" width="24" viewBox="0 0 24 24"><polyline points="16 4 7 12 16 20" fill="none" stroke="#fff"></polyline></svg>
            </div>
            <div class="App__song-navigation-next">
              <svg role="img" focusable="false" height="24" width="24" viewBox="0 0 24 24"><polyline points="8 4 17 12 8 20" fill="none" stroke="#fff"></polyline></svg>
            </div>
          </div>
          <button class="App__user">
          @if(empty($users) != 'Null')
          @foreach ($profile as $pb)
            <div class="App__figure">
              <img style="width: 30px; height: 30px; border-radius: 50%;" src="{{asset('uploads/'.$pb->anhnd)}}" alt="">
            </div>
            <span class="App__username">{{$pb->tennd}}</span>
            <div class="App__expand-arrow">
              <svg role="img" height="16" width="16" viewBox="0 0 16 16"><path d="M13 10L8 4.206 3 10z" fill="#fff"></path></svg>
            </div>
            @endforeach
            @endif
            @if (empty($users))
            <div class="App__figure">
              <svg width="16" height="16" fill="currentColor" viewBox="0 0 18 20" xmlns="http://www.w3.org/2000/svg" data-testid="user-icon"><path d="M15.216 13.717L12 11.869C11.823 11.768 11.772 11.607 11.757 11.521C11.742 11.435 11.737 11.267 11.869 11.111L13.18 9.57401C14.031 8.58001 14.5 7.31101 14.5 6.00001V5.50001C14.5 3.98501 13.866 2.52301 12.761 1.48601C11.64 0.435011 10.173 -0.0879888 8.636 0.0110112C5.756 0.198011 3.501 2.68401 3.501 5.67101V6.00001C3.501 7.31101 3.97 8.58001 4.82 9.57401L6.131 11.111C6.264 11.266 6.258 11.434 6.243 11.521C6.228 11.607 6.177 11.768 5.999 11.869L2.786 13.716C1.067 14.692 0 16.526 0 18.501V20H1V18.501C1 16.885 1.874 15.385 3.283 14.584L6.498 12.736C6.886 12.513 7.152 12.132 7.228 11.691C7.304 11.251 7.182 10.802 6.891 10.462L5.579 8.92501C4.883 8.11101 4.499 7.07201 4.499 6.00001V5.67101C4.499 3.21001 6.344 1.16201 8.699 1.00901C9.961 0.928011 11.159 1.35601 12.076 2.21501C12.994 3.07601 13.5 4.24301 13.5 5.50001V6.00001C13.5 7.07201 13.117 8.11101 12.42 8.92501L11.109 10.462C10.819 10.803 10.696 11.251 10.772 11.691C10.849 12.132 11.115 12.513 11.503 12.736L14.721 14.585C16.127 15.384 17.001 16.884 17.001 18.501V20H18.001V18.501C18 16.526 16.932 14.692 15.216 13.717Z" fill="#fff"></path></svg>
            </div>
            <span class="App__username">Yourname</span>
            <div class="App__expand-arrow">
              <svg role="img" height="16" width="16" viewBox="0 0 16 16"><path d="M13 10L8 4.206 3 10z" fill="#fff"></path></svg>
            </div>
            @endif
          </button>
        </div>
      </div>
      <div class="App__nav-bar">
        <div class="App__logo">
             <h1 style="color: #ccc;">TG 48 MUSIC</h1>
        </div>
        <div class="App__categories-nav">
          <div class="App__category-item App__category-item--selected">
            <div class="icon"><svg viewBox="0 0 576 512" width="100" title="home">
      <path d="M280.37 148.26L96 300.11V464a16 16 0 0 0 16 16l112.06-.29a16 16 0 0 0 15.92-16V368a16 16 0 0 1 16-16h64a16 16 0 0 1 16 16v95.64a16 16 0 0 0 16 16.05L464 480a16 16 0 0 0 16-16V300L295.67 148.26a12.19 12.19 0 0 0-15.3 0zM571.6 251.47L488 182.56V44.05a12 12 0 0 0-12-12h-56a12 12 0 0 0-12 12v72.61L318.47 43a48 48 0 0 0-61 0L4.34 251.47a12 12 0 0 0-1.6 16.9l25.5 31A12 12 0 0 0 45.15 301l235.22-193.74a12.19 12.19 0 0 1 15.3 0L530.9 301a12 12 0 0 0 16.9-1.6l25.5-31a12 12 0 0 0-1.7-16.93z" fill="#fff"/>
    </svg></div>
    @if (empty($users))
    <a href="{{route('chuyenh.index')}}" style="text-decoration: none;"> <span>Home</span></a>
    @endif   
    @if(empty($users) != 'Null')
    <a href="{{route('views', $users->id)}}" style="text-decoration: none;"> <span>Home</span></a>
    @endif 
          </div>
          <div class="App__category-item">
            <div class="icon"><svg viewBox="0 0 512 512" width="100" title="search">
      <path d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z" fill="#C4C4C4"/>
    </svg></div>
            <span>Search</span>
          </div>

          @if (empty($users))
          <div class="App__category-item">
            <div class="icon"><svg width="112" height="111" viewBox="0 0 112 111" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="8" height="111" fill="#C4C4C4"/>
            <rect x="24" width="8" height="111" fill="#C4C4C4"/>
            <rect width="7.96484" height="111.503" transform="matrix(0.869849 -0.493319 0.506711 0.862116 48 14.7345)" fill="#C4C4C4"/>
            </svg>
            </div>
            <span>Your Library</span>
          </div>
          @endif

          @if (empty($users) != 'Null')
          <a href="{{route('thumucnhac', $users->id)}}">
          <div class="App__category-item">
            <div class="icon"><svg width="112" height="111" viewBox="0 0 112 111" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="8" height="111" fill="#C4C4C4"/>
            <rect x="24" width="8" height="111" fill="#C4C4C4"/>
            <rect width="7.96484" height="111.503" transform="matrix(0.869849 -0.493319 0.506711 0.862116 48 14.7345)" fill="#C4C4C4"/>
            </svg>
            </div>
            <span>Thư mục nhạc của bạn</span>
          </div>
          </a>
          @endif

        </div>
        <div class="App__playlists-nav">
        @if (empty($users))
          <div class="App__category-item">
            <div class="icon"><svg role="img" height="12" width="12" aria-hidden="true" viewBox="0 0 16 16" fill="#c4c4c4"><path d="M14 7H9V2H7v5H2v2h5v5h2V9h5z"></path><path fill="none" d="M0 0h16v16H0z"></path></svg>
             </div>
            <span>Create Playlist</span>
          </div>
        @endif

        @if (empty($users) != 'Null')
        @if (empty($nhacs) != 'Null')
        <a href="{{route('tgalbum', $nhacs->id)}}">
          <div class="App__category-item">
              <div class="icon"><svg role="img" height="12" width="12" aria-hidden="true" viewBox="0 0 16 16" fill="#c4c4c4"><path d="M14 7H9V2H7v5H2v2h5v5h2V9h5z"></path><path fill="none" d="M0 0h16v16H0z"></path></svg>
              </div>
              <span>Thêm mới một thư viện nhạc</span>
          </div>
        </a>
        @endif
        @endif



@if (empty($users))
    <div class="App__category-item">
      <div class="icon"><svg role="img" height="12" width="12" aria-hidden="true" viewBox="0 0 16 16"><path fill="none" d="M0 0h16v16H0z"></path><path d="M13.797 2.727a4.057 4.057 0 00-5.488-.253.558.558 0 01-.31.112.531.531 0 01-.311-.112 4.054 4.054 0 00-5.487.253c-.77.77-1.194 1.794-1.194 2.883s.424 2.113 1.168 2.855l4.462 5.223a1.791 1.791 0 002.726 0l4.435-5.195a4.052 4.052 0 001.195-2.883 4.057 4.057 0 00-1.196-2.883z" fill="#c4c4c4"></path></svg>
    </div>
            <span>Bài hát đã like</span>
    </div>
@endif
@if (empty($users) != 'Null')
<a href="{{route('ablikenhac', $users->id)}}">
<div class="App__category-item">
      <div class="icon"><svg role="img" height="12" width="12" aria-hidden="true" viewBox="0 0 16 16"><path fill="none" d="M0 0h16v16H0z"></path><path d="M13.797 2.727a4.057 4.057 0 00-5.488-.253.558.558 0 01-.31.112.531.531 0 01-.311-.112 4.054 4.054 0 00-5.487.253c-.77.77-1.194 1.794-1.194 2.883s.424 2.113 1.168 2.855l4.462 5.223a1.791 1.791 0 002.726 0l4.435-5.195a4.052 4.052 0 001.195-2.883 4.057 4.057 0 00-1.196-2.883z" fill="#c4c4c4"></path></svg>
    </div>
            <span>Bài hát đã like</span>
    </div>
</a>
@endif

          <div class="App__category-item">
            <div class="icon"><svg role="img" width="12" height="12" viewBox="0 0 527 483" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M1.5 264.208C1.5 119.17 118.974 1.5 264 1.5C409.026 1.5 526.5 119.17 526.5 264.208C526.5 351.905 483.535 429.569 417.628 477.247C406.996 484.938 392.595 481.729 385.684 471.362L376.758 457.971C369.699 447.382 372.818 433.617 382.485 426.529C432.426 389.914 464.783 330.851 464.783 264.208C464.783 153.128 374.839 63.1707 264 63.1707C153.161 63.1707 63.2173 153.128 63.2173 264.208C63.2173 330.851 95.5742 389.914 145.515 426.529C155.182 433.617 158.301 447.382 151.242 457.971L142.316 471.362C135.405 481.729 121.004 484.938 110.372 477.247C44.4653 429.569 1.5 351.905 1.5 264.208Z" fill="#1ED760"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M104.5 263.216C104.5 174.586 175.78 102.5 264 102.5C352.22 102.5 423.5 174.586 423.5 263.216C423.5 315.346 398.84 361.707 360.685 391.048C350.27 399.057 336.041 395.66 329.404 385.602L323.251 376.279C316.458 365.986 319.652 353.018 328.353 346.12C352.699 326.817 368.307 296.878 368.307 263.216C368.307 204.912 321.476 157.884 264 157.884C206.524 157.884 159.693 204.912 159.693 263.216C159.693 296.878 175.301 326.817 199.647 346.12C208.348 353.018 211.542 365.986 204.749 376.279L198.596 385.602C191.959 395.66 177.73 399.057 167.315 391.048C129.16 361.707 104.5 315.346 104.5 263.216Z" fill="#1ED760"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M200.5 261C200.5 226.296 229.118 198.5 264 198.5C298.882 198.5 327.5 226.296 327.5 261C327.5 295.704 298.882 323.5 264 323.5C229.118 323.5 200.5 295.704 200.5 261Z" fill="#1ED760"></path></svg>
          </div>
            <span>Chưa phát hành</span>
          </div>

        </div>
        <div class="App__divider-container"><hr></div>

      </div>


      <div class="App__now-playing-bar">
        <div class="function">
          <div class="music">
          @if (empty($nhacs))
          <img
              src="https://tse4.mm.bing.net/th?id=OIP.S2W19xappbvIzlxm-QP8WQAAAA&pid=Api&P=0&h=180"
              alt=""
            />
            <div class="details">
              <div class="name">No name</div>
              <div class="artist">No name</div>
            </div>
           @endif
           @if(empty($nhacs) != 'Null')
           <img
              src="{{asset('uploads/'.$nhacs->anh)}}"
              alt=""
            />
            <div class="details">
              <div class="name">{{$nhacs->tenn}}</div>
              <div class="artist">{{$nhacs->tacgia}}</div>
            </div>
           @endif
            <div class="love">
            @if(empty($nhacs) != 'Null')
            <div>
              <form action="{{route('likenhac', $nhacs->id)}}" method="POST">
                @csrf
                  <button type="submit"><img
                    src="https://cdn-icons-png.flaticon.com/512/2589/2589175.png"alt="love"/>
                  </button>
              </form>
            </div>
            @endif

            </div>
          </div>
          <div class="playback">
            <div class="upper">
              @if(empty($nhacs))
           
              @endif
              @if(empty($nhacs) != 'Null')
              @if(empty($users))
              <a href="{{route('randomnhacknd', $nhacs->id)}}">
              <img
                src="https://cdn-icons-png.flaticon.com/512/724/724979.png"
                alt="shuffle"
              />
              </a>
              @endif
              @if(empty($users) != 'Null')
              <a href="/randomnhac/{{$nhacs->id}}/user/{{$users->id}}">
              <img
                src="https://cdn-icons-png.flaticon.com/512/724/724979.png"
                alt="shuffle"
              />
              </a>
              @endif
              @endif
              @if(empty($nhacs))
           
              @endif
              @if(empty($nhacs) != 'Null')
              @if(empty($users))
              <a href="{{route('playpreknd', $nhacs->id)}}">
              <img
                src="https://cdn-icons-png.flaticon.com/512/3318/3318703.png"
                alt="back"
              />
              </a>
              @endif
              @if(empty($users) != 'Null')
              <a href="/playpre/{{$nhacs->id}}/user/{{$users->id}}">
              <img
                src="https://cdn-icons-png.flaticon.com/512/3318/3318703.png"
                alt="back"
              />
              </a>
              @endif
              @endif
             
              
              <a href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(238, 233, 233, 1);transform: ;msFilter:;"><path d="M16.813 4.419A.997.997 0 0 0 16 4H3a1 1 0 0 0-.813 1.581L6.771 12l-4.585 6.419A1 1 0 0 0 3 20h13a.997.997 0 0 0 .813-.419l5-7a.997.997 0 0 0 0-1.162l-5-7z"></path></svg>
              </a>
              @if(empty($nhacs))
           
              @endif
              @if(empty($nhacs) != 'Null')
              @if(empty($users))
              <a href="{{route('playnextknd', $nhacs->id)}}">
              <img
                src="https://cdn-icons-png.flaticon.com/512/4211/4211386.png"
                alt="forward"
              />
              </a>

              <a href="{{route('pastknd', $nhacs->id)}}">
              <img
                src="https://cdn-icons-png.flaticon.com/512/4146/4146819.png"
                alt="loop"
              />
              </a>
              @endif
              @if(empty($users) != 'Null')
              <a id="myButton" href="/playnext/{{$nhacs->id}}/user/{{$users->id}}">
              <img
                src="https://cdn-icons-png.flaticon.com/512/4211/4211386.png"
                alt="forward"
              />
              </a>
              <a href="/past/{{$nhacs->id}}/user/{{$users->id}}">
              <img
                src="https://cdn-icons-png.flaticon.com/512/4146/4146819.png"
                alt="loop"
              />
              </a>
              @endif
              @endif
            </div>
            <div class="lower">
            @if (empty($nhacs))
           
            @endif
            @if(empty($nhacs) != 'Null')
           
            <audio controls autoplay id="myAudio" @if(empty($loop) != 'Null'){{$loop}}@endif style="background: #181818;">
                <source src="{{asset('audio/'.$nhacs->nhac)}}" type="audio/mpeg">
            </audio>
            <script>
              var audio = document.getElementById("myAudio");
              audio.addEventListener("ended", function(){
                  var myButton = document.getElementById("myButton");
                  myButton.click();
              });
            </script>
            @endif
            </div>
          </div>
          <div class="control">
            <div class="images">
            @if(empty($nhacs) != 'Null')
              @if(empty($users))
              <a href="{{route('nhanbl', $nhacs->id)}}">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(251, 240, 240, 1);transform: ;msFilter:;"><path d="M20 2H4c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h3v3.767L13.277 18H20c1.103 0 2-.897 2-2V4c0-1.103-.897-2-2-2zm0 14h-7.277L9 18.233V16H4V4h16v12z"></path></svg>
              </a>
             
              <img
                src="https://cdn-icons-png.flaticon.com/512/98/98068.png"
                alt="queue"
              />
              <img
                src="https://cdn-icons-png.flaticon.com/512/2777/2777142.png"
                alt="device"
              />
              <img
                src="https://cdn-icons-png.flaticon.com/512/25/25695.png"
                alt="volume"
              />
              @endif
              @endif
              @if(empty($users) != 'Null')
              @if(empty($nhacs) != 'Null')
              <a href="/binhluannhac/{{$nhacs->id}}/user/{{$users->id}}">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(251, 240, 240, 1);transform: ;msFilter:;"><path d="M20 2H4c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h3v3.767L13.277 18H20c1.103 0 2-.897 2-2V4c0-1.103-.897-2-2-2zm0 14h-7.277L9 18.233V16H4V4h16v12z"></path></svg>
              </a>
              
              <a href="/abumtknd/{{$nhacs->id}}/user/{{$users->id}}">
              <img
                src="https://cdn-icons-png.flaticon.com/512/98/98068.png"
                alt="queue"
              />
              </a>
              @endif
              <img
                src="https://cdn-icons-png.flaticon.com/512/2777/2777142.png"
                alt="device"
              />
              <img
                src="https://cdn-icons-png.flaticon.com/512/25/25695.png"
                alt="volume"
              />
              @endif
              <div class="line"></div>
            </div>
          </div>
        </div>
      </div>


      
      <div class="App__main-view">
        <div class="App__top-gradient"></div>
        <div class="App__header-placeholder"></div>

        <section class="App__section App__quick-links">
          <h1>Nhóm nhạc của TG 48</h1>
          <div class="App__quick-links-container">
@foreach ($nhomnhacv as $nnv)
@if(empty($users) != 'Null')
<a href="/nhomnhacnd/{{$nnv->id}}/user/{{$users->id}}" style="text-decoration: none;">
            <div class="App__quick-link">
              <div class="App__quick-link-featured-img"><img style="width: 50px; height: 50px;" src="{{asset('uploads/'.$nnv->logonn)}}" alt=""></div>
              <span>{{$nnv->tennn}}</span>
            </div>
</a>
@endif
@if(empty($users))
<a href="{{route('nhomnhacct', $nnv->id)}}" style="text-decoration: none;">
      <div class="App__quick-link">
      <div class="App__quick-link-featured-img"><img style="width: 50px; height: 50px;" src="{{asset('uploads/'.$nnv->logonn)}}" alt=""></div>
    <span>{{$nnv->tennn}}</span>
  </div>
</a>
@endif
@endforeach
          </div>
        </section>

        <section class="App__section App__your-shows">
          <div class="App__section-header">
            <h3>Bài hát mới ra</h3>
            <span>SEE ALL</span>
          </div>
          <div class="App__section-grid-container">
          @foreach ($nhac as $n)
          @if(empty($users))
          <a href="{{route('songknd', $n->id)}}" style="text-decoration: none;">
            <div class="App__section-grid-item">
              <div class=""><img style="width: 150px; height: 150px;" src="{{asset('uploads/'.$n->anh)}}" alt=""></div>
              <h3>{{$n->tenn}}</h3>
              <span>Lượt người nghe: {{$n->view_count}}</span><br>
              <h5><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M12 4.595a5.904 5.904 0 0 0-3.996-1.558 5.942 5.942 0 0 0-4.213 1.758c-2.353 2.363-2.352 6.059.002 8.412l7.332 7.332c.17.299.498.492.875.492a.99.99 0 0 0 .792-.409l7.415-7.415c2.354-2.354 2.354-6.049-.002-8.416a5.938 5.938 0 0 0-4.209-1.754A5.906 5.906 0 0 0 12 4.595zm6.791 1.61c1.563 1.571 1.564 4.025.002 5.588L12 18.586l-6.793-6.793c-1.562-1.563-1.561-4.017-.002-5.584.76-.756 1.754-1.172 2.799-1.172s2.035.416 2.789 1.17l.5.5a.999.999 0 0 0 1.414 0l.5-.5c1.512-1.509 4.074-1.505 5.584-.002z"></path></svg>   {{$n->likenhac_count}}</h5>
              <span>{{$n->loainhac}}</span>
            </div>
          </a>
          @endif
          @if(empty($users) != 'Null')
         <a href="/songs/{{$n->id}}/user/{{$users->id}}" style="text-decoration: none;">
            <div class="App__section-grid-item">
              <div class=""><img style="width: 150px; height: 150px;" src="{{asset('uploads/'.$n->anh)}}" alt=""></div>
              <h3>{{$n->tenn}}</h3>
              <span>Lượt người nghe: {{$n->view_count}}</span><br>
              <h5><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M12 4.595a5.904 5.904 0 0 0-3.996-1.558 5.942 5.942 0 0 0-4.213 1.758c-2.353 2.363-2.352 6.059.002 8.412l7.332 7.332c.17.299.498.492.875.492a.99.99 0 0 0 .792-.409l7.415-7.415c2.354-2.354 2.354-6.049-.002-8.416a5.938 5.938 0 0 0-4.209-1.754A5.906 5.906 0 0 0 12 4.595zm6.791 1.61c1.563 1.571 1.564 4.025.002 5.588L12 18.586l-6.793-6.793c-1.562-1.563-1.561-4.017-.002-5.584.76-.756 1.754-1.172 2.799-1.172s2.035.416 2.789 1.17l.5.5a.999.999 0 0 0 1.414 0l.5-.5c1.512-1.509 4.074-1.505 5.584-.002z"></path></svg>   {{$n->likenhac_count}}</h5>
              <span>{{$n->loainhac}}</span>
            </div>
          </a>
          @endif
          @endforeach
            <div class="App__section-grid-item">
              <div class="featured-image"></div>
              <h3>Short Wave</h3>
              <span>NPR</span>
            </div>
            <div class="App__section-grid-item">
              <div class="featured-image"></div>
              <h3>Post Reports</h3>
              <span>The Washington Post</span>
            </div>
            <div class="App__section-grid-item">
              <div class="featured-image"></div>
              <h3>Planet Money</h3>
              <span>NPR</span>
            </div>
            <div class="App__section-grid-item">
              <div class="featured-image"></div>
              <h3>How I Built this...</h3>
              <span>NPR</span>
            </div>
            <div class="App__section-grid-item">
              <div class="featured-image"></div>
              <h3>TED Radio Hour</h3>
              <span>NPR</span>
            </div>
            <div class="App__section-grid-item">
              <div class="featured-image"></div>
              <h3>Short Wave</h3>
              <span>NPR</span>
            </div>
            <div class="App__section-grid-item">
              <div class="featured-image"></div>
              <h3>Post Reports</h3>
              <span>The Washington Post</span>
            </div>
            <div class="App__section-grid-item">
              <div class="featured-image"></div>
              <h3>Planet Money</h3>
              <span>NPR</span>
            </div>
            <div class="App__section-grid-item">
              <div class="featured-image"></div>
              <h3>How I Built this...</h3>
              <span>NPR</span>
            </div>
          </div>
        </section>
        <section class="App__section App__your-shows">
          <div class="App__section-header">
            <h3>Your top mixes</h3>
            <span>SEE ALL</span>
          </div>
          <div class="App__section-grid-container">
            <div class="App__section-grid-item">
              <div class="featured-image"></div>
              <h3>TED Radio Hour</h3>
              <span>NPR</span>
            </div>
            <div class="App__section-grid-item">
              <div class="featured-image"></div>
              <h3>Short Wave</h3>
              <span>NPR</span>
            </div>
            <div class="App__section-grid-item">
              <div class="featured-image"></div>
              <h3>Post Reports</h3>
              <span>The Washington Post</span>
            </div>
            <div class="App__section-grid-item">
              <div class="featured-image"></div>
              <h3>Planet Money</h3>
              <span>NPR</span>
            </div>
            <div class="App__section-grid-item">
              <div class="featured-image"></div>
              <h3>How I Built this...</h3>
              <span>NPR</span>
            </div>
            <div class="App__section-grid-item">
              <div class="featured-image"></div>
              <h3>TED Radio Hour</h3>
              <span>NPR</span>
            </div>
            <div class="App__section-grid-item">
              <div class="featured-image"></div>
              <h3>Short Wave</h3>
              <span>NPR</span>
            </div>
            <div class="App__section-grid-item">
              <div class="featured-image"></div>
              <h3>Post Reports</h3>
              <span>The Washington Post</span>
            </div>
            <div class="App__section-grid-item">
              <div class="featured-image"></div>
              <h3>Planet Money</h3>
              <span>NPR</span>
            </div>
            <div class="App__section-grid-item">
              <div class="featured-image"></div>
              <h3>How I Built this...</h3>
              <span>NPR</span>
            </div>
          </div>
        </section>
      </div>
    </div>
  </body>
</html>