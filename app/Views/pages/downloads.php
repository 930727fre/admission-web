<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>下載專區</title>
    <link rel="stylesheet" href="<?= base_url('css/mainarticle.css') ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body style="background-color: rgb(69, 95, 192);">
    <?= $this->include("webframe/header") ?>
    <?= $this->include("webframe/sidebar") ?>
      <div class="mainarticle" >
        <h1 class="title">下載專區</h1>
        <ul class="downloadarea">
          <li><div class="downloadtitle">112申請入學集體報名系統-報名資料檔案格式(APPLY.txt)</div>
            <a href="downloadFile?item=113a_signdata_dataformat_20230109.pdf">點我下載</a>
          </li>
          <li>
            <div class="downloadtitle">112申請入學集體報名考生報名資料調查表(本表僅供參加學校集體報名考生使用)</div>
            <a href="downloadFile?item=113a_stu_signdata_survey_20230109.doc">點我下載</a>
          </li>
        </ul>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
  <style>
    .downloadarea a{
      list-style: square;
      font-size: 20px;
      color: rgb(224, 38, 38);
    }
    .downloadarea a:hover{
      color: rgb(220, 137, 137);
      cursor: pointer;
    }
    .downloadtitle{
        font-size: 25px;
    }
  </style>
</html>