<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\StudentModel;
use App\Models\ProfessorModel;
use App\Models\PostModel;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use CodeIgniter\Session\Session;


class IdController extends BaseController
{
    public function index()
    {
        return view('id/index.php');
    }
    public function signIn(){
        return view("id/signIn.php");
    }
    public function validateAccount(){

        if($_POST["identity"]=="student"){
            $model=new StudentModel();

        }
        else{
            $model=new ProfessorModel();
        }

        $data=[
            'username'=>$this->request->getVar('username'),
            'password'=>$this->request->getVar('password')
        ]; 
        if($model->where('username',$data['username'])->first()){
            if(($model->where('username',$data['username'])->first())['password']==hash("sha256",$data['password'])){
                session_start();
                $_SESSION = [
                    'username'  => $data['username'],
                    'signedIn' => true,
                ];
                return view("id/profile.php");
            }
        }
            // echo "<script>alert('" . 錯誤username或密碼 . "');</script>";
        return view("id/signIn.php",array("message"=>"帳號/密碼輸入錯誤"));

    }
    public function profile()
    {
        return view("id/profile.php");
    }
    public function signUp()
    {
        return view("id/signUp.php");
    }
    public function createAccount(){
        $data = [
            "username" => $_POST["username"],
            "password" => hash("sha256",$_POST['password']),
            "mail" => $_POST["mail"],
            "idCard" => $_POST["idCard"],
            "fullname" => $_POST["fullname"],
            "school" => $_POST["school"],
            "address" => $_POST["address"],
            "phoneNumber" => $_POST["phoneNumber"]
        ];
        
        if($_POST['identity']=="student"){
            $model=new StudentModel();
            $data["relationship"]=$_POST["relationship"];
            $data["guardian"] =$_POST["guardian"];
            $data["phoneNumberOfGuardian"] =$_POST["phoneNumberOfGuardian"];
        }
        else{
            $model=new ProfessorModel();
            $data["site"]=$_POST["site"];
        }
        $model->save($data);
        return view('id/countdown.php',array("message"=>"註冊成功!"));
    }
    public function sessionTest(){
        return view('id/sessionTest.php');
    }
    public function test1(){
        return view('id/countdown.php',array("message"=>"註冊成功!"));
    }
    public function checkUsername(){
        $username = $this->request->getPost('username');
        if($this->request->getPost('identity')=="student"){
            $model = new StudentModel(); // Replace this with the actual model representing your users
        }
        else{
            $model = new ProfessorModel(); // Replace this with the actual model representing your users

        }
        // Check if the username exists in the database
        $user = $model->where('username', $username)->first();

        if ($user) {
            // Username is taken
            return 'taken';
        } else {
            // Username is available
            return 'available';
        }
    }
    public function signOut(){
        session_start();
        session_destroy();
        session_unset();


        return view("id/index.php");
    }
    public function forgetPassword(){
        return view("id/forgetPassword.php");
    }
    public function changePassword(){
        if($_POST['verificationCode']==$_POST["input"]){
            if($this->request->getVar('identity')=="student"){
                $model = new StudentModel();
            }
            else{
                $model = new ProfessorModel();
            }            
            $model->where("username",$_POST['username'])->set(array("password"=>hash("sha256",$_POST['password'])))->update();

            return view("id/countdown.php",array("message"=>"驗證成功！已修改密碼"));
        }
        else{
            return view("id/countdown.php",array("message"=>"驗證失敗","url"=>"forgetPassword"));
        }
    }
    public function sendMail(){
        ob_start();

        require $_SERVER['DOCUMENT_ROOT'].'/src/Exception.php';
        require $_SERVER['DOCUMENT_ROOT'].'/src/PHPMailer.php';
        require $_SERVER['DOCUMENT_ROOT'].'/src/SMTP.php';
        require $_SERVER['DOCUMENT_ROOT'].'/../vendor/autoload.php';
    
        // //Create an instance; passing `true` enables exceptions
        $verificationCode=rand(1000,9999);
        $mail = new PHPMailer();
        $mail->IsSMTP(); // enable SMTP
        $from="930727fre@gmail.com";
        if($this->request->getVar('identity')=="student"){
            $model = new StudentModel();
        }
        else{
            $model = new ProfessorModel();
        }
        $to=($model->where('username', $_POST['username'])->first())['mail'];
        $fromPassword=getenv("API_KEY");
        $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
        $mail->SMTPAuth = true; // authentication enabled
        $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 465; // or 587
        $mail->IsHTML(true);
        $mail->Username = $from;
        $mail->Password = $fromPassword;
        $mail->SetFrom($from);
        $mail->Subject = "admission-web: verification code";
        $mail->Body = "驗證碼：".$verificationCode;
        $mail->AddAddress($to);
        if(!$mail->Send()) {
            return view("id/countdown.php",array("message"=>"invalid email🥵","url"=>"forgetPassword"));
    
        } else {
            ob_end_clean();
            return view("id/inputVerificationCode.php",array("verificationCode"=>$verificationCode,"username"=>$_POST['username'],"mail"=>$to, "identity"=>$this->request->getVar('identity')));
        }        
    }
    public function redirectTo()
    {
        // echo $_GET["controller"]."/".$_GET["where"];
        return view($_GET["controller"]."/".$_GET["where"]);  
    }
    public function template()
    {
        $data = [
            'title' => 'Home Page',
            'content' => view('home') // Load the content view
        ];

        echo view('template', $data); // Load the template view with data
    }
}
