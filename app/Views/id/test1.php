<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.classless.min.css">
<body>
    <main>
        <h1>登入</h1>
        <?php
            if(isset($message)){
                echo "<span style='color: red;'>$message</span>";
            }
        ?>
        <form action="/idController/validateAccount" enctype="multipart/form-data" method="post">

            <label for="username">Username: </label>
            <input type="text" name="username" id="username" required><br>
            <label for="password">Password: </label>
            <input type="password" name="password" id="password" required><br>
            <a href="/forgetPassword">忘記密碼</a>
            <input type="submit">

        </form>
    </main>
</body>