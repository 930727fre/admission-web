<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SignModel;

class IdController extends BaseController
{
    public function index()
    {
        return view('id/index.php');
    }
    public function redirectTo(){
        if($this->request->getVar('where')=='revise')
            return redirect('ReviseController');
        return view("id/{$this->request->getVar('where')}.php");
    }
    public function signIn(){
        $model=new SignModel();
        $data=[
            'username'=>$this->request->getVar('username'),
            'password'=>$this->request->getVar('password')
        ]; 
        if($model->where('username',$data['username'])->first()){
            if(($model->where('username',$data['username'])->first())['password']===$data['password']){
                session_start();
                $_SESSION['username']=$data['username'];
                return view("id/profile.php");
            }
        }
        else{
            // echo "<script>alert('" . 錯誤username或密碼 . "');</script>";
            echo "wrong";
        }

    }
    public function register()
    {
        $model=new SignModel(); 
        $data=[
            'identity'=>$_POST['identity'],
            'fullname'=>$_POST['fullname'],
            'username'=>$_POST['username'],
            'password'=>$_POST['password']
        ];
        $YN=$model->save($data);
        // print_r($YN);
        return view('id/countdown.php');
        // return redirect("idController");
    }
    public function sessionTest(){
        return view('id/sessionTest.php');
    }
    public function test1(){
        return view('id/test1.php');
    }
    public function checkUsername(){
        $username = $this->request->getPost('username');

        $model = new SignModel(); // Replace this with the actual model representing your users

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
    public function singOut(){

        
    }
}
