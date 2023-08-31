<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>網路簡章</title>
    <link rel="stylesheet" href="<?= base_url('css/mainarticle.css') ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body style="background-color: rgb(69, 95, 192);">
    <?= $this->include("webframe/header") ?>
    <?= $this->include("webframe/sidebar") ?>
    <div class="mainarticle">
        <h1 class="title">網路購買簡章</h1>
        <ul class="links">
            <li><a href="/PageController/onlinebrochure_1">高中學校訂購簡章</a></li>
            <li><a href="/PageController/onlinebrochure_2">個別訂購簡章</a></li>
            <li><a href="/PageController/onlinebrochure_3">補習班訂購簡章</a></li>
        </ul>
        <h2 class="title">注意事項</h2>
        <ol style="font-size: 20px;">
            <li>112學年度大學「申請入學」招生簡章發售日期：<br>自111年12月1日起至112年3月14日止</li>
            <br>
            <li>112年3月15日起因郵遞作業不及，恕無法提供網路購買服務，欲購買者請至<a href="downloadFile?item=112_applymw_Purchase_SaleRule.pdf" target="_blank">簡章發售辦法內各代售點</a>購買。</font></li>
            <br>                    
            <li>大學「申請入學」招生簡章購買費用：每份180元。<br><font color=red>(團體購買免運費，個別網路購買另加掛號郵資65元)</font></li>
            <br>
            <li>完成網路訂購簡章後，請持具有轉帳功能之金融卡至自動櫃員機(ATM)或以網路ATM轉帳繳款或列印「購買招生簡章繳費單」至便利商店、臺灣銀行、郵局進行繳款，或至各金融機構辦理跨行匯款。(至臺灣銀行繳款者，免收手續費)<br></li>                    	
            <br>
            <li>本會於確認繳款無誤後，自111年12月1日起五個工作天(不含郵寄時間)寄出招生簡章。</li>  
        </ol>
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
    .smalltitle{
        font-size: 25px;
    }
  </style>
</html>