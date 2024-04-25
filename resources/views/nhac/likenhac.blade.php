<link rel="stylesheet" href="{{ asset('css/likenhac.css') }}">
@if(empty($users))
<a href="{{route('baihatview')}}">Quay lai</a>
<div style="display: flex;">

  @if(empty($likenhacs))
  @foreach($nhac as $n)

  <div style="display: flex; gap: 20px; width: 70%;">

    <a href="/ndnhomnhac/{{$n->id}}/nhac/{{$nhomnhac->id}}">
      <div style="border: 1px gray; text-align: center;">
        <div>
          <img style="width: 200px; height: 200px;" src="{{asset('uploads/'.$n->anh)}}" alt="">
        </div>
        <div>
          <p>{{$n->tenn}}</p>
          <p>{{$n->loainhac}}</p>
        </div>
      </div>
    </a>

  </div>
  @endforeach
  @endif

  @if(empty($nhach) != 'Null')
  <div style="width: 30%;">
    <div style="width: 100%;">
      <img width="400px" src="{{asset('uploads/'.$nhach->anh)}}" alt="">
      <audio controls autoplay id="myAudio" style="background: #181818; width: 400px;">
        <source src="{{asset('audio/'.$nhach->nhac)}}" type="audio/mpeg">
      </audio>
      <div style="display: flex; align-items: center; justify-content: center;">
        <div style="display: flex; gap: 40px; margin-top: 20px;">
          <p style="font-size: 20px; text-align: center;">{{$nhach->tenn}}</p>
        </div>
      </div>
    </div>
  </div>
  @endif
</div>
@endif




<!--có users-->
@if(empty($users) != 'Null')
<div style="display: flex;">
  <!--Số lượng nhạc-->
  @if(empty($nhacs) != 'Null')
  @foreach($nhacs as $n)
  @if(empty($likenhacs) != 'Null')
  @foreach($likenhacs as $lkn)
  @if($n->id == $lkn->nhac_id)
  @if($users->id == $lkn->users_id)
  <div style="display: flex; gap: 20px; width: 70%;">

    <a href="/nhacyeuthich/{{$n->id}}/user/{{$users->id}}">
      <div style="border: 1px gray; text-align: center;">
        <div>
          <img style="width: 200px; height: 200px;" src="{{asset('uploads/'.$n->anh)}}" alt="">
        </div>
        <div>
          <p>{{$n->tenn}}</p>
          <p>{{$n->loainhac}}</p>
        </div>
      </div>
    </a>

  </div>
  @endif
  @endif
  @endforeach
  @endif


  @if(empty($likenhacs))

  <div style="display: flex; gap: 20px; width: 70%;">

    <a href="/nhacyeuthich/{{$n->id}}/user/{{$users->id}}">
      <div style="border: 1px gray; text-align: center;">
        <div>
          <img style="width: 200px; height: 200px;" src="{{asset('uploads/'.$n->anh)}}" alt="">
        </div>
        <div>
          <p>{{$n->tenn}}</p>
          <p>{{$n->loainhac}}</p>
        </div>
      </div>
    </a>

  </div>

  @endif

  @endforeach
  @endif



  @if(empty($nhacs))
  <div style="width: 70%; display: flex; justify-content: center; align-items: center;">
    <div style="width: 70%;">
      @foreach ($nhac as $n)

      <div>
        <a style="text-decoration: none;" href="/nhactheonhom/{{$n->id}}/user/{{$users->id}}">
          <div style="text-align: center; display: flex; gap: 20px;">
            <div>
              <img style="width: 50px; height: 50px; margin-top: 20px;" src="{{asset('uploads/'.$n->anh)}}" alt="">
            </div>
            <div>
              <p>{{$n->tenn}}</p>
            </div>
            <div>
              <p>{{$n->loainhac}}</p>
            </div>
          </div>
        </a>
      </div>
      @endforeach
    </div>
  </div>
  @endif

  <!--nhạc chi tiết-->


  @endif

</div>

<div style="display: flex; justify-content: center; align-items: center; margin-top: 20px;">
  @if(empty($nhach) != 'Null')
  <!--nhạc chi tiết-->
  @php
  $jsonArray = json_encode($nhaci);
  @endphp

  @php
  $songTitle = json_encode($nhact);
  @endphp

  @php
  $songImage = json_encode($nhaca);
  @endphp

  <div class="card">

    <div class="top">

      <div style="width: 50%; float: left;">
        <div class="pfp">
          <div class="playing">
            <div class="greenline line-1"></div>
            <div class="greenline line-2"></div>
            <div class="greenline line-3"></div>
            <div class="greenline line-4"></div>
            <div class="greenline line-5"></div>
          </div>
        </div>
      </div>

      <div style="width: 50%; float: right; display: flex;">
        <div class="texts">
          <audio id="audio" autoplay src="{{asset('audio/'.$nhach->nhac)}}">
            <source src="{{asset('audio/'.$nhach->nhac)}}" type="audio/mpeg">
          </audio>
          <p class="title-1" id="tennhac">{{$nhach->tenn}}</p>
        </div>
        <div style="margin-left: 450px;">
          <img id="image" style="width: 50px; height: 50px;" src="{{asset('uploads/'.$nhach->anh)}}" alt="">
        </div>
      </div>

    </div>

    <div class="controls">
      <!--thanh tăng giảm âm lượng-->
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" height="20" width="24" class="volume_button">
        <path clip-rule="evenodd" d="M11.26 3.691A1.2 1.2 0 0 1 12 4.8v14.4a1.199 1.199 0 0 1-2.048.848L5.503 15.6H2.4a1.2 1.2 0 0 1-1.2-1.2V9.6a1.2 1.2 0 0 1 1.2-1.2h3.103l4.449-4.448a1.2 1.2 0 0 1 1.308-.26Zm6.328-.176a1.2 1.2 0 0 1 1.697 0A11.967 11.967 0 0 1 22.8 12a11.966 11.966 0 0 1-3.515 8.485 1.2 1.2 0 0 1-1.697-1.697A9.563 9.563 0 0 0 20.4 12a9.565 9.565 0 0 0-2.812-6.788 1.2 1.2 0 0 1 0-1.697Zm-3.394 3.393a1.2 1.2 0 0 1 1.698 0A7.178 7.178 0 0 1 18 12a7.18 7.18 0 0 1-2.108 5.092 1.2 1.2 0 1 1-1.698-1.698A4.782 4.782 0 0 0 15.6 12a4.78 4.78 0 0 0-1.406-3.394 1.2 1.2 0 0 1 0-1.698Z" fill-rule="evenodd"></path>
      </svg>
      <div class="volume">
        <input type="range" min="0" max="100" value="10" class="slider green" id="volumeSlider">
      </div>

      <!--Quay lại bài vừa nãy-->
      <svg onclick="switchToPreviousSong()" type="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" height="24" width="24">
        <path clip-rule="evenodd" d="M12 21.6a9.6 9.6 0 1 0 0-19.2 9.6 9.6 0 0 0 0 19.2Zm.848-12.352a1.2 1.2 0 0 0-1.696-1.696l-3.6 3.6a1.2 1.2 0 0 0 0 1.696l3.6 3.6a1.2 1.2 0 0 0 1.696-1.696L11.297 13.2H15.6a1.2 1.2 0 1 0 0-2.4h-4.303l1.551-1.552Z" fill-rule="evenodd"></path>
      </svg>
      <!--dừng lại và phát tiếp-->
      <svg xmlns="http://www.w3.org/2000/svg" id="playPauseButton" style="border: none;" type="button" viewBox="0 0 24 24" fill="currentColor" height="24" width="24">
        <path clip-rule="evenodd" d="M21.6 12a9.6 9.6 0 1 1-19.2 0 9.6 9.6 0 0 1 19.2 0ZM8.4 9.6a1.2 1.2 0 1 1 2.4 0v4.8a1.2 1.2 0 1 1-2.4 0V9.6Zm6-1.2a1.2 1.2 0 0 0-1.2 1.2v4.8a1.2 1.2 0 1 0 2.4 0V9.6a1.2 1.2 0 0 0-1.2-1.2Z" fill-rule="evenodd"></path>
      </svg>
      <!--Chuyển tiếp bài hát tiếp theo-->
      <svg onclick="nextSong()" type="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" height="24" width="24">
        <path clip-rule="evenodd" d="M12 21.6a9.6 9.6 0 1 0 0-19.2 9.6 9.6 0 0 0 0 19.2Zm4.448-10.448-3.6-3.6a1.2 1.2 0 0 0-1.696 1.696l1.551 1.552H8.4a1.2 1.2 0 1 0 0 2.4h4.303l-1.551 1.552a1.2 1.2 0 1 0 1.696 1.696l3.6-3.6a1.2 1.2 0 0 0 0-1.696Z" fill-rule="evenodd"></path>
      </svg>
      <!--Tim bài hát-->
      <div class="air"></div>
      <button id="repeat"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke-linejoin="round" stroke-linecap="round" stroke="currentColor" fill="none" height="20" width="24">
        <path d="M3.343 7.778a4.5 4.5 0 0 1 7.339-1.46L12 7.636l1.318-1.318a4.5 4.5 0 1 1 6.364 6.364L12 20.364l-7.682-7.682a4.501 4.501 0 0 1-.975-4.904Z"></path>
      </svg></button> 
    </div>
    <!--thanh thời gian-->
    <div id="progress-container">
      <div class="elapsed" id="progress"></div>
    </div>
    <span id="current-time" class="timetext time_now">00:00</span>
    <span class="timetext time_full" id="duration">00:00</span>

  </div>

  @endif
</div>











<script>
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
  var currentSongIndex = 0;
  var audio = document.getElementById("audio");
  var image = document.getElementById("image");

  // Hàm để chuyển sang bài hát tiếp theo
  function nextSong() {
    currentSongIndex = (currentSongIndex + 1) % songs.length;
    currentSongImage = (currentSongIndex + 1) % songImage.length;
    currentSong = (currentSongIndex + 1) % songTitle.length;
    // đường đẫn đến file nhạc
    audio.src = "{{ asset('audio/') }}/" + songs[currentSongIndex];
    image.src = "{{ asset('uploads/') }}/" + songImage[currentSongImage];
    document.getElementById('tennhac').innerText = songTitle[currentSong];
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