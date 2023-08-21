<?php
    use CodeIgniter\Session\Session;
    session_start();
?>
<link rel="stylesheet" href="https://classless.de/classless.css">

<a href="/signUp">
    <button <?php if (isset($_SESSION['signedIn'])&&$_SESSION['signedIn']==true) { echo 'style="display:none"'; } ?>>註冊</button>
</a>
<a href="/signIn">
    <button <?php if (isset($_SESSION['signedIn'])&&$_SESSION['signedIn']==true) { echo 'style="display:none"'; } ?>>登入</button>
</a>
<a href="/signOut">
    <button <?php if (!isset($_SESSION["signedIn"])) { echo 'style="display:none"'; } ?>>登出</button>
</a>
<?php
    if(isset($_SESSION["signedIn"])&&$_SESSION['signedIn']==true){
        echo "hello ".$_SESSION["username"];
    }
    else{
        echo "not sign in";
    }
?>
