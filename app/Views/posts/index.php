<?= $this->extend('template') ?>

<?= $this->section('content') ?>
    <div>
        <h1>文章上傳專區</h1>
        <br>
        <a href="/PostController/create">
            <button>文章上傳</button>
        </a><br>
        <a href="/PostController/postList">
            <button>文章修改</button>
        </a>
        <br>
        <a href="/">
            <button>首頁</button>
        </a>
    </div>
<?= $this->endSection() ?>

