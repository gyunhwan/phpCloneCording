<?php?>
<div >
    <div class="footer-title">
        <strong>CONTACT</strong>
    </div>
    <div class="footer-content">
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
        <table class="footer-footer" width="100%" border="0" cellpadding=0 cellspacing=0 >
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
