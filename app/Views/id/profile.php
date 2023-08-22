<?php ?>
<head>
    <link rel="stylesheet" href="https://classless.de/classless.css">
</head>
<body>
    <?php
        $session=session();
        echo "<h1>登入成功！你好，".$session->get('username')."<h1><br>";
    ?>    

    <a href='/idController'>首頁</a><br>
    <a href='/idController'>url1</a><br>
    <a href='/idController'>url2</a><br>
    <a href='/ReviseController/redirectTo?where=grade'>修改成績</a><br>
    <a href='/signOut'>登出</a><br>
</body>