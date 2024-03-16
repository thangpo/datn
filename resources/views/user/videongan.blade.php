<style>
* {margin: 0;padding: 0;box-sizing: border-box;}
.container {font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;display: flex;align-items: center;justify-content: center;min-height: 100vh;background-color: rgb(255, 240, 222);}
#file-input {display: none;}
.preview {padding: 30px;display: flex;align-items: center;justify-content: center;flex-direction: column;width: 100%;max-width: 350px;margin: auto;background-color: rgb(255, 255, 255);box-shadow: 0 0 20px rgba(170, 170, 170, 0.2);}
img {width: 100%;object-fit: cover;margin-bottom: 20px;}
label {font-weight: 600;cursor: pointer;color: #fff;border-radius: 8px;padding: 10px 20px;background-color: rgb(101, 101, 255);}
</style>

<div class="container">
<div class="preview">

<form action="/themvideo/{{$idol->id}}/user/{{$users->id}}" enctype="multipart/form-data" method="POST">
@csrf
    <input type="text" name="tieude" placeholder="tiêu đề video">
    <input type="file" name="video">
    <button type="submit">Thêm video mới</button>
    <button style="font-weight: 600;cursor: pointer;color: #fff;border-radius: 8px;padding: 10px 20px;background-color: rgb(101, 101, 255); border: none; height: 43px;" type="submit">Thêm ảnh ngay</button>
</form>

</div>
</div>