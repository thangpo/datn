<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Hiển thị nhiều ảnh trước khi upload</title>
    <style type="text/css">
.wrap {margin: 10% auto;width: 60%;}
.dandev-reviews {position: relative;margin: 20px 0;} 
.dandev-reviews .form_upload {width: 320px;position: relative;padding: 5px;bottom: 0px;height: 40px;left: 0;z-index: 5;box-sizing: border-box;background: #f7f7f7;border-top: 1px solid #ddd;}    
.dandev-reviews .form_upload>label {height: 35px;    width: 160px;        display: block;cursor: pointer;}  
.dandev-reviews .form_upload label span {padding-left: 26px;display: inline-block;background: url(images/camera.png) no-repeat;background-size: 23px 20px;margin: 5px 0 0 10px;}
.list_attach {display: block;margin-top: 30px;}      
ul.dandev_attach_view {list-style: none;margin: 0;padding: 0;}        
ul.dandev_attach_view li {float: left;width: 80px;margin: 0 20px 20px 0 !important;padding: 0!important;border: 0!important;overflow: inherit;clear: none;}        
ul.dandev_attach_view .img-wrap {position: relative;}       
ul.dandev_attach_view .img-wrap .close {position: absolute;right: -10px;top: -10px;background: #000;color: #fff!important;border-radius: 50%;z-index: 2;display: block;width: 20px;height: 20px;font-size: 16px;text-align: center;line-height: 18px;cursor: pointer!important;opacity: 1!important;text-shadow: none;}
ul.dandev_attach_view li.li_file_hide {opacity: 0;visibility: visible;width: 0!important;height: 0!important;overflow: hidden;margin: 0!important;}
ul.dandev_attach_view .img-wrap-box {position: relative;overflow: hidden;padding-top: 100%;height: auto;background-position: 50% 50%;background-size: cover;}
.img-wrap-box img {right: 0;width: 100%!important;height: 100%!important;bottom: 0;left: 0;top: 0;position: absolute;object-position: 50% 50%;object-fit: cover;transition: all .5s linear;-moz-transition: all .5s linear;-webkit-transition: all .5s linear;-ms-transition: all .5s linear;}
ul li,ol li {list-style-position: inside;}
.list_attach span.dandev_insert_attach {width: 80px;height: 80px;text-align: center;display: inline-block;border: 2px dashed #ccc;line-height: 76px;font-size: 25px;color: #ccc;display: none;cursor: pointer;float: left;}
ul.dandev_attach_view {list-style: none;margin: 0;padding: 0;}
ul.dandev_attach_view .img-wrap {position: relative;}
.list_attach.show-btn span.dandev_insert_attach {display: block;margin: 0 0 20px!important;}
i.dandev-plus{font-style: normal;font-weight: 900;font-size: 35px;line-height: 1;}
ul.dandev_attach_view li input {display: none;}
    </style>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrap">
        <h1>Hiển thị nhiều ảnh trước khi upload</h1>
        @foreach ($users as $nl)
        <form action="{{route('dangbai', ['users_id' => $nl->id])}}" enctype="multipart/form-data" method="POST">
        @endforeach
        @csrf
        <div class="form-group">
            <strong>Nhóm</strong>
            @foreach ($users as $nl)
                <input type="text" name="users_id" class="form-control" value="{{$nl->id}}">{{$nl->tenn}}
            @endforeach
        </div>
            <textarea name="noidung" cols="30" rows="10"></textarea>
            <div class="form_upload">
            <span>Đính kèm ảnh</span>
                <input name="anhbd[]" type="file" multiple>   
            </div>
            <button type="submit">Đăng bài</button>
        </form>
    </div>
</body>

</html>