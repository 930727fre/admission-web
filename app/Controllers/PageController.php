<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PostController extends BaseController
{
    public function index()
    {
        return view('pages/index');
    }
    public function downloads()
    {
        return view('pages/downloads');
    }
    public function law()
    {
        return view('pages/law');
    }
    public function stats()
    {
        return view('pages/stats');
    }
    public function downloadFile(){
        return $this->response->download(WRITEPATH.'uploads/'.$_GET['item'], null);
    }
}
