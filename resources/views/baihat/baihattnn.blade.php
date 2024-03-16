
@if(empty($nhomnhackenh))
<div>
    <div style=""> 
    <img style="width: 100%; height: 200px;" src="{{asset('uploads/'.$nhomnhac->logonn)}}" alt="">
        <div style="display: flex; gap: 20px;">
            <img style="width: 70px; border-radius: 50%;" src="{{asset('uploads/'.$nhomnhac->logonn)}}" alt="">
            <p>{{$nhomnhac->tennn}}</p>

        <form action="{{route('dangkykenh', $users->id)}}" method="POST" style="margin-left: 100px; background: red; text-align: center; color: white; height: 50px; width: 150px;"> 
            @csrf
            <input style="position: absolute; left: -999px;" type="text" name="nhomnhac_id" value="{{$nhomnhac->id}}">
            <button type="submit" style="border: none; background-color: red; color: white;"><div>
               <p>Đăng ký kênh</p>
            </div></button>
        </form>
        @foreach ($nhomnhacc as $nnc)
        @if($nnc->id == $nhomnhac->id)
        <p>Số người đăng ký {{$nnc->dangkykenh_count}}</p>
        @endif
        @endforeach

        </div>
    </div>

    <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 20px; margin-top: 20px;">

    @foreach ($baihat as $bh)
    @if($nhomnhac->id == $bh->nhomnhac_id)
    <div>
            <a href="/videoctnd/{{$bh->id}}/user/{{$users->id}}">
                        <div class="video" style="width: 200px;">
                        <div class="thumbnail">
                            <img src="{{asset('uploads/'.$bh->anhbh)}}" alt="" style="width: 200px;" />
                            </div>

                            <div class="details">
                                <div class="author">
                                
                                
                                    <img src="{{asset('uploads/'.$bh->logonn)}}" alt="" style="width: 30px; border-radius: 50%;"/>
                              
                                </div>
                                <div class="title">
                                    <h3>
                                        {{$bh->tenbh}}
                                    </h3>
                                    <a href="">
                                    
                                            {{$bh->tennn}}
                                  
                                    </a>
                                    <span> 2M Views • {{$bh->created_at}} </span>
                                </div>
                            </div>

                            </div>
                            </a>
            </div>
            @endif
            @endforeach

    </div>
</div>
@endif


@if(empty($nhomnhackenh) != 'Null')
<h1>Các kênh bạn đã đăng ký</h1>
<div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 20px;">
@foreach($dangkykenh as $dkk)
@if($users->id == $dkk->users_id)
    @foreach($nhomnhackenh as $nn)
    @if($nn->id == $dkk->nhomnhac_id)
    <a href="/videotheonhomnhac/{{$nn->id}}/user/{{$users->id}}"><div style="background-color: blue; width: 200px; display: flex; gap: 20px; text-align: center; color: white;">
        <img style="width: 80px; border-radius: 50%" src="{{asset('uploads/'.$nn->logonn)}}" alt="">
        <p>{{$nn->tennn}}</p>
    </div></a>
    @endif 
    @endforeach
@endif  
@endforeach
    
</div>
@endif