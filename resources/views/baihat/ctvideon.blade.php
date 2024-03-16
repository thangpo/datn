<!DOCTYPE html>
<html>
<head>
	<style>
        body {
	margin: 0;
	padding: 0;
	font-family: Arial, sans-serif;
}

.container {
	max-width: 1200px;
	margin: 0 auto;
	padding: 20px;
}

.video-container {
	position: relative;
	margin-bottom: 20px;
}

.video {
	width: 100%;
	max-width: 640px;
	height: auto;
}

.video-info {
	position: absolute;
	bottom: 0;
	left: 0;
	right: 0;
	background-color: rgba(0, 0, 0, 0.6);
	color: white;
	padding: 10px;
	display: flex;
	justify-content: space-between;
	align-items: center;
}

.user-info {
	display: flex;
	align-items: center;
}

.profile-pic {
	width: 50px;
	height: 50px;
	border-radius: 50%;
	object-fit: cover;
	margin-right: 10px;
}

.user-details {
	display: flex;
	flex-direction: column;
}

.username {
	font-weight: bold;
}

.date {
	font-size: 12px;
	margin-top: 2px;
}

.video-details {
	display: flex;
	flex-direction: column;
}

.hash-tag {
	margin-right: 5px;
}

.song {
	margin-top: 5px;
	font-size: 12px;
}

.comments-container {
	border: 1px solid #ddd;
	padding: 10px;
	margin-top: 20px;
}

.comment {
	display: flex;
	margin-bottom: 10px;
}

.comment .user-info {
	margin-right: 10px;
}

.comment .comment-text {
	flex: 1;
}
    </style>
</head>
<body style="background-color: gray;">

<a class="aidol" href="{{route('videonganctnd', $users->id)}}"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M21 11H6.414l5.293-5.293-1.414-1.414L2.586 12l7.707 7.707 1.414-1.414L6.414 13H21z"></path></svg></a>

	<div class="container">

		<div class="video-container" style="display: flex; gap: 20px;">


			<video autoplay muted controls loop disablepictureinpicture controlslist="nodownload noplaybackrate" style="width: 70%; height: 600px;">
                <source src="{{asset('videos/'.$videongan->video)}}" type="video/mp4">
            </video>

			<div style="margin-top: 25%;">
				<a href="/chuyenvdn/{{$videongan->id}}/user/{{$users->id}}"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M21.886 5.536A1.002 1.002 0 0 0 21 5H3a1.002 1.002 0 0 0-.822 1.569l9 13a.998.998 0 0 0 1.644 0l9-13a.998.998 0 0 0 .064-1.033zM12 17.243 4.908 7h14.184L12 17.243z"></path></svg></a>
			</div>
			


			<div class="" style="width: 30%;">
				<div class="user-info">
					<img class="profile-pic" src="{{asset('uploads/'.$idol->anh)}}" alt="Profile Picture">
					<div class="user-details">
						<span class="username">{{$idol->tenid}}</span>
						<span class="date">{{$videongan->created_at}}</span>
					</div>
				</div>


				<div class="video-details">
					<div class="song">
						<span>{{$videongan->tieude}}</span>
					</div>
				</div>


                <div>
                    <div style="width: 100%; height: 40px; background-color: gray;">
                        <p style="text-align: center; color: white; padding-top: 10px;">Bình luận</p>
                    </div>

                    <div style="overflow:auto; width: 100%; height: 450px;">
                    
                    <!--Nội dung bình luận-->
                    @foreach($binhluanvdngan as $blvdn)
					@foreach($user as $usr)
                    @if($blvdn->videongan_id == $videongan->id && $blvdn->users_id == $usr->id)
					@foreach($profile as $pr)
					@if($pr->users_id == $usr->id)
                      <div style="margin-top: 20px;">
                        <div style="width: 200px;">
                            <div style="display: flex; gap: 10px; background-color: blue;">
                                <img style="border-radius: 50%; width: 50px; height: 50px;" src="{{asset('uploads/'.$pr->anhnd)}}" alt="">
                                <p>{{$usr->name}}</p>
                            </div>
                            <p>{{$blvdn->noidung}}</p>
                        </div>
                      </div>
					@endif
					@endforeach
                    @endif
                    @endforeach
					@endforeach
                    </div>

                    <div>
                         <!--chỗ bình luận-->
                      <form action="{{route('themblvdn', $users->id)}}" method="POST">
                        @csrf
                        <hr>
                            <input style="position: absolute; left: -999px;" type="text" name="videongan_id" value="{{$videongan->id}}">
                            <input style="width: 350px; border: 1px solid; height: 30px; border-top-right-radius: 20px; border-bottom-right-radius: 20px; border-top-left-radius: 20px; border-bottom-left-radius: 20px;" type="text" name="noidung" placeholder="      Viết bình luận của bạn ở đây">
                            <button type="submit" style="position: absolute; left: -999px;">Gửi bình luận</button>
                      </form>
                    </div>

                    
                </div>


			</div>

            
		</div>



	</div>
</body>
</html>