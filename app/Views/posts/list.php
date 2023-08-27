<?= $this->extend('template') ?>

<?= $this->section('content') ?>
    <?php
        if(!empty($posts))
        {
            echo '<h1>post list<h1>';
            foreach($posts as $posts_item)
            {
                echo '<a href ="/PostController/revisePost/'.$posts_item['id'].'">'.$posts_item['title'].'</a><br>';
            }

        }
    ?>
<?= $this->endSection() ?>

