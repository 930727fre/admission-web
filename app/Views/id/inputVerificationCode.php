<h1>忘記密碼</h1>

<link rel="stylesheet" href="https://classless.de/classless.css">


<form action="/idController/changePassword" enctype="multipart/form-data" method="post">

    <label for="verificationCode">驗證碼: <?php echo "(已寄送至".$mail."）";?></label>
    <input type="text" name="input" id="input" required><br>
    <label for="password">欲修改密碼: </label>
    <input type="text" name="password" id="password" required><br>
    <input type="hidden" name="verificationCode" value=<?php echo $verificationCode; ?>>
    <input type="hidden" name="username" value=<?php echo $_POST["username"]?>>
    <input type="hidden" name="identity" value=<?php echo $_POST["identity"]?>>

    <input type="submit">

</form>
