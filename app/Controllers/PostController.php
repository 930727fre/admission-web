<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PostController extends BaseController
{
    public function index()
    {
        return view('posts/index');
    }
    public function redirectTo()
    {
        //echo $this->request->getVar('where');

        if($this->request->getVar('where') == 'student')
            return view('posts/studentProfile'); 
        else if($this->request->getVar('where') == 'professor')
            return view('posts/professorProfile');
        else
            return view("posts/{$this->request->getVar('where')}.php");   
    }
}
