@if(empty($users) != 'Null')
<div>
    <a href="{{route('baidangnd', $userndm->id)}}">Quay về bài đăng</a>
</div>
@endif

<div style="display: flex; justify-content: center; align-items: center;">
<div style="width: 500px;">
@if(empty($users))
<a class="aidol" href="{{route('baidangall')}}">Quay lại</a>
@endif


@foreach($binhluan as $bl)
@foreach($idol as $id)
@foreach($users as $us)
@if($us->id == $bl->users_id)
<!--Nội dụng bình luận của idol-->
<div>
    <div style="width: 100%;">
    <div style="display: flex;">
    <img style="border-radius: 50%; width: 45px; height: 45px;" src="{{asset('uploads/'.$id->anh)}}" alt="">
    <div style="width: 100%;">
        <p style="font-size: 10px;">{{$id->tenid}}    <strong style="margin-left: 20px; color: blue;">Tác giả</strong></p>
        <div style="display: flex; gap: 20px;">
           <h5 style="">{{$bl->noidung}}</h5>
           <div style="display: flex; gap: 10px;">
           <!--bình luận theo idol-->
           @foreach($baidang as $db)
              <a href="/binhluantheo/{{$db->id}}/user/{{$userndm->id}}">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><circle cx="9.5" cy="9.5" r="1.5"></circle><circle cx="14.5" cy="9.5" r="1.5"></circle><path d="M12 2C6.486 2 2 5.589 2 10c0 2.908 1.897 5.515 5 6.934V22l5.34-4.004C17.697 17.852 22 14.32 22 10c0-4.411-4.486-8-10-8zm0 14h-.333L9 18v-2.417l-.641-.247C5.671 14.301 4 12.256 4 10c0-3.309 3.589-6 8-6s8 2.691 8 6-3.589 6-8 6z"></path></svg>
              
            </a>
           
            @endforeach
            <!--tim bình luận-->
            @foreach($baidang as $db)
              <form action="{{route('timbinhluan', $db->id)}}" method="POST">
              @csrf 
              <input type="text" style="position: absolute; left: -999px;" name="idol_id" value="{{$us->id}}">
              <input type="text" name="users_id" value="{{$userndm->id}}" style="position: absolute; left: -999px;">
              <button type="submit">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M20.205 4.791a5.938 5.938 0 0 0-4.209-1.754A5.906 5.906 0 0 0 12 4.595a5.904 5.904 0 0 0-3.996-1.558 5.942 5.942 0 0 0-4.213 1.758c-2.353 2.363-2.352 6.059.002 8.412L12 21.414l8.207-8.207c2.354-2.353 2.355-6.049-.002-8.416z"></path></svg>
              </button>
              @foreach($likebinhluan as $bllk)
                {{$bllk->viewtim}}
              @endforeach
              </form>
              @endforeach
           </div>
        </div>
    </div>
    </div>
    </div>

    <!--trả lời bình luận -->
    @foreach($binhluanid as $blid)
    @foreach($profile as $pr)
    @if($pr->users_id == $blid->users_id)
    <div>
        <div style="margin-left: 50px;">
            <div style="display: flex;">
                <img style="border-radius: 50%; width: 45px; height: 45px;" src="{{asset('uploads/'.$pr->anhnd)}}" alt="">
                <div>
                    <p style="font-size: 10px;">{{$pr->tennd}} <strong style="color: red; margin-left: 20px;">Trả lời</strong><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M5.536 21.886a1.004 1.004 0 0 0 1.033-.064l13-9a1 1 0 0 0 0-1.644l-13-9A1 1 0 0 0 5 3v18a1 1 0 0 0 .536.886z"></path></svg>  <strong style="color: blue;">{{$id->tenid}}</strong></p>
                    <h5 style="display: flex; gap: 40px;">{{$blid->binhluan}} <a style="font-size: 14px; text-decoration: none;" href="">trả lời</a></h5>
                </div>
            </div>
            <div>
                <p></p>
            </div>
        </div>
    </div>
    @endif
    @endforeach
    @endforeach
</div>

@endif
@endforeach
@endforeach
@foreach($profile as $pr)
@if($pr->users_id == $bl->users_id)
<!--Người dùng bình luận-->
<div>
    <div style="display: flex; gap: 10px; margin-top: 20px;">
    <div style="display: flex;">
    <img style="border-radius: 50%; width: 45px; height: 45px;" src="{{asset('uploads/'.$pr->anhnd)}}" alt="">
    <div>
        <p style="font-size: 10px;">{{$pr->tennd}}</p>
        <h5 class="card-title">{{$bl->noidung}}</h5>
    </div>
    </div>
    </div>
</div>
@endif
@endforeach
@endforeach



<!--bình luận-->
@if(empty($usernd))
<li class="liidol"><a class="aidol" href="{{route('login')}}">Đăng nhập để bình luận</a></li>
@endif

@if(empty($usernd) != 'Null')
@foreach($usernd as $us)
@foreach($baidang as $bd)
@if(empty($traloi))
<form action="{{route('binhluan', $bd->id)}}" method="POST"  style="margin-top: 30px;">
    @csrf 
    <div class="form-group" style="width: 1px; height: 1px;">
    <strong>id</strong>
    @foreach ($usernd as $us)
        <input type="text" name="users_id" value="{{$us->id}}" style="position: absolute; left: -999px;">
    @endforeach
        </div>
     <div class="form-group">
        <input type="text" name="noidung" placeholder="Viết bình luận" style="width: 100%; height: 40px; border-bottom: none; border-left: none; border-right: none;">
     </div>
     <button type="submit" style="position: absolute; left: -999px;">Gửi</button>
</form>
@endif

<!--trả lời bình luận-->
@if(empty($traloi) != 'Null')
@foreach($users as $usid)
<form action="{{route('binhluantheoid', $bd->id)}}" method="POST" style="margin-top: 30px;">
@csrf
    <input type="text" style="position: absolute; left: -999px;" name="idol_id" value="{{$usid->id}}">
    <input type="text" name="users_id" value="{{$us->id}}" style="position: absolute; left: -999px;">
    <input type="text" name="binhluan" placeholder="trả lời bình luận {{$id->tenid}}" style="width: 100%; height: 40px; border-bottom: none; border-left: none; border-right: none;">
    <button type="submit" style="position: absolute; left: -999px;">Gửi</button>
</form>
@endforeach
@endif

@endforeach
@endforeach
@endif
</div>
</div>