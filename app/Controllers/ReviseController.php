<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ReviseController extends BaseController
{
    public function index()
    {
        return view('revises/index');
    }
    public function gradeStore()
    {
        $data = [
            'id' => null,   //student id (not complete)
            'Chinese' => $this->request->getVar('Chinese'),
            'English' => $this->request->getVar('English'),
            'Math' => $this->request->getVar('Math'),
            'Science' => $this->request->getVar('Science'),
            'Social' => $this->request->getVar('Social')

        ];

        print_r($data);
    }
    public function redirectTo()
    {   
        session_start();
        if($this->request->getVar('where') == 'grade')
        {
            if($_SESSION["username"]!='f')
            {
                echo '<h2 style = "text -align : center">你不需要輸入成績!!<h2>';
                echo '<a href="/ReviseController/redirectTo?where=index"><button>回上一頁</button></a>';
                return view("revises/blank");
            }
            else
            {
                return view('revises/grade');
            }
        }
        else if($this->request->getVar('where') == 'professor')
        {
            return view('revises/professorProfile');
        }
        else
        {
            return view("revises/{$this->request->getVar('where')}.php");
        }   
        //session_destroy();   
    }
}
