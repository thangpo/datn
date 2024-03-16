<h1>Thông báo video mới ra</h1>
<div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 10px;">
@foreach ($dangkykenh as $dkk)
@foreach ($thongbaovd as $tb)
@foreach ($baihat as $bh)
@if($dkk->nhomnhac_id == $bh->nhomnhac_id && $bh->id == $tb->baihat_id)
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
@endforeach

</div>