@foreach($users as $us)
<a class="aidol" href="{{route('baidang', $us->id)}}">Quay lại</a>
@endforeach
@foreach($baidang as $bd)
@foreach($binhluan as $bl)
@foreach($idol as $id)
@foreach($users as $us)
@if($us->id == $bl->users_id)
@if($bd->id == $bl->baidang_id)
<div class="card mb-3">
    <div class="hh" style="display: flex; gap: 10px;">
    <div class="hhs" style="display: flex; border: gray; background: #E6E6FA;">
    <img style="border-radius: 50%; width: 45px; height: 45px;" src="{{asset('uploads/'.$id->anh)}}" alt="">
    <div class="bh">
        <p style="font-size: 10px;">{{$id->tenid}}</p>
        <p style="font-size: 10px;">{{$bl->created_at}}</p>
    </div>
    </div>
    <div class="card-body">
        <h5 class="card-title">{{$bl->noidung}}</h5>
    </div>
    </div>
</div>
@endif
@endif
@endforeach
@endforeach
@endforeach
@foreach($profile as $pr)
@if($pr->users_id == $bl->users_id)
<div class="card mb-3">
    <div class="hh" style="display: flex; gap: 10px;">
    <div class="hhs" style="display: flex; border: gray; background: #E6E6FA;">
    <img style="border-radius: 50%; width: 45px; height: 45px;" src="{{asset('uploads/'.$pr->anhnd)}}" alt="">
    <div class="bh">
        <p style="font-size: 10px;">{{$pr->tennd}}</p>
        <p style="font-size: 10px;">{{$bl->created_at}}</p>
    </div>
    </div>
    <div class="card-body">
        <h5 class="card-title">{{$bl->noidung}}</h5>
    </div>
    </div>
</div>
@endif
@endforeach


@foreach($users as $us)
<form action="{{route('binhluan', $bd->id)}}" method="POST">
    @csrf 
    <div class="form-group" style="width: 1px; height: 1px;">
    <strong>id</strong>
    @foreach ($users as $us)
        <input type="text" name="users_id" value="{{$us->id}}">
    @endforeach
        </div>
     <div class="form-group">
        <textarea name="noidung" cols="30" rows="10" placeholder="Viết bình luận"></textarea>
     </div>
     <button type="submit" class="btn btn-primary">Gửi</button>
</form>
@endforeach
@endforeach