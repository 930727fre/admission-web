<?= $this->extend('template') ?>

<?= $this->section('content') ?>
    <?php
        if(!empty($posts))
        {
            echo '<h1>訊息公告<h1>';
            echo '<table>
                <tr style="height:1px">
                    <td style="width:900px;"><span style="font-size:30px;">文章標題</span></td>
                    <td style="width:200px;" align="right"><span style="font-size:15px;">poster</span></td>
                </tr>
            </table>';
            // echo '<span style="font-size:15px;float:right;">發文者</span><br>';
            foreach($posts as $posts_item)
            {
                echo '<table><tr style="height:1px"><td style="width:900px;"><a href ="/PostController/showPost/'.$posts_item['id'].'">'.$posts_item['title'].'</a></td><td style="width:200px;" align="right"><span style="font-size:15px;">'.$posts_item['username'].'</span></td></tr></table>';
            }

        }
    ?>
  
<?= $this->endSection() ?>
