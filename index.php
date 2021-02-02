<?php
    session_start();
    
?>
<html lang="ko">
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="./css/selfmade.css">
        <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        />

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0, maximum-scale=10, user-scalable=yes">
        <meta name="format-detection" content="telephone=no">
        <title>미원유박 | 우림사업(주)</title>
        <script>
            $(document).ready(
                function(){
                $(".menu-item").mouseover(
                    function(){
                        $(this).css("background-color","red")
                }).mouseout(
                    function(){
                        $(this).css("background-color","#333")
                    }
                )
                
                $(".bxslider").bxSlider({
                    auto:true,
                    speed:1000,
                    pause:9000,
                    mode:"fade",
                    autoControls:false,
                    pager:false,
                    controls:false,
                });    
            });
        </script>
    </head>
    <body>
        <div class="header">
            
        </div>
        <div class="body">
            <?php
                require("./component/aside.php")
            ?>
            <div class="content">
                <div class="content-slide">
                    <ul class="bxslider" >
                        <li class="image-slide">
                            <div class="image-back" style="background-image:url('./image/slide01.jpg');background-repeat:no-repeat;" >
                                <Strong style="color:white;font-size:50px"> 
                                    우리의 건강한 먹거리를 위해 힘쓰겠습니다.
                                </Strong>
                                <div class="ment" style="color:white">
                                    <Strong>
                                        지난 40여년간 친환경농업 시장을 선도하며 쌓아온 노하우로 더 나은 서비스를 드리기 위해 노력하고,
                                        <br>
                                        지속 가능한 농업생태계 구축을 위하여 더 좋은 제품 생산에 힘쓰겠습니다.
                                    </Strong>
                                </div>
                                <div class="detail-button" style="color:white">
                                    <p>이동하기 -></p>
                                </div>

                            </div>
                        </li>
                        <li class="image-slide" >
                        <div class="image-back" style="background-image:url('./image/slide02.jpg');background-repeat:no-repeat;" >
                            <Strong style="color:white"> 
                                우리의 건강한 먹거리를 위해 힘쓰겠습니다.
                            </Strong>
                            <div class="ment">
                                <Strong style="color:white">
                                    지난 40여년간 친환경농업 시장을 선도하며 쌓아온 노하우로 더 나은 서비스를 드리기 위해 노력하고,
                                    <br>
                                    지속 가능한 농업생태계 구축을 위하여 더 좋은 제품 생산에 힘쓰겠습니다.
                                </Strong>
                                </div>
                                <div class="detail-button" style="color:white">
                                    <p>이동하기 -></p>
                                </div>
                            </li>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>
