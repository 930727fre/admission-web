<div style = "text -align : center">
    <h1>修改文章</h1>
    <form action="/PostController/reviseStore" enctype="mutipart/form-data" method="POST">
        <span>標題：</span><?php echo '<input id = "title" name="title" value='.$posts['title'].'  >' ?>
        <input type = "button" onclick = "revise_title()" id = "title_button" value = "修改">
        <span class='confirm_button'></span>
        <br>
        <span>內文：</span> <?php echo '<textarea id = "content" rol="100" col="200" name="content">'.$posts['content'].'</textarea>'?>
        <br>
        <div style="height:20px"></div>
        <?php echo '<input name="id" class="hidden_button" value='.$posts['id'].'>' ?>
        <button type = "submit">修改文章</button><br>
    </form>
    <form action="/PostController/delete" enctype="mutipart/form-data" method="POST">
        <?php echo '<input name="id" class="hidden_button" value='.$posts['id'].'>' ?>
        <button type = "submit">刪除文章</button>
    </form>
</div>

<style>
    .hidden_button {
        display: none;
    }
</style>