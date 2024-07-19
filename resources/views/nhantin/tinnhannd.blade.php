<div style="display: flex; justify-content: center; align-items: center;">
    <div style="width: 1000px;">

        <div style="display: flex; gap: 20px;">
            <img style="border-radius: 50%; width: 50px; height: 50px;" src="{{asset('uploads/'.$idol->anh)}}" alt="">
            <p>{{$idol->tenid}}</p>
        </div>

        <div style="display: flex; justify-content: center; align-items: center;">

            <div style="margin-top: 30px; width: 500px; overflow-y: scroll; height: 500px;">
                @foreach($nhantin as $nt)
                @if($nt->nh != 0)
                <div style="float: left;">
                    <div style="display: flex; gap: 20px;">
                        <img style="border-radius: 50%; width: 40px; height: 40px;" src="{{asset('uploads/'.$idol->anh)}}" alt="">
                        <p style="font-size: 14px;">{{$idol->tenid}}</p>
                    </div>
                    <div>
                        <p>{{$nt->noidung}}</p>
                    </div>
                </div>
                @endif
                @endforeach
                
                @foreach($nhantin as $nt)
                @if($nt->nh != 1)
                <div style="float: right; margin-top: 100px; width: 250px;">
                    <div style="display: flex; gap: 20px;">
                        <p style="font-size: 14px;">{{$profile->tennd}}</p>
                        <img style="border-radius: 50%; width: 40px; height: 40px;" src="{{asset('uploads/'.$profile->anhnd)}}" alt="">
                    </div>
                    <div>
                        <p>{{$nt->noidung}}</p>
                    </div>
                </div>
                @endif
                @endforeach
            </div>

        </div>

        <div style="display: flex; justify-content: center; align-items: center;">
            <form action="{{route('guitinn')}}" enctype="multipart/form-data" method="POST" style="width: 500px;">
                @csrf

                <div style="display: flex; gap: 5px;">
                    <input type="text" name="id_idol" value="{{$idol->id}}" style="display: none;">
                    <input type="text" name="id_profile" value="{{$profile->id}}" style="display: none;">
                    <input type="text" name="nh" value="0" style="display: none;">
                    <input type="text" name="noidung" placeholder="Viết những lời yêu thương của bạn vào đây" style="width: 90%; height: 30px;">
                    <button style="width: 10%; height: 30px;" type="submit"><img style="width: 10%;" src="https://th.bing.com/th/id/OIF.8WDvc2M10gySjsD6Vz3ZwA?rs=1&pid=ImgDetMain" alt=""></button>
                </div>
            </form>
        </div>

    </div>
</div>