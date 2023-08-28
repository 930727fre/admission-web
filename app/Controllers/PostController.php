<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PostModel;
use CodeIgniter\Session\Session;

class PostController extends BaseController
{
    public function index()
    {
        $session = session();
        if($session->get('signedIn')==false)
        {
            echo '你尚未登入';
            echo '<a href="/"><button>回個人頁面</button></a>';
            return;
        }
        if($session->get('identity')=='student')
        {
            echo 'you are not professor';
            echo '<a href="/"><button>回個人頁面</button></a>';
            return;
        }
        return view('posts/index');
    }
    public function create()
    {
        return view('posts/createPost');
    }
  
    public function storePost()
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
        //print_r($data);
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
    public function revisePost($id)
    {
        $model = new PostModel();
        $data = [
            'posts' => $model->find($id)
        ];
        //print_r($data);
        return view('posts/revisePost', $data);
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
        print_r($data);
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
    public function showAllPost()
    {
        $model = new PostModel();
        $data = [
            'posts' => $model->findAll()
        ];
        return view('posts/allList',$data);
    }
    public function showPost($id)
    {
        $model = new PostModel();
        $data = [
            'posts' => $model->find($id)
        ];
        //print_r($data);
        return view('posts/showPost', $data);
    }
}
