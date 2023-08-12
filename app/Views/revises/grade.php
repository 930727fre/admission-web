<div style = "text -align : center">
    <h1>上傳成績</h1>
    <form action="/ReviseController/gradeStore" enctype="mutipart/form-data" method="POST">
        <span>國文：</span> <input name = "Chinese" type="number" min="0" max="15" required > <br>
        <span>英文：</span> <input name = "English" type="number" min="0" max="15" required > <br>
        <span>數學：</span> <input name = "Math" type="number" min="0" max="15" required > <br>
        <span>自然：</span> <input name = "Science" type="number" min="0" max="15" required > <br>
        <span>社會：</span> <input name = "Social" type="number" min="0" max="15" required > <br>
        <br>
        <div style="height:20px"></div>
        <button type ="submit">上傳成績</button>
</div>
