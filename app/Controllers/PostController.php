<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PostController extends BaseController
{
    public function index()
    {
        return view('posts/index');
    }

    public function grade_create()
    {
        return view('posts/grade');
    }
    public function grade_store()
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
    public function profile_create()
    {
        $test = 2;
        if ($test==2) return view('posts/studentProfile');
        else return view('posts/professorProfile');
    }
    public function profile_store()
    { 
        echo 'suecess';
        return view('posts/index');
    }
    public function redirectTo()
    {
        
        return view("posts/{$this->request->getVar('where')}.php");   
    }
}
