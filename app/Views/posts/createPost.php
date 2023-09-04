<?= $this->extend('template') ?>

<?= $this->section('head') ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/marked@3.0.0/marked.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
    <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>  
<?= $this->endSection('head') ?>

<?= $this->section('content') ?>
    <div style = "text -align : center">

        <h1>上傳文章</h1>
        
        <form action="/PostController/storePost" enctype="mutipart/form-data" method="POST" id="md">
            <div class="row">
                <div class="col-2">
                    <span>標題：</span><br>
                    <input type="title" name="title" class="form-control" required>
                </div>
            </div>

            <span>內文：</span>
            <textarea class="hidden_button" name="content" id="hideContent"></textarea>
            <textarea id="mdInput" name="mdInput"></textarea>
            <div class="row">
                <div class="col-2 my-4">
                    <input type="submit" class="btn btn-primary" onclick=storeData() value="上傳公告">
                </div>
            </div>            
        </form>    

    </div>

    <a>預覽:</a>
    <div id="content"></div>
    <script>
        var simplemde = new SimpleMDE({
            toolbar: ["bold", "italic", "heading", "|", "quote","heading-bigger","heading-smaller","code","quote","|","unordered-list","ordered-list","image","table","|","guide"],
            element: document.getElementById("mdInput") });
        var str=" ";
        simplemde.value(str);
        document.getElementById('content').innerHTML = marked(str);
        var str1;

        function storeData()
        {
            var btn = document.getElementById("hideContent");
            btn.innerHTML = simplemde.value();
            //btn.setAttribute('value',simplemde.value());
            console.log(document.getElementById("hideContent"));
  
        }

        $(document).ready(function () {
            // $('#mdInput').on('input', function () {    
            //     // const str = $(this).val();    
                    // document.getElementById('content').innerHTML = marked(str);
            //     document.getElementById('content').innerHTML = marked(simplemde.value());
            // });
            // alert(simplemde.element.value);
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
