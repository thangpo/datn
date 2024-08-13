<!DOCTYPE html>
<html lang="en">

<head>
  <title>TG 48 MUSIC</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width" />
  <link rel="stylesheet" href="styles.css" />
  <link rel="stylesheet" href="{{asset('css/nhac.css')}}">
</head>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<body>
  <div class="App">
    <div class="App__top-bar">

      <div class="App__header">
        <button class="App__user">
          @if(empty($users) != 'Null')
          @foreach ($profile as $pb)
          <div class="App__figure">
            <img style="width: 30px; height: 30px; border-radius: 50%;" src="{{asset('uploads/'.$pb->anhnd)}}" alt="">
          </div>
          <span class="App__username">{{$pb->tennd}}</span>
          <div class="App__expand-arrow">
            <svg role="img" height="16" width="16" viewBox="0 0 16 16">
              <path d="M13 10L8 4.206 3 10z" fill="#fff"></path>
            </svg>
          </div>
          @endforeach
          @endif
          @if (empty($users))
          <div class="App__figure">
            <svg width="16" height="16" fill="currentColor" viewBox="0 0 18 20" xmlns="http://www.w3.org/2000/svg" data-testid="user-icon">
              <path d="M15.216 13.717L12 11.869C11.823 11.768 11.772 11.607 11.757 11.521C11.742 11.435 11.737 11.267 11.869 11.111L13.18 9.57401C14.031 8.58001 14.5 7.31101 14.5 6.00001V5.50001C14.5 3.98501 13.866 2.52301 12.761 1.48601C11.64 0.435011 10.173 -0.0879888 8.636 0.0110112C5.756 0.198011 3.501 2.68401 3.501 5.67101V6.00001C3.501 7.31101 3.97 8.58001 4.82 9.57401L6.131 11.111C6.264 11.266 6.258 11.434 6.243 11.521C6.228 11.607 6.177 11.768 5.999 11.869L2.786 13.716C1.067 14.692 0 16.526 0 18.501V20H1V18.501C1 16.885 1.874 15.385 3.283 14.584L6.498 12.736C6.886 12.513 7.152 12.132 7.228 11.691C7.304 11.251 7.182 10.802 6.891 10.462L5.579 8.92501C4.883 8.11101 4.499 7.07201 4.499 6.00001V5.67101C4.499 3.21001 6.344 1.16201 8.699 1.00901C9.961 0.928011 11.159 1.35601 12.076 2.21501C12.994 3.07601 13.5 4.24301 13.5 5.50001V6.00001C13.5 7.07201 13.117 8.11101 12.42 8.92501L11.109 10.462C10.819 10.803 10.696 11.251 10.772 11.691C10.849 12.132 11.115 12.513 11.503 12.736L14.721 14.585C16.127 15.384 17.001 16.884 17.001 18.501V20H18.001V18.501C18 16.526 16.932 14.692 15.216 13.717Z" fill="#fff"></path>
            </svg>
          </div>
          <span class="App__username">Yourname</span>
          <div class="App__expand-arrow">
            <svg role="img" height="16" width="16" viewBox="0 0 16 16">
              <path d="M13 10L8 4.206 3 10z" fill="#fff"></path>
            </svg>
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
              <path d="M280.37 148.26L96 300.11V464a16 16 0 0 0 16 16l112.06-.29a16 16 0 0 0 15.92-16V368a16 16 0 0 1 16-16h64a16 16 0 0 1 16 16v95.64a16 16 0 0 0 16 16.05L464 480a16 16 0 0 0 16-16V300L295.67 148.26a12.19 12.19 0 0 0-15.3 0zM571.6 251.47L488 182.56V44.05a12 12 0 0 0-12-12h-56a12 12 0 0 0-12 12v72.61L318.47 43a48 48 0 0 0-61 0L4.34 251.47a12 12 0 0 0-1.6 16.9l25.5 31A12 12 0 0 0 45.15 301l235.22-193.74a12.19 12.19 0 0 1 15.3 0L530.9 301a12 12 0 0 0 16.9-1.6l25.5-31a12 12 0 0 0-1.7-16.93z" fill="#fff" />
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
              <path d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z" fill="#C4C4C4" />
            </svg></div>
          <span>Search</span>
        </div>

        @if (empty($users))
        <div class="App__category-item">
          <div class="icon"><svg width="112" height="111" viewBox="0 0 112 111" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect width="8" height="111" fill="#C4C4C4" />
              <rect x="24" width="8" height="111" fill="#C4C4C4" />
              <rect width="7.96484" height="111.503" transform="matrix(0.869849 -0.493319 0.506711 0.862116 48 14.7345)" fill="#C4C4C4" />
            </svg>
          </div>
          <span>Your Library</span>
        </div>
        @endif

        @if (empty($users) != 'Null')
        <a href="{{route('thumucnhac', $users->id)}}">
          <div class="App__category-item">
            <div class="icon"><svg width="112" height="111" viewBox="0 0 112 111" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="8" height="111" fill="#C4C4C4" />
                <rect x="24" width="8" height="111" fill="#C4C4C4" />
                <rect width="7.96484" height="111.503" transform="matrix(0.869849 -0.493319 0.506711 0.862116 48 14.7345)" fill="#C4C4C4" />
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
          <div class="icon"><svg role="img" height="12" width="12" aria-hidden="true" viewBox="0 0 16 16" fill="#c4c4c4">
              <path d="M14 7H9V2H7v5H2v2h5v5h2V9h5z"></path>
              <path fill="none" d="M0 0h16v16H0z"></path>
            </svg>
          </div>
          <span>Create Playlist</span>
        </div>
        @endif

        @if (empty($users) != 'Null')
        @if (empty($nhacs) != 'Null')
        <a href="{{route('tgalbum', $users->id)}}">
          <div class="App__category-item">
            <div class="icon"><svg role="img" height="12" width="12" aria-hidden="true" viewBox="0 0 16 16" fill="#c4c4c4">
                <path d="M14 7H9V2H7v5H2v2h5v5h2V9h5z"></path>
                <path fill="none" d="M0 0h16v16H0z"></path>
              </svg>
            </div>
            <span>Thêm mới một thư viện nhạc</span>
          </div>
        </a>
        @endif
        @endif



        @if (empty($users))
        <div class="App__category-item">
          <div class="icon"><svg role="img" height="12" width="12" aria-hidden="true" viewBox="0 0 16 16">
              <path fill="none" d="M0 0h16v16H0z"></path>
              <path d="M13.797 2.727a4.057 4.057 0 00-5.488-.253.558.558 0 01-.31.112.531.531 0 01-.311-.112 4.054 4.054 0 00-5.487.253c-.77.77-1.194 1.794-1.194 2.883s.424 2.113 1.168 2.855l4.462 5.223a1.791 1.791 0 002.726 0l4.435-5.195a4.052 4.052 0 001.195-2.883 4.057 4.057 0 00-1.196-2.883z" fill="#c4c4c4"></path>
            </svg>
          </div>
          <span>Bài hát đã like</span>
        </div>
        @endif
        @if (empty($users) != 'Null')
        <a href="{{route('ablikenhac', $users->id)}}">
          <div class="App__category-item">
            <div class="icon"><svg role="img" height="12" width="12" aria-hidden="true" viewBox="0 0 16 16">
                <path fill="none" d="M0 0h16v16H0z"></path>
                <path d="M13.797 2.727a4.057 4.057 0 00-5.488-.253.558.558 0 01-.31.112.531.531 0 01-.311-.112 4.054 4.054 0 00-5.487.253c-.77.77-1.194 1.794-1.194 2.883s.424 2.113 1.168 2.855l4.462 5.223a1.791 1.791 0 002.726 0l4.435-5.195a4.052 4.052 0 001.195-2.883 4.057 4.057 0 00-1.196-2.883z" fill="#c4c4c4"></path>
              </svg>
            </div>
            <span>Bài hát đã like</span>
          </div>
        </a>
        @endif

        <div class="App__category-item">
          <div class="icon"><svg role="img" width="12" height="12" viewBox="0 0 527 483" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M1.5 264.208C1.5 119.17 118.974 1.5 264 1.5C409.026 1.5 526.5 119.17 526.5 264.208C526.5 351.905 483.535 429.569 417.628 477.247C406.996 484.938 392.595 481.729 385.684 471.362L376.758 457.971C369.699 447.382 372.818 433.617 382.485 426.529C432.426 389.914 464.783 330.851 464.783 264.208C464.783 153.128 374.839 63.1707 264 63.1707C153.161 63.1707 63.2173 153.128 63.2173 264.208C63.2173 330.851 95.5742 389.914 145.515 426.529C155.182 433.617 158.301 447.382 151.242 457.971L142.316 471.362C135.405 481.729 121.004 484.938 110.372 477.247C44.4653 429.569 1.5 351.905 1.5 264.208Z" fill="#1ED760"></path>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M104.5 263.216C104.5 174.586 175.78 102.5 264 102.5C352.22 102.5 423.5 174.586 423.5 263.216C423.5 315.346 398.84 361.707 360.685 391.048C350.27 399.057 336.041 395.66 329.404 385.602L323.251 376.279C316.458 365.986 319.652 353.018 328.353 346.12C352.699 326.817 368.307 296.878 368.307 263.216C368.307 204.912 321.476 157.884 264 157.884C206.524 157.884 159.693 204.912 159.693 263.216C159.693 296.878 175.301 326.817 199.647 346.12C208.348 353.018 211.542 365.986 204.749 376.279L198.596 385.602C191.959 395.66 177.73 399.057 167.315 391.048C129.16 361.707 104.5 315.346 104.5 263.216Z" fill="#1ED760"></path>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M200.5 261C200.5 226.296 229.118 198.5 264 198.5C298.882 198.5 327.5 226.296 327.5 261C327.5 295.704 298.882 323.5 264 323.5C229.118 323.5 200.5 295.704 200.5 261Z" fill="#1ED760"></path>
            </svg>
          </div>
          <span>Chưa phát hành</span>
        </div>

      </div>
      <div class="App__divider-container">
        <hr>
      </div>

    </div>

    <!-- thanh điều khiển nhạc -->
    <div class="App__now-playing-bar">
      <div class="function">

        @if(empty($nhacs) != 'Null')
        @php
        $jsonArray = json_encode($nhaci);
        @endphp

        @php
        $songTitle = json_encode($nhact);
        @endphp

        @php
        $songImage = json_encode($nhaca);
        @endphp
        <div id="progress-container">
          <div id="progress"></div>
        </div>

        <div class="music-player">
          <div class="album-art">
            <img id="image" src="{{asset('uploads/'.$nhacs->anh)}}" alt="Album Art">
          </div>
          <div class="song-details">
            <h3 id="tennhac" class="song-title">{{$nhacs->tenn}}</h3>
            <p class="artist-name">{{$nhomnhac->tennn}}</p>
          </div>

          <div class="controls" style="display: flex; gap: 20px;">
            <!--quay lại bài hát-->
            <svg onclick="switchToPreviousSong()" type="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" height="35" width="35">
              <path clip-rule="evenodd" d="M12 21.6a9.6 9.6 0 1 0 0-19.2 9.6 9.6 0 0 0 0 19.2Zm.848-12.352a1.2 1.2 0 0 0-1.696-1.696l-3.6 3.6a1.2 1.2 0 0 0 0 1.696l3.6 3.6a1.2 1.2 0 0 0 1.696-1.696L11.297 13.2H15.6a1.2 1.2 0 1 0 0-2.4h-4.303l1.551-1.552Z" fill-rule="evenodd"></path>
            </svg>
            <!--phát và dừng phát nhạc-->
            <label class="container">
              <input checked="checked" type="checkbox" id="playPauseButton" type="button">
              <svg viewBox="0 0 384 512" height="1em" xmlns="http://www.w3.org/2000/svg" class="play">
                <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z"></path>
              </svg>
              <svg viewBox="0 0 320 512" height="1em" xmlns="http://www.w3.org/2000/svg" class="pause">
                <path d="M48 64C21.5 64 0 85.5 0 112V400c0 26.5 21.5 48 48 48H80c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48H48zm192 0c-26.5 0-48 21.5-48 48V400c0 26.5 21.5 48 48 48h32c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48H240z"></path>
              </svg></label>
            <!--Chuyển bài tiếp theo-->
            <svg onclick="nextSong()" type="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" height="35" width="35">
              <path clip-rule="evenodd" d="M12 21.6a9.6 9.6 0 1 0 0-19.2 9.6 9.6 0 0 0 0 19.2Zm4.448-10.448-3.6-3.6a1.2 1.2 0 0 0-1.696 1.696l1.551 1.552H8.4a1.2 1.2 0 1 0 0 2.4h4.303l-1.551 1.552a1.2 1.2 0 1 0 1.696 1.696l3.6-3.6a1.2 1.2 0 0 0 0-1.696Z" fill-rule="evenodd"></path>
            </svg>
          </div>

          <!-- đây là trang nghe nhạc -->
          <audio id="audio" autoplay src="{{asset('audio/'.$nhacs->nhac)}}">
            <source src="" type="audio/mpeg">
          </audio>
          <div class="progress-bar">
            <span id="current-time">00:00</span>
            <ul class="wave-menu">
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
            </ul>
            <span id="duration">00:00</span>
          </div>

          <div style="width: 100px;">
            <button onclick="toggleDivs()" tabindex="0" class="plusButton">
              <svg class="plusIcon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30">
                <g mask="url(#mask0_21_345)">
                  <path d="M13.75 23.75V16.25H6.25V13.75H13.75V6.25H16.25V13.75H23.75V16.25H16.25V23.75H13.75Z"></path>
                </g>
              </svg>
            </button>
          </div>

          <div>
            <div title="Like" class="heart-container">
              <input id="Give-It-An-Id" class="checkbox" type="checkbox">
              <div class="svg-container">
                <svg xmlns="http://www.w3.org/2000/svg" class="svg-outline" viewBox="0 0 24 24">
                  <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Zm-3.585,18.4a2.973,2.973,0,0,1-3.83,0C4.947,16.006,2,11.87,2,8.967a4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,11,8.967a1,1,0,0,0,2,0,4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,22,8.967C22,11.87,19.053,16.006,13.915,20.313Z">
                  </path>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" class="svg-filled" viewBox="0 0 24 24">
                  <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Z">
                  </path>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" height="50" width="50" class="svg-celebrate">
                  <polygon points="10,10 20,20"></polygon>
                  <polygon points="10,50 20,50"></polygon>
                  <polygon points="20,80 30,70"></polygon>
                  <polygon points="90,10 80,20"></polygon>
                  <polygon points="90,50 80,50"></polygon>
                  <polygon points="80,80 70,70"></polygon>
                </svg>
              </div>
            </div>
          </div>

          <div>
            <label class="container2">
              <input checked="checked" type="checkbox">
              <svg onclick="repeatSong()" type="button" viewBox="0 0 576 512" height="1em" xmlns="http://www.w3.org/2000/svg" class="lock-open">
                <path d="M352 144c0-44.2 35.8-80 80-80s80 35.8 80 80v48c0 17.7 14.3 32 32 32s32-14.3 32-32V144C576 64.5 511.5 0 432 0S288 64.5 288 144v48H64c-35.3 0-64 28.7-64 64V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V256c0-35.3-28.7-64-64-64H352V144z"></path>
              </svg>
              <svg viewBox="0 0 448 512" height="1em" xmlns="http://www.w3.org/2000/svg" class="lock">
                <path d="M144 144v48H304V144c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192V144C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z"></path>
              </svg>
            </label>
          </div>

          <!-- đây là trang volum -->
          <div class="extra-controls">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" height="30" width="34" class="volume_button">
              <path clip-rule="evenodd" d="M11.26 3.691A1.2 1.2 0 0 1 12 4.8v14.4a1.199 1.199 0 0 1-2.048.848L5.503 15.6H2.4a1.2 1.2 0 0 1-1.2-1.2V9.6a1.2 1.2 0 0 1 1.2-1.2h3.103l4.449-4.448a1.2 1.2 0 0 1 1.308-.26Zm6.328-.176a1.2 1.2 0 0 1 1.697 0A11.967 11.967 0 0 1 22.8 12a11.966 11.966 0 0 1-3.515 8.485 1.2 1.2 0 0 1-1.697-1.697A9.563 9.563 0 0 0 20.4 12a9.565 9.565 0 0 0-2.812-6.788 1.2 1.2 0 0 1 0-1.697Zm-3.394 3.393a1.2 1.2 0 0 1 1.698 0A7.178 7.178 0 0 1 18 12a7.18 7.18 0 0 1-2.108 5.092 1.2 1.2 0 1 1-1.698-1.698A4.782 4.782 0 0 0 15.6 12a4.78 4.78 0 0 0-1.406-3.394 1.2 1.2 0 0 1 0-1.698Z" fill-rule="evenodd"></path>
            </svg>
            <input type="range" class="volume-slider" value="50" max="100" id="volumeSlider">
          </div>

        </div>
        @endif
      </div>
    </div>


    <div class="App__main-view">
      <div class="App__top-gradient"></div>
      <div class="App__header-placeholder"></div>
      <!-- thẻ cần hiện -->
      <div id="div2" style="display: none;">
        <div class="card">
          <span class="title">Comments</span>
          @if(empty($binhluan) != 'Null')
          <div style="height: 350px; overflow-y: auto;">
            @foreach($binhluan as $bl)
            @foreach($user as $us)
            @foreach($profiles as $pfl)
            @if($bl->users_id == $us->id && $us->id == $pfl->users_id)
            <div class="comments">
              <div class="comment-react">
                <button>
                  <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                    <path fill="#707277" stroke-linecap="round" stroke-width="2" stroke="#707277" d="M19.4626 3.99415C16.7809 2.34923 14.4404 3.01211 13.0344 4.06801C12.4578 4.50096 12.1696 4.71743 12 4.71743C11.8304 4.71743 11.5422 4.50096 10.9656 4.06801C9.55962 3.01211 7.21909 2.34923 4.53744 3.99415C1.01807 6.15294 0.221721 13.2749 8.33953 19.2834C9.88572 20.4278 10.6588 21 12 21C13.3412 21 14.1143 20.4278 15.6605 19.2834C23.7783 13.2749 22.9819 6.15294 19.4626 3.99415Z"></path>
                  </svg>
                </button>
                <hr>
                <span>14</span>
              </div>
              <div class="comment-container">
                <div class="user">
                  <div class="user-pic">
                    <img style="width: 50px; height: 50px;" src="{{asset('uploads/'.$pfl->anhnd)}}" alt="">
                  </div>
                  <div class="user-info">
                    <span>{{$pfl->tennd}}</span>
                    <p>Wednesday, March 13th at 2:45pm</p>
                  </div>
                </div>
                <p class="comment-content">
                  {{$bl->noidung}}
                </p>
              </div>
            </div>
            @endif
            @endforeach
            @endforeach
            @endforeach
          </div>
          @endif
          <div class="text-box">
            <div class="box-container">
              <textarea placeholder="bình luận"></textarea>
              <div>
                <div class="formatting">
                  <button type="button">
                    <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M5 6C5 4.58579 5 3.87868 5.43934 3.43934C5.87868 3 6.58579 3 8 3H12.5789C15.0206 3 17 5.01472 17 7.5C17 9.98528 15.0206 12 12.5789 12H5V6Z" clip-rule="evenodd" fill-rule="evenodd"></path>
                      <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M12.4286 12H13.6667C16.0599 12 18 14.0147 18 16.5C18 18.9853 16.0599 21 13.6667 21H8C6.58579 21 5.87868 21 5.43934 20.5607C5 20.1213 5 19.4142 5 18V12"></path>
                    </svg>
                  </button>
                  <button type="button">
                    <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M12 4H19"></path>
                      <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M8 20L16 4"></path>
                      <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M5 20H12"></path>
                    </svg>
                  </button>
                  <button type="button">
                    <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M5.5 3V11.5C5.5 15.0899 8.41015 18 12 18C15.5899 18 18.5 15.0899 18.5 11.5V3"></path>
                      <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M3 21H21"></path>
                    </svg>
                  </button>
                  <button type="button">
                    <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M4 12H20"></path>
                      <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M17.5 7.66667C17.5 5.08934 15.0376 3 12 3C8.96243 3 6.5 5.08934 6.5 7.66667C6.5 8.15279 6.55336 8.59783 6.6668 9M6 16.3333C6 18.9107 8.68629 21 12 21C15.3137 21 18 19.6667 18 16.3333C18 13.9404 16.9693 12.5782 14.9079 12"></path>
                    </svg>
                  </button>
                  <button type="button">
                    <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                      <circle stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277" r="10" cy="12" cx="12"></circle>
                      <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M8 15C8.91212 16.2144 10.3643 17 12 17C13.6357 17 15.0879 16.2144 16 15"></path>
                      <path stroke-linejoin="round" stroke-linecap="round" stroke-width="3" stroke="#707277" d="M8.00897 9L8 9M16 9L15.991 9"></path>
                    </svg>
                  </button>
                  <button type="submit" class="send" title="Send">
                    <svg fill="none" viewBox="0 0 24 24" height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#ffffff" d="M12 5L12 20"></path>
                      <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#ffffff" d="M7 9L11.2929 4.70711C11.6262 4.37377 11.7929 4.20711 12 4.20711C12.2071 4.20711 12.3738 4.37377 12.7071 4.70711L17 9"></path>
                    </svg>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- thẻ cần ẩn -->
      <div id="div1">
        <section class="App__section App__quick-links">
          <h1>Nhóm nhạc của TG 48</h1>
          <div class="App__quick-links-container">
            @foreach ($nhomnhacv as $nnv)
            @if(empty($users) != 'Null')
            <div class="group-item" data-nhomnhac-id="{{ $nnv->id }}" onclick="showSongs(event)" style="text-decoration: none;">
              <div class="App__quick-link">
                <div class="App__quick-link-featured-img">
                  <img style="width: 50px; height: 50px;" src="{{ asset('uploads/' . $nnv->logonn) }}" alt="">
                </div>
                <span>{{ $nnv->tennn }}</span>
              </div>
            </div>
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

        <div id="div4" style="display: none;">
          <div id="nhomnhac-list" style="color: white;"></div>
          <div id="nhac-list" style="color: white;"></div>
          <div id="songs-list"></div>
        </div>

        <div id="div3">
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
                  <h5><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                      <path d="M12 4.595a5.904 5.904 0 0 0-3.996-1.558 5.942 5.942 0 0 0-4.213 1.758c-2.353 2.363-2.352 6.059.002 8.412l7.332 7.332c.17.299.498.492.875.492a.99.99 0 0 0 .792-.409l7.415-7.415c2.354-2.354 2.354-6.049-.002-8.416a5.938 5.938 0 0 0-4.209-1.754A5.906 5.906 0 0 0 12 4.595zm6.791 1.61c1.563 1.571 1.564 4.025.002 5.588L12 18.586l-6.793-6.793c-1.562-1.563-1.561-4.017-.002-5.584.76-.756 1.754-1.172 2.799-1.172s2.035.416 2.789 1.17l.5.5a.999.999 0 0 0 1.414 0l.5-.5c1.512-1.509 4.074-1.505 5.584-.002z"></path>
                    </svg> {{$n->likenhac_count}}</h5>
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
                  <h5><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                      <path d="M12 4.595a5.904 5.904 0 0 0-3.996-1.558 5.942 5.942 0 0 0-4.213 1.758c-2.353 2.363-2.352 6.059.002 8.412l7.332 7.332c.17.299.498.492.875.492a.99.99 0 0 0 .792-.409l7.415-7.415c2.354-2.354 2.354-6.049-.002-8.416a5.938 5.938 0 0 0-4.209-1.754A5.906 5.906 0 0 0 12 4.595zm6.791 1.61c1.563 1.571 1.564 4.025.002 5.588L12 18.586l-6.793-6.793c-1.562-1.563-1.561-4.017-.002-5.584.76-.756 1.754-1.172 2.799-1.172s2.035.416 2.789 1.17l.5.5a.999.999 0 0 0 1.414 0l.5-.5c1.512-1.509 4.074-1.505 5.584-.002z"></path>
                    </svg> {{$n->likenhac_count}}</h5>
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
    </div>

  </div>

  @if(empty($nhacs) != 'Null')
  <script>
    function showSongs(event) {
      // Get the nhomnhac_id from the clicked element
      var div3 = document.getElementById("div3");
      var div4 = document.getElementById("div4");
      const nhomnhacId = event.currentTarget.dataset.nhomnhacId;

      if (div3.style.display === "none") {
        fetch(`/api/song/${nhomnhacId}`)
          .then(response => response.json())
          .then(data => {
            const songsList = document.getElementById('songs-list');
            songsList.innerHTML = ''; // Clear previous songs

            data.songs.forEach(song => {
              // Create and append song elements
              const songItem = document.createElement('div');
              songItem.textContent = song.tenn; // Replace 'title' with actual song property
              songsList.appendChild(songItem);
            });
          })
          .catch(error => console.error('Error fetching songs:', error));
      } else {
        fetch(`/api/song/${nhomnhacId}`)
          .then(response => response.json())
          .then(data => {
            const songsList = document.getElementById('songs-list');
            songsList.innerHTML = ''; // Clear previous songs

            data.songs.forEach(song => {
              // Create and append song elements
              const songItem = document.createElement('div');
              songItem.textContent = song.tenn; // Replace 'title' with actual song property
              songsList.appendChild(songItem);
            });
          })
          .catch(error => console.error('Error fetching songs:', error));
        div3.style.display = "none"; // Ẩn Div 1
        div4.style.display = "block"; // Hiển thị Div 2
      }

      // Fetch songs for the selected nhomnhac_id


    }

    function toggleDivs() {
      var div1 = document.getElementById("div1");
      var div2 = document.getElementById("div2");

      if (div1.style.display === "none") {
        div1.style.display = "block"; // Hiển thị Div 1
        div2.style.display = "none"; // Ẩn Div 2
      } else {
        div1.style.display = "none"; // Ẩn Div 1
        div2.style.display = "block"; // Hiển thị Div 2
      }
    }

    document.addEventListener('DOMContentLoaded', function() {
      var audio = document.getElementById('audio');
      var progressContainer = document.getElementById('progress-container');
      var progress = document.getElementById('progress');
      var currentTime = document.getElementById('current-time');
      var duration = document.getElementById('duration');
      var elements = document.querySelectorAll('dung');

      // Khi metadata được tải, cập nhật thời lượng bài hát
      audio.addEventListener('loadedmetadata', function() {
        duration.textContent = formatTime(audio.duration);
      });

      // Cập nhật thanh tiến trình khi bài hát phát
      audio.addEventListener('timeupdate', function() {
        var percentage = (audio.currentTime / audio.duration) * 100;
        progress.style.width = percentage + '%';
        currentTime.textContent = formatTime(audio.currentTime);
      });

      // Nhấp vào thanh tiến trình để tua bài hát
      progressContainer.addEventListener('click', function(e) {
        var percent = e.offsetX / this.offsetWidth;
        audio.currentTime = percent * audio.duration;
      });

      // Hàm định dạng thời gian từ giây sang mm:ss
      function formatTime(seconds) {
        var min = Math.floor(seconds / 60);
        var sec = Math.floor(seconds % 60);
        return min + ':' + (sec < 10 ? '0' : '') + sec;
      }
    });

    // Lấy phần tử audio
    var myAudio = document.getElementById("audio");

    document.getElementById('playPauseButton').addEventListener('click', function() {
      if (myAudio.paused) {
        myAudio.play();
      } else {
        myAudio.pause();
      }
    });

    // Lấy phần tử slider
    var volumeSlider = document.getElementById("volumeSlider");

    // Cập nhật âm lượng khi slider thay đổi
    volumeSlider.oninput = function() {
      // Giả sử bạn có một phần tử audio với id là 'myAudio'
      var audio = document.getElementById("audio");
      audio.volume = this.value / 100;
    }

    // Mảng chứa đường dẫn đến các bài hát
    var songs = <?php echo $jsonArray; ?>;
    var songTitle = <?php echo $songTitle; ?>;
    var songImage = <?php echo $songImage; ?>;
    var songId = <?php echo $nhacid; ?>;
    var currentSongIndex = 0;
    var audio = document.getElementById("audio");
    var image = document.getElementById("image");

    // Hàm để chuyển sang bài hát tiếp theo
    function nextSong() {
      currentSongIndex = (currentSongIndex + 1) % songs.length;
      currentSongImage = (currentSongIndex + 1) % songImage.length;
      currentSong = (currentSongIndex + 1) % songTitle.length;
      currentSongId = (currentSongIndex + 1) % songId.length;
      // đường đẫn đến file nhạc
      audio.src = "{{ asset('audio/') }}/" + songs[currentSongIndex];
      image.src = "{{ asset('uploads/') }}/" + songImage[currentSongImage];
      document.getElementById('tennhac').innerText = songTitle[currentSong];
      document.getElementById('tenid').innerText = songId[currentSongId];
      audio.load();
      audio.play();
      //audio.addEventListener('ended', nextSong);
    }
    // Hàm để chuyển sang bài hát vừa nghe
    function switchToPreviousSong() {
      currentSongIndex = (currentSongIndex - 1 + songs.length) % songs.length;
      currentSongImage = (currentSongIndex - 1 + songImage.length) % songImage.length;
      currentSong = (currentSongIndex - 1 + songTitle.length) % songTitle.length;
      // đường đẫn đến file nhạc
      audio.src = "{{ asset('audio/') }}/" + songs[currentSongIndex];
      image.src = "{{ asset('uploads/') }}/" + songImage[currentSongImage];
      document.getElementById('tennhac').innerText = songTitle[currentSong];
      audio.load();
      audio.play();
    }


    //Đối tượng Audio
    var repeatButton = document.getElementById('repeat'); // Nút lặp lại
    var isRepeat = false; // Trạng thái lặp lại
    var audio = document.getElementById("audio");
    // Hàm để lặp lại bài hát
    function repeatSong() {
      if (isRepeat) {
        audio.currentTime = 0; // Đặt thời gian hiện tại của bài hát về 0
        audio.play(); // Phát lại bài hát
      }
    }

    // Thêm sự kiện 'ended' cho đối tượng Audio
    audio.addEventListener('ended', repeatSong);

    // Hàm để bật/tắt chức năng lặp lại
    function toggleRepeat() {
      isRepeat = !isRepeat; // Đảo ngược trạng thái lặp lại
      if (isRepeat) {
        repeatButton.textContent = 'Tắt lặp lại';
      } else {
        repeatButton.textContent = 'Lặp lại';
      }
    }

    // Thêm sự kiện 'click' cho nút lặp lại
    repeatButton.addEventListener('click', toggleRepeat);

    //audio.addEventListener('ended', nextSong);
  </script>
  @endif
</body>

</html>