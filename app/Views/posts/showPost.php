<?= $this->extend('template') ?>

<?= $this->section('head') ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/marked@3.0.0/marked.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
    <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>  
<?= $this->endSection('head') ?>

<?= $this->section('content') ?>
    <div style = "text -align : center">

        <h1>文章展示</h1>
        <?php echo "標題：".$posts['title']?><br>
        <?php echo '<textarea class="hidden_button" id="text">'.$posts['content'].' </textarea>'?>
    </div>
    <div id="content"></div>
    <script>
        var text = document.getElementById("text");
        var str = text.innerHTML;
        document.getElementById('content').innerHTML = marked(str);
    </script>

    <style>
        .hidden_button {
            display: none;
        }
    </style>


<?= $this->endSection('content') ?>
