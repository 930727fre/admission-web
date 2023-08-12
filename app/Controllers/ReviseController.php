<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\GradeModel;
use App\Models\SignModel;
use CodeIgniter\Session\Session;

class ReviseController extends BaseController
{
    public function index()
    {
        return view('revises/index');
    }
    public function gradeStore()
    {
        //view grade
        $gradeModel = new GradeModel();
        $ID = $this -> findID();
        if(!$ID)
        {
            echo '<h2 style = "text -align : center">你尚未登入!!<h2>';
            echo '<a href="/IdController/"><button>回登入頁面</button></a>';
            return view("revises/blank");
        }
        $data = [
            'Id' => $ID,   
            'Chinese' => $this->request->getVar('Chinese'),
            'English' => $this->request->getVar('English'),
            'Math' => $this->request->getVar('Math'),
            'Science' => $this->request->getVar('Science'),
            'Social' => $this->request->getVar('Social')

        ];
        $gradeModel->where('Id',$ID);
        $result = $gradeModel->findAll();
        //print_r($data);
        if(empty($result))
        {
            $gradeModel->save($data);
            echo "還沒存在了";   
        }
        else
        {
            $gradeModel->where('Id',$ID);
            $gradeModel->delete();
            $gradeModel->save($data);
            echo "已經存在了";
        }
        //print_r($data);
        echo '<h2 style = "text -align : center">修改成功!!<h2>';
        echo '<a href="/ReviseController/"><button>回個人首頁</button></a>';
        return view("revises/blank");
    }
    public function deleteGrade()
    {
        $gradeModel = new GradeModel();
        $gradeModel->where('Id','1');
        $gradeModel->delete();
    }
    public function redirectTo()
    {   
        if($this->request->getVar('where') == 'grade')
        {
            $identity = $this -> isStudent();
            if($identity == 1) //professor
            {
                echo '<h2 style = "text -align : center">你不需要輸入成績!!<h2>';
                echo '<a href="/ReviseController/redirectTo?where=index"><button>回上一頁</button></a>';
                return view("revises/blank");
            }
            else if($identity == 2) //student
            {
                return view('revises/grade');
            }
            else
            {
                echo '<h2 style = "text -align : center">你尚未登入!!<h2>';
                echo '<a href="/IdController/"><button>回登入頁面</button></a>';
                return view("revises/blank");
            }
        }
        else if($this->request->getVar('where') == 'profile')
        {
            $identity = $this -> isStudent();
            if($identity == 1)
                return view('revises/professorProfile');
            else if($identity == 2)
                return view('revises/studentProfile');
            else
            {
                echo '<h2 style = "text -align : center">你尚未登入!!<h2>';
                echo '<a href="/IdController/"><button>回登入頁面</button></a>';
                return view("revises/blank");
            }
        }
        else
        {
            return view("revises/{$this->request->getVar('where')}.php");
        }    
    }
    private function isStudent()
    {
        $signModel = new SignModel();
        $session = session();
        $username = $session->get('username');
        if(!$session->has('loggedIn'))
        {
            return 0;
        }
        $identity = ($signModel->where('username',$username)->first())['identity'];
        echo $identity;
        if($identity == 'student')
            return 2;
        else
            return 1;
    }

    private function findID()
    {
        $signModel = new SignModel();
        $session = session();
        $username = $session->get('username');
        if(!$session->has('loggedIn'))
        {
            return 0;
        }
        $ID = ($signModel->where('username',$username)->first())['serialNumber'];
        echo $ID;
        return $ID;
    }
}
