<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>各校資訊連結</title>
    <link rel="stylesheet" href="<?= base_url('css/mainarticle.css') ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body style="background-color: rgb(69, 95, 192);">
    <?= $this->include("webframe/header") ?>
    <?= $this->include("webframe/sidebar") ?>
    <div class="mainarticle">
        <h1 class="title">各校資訊連結</h1>
        <ul class="links">
            <li><a href="https://www.ntu.edu.tw/">國立台灣大學</a></li>
            <li><a href="https://www.nthu.edu.tw/">國立清華大學</a></li>
            <li><a href="https://www.nycu.edu.tw/">國立陽明交通大學</a></li>
            <li><a href="https://www.ncku.edu.tw/">國立成功大學</a></li>
            <li><a href="https://www.nccu.edu.tw/">國立政治大學</a></li>
            <li><a href="https://www.ccu.edu.tw/">國立中正大學</a></li>
            <li><a href="https://www.nsysu.edu.tw/">國立中山大學</a></li>
            <li><a href="https://www.ncu.edu.tw/">國立中央大學</a></li>
            <li><a href="https://www.nchu.edu.tw/index1.php">國立中興大學</a></li>
        </ul>
    </div>   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
  <style>
    .links a{
        font-size: 25px;
    }
    .links a:hover{
        color: rgb(220, 137, 137);
    }
  </style>
</html>