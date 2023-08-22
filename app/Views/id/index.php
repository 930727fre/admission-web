<?php
    use CodeIgniter\Session\Session;
    $session=session();
    
?>

<link rel="stylesheet" href="https://classless.de/classless.css">

<a href="/signUp">
    <button <?php if ($session->get("signedIn")!=null && $session->get("signedIn")==true) { echo 'style="display:none"'; } ?>>註冊</button>
</a>
<a href="/signIn">
    <button <?php if ($session->get("signedIn")!=null && $session->get("signedIn")==true) { echo 'style="display:none"'; } ?>>登入</button>
</a>
<a href="/signOut">
    <button <?php if ($session->get("signedIn")==null) { echo 'style="display:none"'; } ?>>登出</button>
</a>
<?php
    // print_r($session);
    if($session->get("signedIn")!=null&&$session->get("signedIn")==true){
        echo "hello ".$session->get("username");
    }
    else{
        echo "not sign in";
    }
?> 