<div style="display: flex; align-items: center; justify-content: center; gap: 50px;">


    <div style="width: 500px; display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 10px;">
        <div style="text-align: center;">
            <p>Lượt thích</p>
            @foreach ($nhac as $n)
            @if($nhacs->id == $n->id)
            <p>{{$n->likenhac_count}}</p>
            @endif
            @endforeach
        </div>
        <div style="text-align: center;">
            <p>{{$nhacs->tenn}}</p>
               <img style="width: 200px;" src="{{asset('uploads/'.$nhacs->anh)}}" alt="">
               <audio controls autoplay>
                <source src="{{asset('audio/'.$nhacs->nhac)}}" type="audio/mpeg">
            </audio>
            <p>{{$nhacs->loainhac}}</p>
            <div style="display: flex; justify-content: center; align-items: center;">
            <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 5px; width: 100px;">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M18.464 2.114a.998.998 0 0 0-1.033.063l-13 9a1.003 1.003 0 0 0 0 1.645l13 9A1 1 0 0 0 19 21V3a1 1 0 0 0-.536-.886zM17 19.091 6.757 12 17 4.909v14.182z"></path></svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M19 7a1 1 0 0 0-1-1h-8v2h7v5h-3l3.969 5L22 13h-3V7zM5 17a1 1 0 0 0 1 1h8v-2H7v-5h3L6 6l-4 5h3v6z"></path></svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M5.536 21.886a1.004 1.004 0 0 0 1.033-.064l13-9a1 1 0 0 0 0-1.644l-13-9A.998.998 0 0 0 5 3v18a1 1 0 0 0 .536.886zM7 4.909 17.243 12 7 19.091V4.909z"></path></svg>
            </div>      
            </div>
        </div>
        <div style="text-align: center;">
            <p>Lượt Nghe</p>
            <p>{{$nhacs->view_count}}</p>
        </div>
    </div>


<!--Xem bình luận-->
@foreach($profile as $pf)
@foreach($binhluan as $bl)
@if($bl->nhac_id == $nhacs->id)
    <div style="width: 500px; height: 350px;">
    <p style="font-size: 25px;">Bình luận người dùng</p>
        <div style="overflow:auto;">
            <div style="display: flex;">
                <img style="width: 40px; height: 40px; border-radius: 50%; margin-left: 20px; margin-top: 5px;" src="{{asset('uploads/'.$pf->anhnd)}}" alt="">
                <div style="font-size: 10px;">
                <p>{{$pf->tennd}}</p>
                <p style="font-size: 15px;">{{$bl->noidung}}</p>
                </div>
            </div>
        </div>
@endif
@endforeach
@endforeach

        @if(empty($users) != 'Null')
        <form action="{{route('binhluannhac', $nhacs->id)}}" method="POST">
        @csrf
        @foreach ($users as $us)
            <input type="text" name="users_id" value="{{$us->id}}" style="position: absolute; left: -999px;">
        @endforeach
        <div style="display: flex; justify-content: center; align-items: center; margin-top: 130px;">
            <input name="noidung" type="text" style="width: 500px; height: 30px; border-bottom: none; border-left: none; border-right: none;" placeholder="Viết bình luận của bạn ở đây">
        </div>
        <button type="submit" class="btn btn-primary" style="position: absolute; left: -999px;">Gửi</button>
        </form>
        @endif
    </div>
</div>
