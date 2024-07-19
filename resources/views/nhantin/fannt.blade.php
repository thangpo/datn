<div style="display: flex; justify-content: center; align-items: center;">
    <div style="display: flex; gap: 20px;">
        <div style="float: left;">
            <img src="{{asset('uploads/'.$idol->anh)}}" alt="">
        </div>
        <div style="float: right;">
            @foreach($id_profile as $id)
            @foreach($profile as $pb)
            @if($pb->id == $id)
            <div style="display: flex; gap: 10px; margin-top: 10px;">
                <img style="border-radius: 50%; width: 50px; height: 50px;" src="{{asset('uploads/'.$pb->anhnd)}}" alt="">
                <p>{{$pb->tennd}}</p>
            </div>
            @endif
            @endforeach
            @endforeach
        </div>
    </div>
</div>