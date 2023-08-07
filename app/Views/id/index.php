<a href="/register">
    <button>註冊</button>
</a>
<a href="/signIn">
    <button>登入</button>
</a>
<a href="/signOut">
    <button>登出</button>
</a>
<?php
    session_start();
    if(isset($_SESSION["signedIn"])&&$_SESSION['signedIn']==true){
        echo "hello ".$_SESSION["username"];
    }
    else{
        echo "not.";
    }
?>
