<?= $this->extend('template') ?>

<?= $this->section('content') ?>
    <div style = "text -align : center">

        <h1>上傳文章</h1>
        <form action="/PostController/store" enctype="mutipart/form-data" method="POST">
            <span>標題：</span> <input id = "title" name="title" value="請輸入內容"  disabled> 
            <input type = "button" onclick = "revise_title()" id = "title_button" value = "修改">
            <span class='confirm_button'></span>
            <br>
            <span>內文：</span> 
            <div class = "button-wrap">
                <span class="button header" title="header" onclick = "markdown_header()"><img width="16" height="16" src = '<?php echo base_url('icons/header.png');?>'/></span>
                <span class="button bold" title="bold" onclick = "markdown_bold()"><img width="16" height="16" src = '<?php echo base_url('icons/bold.png');?>'/></span>
                <span class="button italic" title="italic" onclick = "markdown_italic()"><img width="16" height="16" src = '<?php echo base_url('icons/italic.png');?>'/></span>
                <span class="button underline" title="underline" onclick = "markdown_underline()"><img width="16" height="16" src = '<?php echo base_url('icons/underline.png');?>'/></span>
                <span class="button list" title="list" onclick = "markdown_list()"><img width="16" height="16" src = '<?php echo base_url('icons/list.png');?>'/></span>
                <span class="button orderlist" title="orderlist" onclick = "markdown_orderlist()"><img width="16" height="16" src = '<?php echo base_url('icons/orderlist.png');?>'/></span>
            </div>  
            <textarea id = "content" rol="100" col="200" name="content"> </textarea>
            <br>
            <div style="height:20px"></div>
            <button type ="submit">上傳文章</button>
    </div>

    <style>
        .button-wrap img
        {
            border: solid 5px white;
            opacity: 1.0;
        }
        .button-wrap img:hover{
            opacity: 0.5;
        } 
    </style>

    <script>
        var str1;

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

        function cancel_button()
        {
            var element = document.getElementById('cancel');
            var confirm_button = document.querySelector('.confirm_button');
            var title_button = document.getElementById("title_button");
            var title = document.getElementById("title");
            title_button.value = "修改";
            title.value = str1;
            title.disabled = true;
            confirm_button.removeChild(element);
            return;
        }
        function markdown_header()
        {
            alert('23');
        }
    </script>
<?= $this->endSection() ?>
