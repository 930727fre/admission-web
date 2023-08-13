<div style = "text -align : center">
    <h1>上傳成績</h1>
    <form action="/TimeController/storeTime" enctype="mutipart/form-data" method="POST">
        <span>輸入日期：</span> <input type = datetime-local name = "time" step="1" required> <br>
        <br>
        <div style="height:20px"></div>
        <button type ="submit">修改時間</button>
</div>