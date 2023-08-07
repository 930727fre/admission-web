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
        return view("id/{$this->request->getVar('where')}.php");
    }
    public function signIn(){
        $model=new SignModel();
        $data=[
            'username'=>$this->request->getVar('username'),
            'password'=>$this->request->getVar('password')
        ]; 

    }
    public function register()
    {   

        // print_r($_POST);
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
    public function singIn(){
        
    }
}
