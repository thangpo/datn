<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>48 MUSIC</title>
    <link rel="stylesheet" href="{{ asset('css/chitietmv.css') }}">
</head>

<body>
    <header>
        <div class="logo">
            <a href="#">TG 48 MUSIC</a>
        </div>
        <div class="search-bar">
            <input type="text" placeholder="Search">
            <button>Search</button>
        </div>
        <div class="user-profile">
            <img src="{{asset('uploads/'.$profile->anhnd)}}" style="width: 40px; height: 40px;" alt="User Avatar">
        </div>
    </header>

    <main>
        <div class="video-container">
            <div class="video-player">
                <video controls autoplay>
                    <source src="{{asset('videos/'.$baihaty->nhac)}}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="video-info">
                <h2>{{$baihaty->tenbh}}</h2>
                <p>{{$view}} views • Date {{$baihaty->created_at}}</p>
                <div class="video-actions">
                    @if(empty($view_baihat) != 'Null')
                    <!-- like -->
                    <form action="{{route('likevideo', $view_baihat->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <label class="container">
                            <input checked="checked" name="lua_chon" type="checkbox" value="1" class="input1">
                            <button type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="30px" width="30px" class="like">
                                    <path d="M8 10V20M8 10L4 9.99998V20L8 20M8 10L13.1956 3.93847C13.6886 3.3633 14.4642 3.11604 15.1992 3.29977L15.2467 3.31166C16.5885 3.64711 17.1929 5.21057 16.4258 6.36135L14 9.99998H18.5604C19.8225 9.99998 20.7691 11.1546 20.5216 12.3922L19.3216 18.3922C19.1346 19.3271 18.3138 20 17.3604 20L8 20"></path>
                                </svg>
                                <svg width="50" height="50" xmlns="http://www.w3.org/2000/svg" class="celebrate">
                                    <polygon points="0,0 10,10"></polygon>
                                    <polygon points="0,25 10,25"></polygon>
                                    <polygon points="0,50 10,40"></polygon>
                                    <polygon points="50,0 40,10"></polygon>
                                    <polygon points="50,25 40,25"></polygon>
                                    <polygon points="50,50 40,40"></polygon>
                                </svg>
                            </button>
                            {{$luot_like}}Like
                        </label>
                    </form>

                    <!-- Dislike -->
                    <form action="{{route('dislike', $view_baihat->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <label class="container2">
                            <input checked="checked" type="checkbox" name="lua_chon" class="input2" value="2">
                            <button type="submit"><svg id="Glyph" version="1.1" viewBox="0 0 32 32" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <path d="M2.156,14.901l2.489-8.725C5.012,4.895,6.197,4,7.528,4h13.473C21.554,4,22,4.448,22,5v14  c0,0.215-0.068,0.425-0.197,0.597l-5.392,7.24C15.813,27.586,14.951,28,14.027,28c-1.669,0-3.026-1.357-3.026-3.026V20H5.999  c-1.265,0-2.427-0.579-3.188-1.589C2.047,17.399,1.809,16.12,2.156,14.901z" id="XMLID_259_"></path>
                                    <path d="M25.001,20h4C29.554,20,30,19.552,30,19V5c0-0.552-0.446-1-0.999-1h-4c-0.553,0-1,0.448-1,1v14  C24.001,19.552,24.448,20,25.001,20z M27.001,6.5c0.828,0,1.5,0.672,1.5,1.5c0,0.828-0.672,1.5-1.5,1.5c-0.828,0-1.5-0.672-1.5-1.5  C25.501,7.172,26.173,6.5,27.001,6.5z" id="XMLID_260_"></path>
                                </svg></button>
                            {{$luot_dislike}}Dislike
                        </label>
                    </form>
                    @endif
                    <button>🔗 Share</button>
                    <button>💾 Save</button>
                </div>
            </div>
        </div>
        <div class="video-sidebar">
            <h3>MV Tiếp theo</h3>
            <div class="">
                <section class="container3">
                    <div class="category">
                        @foreach($baihat as $bh)
                        @if($bh->id == $baihaty->id)

                        @else
                        <a href="/videoctnd/{{$bh->id}}/user/{{$users->id}}" style="text-decoration: none;">
                            <div class="content">
                                <img src="{{asset('uploads/'.$bh->anhbh)}}" class="profile_image" />
                                <video autoplay muted loop src="{{asset('videos/'.$bh->nhac)}}"></video>
                                <div class="profile_detail">
                                    <span>{{$bh->tenbh}}</span>
                                    <p>{{$bh->tennn}}</p>
                                </div>
                            </div>
                        </a>
                        @endif
                        @endforeach
                    </div>
                </section>
            </div>
        </div>
    </main>
</body>

</html>