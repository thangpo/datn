
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
    <div style="border: 1px solid; width: 100%; height: 40px; text-align: center;">
        <a style="text-decoration: none;" href="{{route('chuyenh.index')}}">Quay về trang chủ</a><br>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M3 13h1v7c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-7h1a1 1 0 0 0 .707-1.707l-9-9a.999.999 0 0 0-1.414 0l-9 9A1 1 0 0 0 3 13zm7 7v-5h4v5h-4zm2-15.586 6 6V15l.001 5H16v-5c0-1.103-.897-2-2-2h-4c-1.103 0-2 .897-2 2v5H6v-9.586l6-6z"></path></svg>
    </div>
@if(empty($users))
@foreach ($baidang as $bd)
@foreach ($baidangs as $bds)
@if($bd->id == $bds->id)
        <div class="status-field-container write-post-container">
                <div class="user-profile-box">
                    <div class="user-profile">
                        <img src="{{asset('uploads/'.$bd->anh)}}" alt="">
                        <div>
                            <p style="margin-bottom: 10px;"> {{$bd->name}}</p>
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
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M20 8h-5.612l1.123-3.367c.202-.608.1-1.282-.275-1.802S14.253 2 13.612 2H12c-.297 0-.578.132-.769.36L6.531 8H4c-1.103 0-2 .897-2 2v9c0 1.103.897 2 2 2h13.307a2.01 2.01 0 0 0 1.873-1.298l2.757-7.351A1 1 0 0 0 22 12v-2c0-1.103-.897-2-2-2zM4 10h2v9H4v-9zm16 1.819L17.307 19H8V9.362L12.468 4h1.146l-1.562 4.683A.998.998 0 0 0 13 10h7v1.819z"></path></svg>   
                        {{$bds->like_count}}
                        </div>
                        <div>
                        <a href="{{route('binhluanv', $bd->id)}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M5 18v3.766l1.515-.909L11.277 18H16c1.103 0 2-.897 2-2V8c0-1.103-.897-2-2-2H4c-1.103 0-2 .897-2 2v8c0 1.103.897 2 2 2h1zM4 8h12v8h-5.277L7 18.234V16H4V8z"></path><path d="M20 2H8c-1.103 0-2 .897-2 2h12c1.103 0 2 .897 2 2v8c1.103 0 2-.897 2-2V4c0-1.103-.897-2-2-2z"></path></svg></a>  
                        {{$bds->binhluan_count}}
                            </div>
                        <div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M5.5 15a3.51 3.51 0 0 0 2.36-.93l6.26 3.58a3.06 3.06 0 0 0-.12.85 3.53 3.53 0 1 0 1.14-2.57l-6.26-3.58a2.74 2.74 0 0 0 .12-.76l6.15-3.52A3.49 3.49 0 1 0 14 5.5a3.35 3.35 0 0 0 .12.85L8.43 9.6A3.5 3.5 0 1 0 5.5 15zm12 2a1.5 1.5 0 1 1-1.5 1.5 1.5 1.5 0 0 1 1.5-1.5zm0-13A1.5 1.5 0 1 1 16 5.5 1.5 1.5 0 0 1 17.5 4zm-12 6A1.5 1.5 0 1 1 4 11.5 1.5 1.5 0 0 1 5.5 10z"></path></svg>35</div>
                    </div>
                    <div class="post-profile-picture">
                        <img src="{{asset('uploads/'.$bd->anh)}}" alt=""> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="m11.998 17 7-8h-14z"></path></svg>
                    </div>
                </div>
            </div>
            @endif
@endforeach
@endforeach
@endif
@if(empty($users) != 'Null')
@foreach ($baidang as $bd)
@foreach ($baidangs as $bds)
@if($bd->id == $bds->id)
        <div class="status-field-container write-post-container">
                <div class="user-profile-box">
                    <div class="user-profile">
                        <img src="{{asset('uploads/'.$bd->anh)}}" alt="">
                        <div>
                            <p style="margin-bottom: 10px;"> {{$bd->name}}</p>
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
                            {{$bds->like_count}}
                            </form>
                        </div>
                        <div>
                        <a href="/ndbinhluan/{{$bd->id}}/user/{{$users->id}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M5 18v3.766l1.515-.909L11.277 18H16c1.103 0 2-.897 2-2V8c0-1.103-.897-2-2-2H4c-1.103 0-2 .897-2 2v8c0 1.103.897 2 2 2h1zM4 8h12v8h-5.277L7 18.234V16H4V8z"></path><path d="M20 2H8c-1.103 0-2 .897-2 2h12c1.103 0 2 .897 2 2v8c1.103 0 2-.897 2-2V4c0-1.103-.897-2-2-2z"></path></svg></a>  
                        {{$bds->binhluan_count}}
                            </div>
                        <div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M5.5 15a3.51 3.51 0 0 0 2.36-.93l6.26 3.58a3.06 3.06 0 0 0-.12.85 3.53 3.53 0 1 0 1.14-2.57l-6.26-3.58a2.74 2.74 0 0 0 .12-.76l6.15-3.52A3.49 3.49 0 1 0 14 5.5a3.35 3.35 0 0 0 .12.85L8.43 9.6A3.5 3.5 0 1 0 5.5 15zm12 2a1.5 1.5 0 1 1-1.5 1.5 1.5 1.5 0 0 1 1.5-1.5zm0-13A1.5 1.5 0 1 1 16 5.5 1.5 1.5 0 0 1 17.5 4zm-12 6A1.5 1.5 0 1 1 4 11.5 1.5 1.5 0 0 1 5.5 10z"></path></svg>35</div>
                    </div>
                    <div class="post-profile-picture">
                        <img src="https://www.snh48.com/images/member/zp_10181.jpg" alt=""> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="m11.998 17 7-8h-14z"></path></svg>
                    </div>
                </div>
            </div>
            @endif
@endforeach
@endforeach
@endif
            </div>
            </div>