<div style="display: flex; justify-content: center; align-items: center;">
    <div style="display: flex; gap: 20px;">
        <div style="float: left;">
            <img src="{{asset('uploads/'.$idol->anh)}}" alt="">
        </div>
        <div style="float: right;">
            @foreach($profile as $pb)
            <div style="display: flex; gap: 10px; margin-top: 10px;">
                <img style="border-radius: 50%; width: 50px; height: 50px;" src="{{asset('uploads/'.$pb->anhnd)}}" alt="">
                <p>{{$pb->tennd}}</p>
            </div>
            @endforeach
        </div>
    </div>
</div>