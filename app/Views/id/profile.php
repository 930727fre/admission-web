<?php
    $session = session();
    $username = $session->get('username');
    echo "<h1>登入成功！你好 ".$username."<h1><br>";
?>
<link rel="stylesheet" href="https://classless.de/classless.css">
<a href='/idController'>首頁</a><br>
<a href='/idController'>url1</a><br>
<a href='/idController'>url2</a><br>
<a href='/ReviseController/redirectTo?where=grade'>修改成績</a><br>
<a href='/idController/signOut'>登出</a><br>
