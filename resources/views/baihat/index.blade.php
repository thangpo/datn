@extends('layouts.menu')
@section('content')
<div class="body1">
    <div class="row">
        <div class="col1">
            <h1 class="h11">Quản lý bài hát</h1>
        </div>
    </div>
</div>
<div class="iia">
    <h1>CÁC NHÓM NHẠC THUỘC CÔNG TY</h1>
    <div class="scrollable-container">
        <div class="idol">
            @foreach ($nhomnhac as $nl)
            <div class="idol2">
                <a href="{{route('hienthibh', $nl->id)}}"><img src="{{asset('uploads/'.$nl->logonn)}}" class="card-img-top anhidol" alt="..."></a>
                <h3 class="h31">{{$nl->tennn}}</h3>
                <h3 class="h31">Số lượng bài hát: {{$nl->baihat_count}}</h3>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection