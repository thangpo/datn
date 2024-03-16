<h1>Lịch sử xem video của bạn</h1>
<div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 10px;">
@foreach ($lichsuxem as $lsx)
@if($lsx->users_id == $users->id)
@foreach ($baihat as $bh)
@if($lsx->baihat_id == $bh->id)

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
@endif
@endforeach
</div>