<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>相關網站</title>
    <link rel="stylesheet" href="<?= base_url('css/mainarticle.css') ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body style="background-color: rgb(69, 95, 192);">
    <?= $this->include("webframe/header") ?>
    <?= $this->include("webframe/sidebar") ?>
      <div class="mainarticle" >
        <h1 class="title">相關網站</h1>
        <div class="smalltitle">招生單位<div>
            <ul class="links">
                <li><a href="https://www.jbcrc.edu.tw/">大學招生委員會聯合會</a></li>
                <li><a href="https://www.uac.edu.tw/">大學考試入學分發委員會</a></li>
                <li><a href="https://www.techadmi.edu.tw/">技專校院招生策略委員會</a></li>
                <li><a href="https://rdrc.mnd.gov.tw/">國軍人才招募中心</a></li>
            </ul>        
        <div class="smalltitle">考試單位</div>
            <ul class="links">
                <li><a href="https://www.ceec.edu.tw/">財團法人大學入學考試中心基金會</a></li>
                <li><a href="https://www.cape.edu.tw/">大學術科考試委員會聯合會</a></li>
                <li><a href="https://www.tcte.edu.tw/">財團法人技專校院入學測驗中心基金會</a></li>
            </ul>
        <div class="smalltitle">其他網站</div>
            <ul class="links">
                <li><a href="https://www.edu.tw/Default.aspx">教育部</a></li>
                <li><a href="https://depart.moe.edu.tw/ED2200/Default.aspx">教育部高教司</a></li>
                <li><a href="https://www.ccu.edu.tw/">國立中正大學</a></li>
                <li><a href="https://collego.edu.tw/">ColleGo!大學選才與高中育才輔助系統</a></li>
                <li><a href="http://nsdua.moe.edu.tw/">大學多元入學升學網</a></li>
                <li><a href="https://www.testnews.com.tw/shibao/">大學網路博覽會</a></li>
                <li><a href="https://techexpo.moe.edu.tw/search/">技訊網</a></li>
                <li><a href="https://apcs.csie.ntnu.edu.tw/">大學程式設計先修檢測(APCS)</a></li>
            </ul>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
  <style>
    .links a{
        font-size: 20px;
    }
    .links a:hover{
        color: rgb(220, 137, 137);
    }
    .smalltitle{
        font-size: 25px;
    }
  </style>
</html>