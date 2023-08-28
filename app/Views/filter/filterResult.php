<?= $this->extend('template') ?>

<?= $this->section('content') ?>
    <div style="text-align: center;">
        <span>志願序1：</span>
        <?php echo $school1.$department1?>
        <?php if($result1 >= 50){echo '<span style = "color : green">'.'錄取'.'</span>';} else{echo '<span style = "color : red">'.'未錄取'.'</span>';}?><br>
        <span>志願序2：</span>
        <?php echo $school2.$department2?>
        <?php if($result2 >= 50){echo '<span style = "color : green">'.'錄取'.'</span>';} else{echo '<span style = "color : red">'.'未錄取'.'</span>';}?><br>
        <span>志願序3：</span>
        <?php echo $school3.$department3?>
        <?php if($result3 >= 50){echo '<span style = "color : green">'.'錄取'.'</span>';} else{echo '<span style = "color : red">'.'未錄取'.'</span>';}?><br>
        <span>志願序4：</span>
        <?php echo $school4.$department4?>
        <?php if($result4 >= 50){echo '<span style = "color : green">'.'錄取'.'</span>';} else{echo '<span style = "color : red">'.'未錄取'.'</span>';}?><br>
        <span>志願序5：</span>
        <?php echo $school5.$department5?>
        <?php if($result5 >= 50){echo '<span style = "color : green">'.'錄取'.'</span>';} else{echo '<span style = "color : red">'.'未錄取'.'</span>';}?><br>
        <span>志願序6：</span>
        <?php echo $school6.$department6?>
        <?php if($result6 >= 50){echo '<span style = "color : green">'.'錄取'.'</span>';} else{echo '<span style = "color : red">'.'未錄取'.'</span>';}?><br>
    </div>
<?= $this->endSection('content') ?>