<?= $this->extend('template') ?>

<?= $this->section('content') ?>
    <div style = "text -align : center">
        <h1>個人資料修改</h1>
        
        <form action="/ReviseController/profileStore" enctype="mutipart/form-data" method="POST">
            <div class="row">
                <div class="col my-2">
                    <span>姓名：</span>
                    <input id ="fullname" name="fullname" class="form-control" style="width: auto;" value="<?php echo $fullname;?>" disabled>
                </div>
            </div>
            <div class="row">
                <div class="col my-2">
                    <span>任教大學：</span>
                    <input id ="school" name="school" class="form-control" style="width: auto;" value="<?php echo $school;?>">
                </div>
            </div>
            <div class="row">
                <div class="col my-2">
                    <span>郵件：</span> 
                    <input id = "mail" name="mail" class="form-control" style="width: auto;" value="<?php echo $mail;?>">
                </div>
            </div>
            <div class="row">
                <div class="col my-2">
                    <span>電話號碼：</span>
                    <input id ="phoneNumber" name="phoneNumber" class="form-control" style="width: auto;" value="<?php echo $phoneNumber;?>">
                </div>
            </div>
            <div class="row">
                <div class="col my-2">
                    <span>住址：</span>
                    <input id ="address" name="address" class="form-control" style="width: auto;" value="<?php echo $address; ?>">
                </div>
            </div>
            <div class="row">
                <div class="col my-2">
                    <span>個人網站網址：</span>
                    <input id ="site" name="site" class="form-control" style="width: auto;" value="<?php echo $site?>">
                </div>
            </div>
            <div class="row">
                <div class="col my-2">
                    <button type ="submit" class="btn btn-primary" onclick = reviseDisabled()>確認修改</button>
                </div>
            </div>
    </div>


    <script>
        function reviseDisabled()
        {
            var el = document.getElementById("fullname");
            el.removeAttribute('disabled');
            //alert(el style="width: auto;".value);
        }
    </script>
<?= $this->endSection() ?>

