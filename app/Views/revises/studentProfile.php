<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>大學甄選入學委員會</title>
    <link rel="stylesheet" href="<?= base_url('css/mainarticle.css') ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body style="background-color: rgb(69, 95, 192);">
    <?= $this->include("webframe/header") ?>
    <?= $this->include("webframe/sidebar") ?>
      <div class="mainarticle">
        <h1>公告</h1>
        <p>test</p>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>


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