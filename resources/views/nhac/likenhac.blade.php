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
@foreach ($nhac as $n)
    <div style="display: flex; gap: 20px; width: 70%;">

            <a href="/nhactheonhom/{{$n->id}}/user/{{$users->id}}">
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

<!--nhạc chi tiết-->
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

@endif

</div>