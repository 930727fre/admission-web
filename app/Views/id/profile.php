<?php
echo "<h1>登入成功！你好 ".$_SESSION["username"]."</h1>";
echo "<a href='/signOut'>登出</a><br>";
echo "<a href='/idController'>首頁</a>";