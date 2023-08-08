<h1>忘記密碼</h1>

<link rel="stylesheet" href="https://classless.de/classless.css">
<?php
    if(isset($message)){
        echo "<span style='color: red;'>$message</span>";
    }
?>

<form action="/idController/changePassword" enctype="multipart/form-data" method="post">

    <label for="verificationCode">驗證碼: </label>
    <input type="text" name="input" id="input" required><br>
    <label for="password">修改密碼: </label>
    <input type="text" name="password" id="password" required><br>
    <input type="hidden" name="verificationCode" value=<?php echo $verificationCode; ?>>
    <input type="hidden" name="username" value=<?php echo $_POST["username"]?>>
    <input type="submit">

</form>
