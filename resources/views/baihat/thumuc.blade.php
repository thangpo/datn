<!--đây là khi không có danh muc-->
@if(empty($danhmucvdtg))

<!--đây là khi không có bài hát-->
@if(empty($baihat))
@if(empty($danhmucvds) != 'Null')
<h1>Các danh mục của tôi</h1>

<div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 10px;">
@foreach ($danhmucvds as $dmds)

   <a href="/videotheodm/{{$dmds->id}}/user/{{$users->id}}">
    <div style="background: blue; width: 100px; text-align: center; color: white;">
            <p>{{$dmds->tenab}}</p>
        </div>
   </a>
    

@endforeach
</div>


@endif
@endif






<!--đây là khi có bài hát-->
@if(empty($baihat) != 'Null')
<a href="/videoctnd/{{$baihat->id}}/user/{{$users->id}}">Quay lại video</a>
<!--đây là khi có danh mục bài hát-->
@if(empty($danhmucvd) != 'Null')
@foreach ($danhmucvd as $dmvd)
<div style="display: flex; gap: 10px; margin-top: 10px;">

    <form action="{{route('themmoivideo', $baihat->id)}}" method="POST">
        @csrf
            <input type="text" value="{{$dmvd->id}}" name="danhmucvd_id" style="position: absolute; left: -999px;">
        <div style="border: 1px solid; width: 100px; background: blue; text-align: center;">
            <button type="submit" style="background-color: blue; border: none;"><p style="color: white;">{{$dmvd->tenab}}</p></button>
        </div>
    </form>

</div>
@endforeach
@endif


<form style="margin-top: 20px;" action="{{route('themmoiabvd', $users->id)}}" method="POST">
   @csrf
   <input type="text" name="tenab" placeholder="Tên album mà bạn muốn đặt">
   <button type="submit">Thêm mới</button>
</form>
@endif


@endif




<!--đây là khi có danh muc-->
@if(empty($danhmucvdtg) != 'Null')
<h1>Bài hát theo nhóm {{$danhmucvdtg->tenab}}</h1>
<div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 20px;">
            @foreach ($baihat as $bh)
            @foreach ($albumvideo as $asf)
            @if($asf->bathat_id == $bh->id)
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
                    @endforeach
                    </div>
@endif