<?= $this->extend('template') ?>

<?= $this->section('content') ?>
    <div style = "text -align : center">
        <h1>上傳成績</h1>
        <form action="/ReviseController/gradeStore" enctype="mutipart/form-data" method="POST">
            <div class="row">
                <div class="col my-2">
                    <span>國文：</span>
                    <input name="Chinese" type="number" class="form-control" min="0" max="15" value='<?php echo $chinese; ?>' required style="width: auto;">
                </div>
            </div>
            <div class="row">
                <div class="col my-2">
                    <span>英文：</span>
                    <input name="English" type="number" class="form-control" min="0" max="15" value='<?php echo $english; ?>' required style="width: auto;">
                </div>
            </div>
            <div class="row">
                <div class="col my-2">
                    <span>數學：</span>
                    <input name="Math" type="number" class="form-control" min="0" max="15" value='<?php echo $math; ?>' required style="width: auto;">
                </div>
            </div>
            <div class="row">
                <div class="col my-2">
                    <span>自然：</span>
                    <input name="Science" type="number" class="form-control" min="0" max="15" value='<?php echo $science; ?>' required style="width: auto;">
                </div>
            </div>
            <div class="row">
                <div class="col my-2">
                    <span>社會：</span>
                    <input name="Social" type="number" class="form-control" min="0" max="15" value='<?php echo $social; ?>' required style="width: auto;">
                </div>
            </div>
            <div class="row">
                <div class="col my-2">
                    <button type ="submit" class="btn btn-primary">上傳成績</button>
                </div>
            </div>
    </div>
<?= $this->endSection() ?>



