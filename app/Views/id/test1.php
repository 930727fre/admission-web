<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>php圖形驗證碼</title>
   
    <script>
        function refresh_code(){ 
            document.getElementById("imgcode").src="/captcha"; 
        } 
    </script>
    
</head>
<body>
    <form name="form1" method="post" action="/checkCaptchacode">
        <p>請輸入下圖字樣：</p><p><img id="imgcode" src="/captcha" onclick="refresh_code()" /><br />
           點擊圖片可以更換驗證碼
        </p>
        <input type="text" name="checkword" size="10" maxlength="10" />
        <input type="submit" name="Submit" value="送出" />
    </form>
</body>
</html>