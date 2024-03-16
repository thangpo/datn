@if(empty($nhac))
@if(empty($abumnhac) != 'Null')
   @foreach($abumnhac as $ab)
   <div style="border: 1px solid; width: 200px; text-align: center; background: blue;">
      <a style="text-decoration: none; color: white;" href="/tmtheonhac/{{$ab->id}}/user/{{$users->id}}"><p>{{$ab->tenab}}</p></a>
   </div>
   @endforeach
@endif
@endif


@if(empty($albumid) != 'Null')
   @foreach($nhactt as $ntt)
   @foreach($albumid as $alb)
   @if($alb->nhac_id == $ntt->id)
   <div style="display: flex; gap: 20px;">
    <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 10px;">
      <a href="/nghenhactab/{{$ntt->id}}/user/{{$users->id}}">
          <div style="text-align: center;">
            <img style="width: 200px; height: 200px;" src="{{asset('uploads/'.$ntt->anh)}}" alt="">
            <p>{{$ntt->tenn}}</p>
          </div>
        </a>
    </div>

@if(empty($nhaccc) != 'Null')
<div>
  <img style="width: 200px;" src="{{asset('uploads/'.$nhaccc->anh)}}" alt="">
  <audio controls autoplay id="myAudio" style="background: #181818;">
    <source src="{{asset('audio/'.$nhaccc->nhac)}}" type="audio/mpeg">
  </audio>
</div>
@endif

   </div>
   @endif
   @endforeach
   @endforeach
@endif