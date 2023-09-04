<?= $this->extend('template') ?>

<?= $this->section('content') ?>
    <div>
        <h1>文章上傳專區</h1>
        <div class="row">
            <div class="col my-3">
                <a href="/PostController/create">
                    <button class="btn btn-primary">文章上傳</button>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col my-3">
                <a href="/PostController/postList">
                    <button class="btn btn-primary">文章修改</button>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col my-3">
                <a href="/PostController/showAllPost">
                    <button class="btn btn-primary">文章展示</button>
                </a>
            </div>
        </div>                    




    </div>
<?= $this->endSection() ?>

