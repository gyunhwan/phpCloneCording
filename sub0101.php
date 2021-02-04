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
                $title="인사말";
                $description="우리의 건강한 먹거리를 위해 힘쓰겠습니다.";
                require("./component/subheader.php")
            ?>
            <div class="sub-content-content">
                <h1 class="sub-content-title">우림산업(주) 홈페이지를 방문해주셔서 감사합니다.</h1>
                <h3 class="sub-description-title">우림산업㈜은 국내 최초로 유기질비료 사업을 시작한 이래, 당사만이 가진 노하우로 40여년간 친환경비료를 생산해왔습니다.
                </h3>
                <div class="sub_0101">
                    <img src="./css/images/sub0101_img01.png" style="padding-right:2rem" alt="예쁜 이미지">
                    <div style="display:flex;flex-direction:column;padding-top:1.7rem">
                        <p style="font-size:1.4rem;color:#666">당사는 친환경비료시장을 선도해온 유기질비료 전문 생산업체로서, 지속적인 제품개발, 품질관리로
                            혼합유기질, 혼합유박,
                            유기복합, 3종
                            복합비료, 맞춤형비료 등 한국농업환경에
                            적합한 최고급의 다양한비료를 생산, 한국친환경농업의 대표기업으로 발돋움하고 있습니다.</p>
                        <br>
                        <br>
                        <p style="font-size:1.4rem;color:#666">
                            이에 우림산업㈜은 지난 40여년간 친환경농업 시장을 선도하며 쌓아온 노하우로 더 나은 서비스를 드리기 위해 노력하고, 지속 가능한 농업 생태계 구축을 위하여 더 좋은
                            제품
                            생산에 집중하겠습니다.
                        </p>
                    </div>
                </div>
                <div style="display:flex;flex-direction:column">
                    <div style="margin-top:1rem;display:flex;flex-direction:row">
                        <img src="./css/images/blit.png" alt="">
                        <h3 style="font-size:4rem;color:#5d9c42">회사개요</h3>
                    </div>
                    <table class="t-view">
                        <tbody stlye="text-align:center">
                            <tr>
                                <th style="background-color:#f5f5f5;text-algin:center">회사명</th>
                                <td>우림산업(주)</td>
                            </tr>
                            <tr>
                                <th style="background-color:#f5f5f5;text-algin:center">주소</th>
                                <td>사무실 : 대전광역시 중구 대종로 223 (석교동)<br>
                                    공장 : 세종특별시 연서면 와룡로 497-19 (신대리)</td>
                            </tr>
                            <tr>
                                <th style="background-color:#f5f5f5;text-algin:center">전화번호</th>
                                <td>사무실 :042-285-4781<br>공 장 : 044-867-6001</td>
                            </tr>
                            <tr>
                                <th style="background-color:#f5f5f5;text-algin:center">팩스번호</th>
                                <td>사무실 :042-285-4784<br>공 장 : 044-867-6003</td>
                            </tr>
                            <tr>
                                <th style="background-color:#f5f5f5;text-algin:center">이메일 주소</th>
                                <td>i-woolim@nate.com</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?php
                        require("./component/footer.php");
                    ?>
</body>

</html>