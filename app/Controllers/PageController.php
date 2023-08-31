<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PageController extends BaseController
{
    public function index()
    {
        return view('pages/index');
    }
    public function websites()
    {
        return view('pages/websites');
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
    public function onlinebrochure()
    {
        return view('pages/onlinebrochure');
    }
    public function onlinebrochure_1()
    {
        return view('pages/onlinebrochure_1');
    }
    public function onlinebrochure_2()
    {
        return view('pages/onlinebrochure_2');
    }
    public function onlinebrochure_3()
    {
        return view('pages/onlinebrochure_3');
    }
    public function downloadFile(){
        return $this->response->download(WRITEPATH.'uploads/'.$_GET['item'], null);
    }
}
