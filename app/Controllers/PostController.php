<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use APP\Models\PostModel;

class PostController extends BaseController
{
    public function index()
    {
        return view('posts/index');
    }

    public function bulletin(){
        return view("posts/bulletin.php");
    }
}
