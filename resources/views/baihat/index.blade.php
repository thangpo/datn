@extends('layouts.menu')

@section('content')
<style>
    .body1{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .h11{
        font-size: 50px;
        width: 600px;
    }
    .iia{
        margin-top: 30px;
    }
    .idol{
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        gap: 20px;
    }
    .h31{
        text-align: center;
    }
</style>
<div class="body1">
    <div class="row">
        <div class="col1">
            <h1 class="h11">Quản lý bài hát</h1>
        </div>
    </div>
</div>
<div class="iia">
<h1>CÁC NHÓM NHẠC THUỘC CÔNG TY</h1>
<div class="idol">
@foreach ($nhomnhac as $nl)
<div class="idol2">
<a href="{{route('hienthibh', $nl->id)}}"><img src="{{asset('uploads/'.$nl->logonn)}}" style="width: 200px; height: 200px;" class="card-img-top" alt="..."></a>
<h3 class="h31">{{$nl->tennn}}</h3>
    <h3 class="h31">Số lượng bài hát: {{$nl->baihat_count}}</h3>
</div>
@endforeach
</div>
</div>
@endsection