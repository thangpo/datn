@if(empty($nhac) != 'Null')
<a href="/themmoiab/{{$nhac->id}}/user/{{$users->id}}">Thêm mới một album nhac</a>

@foreach($abumnhac as $ab)
   <form action="{{route('themnhacab', $nhac->id)}}" method="POST">
      @csrf
      <input type="text" value="{{$ab->id}}" name="abumnhac_id" style="position: absolute; left: -999px;">
      <button type="submit"><p>{{$ab->tenab}}</p></button>
   </form>
   @endforeach

@endif
@if(empty($nhacs) != 'Null')
@if(empty($nhac))
<a href="/abumtknd/{{$nhacs->id}}/user/{{$users->id}}">Quay lại</a>
<form action="{{route('tmabkh', $users->id)}}" method="POST">
  @csrf
  <input type="text" name="tenab" placeholder="Tên album mà bạn muốn đặt">
  <button type="submit">Thêm mới</button>
</form>
@endif

@endif



