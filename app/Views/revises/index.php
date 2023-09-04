<?php 
    $session = session();
    $identity = $session->get('identity');
?>
<div>
    <h1>資料修改專區</h1>
    <a href="/ReviseController/grade">
        <button >成績修改</button>
    </a>
    <br>
    <a href="/ReviseController/volunteer">
        <button>志願序修改</button>
    </a>
    <br>
    <a href="/ReviseController/profile">
        <button>個人資料修改</button>
    </a>
    <br>
    <a href="/">
        <button>首頁</button>
    </a>
</div>