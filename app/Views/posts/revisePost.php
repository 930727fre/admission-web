<?= $this->extend('template') ?>
<?= $this->section('content') ?>
<head>
    <meta charset="utf-8"/>
    <title>Marked in the browser</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/marked@3.0.0/marked.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
    <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>  
</head>
<body>
    <div style = "text -align : center">

        <h1>上傳文章</h1>
        <form action="/PostController/storePost" enctype="mutipart/form-data" method="POST" id="md">
            <!-- <label for="title">標題：</label><br> -->
            <input type="title" name="title"><br>
            <input type = "button" onclick = "revise_title()" id = "title_button" value = "修改">
            <!-- <label for="mdInput">內文：</label><br> -->
            <textarea id="mdInput" name="mdInput"></textarea>
            <input id = "hideContent" name = "content" hidden>
            <input type="submit" onclick=storeData() value="上傳公告">
        </form>    

    </div>

    <a>預覽:</a>
    <div id="content"></div>
    <script>
        var simplemde = new SimpleMDE({
            toolbar: ["bold", "italic", "heading", "|", "quote","heading-bigger","heading-smaller","code","quote","|","unordered-list","ordered-list","image","table","|","guide"],
            element: document.getElementById("mdInput") });
        var str="This text will appear in the editorefs\n1. jfis\n2. efji\n3. jsiefjo\n| Column 1 | Column 2 | Column 3 |\n| -------- | -------- | -------- |\n| Text     | Tesfaefsaefxt     | Text     |\n| Text     | Text     | Text     |";
        simplemde.value(str);
        document.getElementById('content').innerHTML = marked(str);
        var str1;

        function storeData()
        {
            var btn =document.getElementById("hideContent");
            btn.setAttribute('value',simplemde.value());
            console.log(document.getElementById("hideContent"));
            
        }
        function revise_title()
        {
            var title = document.getElementById("title");
            var title_button = document.getElementById("title_button");
            var confirm_button = document.querySelector('.confirm_button');
            var element = document.createElement('input');
            str1 =title.value;
            if (title_button.value=="修改")
            {
                title_button.value="儲存";
                title.disabled = false;
                element.setAttribute('type','button');
                element.setAttribute('value','取消');
                element.setAttribute('id','cancel');
                element.setAttribute('onclick','cancel_button()');
                confirm_button.appendChild(element);
            }
            else if(title_button.value == "儲存")
            {
                if(confirm_button.children.length)
                {
                    var element = document.getElementById('cancel');
                    confirm_button.removeChild(element);
                }
                title_button.value="修改";
                title.disabled = true;
            }   
        }
        $(document).ready(function () {
            // $('#mdInput').on('input', function () {    
            //     // const str = $(this).val();    
            //     // document.getElementById('content').innerHTML = marked(str);
            //     document.getElementById('content').innerHTML = marked(simplemde.value());
            // });
            // alert(simplemde.element.value);
            simplemde.codemirror.on("change", function(){
                document.getElementById('content').innerHTML = marked(simplemde.value());
            });            
        });



    </script>
<?= $this->endSection() ?>
