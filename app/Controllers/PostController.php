<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PostModel;
use CodeIgniter\Session\Session;

class PostController extends BaseController
{
    public function index()
    {
        //session 假設
        $session = session();
        $sessionData = [
            'username'  => '7',
        ];
        $session->set($sessionData);
        //$session->destroy();
        return view('posts/index');
    }
    public function store()
    {
        $session = session();
        $username = $session->get('username');
        $model = new PostModel();
        $data = [
            'username' => $username,
            'title' => $this->request->getVar('title'),
            'content' => $this->request->getVar('content'),
            'contentCSS' => 'contentCSS'    //wait CSS
        ];
        $model->save($data);
        echo '<h2 style = "text -align : center">創建貼文成功!!<h2>';
        echo '<a href="/PostController/"><button>回POST頁面</button></a>';
    }
    public function postList()
    {
        $model = new PostModel();
        $session = session();
        $username = $session->get('username');

        $data = [
            'posts' => $model->where('username', $username)->findAll(),
        ];
        return view('posts/list',$data);
    }
    public function revise($id)
    {
        $model = new PostModel();
        $data = [
            'posts' => $model->find($id)
        ];
        return view('posts/revise', $data);
    }
    public function reviseStore()
    {
        $session = session();
        $username = $session->get('username');
        $model = new PostModel();
        $model -> find($this->request->getVar('id'));
        $data = [
            'username' => $username,
            'title' => $this->request->getVar('title'),
            'content' => $this->request->getVar('content'),
            'contentCSS' => 'contentCSS'    //wait CSS
        ];
        $model->update($this->request->getVar('id'),$data);
        echo '<h2 style = "text -align : center">修改成功!!<h2>';
        echo '<a href="/PostController/"><button>回POST頁面</button></a>';

    }
    public function deleteConfirm()
    {
        echo '<h2 style = "text -align : center">是否刪除!!<h2>';
        echo '<a href="/PostController/delete"><button>是</button></a>'; echo '<a href="/PostController/"><button>否</button></a>';
    }
    public function delete()
    {
        $model = new PostModel();
        $model -> where('id',$this->request->getVar('id'))->delete();
        echo '<h2 style = "text -align : center">刪除成功!!<h2>';
        echo '<a href="/PostController/"><button>回POST頁面</button></a>';

    }
    public function deleteAll()
    {
        $model = new PostModel();
        $arr = $model->findColumn('id');
        foreach($arr as $i)
            $model -> where('id', $i)->delete();

    }
    public function creat()
    {
        return view('posts/creatPost');
    }

    public function downloads() //due to merge conflict, the code is therefore moved here
    {
        return view('posts/downloads');
    }
    public function downloadFile(){
        return $this->response->download(WRITEPATH.'uploads/'.$_GET['item'], null);
    }    
}
