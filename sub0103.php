<?php
    session_start();
    $state="compnay";
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
    <link href="./css/selfmedia.css" rel="stylesheet" media="screen and (max-width: 900px)" />
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
            var now = $(".sub-back[name=company");
            now.css("display", "block");
            if ($(window).width() > 900) {
                now.css("display", "block")
            }
            $(".menu-item").hover(
                function() {
                    if ($(window).width() > 900) {
                        $(".sub-back", this).css("display", "block");
                    }
                },
                function() {
                    if ($(window).width() > 900) {
                        var list = $(".sub-back").not("div[value=company]").css("display", "none");
                        now.css("display", "block");
                    }
                })
            setInterval(function() {
                n++;
                n = n % 2;
                $(".image-back").css("background-image", "url(" + url + n + ".jpg)")
                console.log(url + n + ".jpg");
            }, 2000)
            $(".icon-image").click(function() {
                if ($(window).width() < 900) {
                    $(".menu").css("display", "block");
                    $(".close").css("display", "block");
                }
            })
            $(".close").click(function() {
                if ($(window).width() < 900) {
                    $(".menu").css("display", "none");
                    $(".close").css("display", "none");
                }
            })
            $(".menu-item").click(
                function() {
                    if ($(window).width() < 900) {
                        $(".sub-back", this).css("display", "block");
                    }
                },
                function() {
                    if ($(window).width() < 900) {
                        $(".sub-back").css("display", "none");
                    }
                })
        }


    );
    </script>
</head>

<body>
    <div class="wrapper">
        <div class="header">
            <?php
                $state;
                require_once("./component/header.php");
                ?>
        </div>
        <div class="sub-content">
            <?php
                $title="비전";
                $description="우리의 건강한 먹거리를 위해 힘쓰겠습니다.";
                require("./component/subheader.php")
            ?>
            <div class="sub-content-content">
                <img class="sub_0103" src="./css/images/sub0102_img01.png" alt="3323">
            </div>
            <?php
                        require("./component/footer.php");
                    ?>
        </div>
    </div>
</body>

</html>