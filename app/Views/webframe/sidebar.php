<?php $session=session()?>
<link rel="stylesheet" href="<?= base_url('css/sidebar.css') ?>">
<ul class="side">
        <li class="sidetop">功能列表</li>
        <hr style="color:white;width: 140px;">
        <li><a href="/"><button type="button" class="btn btn-primary" style="font-size: 20px;">回首頁</button></a></li>
        <li class="studentField"><a href="/ReviseController/grade">成績上傳</a></li>
        <li class="studentField"><a href="/ReviseController/profile">個資修改</a></li>
        <li class="professorField"><a href="/ReviseController/profile">個資修改</a></li>
        <li class="professorField"><a href="/PostController">公告上傳</a></li>
        <li class="studentField"><a href="/filterController/showResult">篩選結果</a></li>
        <li class="studentField"><a href="/ReviseController/volunteer">志願選填</a></li>
        <li><a href="/PageController/law">法令規章</a></li>
        <li><a href="#">重要時程</a></li>
        <li><a href="/PageController/stats">統計數據</a></li>
        <li><a href="/PageController/downloads">下載專區</a></li>
        <li><a href="#">相關網站</a></li>
        <li class="adminField"><a href="/TimeController/getTime">顯示時間</a></li>
        <li class="adminField"><a href="/TimeController/setTime">設置時間</a></li>
</ul>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        if (<?php if (!isset($session)||$session->get("signedIn")==false) { echo "true"; }else{echo "false";} ?>) {
            var elementsToHide = document.querySelectorAll('.studentField, .professorField, .adminField');
        }
        else{
            if(<?php if(isset($session)&&$session->get("identity")=="student"){echo "true";}else{echo "false";} ?>){
                if(<?php if(isset($session)&&$session->get("username")!="f"){echo "true";}else{echo "false";} ?>){
                    var elementsToHide = document.querySelectorAll('.professorField, .adminField');
                }
                else{
                    var elementsToHide = document.querySelectorAll('.professorField');
                }
            }
            else{
                var elementsToHide = document.querySelectorAll('.studentField, .adminField');
            }
        }

        for (var i = 0; i < elementsToHide.length; i++) {
            elementsToHide[i].setAttribute("hidden",""); // Add the class that you want to add
        }
    });
   
</script>
