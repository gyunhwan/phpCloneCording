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
                $title="연혁";
                $description="우리의 건강한 먹거리를 위해 힘쓰겠습니다.";
                require("./component/subheader.php")
            ?>
            <div class="sub-content-content">
                <div id="bo_list" style="width:100%">

                    <div class="list_year">
                        <div class="year">1991~</div>
                        <div class="info">
                            <div class="mc_con">
                                <div class="list_month">2018</div>
                                <div class="list_content">
                                    •농협 중앙회 계통계약<br />
                                    •산학연전국대회 기술개발대상<br />
                                    •기술혁신 개발사업자선정<br />
                                    •제2공장준공(옥천)<br />
                                    •친환경비료 개발 및 공급<br />
                                    •맞춤형비료 생산 및 공급<br />
                                    •일본국 기술공유협약체결<br />
                                    •일본국ZEN-NOH(일본 농협중앙회) <br />
                                    독점 공급 계약 체결<br />
                                    •일본국TOMIKURA기술제휴

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="list_year">
                        <div class="year">1981~</div>
                        <div class="info">
                            <div class="mc_con">
                                <div class="list_month">1990</div>
                                <div class="list_content">
                                    •제 27회 무역의 날 1백만불수출탑수상(대통령상)<br />
                                    •우수업체 표창(환경처 장관)<br />
                                    •저분자 아미노산 제조특허<br />
                                    •유기질혼합비료 제조특허<br />
                                    •발효비료공법 제조특허<br />
                                    •3종복합비료 제조특허<br />
                                    •병역특례업체지정<br />
                                    •벤처기업지정<br />
                                    •제1공장확장이전준공(세종)

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="list_year">
                        <div class="year">1971~</div>
                        <div class="info">
                            <div class="mc_con">
                                <div class="list_month">1980</div>
                                <div class="list_content">
                                    •회사설립(대전유지)<br />
                                    •증제피혁분(동물성유기질비료) 제조특허<br />
                                    •증제피혁분일본수출 개시<br />
                                    •비료 전문 생산업체 전환<br />
                                    •비료 및 단미 사료 생산<br />
                                    (탈지강, 채종박, 임자박, 호마박, 육분, 골분, 잠용박, 어분, 식용유)<br />
                                    •혼합유기질, 혼합유박, 아미노산비료 생산업 허가 및 특허

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <?php
                        require("./component/footer.php");
                    ?>
    </div>
</body>

</html>