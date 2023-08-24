<?php
    if(!empty($posts))
    {
        echo '<h1>post list<h1>';
        foreach($posts as $posts_item)
        {
            echo '<a href ="/PostController/revise/'.$posts_item['id'].'">'.$posts_item['title'].'</a><br>';
        }

    }
?>