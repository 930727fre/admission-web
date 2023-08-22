<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="classless.css">


</head>
<body>
    <h1>User Registration</h1>
    <form action="/idController/createAccount" enctype="multipart/form-data" method="post">
        <h1>註冊帳號</h1>
        <label for="identity">身份: </label>
        <select name="identity" id="identity">
            <option value="student">學生</option>
            <option value="professor">教授</option>
        </select>
        <br>
        <label for="fullname">姓名: </label>
        <input type="text" name="fullname" id="fullname" required><br>  

        <label for="mail">Mail: </label>
        <input type="email" name="mail" id="mail" required> <br>

        <label for="idCard">身分證字號：</label>
        <input type="text" name="idCard" id="idCard" required><br>

        <label for="school">學校：</label>
        <input type="text" name="school" id="school" required><br>

        <label for="phoneNumber">電話號碼：</label>
        <input type="tel" name="phoneNumber" id="phoneNumber" required><br>

        <label for="address">地址：</label>
        <input type="text" name="address" id="address" required><br>  

        <div class="studentField">
            <label for="guardian">監護人：</label>
            <input type="text" name="guardian" id="guardian" class="studentRequired" required><br>        

            <label for="relationship">與監護人的關係：</label>
            <input type="text" name="relationship" id="relationship" class="studentRequired" required><br>    

            <label for="phoneNumberOfGuardian">監護人電話：</label>
            <input type="text" name="phoneNumberOfGuardian" id="phoneNumberOfGuardian" class="studentRequired" required><br>           
        </div>

        <div class="professorField">
            <label for="site">私人網址： </label>
            <input type="site" name="site" id="site" class="professorRequired" required><br>
        </div>   

        <label for="username" id="usernameLabel">
            Username: <span id="username_warning" style="color: red;"></span>
        </label>
        <input type="text" name="username" id="username" required><br> 

        <label for="password">密碼: </label>
        <input type="password" name="password" id="password" required><br>
     

        <input type="submit" value="註冊" id="register_button">

        <script>
            // JavaScript code to handle the username availability check
            $(document).ready(function () {
                $('#username').on('input', function () {
                    const username = $(this).val();
                    const identity = $('#identity').val(); // Get the value of the identity select

                    // Make an AJAX request to check username availability
                    $.ajax({
                        type: 'POST',
                        url: '/idController/checkUsername', // Replace with the URL to your server-side script
                        data: { username: username, identity: identity }, // Pass both username and identity
                        success: function (data) {
                            if (data === 'taken') {
                                $('#username_warning').text('Username used. Please choose another one.');
                                $('#usernameLabel').addClass('disabled-label'); // Add a class to the label
                                $('#register_button').prop('disabled', true); // Disable the button
                            } else {
                                $('#username_warning').text('');
                                $('#usernameLabel').removeClass('disabled-label'); // Remove the class from the label
                                $('#register_button').prop('disabled', false); // Enable the button
                            }
                        }
                    });
                });
                $('.professorField').hide();
                $('.professorRequired').removeAttr('required');

                $('#identity').on('change', function () {
                    const selectedIdentity = $(this).val();

                    // Show the appropriate field section based on selected identity
                    if (selectedIdentity === 'student') {
                        $('.studentField').show();
                        $('.studentRequired').attr('required', true);
                        $('.professorField').hide();
                        $('.professorRequired').removeAttr('required');

                    } else if (selectedIdentity === 'professor') {
                        $('.professorField').show();
                        $('.professorRequired').attr('required', true);
                        $('.studentField').hide();
                        $('.studentRequired').removeAttr('required');

                    }
                });
            });
            
        </script>
    </form>
</body>
</html>