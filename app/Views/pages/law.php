<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>法令規章</title>
    <link rel="stylesheet" href="<?= base_url('css/mainarticle.css') ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body style="background-color: rgb(69, 95, 192);">
    <?= $this->include("webframe/header") ?>
    <?= $this->include("webframe/sidebar") ?>
    <div class="mainarticle">
        <h1 class="title">法令規章</h1>
        <ul class="downloadarea">
            <li><div class="downloadtitle">112學年度大學申請入學招生規定</div>
              <a href="downloadFile?item=112學年度大學申請入學招生規定.pdf">點我下載</a>
            </li>
        </ul>
    </div>

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