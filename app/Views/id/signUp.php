<?= $this->extend('template') ?>
<?= $this->section('content') ?>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <div class="container">
        <h1>註冊帳號</h1>
        <form action="/idController/createAccount" enctype="multipart/form-data" method="post">
            <div class="row my-2" >
                <div class="col form-group">
                    <label for="identity">身份: </label>
                    <select name="identity" id="identity" class="form-select" style="width: auto;">
                        <option value="student">學生</option>
                        <option value="professor">教授</option>
                    </select>
                </div>
            </div>

            <div class="row my-2" >
                <div class="col-4 form-group">
                    <label for="fullname">姓名: </label>
                    <input type="text" name="fullname" id="fullname" class="form-control" required>
                </div>
            </div>
            <div class="row my-2" >
                <div class="col-4 form-group">
                    <label for="mail">Mail: </label>
                    <input type="email" name="mail" id="mail" class="form-control"required>                  
                </div>
            </div>
            <div class="row my-2" >
                <div class="col-4 form-group">
                    <label for="username" id="usernameLabel">
                        Username: <span id="username_warning" style="color: red;"></span>
                    </label>
                    <input type="text" name="username" id="username" class="form-control"required>                    
                </div>
            </div>                        


            <div class="row my-2" >
                <div class="col-4 form-group">
                    <label for="password">密碼: </label>
                    <input type="password" name="password" id="password" class="form-control"required>               
                </div>
            </div>       
            <div class="row my-4">
                <div class="col-4 form-group">
                    <button class="btn btn-primary"  id="register_button">submit</button>
                </div>
            </div>                                        

            <script>
                // JavaScript code to handle the username availability check
                $(document).ready(function () {
                    $('#username').on('input', function () {
                        const username = $(this).val();
                        const identity = $('#identity').val(); // Get the value of the identity select
                        console.log("hi")
                        // Make an AJAX request to check username availability
                        $.ajax({
                            type: 'POST',
                            url: '/idController/checkUsername', // Replace with the URL to your server-side script
                            data: { username: username, identity: identity }, // Pass both username and identity
                            success: function (data) {
                                if (data === 'taken') {
                                    $('#username_warning').text('This username is used.');
                                    $('#usernameLabel').addClass('disabled-label'); // Add a class to the label
                                    $('#register_button').addClass('disabled'); // Disable the button
                                } else {
                                    $('#username_warning').text('');
                                    $('#usernameLabel').removeClass('disabled-label'); // Remove the class from the label
                                    $('#register_button').removeClass('disabled'); // Enable the button
                                }
                            }
                        });
                    });
                });
                
            </script>
        </form>
    </div>


<?= $this->endSection() ?>
