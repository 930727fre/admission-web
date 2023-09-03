<?= $this->extend('template') ?>
<?= $this->section('content') ?>

        <div class="container-fluid">
            <h1>登入</h1>
            <?php
                if(isset($message)){
                    echo "<span style='color: red;'>$message</span>";
                }
            ?>
            <form action="/idController/validateAccount" enctype="multipart/form-data" method="post">
                <div class="row my-1">
                    <div class="col">
                        <div class="form-group">
                            <label for="identity" class="form-label">身份</label>
                            <select name="identity" id="identity" class="form-select" style="width: auto;">
                                <option value="student">學生</option>
                                <option value="professor">教授</option>
                            </select>
                        </div>

                    </div>
                </div>                    

                <div class="row my-1">
                    <div class="col-4">
                        <div class="form-group">
                            <label for="username" class="form-label">username</label>
                            <input type="text" class="form-control" id="username" name="username" required> 
                        </div>
                    
                    </div>
                </div>                    

                <div class="row my-1">
                    <div class="col-4">
                        <div class="form-group">
                            <label for="password" class="form-label">password</label>
                            <input type="text" class="form-control" id="password" name="password" required>  
                        </div>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-4">
                        <button class="btn btn-primary">submit</button>
                    </div>
                </div>  
                <div class="row my-3">
                    <div class="col">
                        <a href="/forgetPassword" class="">忘記密碼</a>
                    </div>
                </div>


            </form>
        </div>
<?= $this->endSection() ?>
