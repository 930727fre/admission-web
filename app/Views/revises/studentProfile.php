<?= $this->extend('template') ?>

<?= $this->section('content') ?>
    <div style = "text -align : center">
        <h1>個人資料修改</h1>
        
        <form action="/ReviseController/profileStore" enctype="mutipart/form-data" method="POST">
            <span>姓名：</span> <?php echo '<input id = "fullname" name="fullname" value='.$fullname.' disabled>' ?><br>
            <span>身分證字號：</span> <?php echo '<input id = "idCard" name="idCard" value='.$idCard.'>' ?><br>
            <span>就讀學校：</span> <?php echo '<input id = "school" name="school" value='.$school.'>' ?><br>
            <span>郵件：</span> <?php echo '<input id = "mail" name="mail" value='.$mail.'>' ?><br>
            <span>電話號碼：</span> <?php echo '<input id = "phoneNumber" name="phoneNumber" value='.$phoneNumber.'>' ?><br>
            <span>監護人姓名：</span> <?php echo '<input id = "guardian" name="guardian" value='.$guardian.'>' ?><br>
            <span>監護人關係：</span> <?php echo '<input id = "relationship" name="relationship" value='.$relationship.'>' ?><br>
            <span>監護人手機號碼：</span> <?php echo '<input id = "phoneNumberOfGuardian" name="phoneNumberOfGuardian" value='.$phoneNumberOfGuardian.'>' ?><br>
            <span>住址：</span><?php echo '<input id = "address" name="address" value='.$address.'>' ?><br>
            <br>
            <div style="height:20px"></div>
            <button type ="submit" onclick = reviseDisabled()>確認修改</button>
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
