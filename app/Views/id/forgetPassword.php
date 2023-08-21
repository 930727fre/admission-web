<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://classless.de/classless.css">
    <style>
        .disabled-label {
            color: gray; /* You can choose your own styling for a disabled label */
            font-style: italic;
        }
    </style>
</head>
<body>
    <h1>忘記密碼</h1>
    <form action="/idController/sendMail" enctype="multipart/form-data" method="post">
        <label for="identity">身份: </label>
        <select name="identity" id="identity">
            <option value="student">學生</option>
            <option value="professor">教授</option>
        </select>
        <br>
        <label for="username" id="usernameLabel">
            Username: <span id="username_warning" style="color: red;"></span>
        </label>
        <input type="text" name="username" id="username" required>  <br> 

        <input type="submit" value="確認" id="button">

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
                        data: { username: username, identity: identity},
                        success: function (data) {
                            if (data === 'taken') {
                                $('#username_warning').text('');
                                $('#usernameLabel').removeClass('disabled-label'); // Add a class to the label
                                $('#button').prop('disabled', false); // Disable the button
                            } else {
                                $('#username_warning').text('invalid username');
                                $('#usernameLabel').addClass('disabled-label'); // Remove the class from the label
                                $('#button').prop('disabled', true); // Enable the button
                            }
                        }
                    });
                });
            });
        </script>
    </form>
</body>
</html>
