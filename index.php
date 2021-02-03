<?php
    session_start();
    
?>
<html lang="ko">

<head>
    <meta name="viewport"
        content="width=device-width, maximum-scale=1.0, minimum-scale=1, user-scalable=yes,initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="./css/selfmade.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" href="./css/jquery.bxslider.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    <script href="./js/jquery.bxslider.js"></script>
    <link href="./css/jquery.bxslider.css" rel="stylesheet">
    <link href="./css/selfmedia.css" rel="stylesheet" media="screen and (min-width: 768px)and (max-width: 110px)" />
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=0, maximum-scale=10, user-scalable=yes">
    <meta name="format-detection" content="telephone=no">
    <title>미원유박 | 우림사업(주)</title>
    <script>
    var n = 1;
    var url = "http://localhost:/image/slide"
    var base = $(".menu")
    $(document).ready(

        function() {
            $(".menu-item").hover(
                function() {
                    $(".sub-back", this).css("display", "block");
                },
                function() {
                    $(".sub-back").css("display", "none");
                })
            setInterval(function() {
                n++;
                n = n % 2;
                $(".image-back").css("background-image", "url(" + url + n + ".jpg)")
                console.log(url + n + ".jpg");
            }, 2000)

        });
    </script>
</head>

<body>
    <div class="wrapper">
        <div class="header">
            <?php
                    require_once("./component/header.php");
                ?>
        </div>
        <div class="content">
            <?php
                    require_once("./component/content.php");
                ?>
        </div>
        <div class="footer">
            <?php
                        require("./component/footer.php");
                    ?>
        </div>
    </div>
</body>

</html>