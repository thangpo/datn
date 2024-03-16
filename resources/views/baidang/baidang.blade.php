<style>
.status-field-container {margin-top: 20px;}
.write-post-container {color: #626262;background-color: #fff;width: 600px;padding: 20px;border-radius: 6px;}
.user-profile-box {display: flex;align-items: center;justify-content: space-between;}
.user-profile {display: flex;align-items: center;}
.user-profile img {width: 45px;border-radius: 50%;margin-right: 10px;}
.user-profile p {margin-bottom: -5px;}
.user-profile small {font-size: 12px;}
.user-profile-box {display: flex;align-items: center;justify-content: space-between;}
.user-settings .user-profile {padding: 20px;}
.user-profile div p {color: #6a6a6a;font-weight: 600;}
.user-settings .user-profile a {font-size: 13px;text-decoration: none;color: #626262;}
.status-field-container {margin-top: 20px;}
.status-field img {width: 300px;margin-top: 15px;border-radius: 6px;}
.status-field p {font-size: 14px; margin: 20px 0px 5px 0px;text-transform: capitalize;color: #626262;}
.status-field p a {color: var(--nav-color);}
.post-reaction {display: flex;align-items: center;justify-content: space-between;margin: 0px 10px;}
.activity-icons div {display: inline-flex;justify-content: center;margin-top: 10px;align-items: center;margin-right: 30px;}
.activity-icons div img {width: 18px;margin-right: 10px;}
.post-profile-picture img {width: 20px;border-radius: 50%;margin-right: 4px;}
.post-profile-picture {display: flex;align-items: center;}
.container{display: flex;justify-content: center;align-items: center;}
.write-post-container {color: #626262;background-color: var(--bg-color);width: 600px;padding: 20px;border-radius: 6px;}
.user-profile {display: flex;align-items: center;}
.user-profile img{width: 45px;border-radius: 50%;margin-right: 10px;}
.user-profile p {margin-bottom: -5px;}
.user-profile small {font-size: 12px;}
.user-profile-box {display: flex;align-items: center;justify-content: space-between;}
.user-settings .user-profile {padding: 20px;}
.user-profile div p{color: #6a6a6a;font-weight: 600;}
.user-settings .user-profile a{font-size: 13px;text-decoration: none;color: #626262;}
.post-upload-textarea{padding: 20px 0px 0px 55px;}
.post-upload-textarea textarea {width: 100%;border: 0px;outline: none;border-bottom: 1px solid #ccc;background: transparent;resize: none;}
.add-post-links {display: flex;justify-content: space-around;margin-top: 10px;}
.add-post-links a {text-decoration: none;display: flex;align-items: center;color: #626262;font-size: 13px;}
.add-post-links a img {width: 20px;margin-right: 13px;}
</style>
<div class="container">
    <div class="baidang">
    @foreach($users as $us)
    @foreach ($idol as $id)
        <a href="{{route('views', $us->id)}}">Quay về trang chủ</a>
    <div class="write-post-container">
                <div class="user-profile">
                    <img src="{{asset('uploads/'.$id->anh)}}" alt="">
                    <div>
                        <p style="margin-bottom: 10px;"> {{$id->tenid}}</p>
                    </div>
                </div>

                <div class="post-upload-textarea">
                    <a href="#"><textarea name="" placeholder="Bạn đang nghĩ gì, {{$id->tenid}}" id="" cols="30" rows="3"></textarea></a>
                    <div class="add-post-links">
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M18 7c0-1.103-.897-2-2-2H4c-1.103 0-2 .897-2 2v10c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-3.333L22 17V7l-4 3.333V7zm-1.998 10H4V7h12l.001 4.999L16 12l.001.001.001 4.999z"></path></svg>Bài đăng video</a>
                        <a href="{{route('thembd', $us->id)}}"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M11.999 7.377a4.623 4.623 0 1 0 0 9.248 4.623 4.623 0 0 0 0-9.248zm0 7.627a3.004 3.004 0 1 1 0-6.008 3.004 3.004 0 0 1 0 6.008z"></path><circle cx="16.806" cy="7.207" r="1.078"></circle><path d="M20.533 6.111A4.605 4.605 0 0 0 17.9 3.479a6.606 6.606 0 0 0-2.186-.42c-.963-.042-1.268-.054-3.71-.054s-2.755 0-3.71.054a6.554 6.554 0 0 0-2.184.42 4.6 4.6 0 0 0-2.633 2.632 6.585 6.585 0 0 0-.419 2.186c-.043.962-.056 1.267-.056 3.71 0 2.442 0 2.753.056 3.71.015.748.156 1.486.419 2.187a4.61 4.61 0 0 0 2.634 2.632 6.584 6.584 0 0 0 2.185.45c.963.042 1.268.055 3.71.055s2.755 0 3.71-.055a6.615 6.615 0 0 0 2.186-.419 4.613 4.613 0 0 0 2.633-2.633c.263-.7.404-1.438.419-2.186.043-.962.056-1.267.056-3.71s0-2.753-.056-3.71a6.581 6.581 0 0 0-.421-2.217zm-1.218 9.532a5.043 5.043 0 0 1-.311 1.688 2.987 2.987 0 0 1-1.712 1.711 4.985 4.985 0 0 1-1.67.311c-.95.044-1.218.055-3.654.055-2.438 0-2.687 0-3.655-.055a4.96 4.96 0 0 1-1.669-.311 2.985 2.985 0 0 1-1.719-1.711 5.08 5.08 0 0 1-.311-1.669c-.043-.95-.053-1.218-.053-3.654 0-2.437 0-2.686.053-3.655a5.038 5.038 0 0 1 .311-1.687c.305-.789.93-1.41 1.719-1.712a5.01 5.01 0 0 1 1.669-.311c.951-.043 1.218-.055 3.655-.055s2.687 0 3.654.055a4.96 4.96 0 0 1 1.67.311 2.991 2.991 0 0 1 1.712 1.712 5.08 5.08 0 0 1 .311 1.669c.043.951.054 1.218.054 3.655 0 2.436 0 2.698-.043 3.654h-.011z"></path></svg>Bài đăng ảnh</a>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M12 2C6.486 2 2 6.486 2 12v4.143C2 17.167 2.897 18 4 18h1a1 1 0 0 0 1-1v-5.143a1 1 0 0 0-1-1h-.908C4.648 6.987 7.978 4 12 4s7.352 2.987 7.908 6.857H19a1 1 0 0 0-1 1V18c0 1.103-.897 2-2 2h-2v-1h-4v3h6c2.206 0 4-1.794 4-4 1.103 0 2-.833 2-1.857V12c0-5.514-4.486-10-10-10z"></path></svg>Cảm nghĩ của bạn</a>
                    </div>
                </div>
            </div>
            @foreach ($baidang as $bd)
            @if($bd->users_id == $us->id)
        <div class="status-field-container write-post-container">
                <div class="user-profile-box">
                    <div class="user-profile">
                        <img src="{{asset('uploads/'.$id->anh)}}" alt="">
                        <div>
                            <p style="margin-bottom: 10px;"> {{$id->tenid}}</p>
                            <small>{{$bd->created_at}}</small>
                        </div>
                    </div>
                    <div>
                        <a href="#"><i class="fas fa-ellipsis-v"></i></a>
                    </div>
                </div>
                <div class="status-field">
                    <p>{{$bd->noidung}}</p>
                    <div class="flex" style="display: flex; gap: 10px;">
                    @php
                        $anhbd = json_decode($bd->anhbd);
                    @endphp
                    @foreach($anhbd as $anhbd)
                    <img src="{{asset('uploads/'.$anhbd)}}" alt="">
                    @endforeach
                    </div>
                </div>
                <div class="post-reaction">
                    <div class="activity-icons">
                        <div>
                            <form action="{{route('like', $bd->id)}}" method="POST">
                            @csrf
                            <button type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M20 8h-5.612l1.123-3.367c.202-.608.1-1.282-.275-1.802S14.253 2 13.612 2H12c-.297 0-.578.132-.769.36L6.531 8H4c-1.103 0-2 .897-2 2v9c0 1.103.897 2 2 2h13.307a2.01 2.01 0 0 0 1.873-1.298l2.757-7.351A1 1 0 0 0 22 12v-2c0-1.103-.897-2-2-2zM4 10h2v9H4v-9zm16 1.819L17.307 19H8V9.362L12.468 4h1.146l-1.562 4.683A.998.998 0 0 0 13 10h7v1.819z"></path></svg></button>
                            {{$bd->like_count}}
                            </form></div>
                        <div>
                        <a href="{{route('vbinhluan', $us->id)}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M5 18v3.766l1.515-.909L11.277 18H16c1.103 0 2-.897 2-2V8c0-1.103-.897-2-2-2H4c-1.103 0-2 .897-2 2v8c0 1.103.897 2 2 2h1zM4 8h12v8h-5.277L7 18.234V16H4V8z"></path><path d="M20 2H8c-1.103 0-2 .897-2 2h12c1.103 0 2 .897 2 2v8c1.103 0 2-.897 2-2V4c0-1.103-.897-2-2-2z"></path></svg></a>
                        {{$bd->binhluan_count}}</div>
                        <div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M5.5 15a3.51 3.51 0 0 0 2.36-.93l6.26 3.58a3.06 3.06 0 0 0-.12.85 3.53 3.53 0 1 0 1.14-2.57l-6.26-3.58a2.74 2.74 0 0 0 .12-.76l6.15-3.52A3.49 3.49 0 1 0 14 5.5a3.35 3.35 0 0 0 .12.85L8.43 9.6A3.5 3.5 0 1 0 5.5 15zm12 2a1.5 1.5 0 1 1-1.5 1.5 1.5 1.5 0 0 1 1.5-1.5zm0-13A1.5 1.5 0 1 1 16 5.5 1.5 1.5 0 0 1 17.5 4zm-12 6A1.5 1.5 0 1 1 4 11.5 1.5 1.5 0 0 1 5.5 10z"></path></svg>35</div>
                    </div>
                    <div class="post-profile-picture">
                        <img src="{{asset('uploads/'.$id->anh)}}" alt=""> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="m11.998 17 7-8h-14z"></path></svg>
                    </div>
                </div>
            </div>
            @endif


@endforeach
@endforeach
@endforeach
            </div>
            </div>