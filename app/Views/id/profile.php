<?php 
// idCard
// school
// phoneNumber
// address
// guardian
// relationship
// phoneNumberOfGuardian
    use App\Models\StudentModel;
    use App\Models\ProfessorModel;
    $session=session();
    $data=array();
    if($session->get("identity")=="student"){
        $model=new StudentModel();

        $data["relationship"]=$model->where("username",$session->get("username"))->get()->getRow("relationship");
        $data["guardian"]=$model->where("username",$session->get("username"))->get()->getRow("guardian");
        $data["phoneNumberOfGuardian"]=$model->where("username",$session->get("username"))->get()->getRow("phoneNumberOfGuardian");

    }else{
        $model=new ProfessorModel();
        $data["site"]=$model->where("username",$session->get("username"))->get()->getRow("site");
    }
    $data["idCard"]=$model->where("username",$session->get("username"))->get()->getRow("idCard");
    $data["school"]=$model->where("username",$session->get("username"))->get()->getRow("school");
    $data["phoneNumber"]=$model->where("username",$session->get("username"))->get()->getRow("phoneNumber");
    $data["address"]=$model->where("username",$session->get("username"))->get()->getRow("address");
?>
<head>
    <title>profile</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://classless.de/classless.css">
</head>
<body>
    <?php
        $session=session();
        echo "<h1>登入成功！你好，".$session->get('username')."<h1><br>";
    ?>    
    <a href='/'>首頁</a><br>
    <a href='/idController'>url1</a><br>
    <a href='/idController'>url2</a><br>
    <a href='/ReviseController/'>修改個人資料</a><br>
    <a href='/ReviseController/redirectTo?where=grade'>修改成績</a><br>
    <a href='/signOut'>登出</a><br>

    <h1>修改個資</h1>
    <form action="/idController/modifyPersonalInfo" enctype="multipart/form-data" method="post">
        <label for="idCard">身分證字號：</label>
        <input type="text" name="idCard" id="idCard" value="<?php if(isset($data["idCard"])){echo $data["idCard"];}?>" required><br>

        <label for="school">學校：</label>
        <input type="text" name="school" id="school" value="<?php if(isset($data["school"])){echo $data["school"];}?>" required><br>

        <label for="phoneNumber">電話號碼：</label>
        <input type="tel" name="phoneNumber" id="phoneNumber" value="<?php if(isset($data["phoneNumber"])){echo $data["phoneNumber"];}?>" required><br>

        <label for="address">地址：</label>
        <input type="text" name="address" id="address" value="<?php if(isset($data["address"])){echo $data["address"];}?>" required><br>  

        <div class="studentField">
            <label for="guardian">監護人：</label>
            <input type="text" name="guardian" id="guardian" class="studentRequired" value="<?php if(isset($data["guardian"])){echo $data["guardian"];}?>" required><br>        

            <label for="relationship">與監護人的關係：</label>
            <input type="text" name="relationship" id="relationship" class="studentRequired" value="<?php if(isset($data["relationship"])){echo $data["relationship"];}?>" required><br>    

            <label for="phoneNumberOfGuardian">監護人電話：</label>
            <input type="text" name="phoneNumberOfGuardian" id="phoneNumberOfGuardian" class="studentRequired" value="<?php if(isset($data["phoneNumberOfGuardian"])){echo $data["phoneNumberOfGuardian"];}?>" required><br>           
        </div>

        <div class="professorField">
            <label for="site">私人網址： </label>
            <input type="site" name="site" id="site" class="professorRequired" value="<?php if(isset($data["site"])){echo $data["site"];}?>" required><br>
        </div>   

        <input type="submit" value="註冊" id="register_button">


    </form>

    <script>
        $(document).ready(function () {
            // JavaScript code to handle the username availability check
            if (<?php if($session->get("identity")==="student"){echo "true";}else{echo "false";}?>) {
                $('.studentField').show();
                $('.studentRequired').attr('required', true);
                $('.professorField').hide();
                $('.professorRequired').removeAttr('required');
            } else {
                $('.professorField').show();
                $('.professorRequired').attr('required', true);
                $('.studentField').hide();
                $('.studentRequired').removeAttr('required');
            }
        });
    </script>
</body>

