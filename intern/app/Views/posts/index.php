<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>大學甄選入學委員會</title>
    <link
    href="http://fonts.googleapis.com/css?family=Open+Sans"
    rel="stylesheet"
    type="text/css">
    <link
    href="http://fonts.googleapis.com/css?family=Open+Sans"
    rel="stylesheet"
    type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+TC:wght@500&display=swap" rel="stylesheet">
    <link href="styles/style.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
  <body style="background-color: rgb(69, 95, 192);">
    <div class="p-3 mb-2 bg-dark text-white">
        <header class="d-flex justify-content-center py-3">
        <?php
        $imagePath = base_url('images/unnamed.jpg');
        ?>
        <img src="<?php echo $imagePath; ?>" width="50" height="50">
        <ul class="nav nav-pills">
            <li class="nav-item" style="font-size: 30px;">大學甄選入學委員會</li>
            <li class="nav-item"><a href="#" class="nav-link">校系分則查詢</a></li>
            <li class="nav-item"><a href="#" class="nav-link">網路購買簡章</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Q&A</a></li>
            <li class="nav-item"><a href="#" class="nav-link">關於我們</a></li>
            <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">考生登入</a></li>
        </ul>
        </header>
    </div>
    <aside>
        <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 170px;">
            <a>
            <svg class="bi pe-none me-2" width="30" height="32"><use xlink:href="#bootstrap"></use></svg>
            <span class="fs-4">功能列表</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item" >
                <a href="http://localhost:8080/PostController/index" class="nav-link text-white">
                    <button type="button" class="btn btn-primary">回首頁</button>
                </a>
            </li>
            <li>
                <a href="#" class="nav-link text-white">
                    訊息公告
                </a>
            </li>
            <li>
                <a href="#" class="nav-link text-white">
                    法令規章
                </a>
            </li>
            <li>
                <a href="#" class="nav-link text-white">
                    重要時程
                </a>
            </li>
            <li>
                <a href="#" class="nav-link text-white">
                下載專區
                </a>
            </li>
            <li>
                <a href="#" class="nav-link text-white">
                相關網站
                </a>
            </li>
            </ul>
            <hr>
            <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="4114150791666540953.jpg" alt="" width="40" height="40" class="rounded-circle me-2">
                <strong>王功羨</strong>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                <li><a class="dropdown-item" href="#">設定</a></li>
                <li><a class="dropdown-item" href="#">個人資料</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">登出</a></li>
            </ul>
            </div>
        </div>
    </aside>
    <div class="adjust" style=>公告</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
  <style>
        .adjust
        {
            color: white;
            position:absolute;
            top: 200px;
            left: 200px;
            font-size:30px; 
        }
    </style>
</html>
