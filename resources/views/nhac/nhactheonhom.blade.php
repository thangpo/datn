<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/ntnn.css') }}">
</head>

<body>
    <!--Tiêu đề-->
    <div class="cf-title-11">
        <h3>XIN CHÀO MỌI NGƯỜI ĐÃ ĐẾN VỚI ÂM NHẠC {{$nhomnhac->tennn}}</h3>
    </div>
    <!--Nút quay lại-->
    <a href="{{route('hienthinus', $users->id)}}">
        <div class="buttons">
            <button class="btn"><span></span>
                <p data-start="good luck!" data-text="start!" data-title="Quay lại trang"></p>
            </button>
        </div>
    </a>
    <!--Album nhạc-->
    <div style="display: flex; gap: 40px;">
        <div>
            <h1>Album âm nhạc đinh cao</h1>
            <div class="card2">
                <div class="top">
                    <div class="pfp">
                        <div class="playing">
                            <div class="greenline line-1"></div>
                            <div class="greenline line-2"></div>
                            <div class="greenline line-3"></div>
                            <div class="greenline line-4"></div>
                            <div class="greenline line-5"></div>
                        </div>
                    </div>
                    @if(empty($nhach) != 'Null')
                    <img id="image" style="width: 60px; height: 50px;" src="{{asset('uploads/'.$nhach->anh)}}" alt="">
                    <div class="texts">
                        <p class="title-1" id="tennhac">{{$nhach->tenn}}</p>
                    </div>
                    @endif
                    <div>
                        <p style="color: #fff;">Bạn đang nghe nhạc tại TG MUSIC</p>
                    </div>
                </div>
            </div>
            @foreach($nhac as $n)
            <a style="text-decoration: none;" href="/nhactheonhom/{{$n->id}}/user/{{$users->id}}">
                <div class="card">
                    <img class="img" src="{{asset('uploads/'.$n->anh)}}" alt="">
                    <div class="textBox">
                        <div class="textContent">
                            <p class="h1" id="tenn">{{$n->tenn}}</p>
                            <span class="span">{{$nhomnhac->tennn}}</span>
                        </div>
                        <p class="p">Thể loại: {{$n->theloai}} Tác giả: {{$n->tacgia}}</p>
                        <div>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
        </div>

        <div>
            <!--Album nhạc-->
            <div id="music-player" style="width: 700px;">

                @if(empty($nhach) != 'Null')
                <img id="image" style="width: 600px; height: 350px;" src="{{asset('uploads/'.$nhach->anh)}}" alt="">
                <audio id="audio" autoplay src="{{asset('audio/'.$nhach->nhac)}}">
                    <source src="" type="audio/mpeg">
                </audio>
                @php
                $jsonArray = json_encode($nhaci);
                @endphp

                @php
                $songTitle = json_encode($nhact);
                @endphp

                @php
                $songImage = json_encode($nhaca);
                @endphp
                @endif
                <div id="progress-container">
                    <div id="progress"></div>
                </div>

                <div style="width: 700px; display: flex; gap: 90px; margin-top: 10px;">
                    <span id="current-time">00:00</span>

                    <div style="display: flex; gap: 30px;">
                        <!--quay lại bài hát-->
                        <svg onclick="switchToPreviousSong()" type="button" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
                            <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1" />
                        </svg>
                        <!--phát và dừng phát nhạc-->
                        <svg xmlns="http://www.w3.org/2000/svg" id="playPauseButton" type="button" viewBox="0 0 24 24" fill="currentColor" height="30" width="30">
                            <path clip-rule="evenodd" d="M21.6 12a9.6 9.6 0 1 1-19.2 0 9.6 9.6 0 0 1 19.2 0ZM8.4 9.6a1.2 1.2 0 1 1 2.4 0v4.8a1.2 1.2 0 1 1-2.4 0V9.6Zm6-1.2a1.2 1.2 0 0 0-1.2 1.2v4.8a1.2 1.2 0 1 0 2.4 0V9.6a1.2 1.2 0 0 0-1.2-1.2Z" fill-rule="evenodd"></path>
                        </svg>
                        <!--Chuyển bài tiếp theo-->
                        <svg onclick="nextSong()" type="button" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-right-square-fill" viewBox="0 0 16 16">
                            <path d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1" />
                        </svg>
                        <!--Tăng giảm âm lượng-->
                        <div style="display: flex; gap: 5px;">
                            <input type="checkbox" id="checkboxInput">
                            <label for="checkboxInput" class="toggleSwitch">

                                <div class="speaker"><svg xmlns="http://www.w3.org/2000/svg" version="1.0" viewBox="0 0 75 75">
                                        <path d="M39.389,13.769 L22.235,28.606 L6,28.606 L6,47.699 L21.989,47.699 L39.389,62.75 L39.389,13.769z" style="stroke:#fff;stroke-width:5;stroke-linejoin:round;fill:#fff;"></path>
                                        <path d="M48,27.6a19.5,19.5 0 0 1 0,21.4M55.1,20.5a30,30 0 0 1 0,35.6M61.6,14a38.8,38.8 0 0 1 0,48.6" style="fill:none;stroke:#fff;stroke-width:5;stroke-linecap:round"></path>
                                    </svg></div>

                                <div class="mute-speaker"><svg version="1.0" viewBox="0 0 75 75" stroke="#fff" stroke-width="5">
                                        <path d="m39,14-17,15H6V48H22l17,15z" fill="#fff" stroke-linejoin="round"></path>
                                        <path d="m49,26 20,24m0-24-20,24" fill="#fff" stroke-linecap="round"></path>
                                    </svg></div>

                            </label>
                            <input style="margin-top: 10px; height: 7px; width: 100px;" type="range" min="0" max="100" value="50" class="slider" id="volumeSlider">
                        </div>
                        <!--Tên của nhạc-->
                        @if(empty($nhach) != 'Null')
                        <div>
                            <p class="title-1" id="tennhac">{{$nhach->tenn}}</p>
                        </div>
                        @endif
                    </div>

                    <span id="duration">00:00</span>
                </div>


            </div>
            <!--kết thúc-->
        </div>

    </div>

    @if(empty($nhach) != 'Null')
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
        var tenn = document.getElementById("tenn").innerText;
        console.log(tenn);

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
    @endif
</body>

</html>