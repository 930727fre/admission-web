<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PostController extends BaseController
{
    public function index()
    {
        return view('posts/index');
    }
    public function downloads()
    {
        return view('posts/downloads');
    }
    public function downloadFile(){
        return $this->response->download(WRITEPATH.'uploads/'.$_GET['item'], null);
    }
}
