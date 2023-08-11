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
    function revise_title()
    {
        let title = document.getElementById("title");
        let title_button = document.getElementById("title_button");
        var confirm_button = document.querySelector('.confirm_button');
        var element =document.createElement('input');
        if (title_button.value=="修改")
        {
            title_button.value="儲存";
            title.disabled = false;
            element.textContent="取消";
            element.
            confirm_button.appendChild(element);

        }
        else
        {
            title_button.value="修改";
            title.disabled = true;
        }
            
    }
</script>