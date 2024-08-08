<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Countdown</title>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var endDate = new Date("{{ $endDate }}").getTime();

            var countdownElement = document.getElementById("countdown");

            var x = setInterval(function() {
                var now = new Date().getTime();
                var distance = endDate - now;

                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                countdownElement.innerHTML ="Thời gian đếm ngược còn lại: " + days + "d " + hours + "h "
                    + minutes + "m " + seconds + "s ";

                if (distance < 0) {
                    clearInterval(x);
                    countdownElement.innerHTML = "ĐANG ĐỢI ĐẾN 7 GIỜ SÁNG";
                    // Cập nhật endDate thành 7 giờ sáng hôm sau
                    endDate = new Date();
                    endDate.setDate(endDate.getDate() + 1);
                    endDate.setHours(7, 0, 0, 0);

                    distance = endDate - now;

                    x = setInterval(function() {
                        now = new Date().getTime();
                        distance = endDate - now;

                        days = Math.floor(distance / (1000 * 60 * 60 * 24));
                        hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                        minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                        seconds = Math.floor((distance % (1000 * 60)) / 1000);

                        countdownElement.innerHTML ="Thời gian còn lại đến khi mở lại: " + days + "d " + hours + "h "
                            + minutes + "m " + seconds + "s ";

                        if (distance < 0) {
                            clearInterval(x);
                            countdownElement.innerHTML = "EXPIRED";
                        }
                    }, 1000);
                }
            }, 1000);
        });
    </script>
</head>
<body>
    <h1>Countdown</h1>
    <div id="countdown"></div>
</body>
</html>