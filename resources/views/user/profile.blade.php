<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Profile Card</title>
  <style>
    .profile-card {
      display: flex;
      background-color: #f0f0f0;
      width: 650px;
      margin: auto;
    }

    .left-section {
      background-color: #333;
      color: white;
      padding: 20px;
      width: 40%;
    }

    .right-section {
      padding: 20px;
      width: 60%;
    }

    .avatar {
      background-color: #ddd;
      border-radius: 50%;
      width: 100px;
      height: 100px;
      margin-bottom: 10px;
    }

    .name {
      font-size: 1.2em;
      font-weight: bold;
      margin-top: 5px;
    }

    .profession {
      font-size: 1em;
      margin-top: 5px;
      margin-bottom: 20px;
    }

    .contact-info {
      margin-bottom: 20px;
    }

    .projects {
      margin-bottom: 20px;
    }

    .social-icons {
      text-align: left;
    }

    .social-icon {
      display: inline-block;
      width: 24px;
      height: 24px;
      background: #ddd;
      margin: 0 5px;
    }

    .img2 {
      width: 25px;
      height: 25px;
    }
  </style>
</head>

<body>
  @foreach ($users as $us)
  <div class="profile-card">
    <div class="left-section">
      @foreach ($idol as $id)
      <div class="avatar"><img class="avatar" src="{{asset('uploads/'.$id->anh)}}" alt=""></div>
      <div class="name">Tên người dùng: {{$id->tenid}}</div>
      @foreach ($nhomnhac as $nn)
      <div class="name">Nhóm nhạc: {{$nn->tennn}}</div>
      @endforeach
      <div class="profession">Tuổi người dùng: {{$id->tuoi}}</div>
      @endforeach
    </div>
    <div class="right-section">
      <div class="contact-info">
        <p>Email: {{$us->email}}</p>
        @foreach ($idol as $id)
        <p>Chiều cao: {{$id->chieucao}}</p>
        <p>Cân năng: {{$id->cannang}}</p>
        @endforeach
      </div>
      <div class="projects">
        <h4>Projects</h4>
        @foreach ($idol as $id)
        <p>Địa chỉ: {{$id->qquan}}</p>
        <p>Giới tính: {{$id->gioitinh == 0 ? 'Nam' : 'Nữ'}}</p>
        @endforeach
      </div>
      <div class="social-icons">
        <div class="social-icon"><img class="img2" src="https://tse1.mm.bing.net/th?id=OIP.0hjuzKoA33K1Ml_znxAaOQHaHa&pid=Api&P=0&h=180" alt=""></div>
        <div class="social-icon"><img class="img2" src="https://tse4.mm.bing.net/th?id=OIP.0ZvKtmqALnKw74ofDZQKTQHaHa&pid=Api&P=0&h=180" alt=""></div>
        <div class="social-icon"><img class="img2" src="https://h5.48.cn/pocket48/image/logo.png" alt=""></div>
      </div>
    </div>
  </div>


  <div style="margin-top: 20px; display: flex; justify-content: center; align-items: center;">
    @foreach ($idol as $id)
    <div style="border: 1px solid; width: 300px; text-align: center; height: 40px; background: blue;">
      <a href="/anhchitiet/{{$id->id}}/user/{{$us->id}}" style="text-decoration: none; color: white;">Thêm ảnh mới của bạn</a>
    </div>
    @endforeach
  </div>
  @endforeach
</body>

</html>