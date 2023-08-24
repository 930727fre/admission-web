<div style = "text -align : center">

    <form method="post" action="upload" enctype="multipart/form-data">
        <select nmae = 'school' required>
            <option value="123">學校</option>
            <option value="台大">台大</option>
            <option value="清大">清大</option>
            <option value="交大">交大</option>
            <option value="成大">成大</option>
        </select>
        <select nmae = 'department' required>
            <option value="">科系</option>
            <option value="數學系">數學系</option>
            <option value="電機系">電機系</option>
            <option value="資工系">資工系</option>
        </select><br>
        <span>檔案上傳：</span><input type="file" name="userfile" required/><br>
        <input type="submit" value="upload" />
    </form>

</div>

