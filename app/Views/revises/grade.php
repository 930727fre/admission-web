<?= $this->extend('template') ?>

<?= $this->section('content') ?>
    <div style = "text -align : center">
        <h1>上傳成績</h1>
        <form action="/ReviseController/gradeStore" enctype="mutipart/form-data" method="POST">
            <span>國文：</span> <?php echo '<input name="Chinese" type="number" min="0" max="15" value='.$chinese.' required>'?><br>
            <span>英文：</span> <?php echo '<input name="English" type="number" min="0" max="15" value='.$english.' required>'?><br>
            <span>數學：</span> <?php echo '<input name="Math" type="number" min="0" max="15" value='.$math.' required>'?><br>
            <span>自然：</span> <?php echo '<input name="Science" type="number" min="0" max="15" value='.$science.' required>'?><br>
            <span>社會：</span> <?php echo '<input name="Social" type="number" min="0" max="15" value='.$social.' required>'?><br>
            <br>
            <div style="height:20px"></div>
            <button type ="submit">上傳成績</button>
    </div>
<?= $this->endSection() ?>



