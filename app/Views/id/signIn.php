<head>
    <link rel="stylesheet" href="https://classless.de/classless.css">
</head>
<body>

    <h1>登入</h1>
    <?php
        if(isset($message)){
            echo "<span style='color: red;'>$message</span>";
        }
    ?>
    <form action="/idController/validateAccount" enctype="multipart/form-data" method="post">
        
        <label for="identity">身份: </label>
        <select name="identity" id="identity">
            <option value="student">學生</option>
            <option value="professor">教授</option>
        </select>
        <br>

        <label for="username">Username: </label>
        <input type="text" name="username" id="username" required>
        <br>

        <label for="password">Password: </label>
        <input type="password" name="password" id="password" required>
        <br>
        <a href="/forgetPassword">忘記密碼</a>
        <input type="submit">

    </form>

</body>