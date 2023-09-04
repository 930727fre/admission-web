<?= $this->extend('template') ?>

<?= $this->section('content') ?>
    <div style = "text -align : center">
        <h1>個人資料修改</h1>
        
        <form action="/ReviseController/profileStore" enctype="mutipart/form-data" method="POST">
            <div class="row my-3">
                <div class="col">
                    <span>姓名：</span> <?php echo '<input id = "fullname" name="fullname" class="form-control" style="width: auto;" value='.$fullname.' disabled>' ?>
                </div>
            </div>
            <div class="row my-3">
                <div class="col">
                    <span>身分證字號：</span> <?php echo '<input id = "idCard" name="idCard" class="form-control" style="width: auto;" value='.$idCard.'>' ?>
                </div>
            </div>
            <div class="row my-3">
                <div class="col">
                    <span>就讀學校：</span> <?php echo '<input id = "school" name="school" class="form-control" style="width: auto;" value='.$school.'>' ?>
                </div>
            </div>
            <div class="row my-3">
                <div class="col">
                    <span>郵件：</span> <?php echo '<input id = "mail" name="mail" class="form-control" style="width: auto;" value='.$mail.'>' ?>
                </div>
            </div>
            <div class="row my-3">
                <div class="col">
                    <span>電話號碼：</span> <?php echo '<input id = "phoneNumber" name="phoneNumber" class="form-control" style="width: auto;" value='.$phoneNumber.'>' ?>
                </div>
            </div>
            <div class="row my-3">
                <div class="col">
                    <span>監護人姓名：</span> <?php echo '<input id = "guardian" name="guardian" class="form-control" style="width: auto;" value='.$guardian.'>' ?>
                </div>
            </div>
            <div class="row my-3">
                <div class="col">
                    <span>監護人關係：</span> <?php echo '<input id = "relationship" name="relationship" class="form-control" style="width: auto;" value='.$relationship.'>' ?>
                </div>
            </div>
            <div class="row my-3">
                <div class="col">
                    <span>監護人手機號碼：</span> <?php echo '<input id = "phoneNumberOfGuardian" name="phoneNumberOfGuardian" class="form-control" style="width: auto;" value='.$phoneNumberOfGuardian.'>' ?>
                </div>
            </div>
            <div class="row my-3">
                <div class="col">
                    <span>住址：</span><?php echo '<input id = "address" name="address" class="form-control" style="width: auto;" value='.$address.'>' ?>
                </div>
            </div>
            <div class="row my-3">
                <div class="col">
                    <button type ="submit" class="btn btn-primary" onclick = reviseDisabled()>確認修改</button>
                </div>
            </div>
            
    </div>

    <script>
        function reviseDisabled()
        {
            var el = document.getElementById("fullname");
            el.removeAttribute('disabled');
            //alert(el.value);
        }
    </script>
<?= $this->endSection() ?>
