<?php

namespace App\Controllers;
use App\Models\PostModel;

class Home extends BaseController
{
    
    public function index()
    {
        $model = new PostModel();
        $data = [
            'posts' => $model->findAll()
        ];
        return view('home',$data);
    }
}
