<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Chọn và hiển thị nhiều ảnh trước khi upload bằng javascript</title>
    <style type="text/css">
        .wrapper {
            margin: 20% auto;
            width: 60%;
        }

        #displayImg {
            margin-top: 30px;
        }

        #displayImg img {
            width: 200px;
            height: 200px;
            margin-right: 15px;
            display: inline-block;
        }

        .custum-file-upload {
            height: 200px;
            width: 300px;
            display: flex;
            flex-direction: column;
            align-items: space-between;
            gap: 20px;
            cursor: pointer;
            align-items: center;
            justify-content: center;
            border: 2px dashed #e8e8e8;
            background-color: #212121;
            padding: 1.5rem;
            border-radius: 10px;
            box-shadow: 0px 48px 35px -48px #e8e8e8;
        }

        .custum-file-upload .icon {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .custum-file-upload .icon svg {
            height: 80px;
            fill: #e8e8e8;
        }

        .custum-file-upload .text {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .custum-file-upload .text span {
            font-weight: 400;
            color: #e8e8e8;
        }

        .custum-file-upload input {
            display: none;
        }

        /** */
        .Documents-btn {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            width: fit-content;
            height: 45px;
            border: none;
            padding: 0px 15px;
            border-radius: 5px;
            background-color: rgb(49, 49, 83);
            gap: 10px;
            cursor: pointer;
            transition: all 0.3s;
        }

        .folderContainer {
            width: 40px;
            height: fit-content;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-end;
            position: relative;
        }

        .fileBack {
            z-index: 1;
            width: 80%;
            height: auto;
        }

        .filePage {
            width: 50%;
            height: auto;
            position: absolute;
            z-index: 2;
            transition: all 0.3s ease-out;
        }

        .fileFront {
            width: 85%;
            height: auto;
            position: absolute;
            z-index: 3;
            opacity: 0.95;
            transform-origin: bottom;
            transition: all 0.3s ease-out;
        }

        .text {
            color: white;
            font-size: 14px;
            font-weight: 600;
            letter-spacing: 0.5px;
        }

        .Documents-btn:hover .filePage {
            transform: translateY(-5px);
        }

        .Documents-btn:hover {
            background-color: rgb(58, 58, 94);
        }

        .Documents-btn:active {
            transform: scale(0.95);
        }

        .Documents-btn:hover .fileFront {
            transform: rotateX(30deg);
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <h1>Chọn và hiển thị nhiều ảnh trước khi upload</h1>
        <form action="{{route('themanhpsp')}}" enctype="multipart/form-data" method="POST">
        @csrf
            <input type="text" name="sanpham_id" value="{{$sanpham->id}}" style="display: none;">
            <label for="file" class="custum-file-upload">
                <div class="icon">
                    <svg viewBox="0 0 24 24" fill="" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10 1C9.73478 1 9.48043 1.10536 9.29289 1.29289L3.29289 7.29289C3.10536 7.48043 3 7.73478 3 8V20C3 21.6569 4.34315 23 6 23H7C7.55228 23 8 22.5523 8 22C8 21.4477 7.55228 21 7 21H6C5.44772 21 5 20.5523 5 20V9H10C10.5523 9 11 8.55228 11 8V3H18C18.5523 3 19 3.44772 19 4V9C19 9.55228 19.4477 10 20 10C20.5523 10 21 9.55228 21 9V4C21 2.34315 19.6569 1 18 1H10ZM9 7H6.41421L9 4.41421V7ZM14 15.5C14 14.1193 15.1193 13 16.5 13C17.8807 13 19 14.1193 19 15.5V16V17H20C21.1046 17 22 17.8954 22 19C22 20.1046 21.1046 21 20 21H13C11.8954 21 11 20.1046 11 19C11 17.8954 11.8954 17 13 17H14V16V15.5ZM16.5 11C14.142 11 12.2076 12.8136 12.0156 15.122C10.2825 15.5606 9 17.1305 9 19C9 21.2091 10.7909 23 13 23H20C22.2091 23 24 21.2091 24 19C24 17.1305 22.7175 15.5606 20.9844 15.122C20.7924 12.8136 18.858 11 16.5 11Z" fill=""></path>
                        </g>
                    </svg>
                </div>
                <div class="text">
                    <span>Click to upload image</span>
                </div>
                <input type="file" name="anh_phu[]" id="file" multiple onchange="ImagesFileAsURL()">
            </label>
            <div id="displayImg"></div>

                <button type="submit" class="Documents-btn"><span class="folderContainer">
                        <svg class="fileBack" width="146" height="113" viewBox="0 0 146 113" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 4C0 1.79086 1.79086 0 4 0H50.3802C51.8285 0 53.2056 0.627965 54.1553 1.72142L64.3303 13.4371C65.2799 14.5306 66.657 15.1585 68.1053 15.1585H141.509C143.718 15.1585 145.509 16.9494 145.509 19.1585V109C145.509 111.209 143.718 113 141.509 113H3.99999C1.79085 113 0 111.209 0 109V4Z" fill="url(#paint0_linear_117_4)"></path>
                            <defs>
                                <linearGradient id="paint0_linear_117_4" x1="0" y1="0" x2="72.93" y2="95.4804" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#8F88C2"></stop>
                                    <stop offset="1" stop-color="#5C52A2"></stop>
                                </linearGradient>
                            </defs>
                        </svg>
                        <svg class="filePage" width="88" height="99" viewBox="0 0 88 99" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="88" height="99" fill="url(#paint0_linear_117_6)"></rect>
                            <defs>
                                <linearGradient id="paint0_linear_117_6" x1="0" y1="0" x2="81" y2="160.5" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="white"></stop>
                                    <stop offset="1" stop-color="#686868"></stop>
                                </linearGradient>
                            </defs>
                        </svg>

                        <svg class="fileFront" width="160" height="79" viewBox="0 0 160 79" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.29306 12.2478C0.133905 9.38186 2.41499 6.97059 5.28537 6.97059H30.419H58.1902C59.5751 6.97059 60.9288 6.55982 62.0802 5.79025L68.977 1.18034C70.1283 0.410771 71.482 0 72.8669 0H77H155.462C157.87 0 159.733 2.1129 159.43 4.50232L150.443 75.5023C150.19 77.5013 148.489 79 146.474 79H7.78403C5.66106 79 3.9079 77.3415 3.79019 75.2218L0.29306 12.2478Z" fill="url(#paint0_linear_117_5)"></path>
                            <defs>
                                <linearGradient id="paint0_linear_117_5" x1="38.7619" y1="8.71323" x2="66.9106" y2="82.8317" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#C3BBFF"></stop>
                                    <stop offset="1" stop-color="#51469A"></stop>
                                </linearGradient>
                            </defs>
                        </svg>
                    </span>
                    <p class="text">Thêm mới ảnh</p>
                </button>
        </form>

    </div>
    <script type="text/javascript">
        function ImagesFileAsURL() {
            var fileSelected = document.getElementById('file').files;
            if (fileSelected.length > 0) {
                for (var i = 0; i < fileSelected.length; i++) {
                    var fileToLoad = fileSelected[i];
                    var fileReader = new FileReader();
                    fileReader.onload = function(fileLoaderEvent) {
                        var srcData = fileLoaderEvent.target.result;
                        var newImage = document.createElement('img');
                        newImage.src = srcData;
                        document.getElementById('displayImg').innerHTML += newImage.outerHTML;
                    }
                    fileReader.readAsDataURL(fileToLoad);
                }

            }
        }
    </script>
    </div>
</body>

</html>