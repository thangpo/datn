<style>
  .btn {
  border: none;
  width: 15em;
  height: 5em;
  border-radius: 3em;
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 12px;
  background: #1C1A1C;
  cursor: pointer;
  transition: all 450ms ease-in-out;
}

.sparkle {
  fill: #AAAAAA;
  transition: all 800ms ease;
}

.text {
  font-weight: 600;
  color: #AAAAAA;
  font-size: medium;
}

.btn:hover {
  background: linear-gradient(0deg,#A47CF3,#683FEA);
  box-shadow: inset 0px 1px 0px 0px rgba(255, 255, 255, 0.4),
  inset 0px -4px 0px 0px rgba(0, 0, 0, 0.2),
  0px 0px 0px 4px rgba(255, 255, 255, 0.2),
  0px 0px 180px 0px #9917FF;
  transform: translateY(-2px);
}

.btn:hover .text {
  color: white;
}

.btn:hover .sparkle {
  fill: white;
  transform: scale(1.2);
} 
</style>

@if(empty($nhac))
@if(empty($abumnhac) != 'Null')
@foreach($abumnhac as $ab)
<!--thẻ album nhạc-->
<a style="text-decoration: none; color: white;" href="/tmtheonhac/{{$ab->id}}/user/{{$users->id}}">
<button class="btn">
  <svg height="24" width="24" fill="#FFFFFF" viewBox="0 0 24 24" data-name="Layer 1" id="Layer_1" class="sparkle">
    <path d="M10,21.236,6.755,14.745.264,11.5,6.755,8.255,10,1.764l3.245,6.491L19.736,11.5l-6.491,3.245ZM18,21l1.5,3L21,21l3-1.5L21,18l-1.5-3L18,18l-3,1.5ZM19.333,4.667,20.5,7l1.167-2.333L24,3.5,21.667,2.333,20.5,0,19.333,2.333,17,3.5Z"></path>
  </svg>

  <span class="text">{{$ab->tenab}}</span>
</button>
</a>
@endforeach
@endif
@endif


@if(empty($albumid) != 'Null')
@foreach($nhactt as $ntt)
@foreach($albumid as $alb)
@if($alb->nhac_id == $ntt->id)

<!--thẻ album nhạc-->
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