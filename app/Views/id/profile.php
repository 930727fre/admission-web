<?php
echo "<h1>登入成功！你好 ".$_SESSION["username"]."</h1>";
echo "<a href='/idController/redirectTo?where=signOut'>登出</a>";
?>

<a href='/idController/redirectTo?where=revise'><button>修改</button></a>