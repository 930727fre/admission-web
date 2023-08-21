<head>
    <link rel="stylesheet" href="https://classless.de/classless.css">
</head>
<body>
    <?php
        echo "<h1>登入成功！你好，".$_SESSION['username']."<h1><br>";
    ?>    

    <a href='/idController'>首頁</a><br>
    <a href='/idController'>url1</a><br>
    <a href='/idController'>url2</a><br>
    <a href='/ReviseController/redirectTo?where=grade'>修改成績</a><br>
    <a href='/idController/signOut'>登出</a><br>
</body>