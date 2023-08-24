<?php $session=session()?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>大學入學徵選委員會</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://unpkg.com/mvp.css">  -->
    <link rel="stylesheet" href="<?= base_url('css/navbar.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/sidebar.css') ?>">
  </head>
  <body style="background-color: rgb(69, 95, 192);">
    <nav>
      <ul class="menu">
        <?php $imagePath = base_url('images/caclogo.jpg'); ?>
        <li><img class="logo" src="<?php echo $imagePath; ?>" ></li>
        <li class="nav_title">大學甄選入學委員會</li>>
        <li><a href="#">校系分則查詢</a></li>
        <li><a href="#">網路購買簡章</a></li>
        <li><a href="#">Q&A</a></li>
        <li><a href="#">關於我們</a></li>
        <li><a href="/signIn"><button type="button" class="btn btn-primary" <?php if ($session->get("signedIn")!=null && $session->get("signedIn")==true) { echo 'style="display:none"'; } ?>>登入</button></a></li>
        <li><a href="/signUp"><button type="button" class="btn btn-primary" <?php if ($session->get("signedIn")!=null && $session->get("signedIn")==true) { echo 'style="display:none"'; } ?>>註冊</button></a></li>
        <li><a href="/signOut"><button type="button" class="btn btn-primary" <?php if ($session->get("signedIn")==null) { echo 'style="display:none"'; } ?>>登出</button></a></li>
      </ul>
    </nav>
      <ul class="side">
        <li class="sidetop">功能列表</li>
        <hr style="color:white;width: 140px;">
        <li><a href="#"><button type="button" class="btn btn-primary" style="font-size: 20px;">回首頁</button></a></li>
        <li><a href="#">訊息公告</a></li>
        <li><a href="#">成績上傳</a></li>
        <li><a href="#">個資修改</a></li>
        <li><a href="#">公告上傳</a></li>
        <li><a href="#">法令規章</a></li>
        <li><a href="#">重要時程</a></li>
        <li><a href="#">下載專區</a></li>
        <li><a href="#">相關網站</a></li>
      </ul>
      <div class="mainArticle">
        <h1>公告</h1>
        <p>yasay</p>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
  <style>
    .mainArticle{
      background-color:  rgb(33, 37, 41);
      margin-left: 230px;
      margin-top: 12px;
      color: white;
      padding: 50px 20px;
    }
  </style>
</html>