<?php
    
?>

<div class="aside">
    <div class="left-aside">
        <div class="aside-header">
            <img src="http://dmonster1349.cafe24.com/img/logo.png">
        </div>
        <div class="aside-body">
            <div class="menu-item">
                <a class="menu-title">회사소개</a>
            </div>
            <div class="menu-item">
                <a class="menu-title" >제품소개</a>
            </div>
            <div class="menu-item">
                <a class="menu-title">우림비료의 특징</a>
                
            </div>
            <div class="menu-item">
                <a class="menu-title">구매안내</a>
            </div>
        </div>
        <div class="aside-footer">
            <div class="aside-footer-title" style="padding-top:5%; background-color:#7da242;color:white;height:10%">
                <strong>CONTACT</strong>
            </div>
            <div class="aside-footer-body" style="background-color:#f5f5f5; padding:10px;">
                <b>사무실</b>
                <br>
                <em>대전광역시 중구 대종로 223 (석교동)</em>
                <br>
                    "TEL : 042-285-4781"
                <br>
                    "FAX : 042-285-4784"
                <br>
                <br>
                <b>공장</b>
                <br>
                <em>
                    세종특별시 연서면 와룡로 497-19
                    <br>
                    "(신대리)"
                </em>
                <br>
                    "TEL : 044-8670-6001"
                <br>
                    "FAX : 044-867-6003"
            </div>
            <div >
                <table class="aside-footer-footer" width="100%" border="0" cellpadding=0 cellspacing=0 >
                    <tbody>
                        <tr>
                            <td>대표</td>
                            <td>남경환, 김상배</td>
                        </tr>
                        <tr>
                            <td colspan="2">사업자 등록번호 &nbsp;&nbsp;307-81-05069</td>
                        </tr>
                    </tbody>
                </table>
                <div>
                <div class="copyright" style="font-size:14px"> 
                    Copyright © All rights reserved
                </div>
                <?php
                    if(isset($_SESSION["user"])==false){
                        echo "<a href='/login.php'>로그인</a>";
                    }else{
                        echo "<a href='/logout.php'>로그아웃</a>";
                    }
                    
                ?>
                </div>
            </div>
        </div>
    </div>   
</div>
<!--사이드 메뉴 스크립트-->
<div class="right-aside">
    <ul>
        <li class="menu-sub-item"></li>
        <li class="menu-sub-item"></li>
        <li class="menu-sub-item"></li>
    </ul>
    <ul>
        <li class="menu-sub-item"></li>
        <li class="menu-sub-item"></li>
        <li class="menu-sub-item"></li>
        <li class="menu-sub-item"></li>
    </ul>
    <ul>
        <li class="menu-sub-item"></li>
    </ul>
    <ul>
        <li class="menu-sub-item"></li>
    </ul>
</div>