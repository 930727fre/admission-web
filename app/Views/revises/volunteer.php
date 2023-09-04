<?= $this->extend('template') ?>

<?= $this->section('content') ?>
    <div style = "text -align : center">
        <h1>上傳志願序</h1>
        <form action="/ReviseController/volunteerStore" enctype="mutipart/form-data" method="POST">
            <span>志願序1</span>
            <select class="form-select" style="width: auto;" name="v1" required>
                <option value="">請選擇學校</option>
                <?php 
                    foreach($row as $i) 
                        echo '<option class ='.$i['school'].'/'.$i['department'].' value='.$i['school'].'/'.$i['department'].' required>'.$i['school'].$i['department'].'</option>'
                ?>
            </select><br>
            <span>志願序2</span>
            <select class="form-select" style="width: auto;" name="v2" required>
                <option value="">請選擇學校</option>
                <?php 
                    foreach($row as $i) 
                        echo '<option class ='.$i['school'].'/'.$i['department'].' value='.$i['school'].'/'.$i['department'].' required>'.$i['school'].$i['department'].'</option>'
                ?>
            </select><br>
            <span>志願序3</span>
            <select class="form-select" style="width: auto;" name="v3" required>
                <option value="">請選擇學校</option>
                <?php 
                    foreach($row as $i) 
                        echo '<option class ='.$i['school'].'/'.$i['department'].' value='.$i['school'].'/'.$i['department'].' required>'.$i['school'].$i['department'].'</option>'
                ?>
            </select><br>
            <span>志願序4</span>
            <select class="form-select" style="width: auto;" name="v4" required>
                <option value="">請選擇學校</option>
                <?php 
                    foreach($row as $i) 
                        echo '<option class ='.$i['school'].'/'.$i['department'].' value='.$i['school'].'/'.$i['department'].' required>'.$i['school'].$i['department'].'</option>'
                ?>
            </select><br>
            <span>志願序5</span>
            <select class="form-select" style="width: auto;" name="v5" required>
                <option value="">請選擇學校</option>
                <?php 
                    foreach($row as $i) 
                        echo '<option class ='.$i['school'].'/'.$i['department'].' value='.$i['school'].'/'.$i['department'].' required>'.$i['school'].$i['department'].'</option>'
                ?>
            </select><br>
            <span>志願序6</span>
            <select class="form-select" style="width: auto;" name="v6" required>
                <option value="">請選擇學校</option>
                <?php 
                    foreach($row as $i) 
                        echo '<option class ='.$i['school'].'/'.$i['department'].' value='.$i['school'].'/'.$i['department'].' required>'.$i['school'].$i['department'].'</option>'
                ?>
            </select><br>
            <div style="height:20px"></div>
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
            <input type = "submit" class="btn btn-primary" onclick = postData() value ="上傳志願序">
            </form>
    </div>


    <script>
        function postData()
        {
            var s = document.getElementsByTagName('select');
            var inp = document.getElementsByTagName('input');
            for (var i = 0; i < 6; i++)
            {
                var arr = s[i].value.split('/');
                inp[2*i].value = arr[0];
                inp[2*i+1].value = arr[1];
            }
        }   

        var select = document.getElementsByTagName('select');
        var saveData = [];
        for (var i = 0; i < 6; i++)
            select[i].addEventListener('change', hideValue);
        function hideValue(e)
        {
            var select = document.getElementsByTagName('select');
            for(var el of saveData)
            {
                var exsit = 0;
                for(var i = 0; i < 6; i++)
                {
                    if(el == select[i].value)
                        exsit = 1;
                }
                if(!exsit)
                {
                    var o = document.getElementsByClassName(el);
                    newData = saveData.filter(function(value) 
                    {
                        return value !== el; // 移除值為 3 的元素
                    });
                    saveData = newData;
                    for(var i = 0; i < 6; i++)
                    {
                        o[i].removeAttribute('hidden');
                        //console.log(o[i]);
                    }
                }
            }

            var o = document.getElementsByClassName(this.value);
            for(var i = 0; i < 6; i++)
            {
                o[i].setAttribute('hidden',true); 
                //console.log(this.value);
            }
            saveData.push(this.value);
        }
    </script>
<?= $this->endSection() ?>
