<?= $this->extend('template') ?>
<?= $this->section('content') ?>
<div style = "text -align : center">

    <form method="post" action="showSchool" enctype="multipart/form-data">
        <span>學校科系：</span> <select required>
            <option value="">請選擇學校</option>
            <?php 
                foreach($row as $i) 
                    echo '<option value='.$i['school'].'/'.$i['department'].' required>'.$i['school'].$i['department'].'</option>'
            ?>
        </select><br>
        <input name="school" type="hidden" required><br>
        <input name="department" type="hidden" required><br>
        <input type="submit" onclick = postData() value="upload" />
    </form>
</div>

<script>
    function postData()
    {
        var s = document.getElementsByTagName('select');
        var arr = s[0].value.split('/');
        var btn = document.getElementsByTagName('input');
        btn[0].value = arr[0];
        btn[1].value = arr[1];
        //alert(arr[0]);
    }
</script>

<?= $this->endSection('content') ?>