<div style = "text -align : center">
    <h1>上傳志願序</h1>
    <form action="/ReviseController/volunteerStore" enctype="mutipart/form-data" method="POST">
        <span>志願序1</span>
        <select nmae = 's1'>
            <option value="台大">台大</option>
            <option value="清大">清大</option>
            <option value="交大">交大</option>
            <option value="成大">成大</option>
        </select>
        <select nmae = 's2'>
            <option value="數學系">數學系</option>
            <option value="電機系">電機系</option>
            <option value="資工系">資工系</option>
        </select><br>
        <span>志願序2</span>
        <select nmae = 's3'> 
            <option value="台大">台大</option>
            <option value="清大">清大</option>
            <option value="交大">交大</option>
            <option value="成大">成大</option>
        </select>
        <select nmae = 's4'>
            <option value="數學系">數學系</option>
            <option value="電機系">電機系</option>
            <option value="資工系">資工系</option>
        </select><br>
        <span>志願序3</span>
        <select nmae = 's5'>
            <option value="台大">台大</option>
            <option value="清大">清大</option>
            <option value="交大">交大</option>
            <option value="成大">成大</option>
        </select>
        <select nmae = 's6'>
            <option value="數學系">數學系</option>
            <option value="電機系">電機系</option>
            <option value="資工系">資工系</option>
        </select><br>
        <span>志願序4</span>
        <select nmae = 's7'>
            <option value="台大">台大</option>
            <option value="清大">清大</option>
            <option value="交大">交大</option>
            <option value="成大">成大</option>
        </select>
        <select nmae = 's8'>
            <option value="數學系">數學系</option>
            <option value="電機系">電機系</option>
            <option value="資工系">資工系</option>
        </select><br>
        <span>志願序5</span>
        <select nmae = 's9'>
            <option value="">school</option>
            <option value="台大">台大</option>
            <option value="清大">清大</option>
            <option value="交大">交大</option>
            <option value="成大">成大</option>
        </select>
        <select nmae = 's10'>
            <option value="數學系">數學系</option>
            <option value="電機系">電機系</option>
            <option value="資工系">資工系</option>
        </select><br>
        <span>志願序6</span>
        <select nmae = 's11'>
            <option value="台大">台大</option>
            <option value="清大">清大</option>
            <option value="交大">交大</option>
            <option value="成大">成大</option>
        </select>
        <select nmae = 's12'>
            <option value="數學系">數學系</option>
            <option value="電機系">電機系</option>
            <option value="資工系">資工系</option>
        </select><br>
        <br>
        <div style="height:20px"></div>
        <button onclick = postData() type ="submit">上傳志願序</button>
        <input name = "School1" type="hidden" required>
        <input name = "Department1" type="hidden" required> 
        <input name = "School2" type="hidden" required> 
        <input name = "Department2" type="hidden" required> 
        <input name = "School3" type="hidden" required> 
        <input name = "Department3" type="hidden" required> 
        <input name = "School4" type="hidden" required> 
        <input name = "Department4" type="hidden" required> 
        <input name = "School5" type="hidden" required> 
        <input name = "Department5" type="hidden" required> 
        <input name = "School6" type="hidden" required> 
        <input name = "Department6" type="hidden" required> 
</div>


<script>
    function postData()
    {
        var s = document.getElementsByTagName('select');
        var inp = document.getElementsByTagName('input');
        for (var i = 0; i < 12; i++)
        {
            inp[i].value = s[i].value;
        }
        //alert(inp[3].value);
        //same department check
    }
</script>