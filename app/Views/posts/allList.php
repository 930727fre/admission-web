<?= $this->extend('template') ?>

<?= $this->section('content') ?>
    <?php
        if(!empty($posts))
        {
            echo '<h1>post list<h1>';
            foreach($posts as $posts_item)
            {
                echo '<a href ="/PostController/showPost/'.$posts_item['id'].'">'.$posts_item['title']."(發文者：".$posts_item['username'].")".'</a><br>';
            }

        }
    ?>
<?= $this->endSection() ?>