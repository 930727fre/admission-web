<?= $this->extend('template') ?>

<?= $this->section('content') ?>
    <div style="text-align: center;">
        <?php echo '<p>'.$msg.'</p>' ?>
        <a href="/"><button class="btn btn-primary">回個人頁面</button></a>
    </div>
<?= $this->endSection('content') ?>