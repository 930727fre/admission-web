<?= $this->extend('template') ?>

<?= $this->section('head') ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/marked@3.0.0/marked.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
    <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>  
<?= $this->endSection('head') ?>

<?= $this->section('content') ?>
    <div style = "text -align : center">

        <h1>修改文章</h1>
        <?php echo '<textarea class="hidden_button" id="text">'.$posts['content'].' </textarea>'?>
        <form action="/PostController/reviseStore" enctype="mutipart/form-data" method="POST" id="md">
            <!-- <label for="title">標題：</label><br> -->
            <?php echo '<input id = "title" name="title" required value='.$posts['title'].'  >' ?><br>
            <?php echo '<textarea class="hidden_button" name="content" id="newText"></textarea>'?>
            <!-- <label for="mdInput">內文：</label><br> -->
            <textarea id="mdInput" name="mdInput"></textarea>
            <?php echo '<input name="id" class="hidden_button" value='.$posts['id'].'>' ?>
            <input type="submit" onclick=storeData() value="修改公告">
        </form>    
        <form action="/PostController/delete" enctype="mutipart/form-data" method="POST">
            <?php echo '<input name="id" class="hidden_button" value='.$posts['id'].'>' ?>
            <button type = "submit">刪除文章</button>
        </form>
    </div>

    <a>預覽:</a>
    <div id="content"></div>
    <script>
        var simplemde = new SimpleMDE({
            toolbar: ["bold", "italic", "heading", "|", "quote","heading-bigger","heading-smaller","code","quote","|","unordered-list","ordered-list","image","table","|","guide"],
            element: document.getElementById("mdInput") });
        var text = document.getElementById("text");
        var str = text.innerHTML;
        simplemde.value(str);
        document.getElementById('content').innerHTML = marked(str);

        function storeData()
        {
            var text2 = document.getElementById("newText");
            text2.innerHTML = simplemde.value();
            //alert(text2.innerHTML);
            //alert(simplemde.value());
        }

        $(document).ready(function () {
            //$('#mdInput').on('input', function () {    
            //const str = $(this).val();    
            //document.getElementById('content').innerHTML = marked(str);
            //document.getElementById('content').innerHTML = marked(simplemde.value());
            //});
            simplemde.codemirror.on("change", function(){
                document.getElementById('content').innerHTML = marked(simplemde.value());
            });            
        });
    </script>

    <style>
        .hidden_button {
            display: none;
        }
    </style>


<?= $this->endSection('content') ?>
