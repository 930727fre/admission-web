<div style = "text -align : center">
    <h1>上傳文章</h1>
    <form action="/ReviseController/gradeStore" enctype="mutipart/form-data" method="POST">
        <span>標題：</span> <input id = "title" disabled value="請輸入內容"> 
        <input type = "button" onclick = "revise_title()" id = "title_button" value = "修改">
        <span class='confirm_button'></span>
        <br>
        <span>內文：</span> <textarea id = "content" rol="100" col="200" disabled> </textarea>
        <br>
        <div style="height:20px"></div>
        <button type ="submit">上傳成績</button>
</div>

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
</script>