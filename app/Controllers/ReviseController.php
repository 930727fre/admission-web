<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\GradeModel;
use App\Models\SignModel;
use App\Models\VolunteerModel;
use CodeIgniter\Session\Session;

class ReviseController extends BaseController
{
    public function index()
    {
        $session = session();
        $sessionData = [
            'username'  => 'f',
            'identity' => 'student',
            'loggedIn' => true
        ];
        $session->set($sessionData);
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
    public function volunteer()
    {
        $session = session();
        $volunteerModel = new VolunteerModel();
        $signModel =new SignModel();
        $num = $signModel->where('username',$session->get('username'))->first()['id'];
        $result = $volunteerModel->where('num', $num)->first();
        if(empty($result))
            return view("revises/volunteer");
        else
        {
            return view("revises/volunteer");
        }

    }
    public function volunteerStore()
    {
        $session = session();
        $volunteerModel = new VolunteerModel();
        $signModel =new SignModel();
        $num = $signModel->where('username',$session->get('username'))->first()['id'];
        $data = [
            'num' => $num,
            'school1' =>  $this->request->getVar("School1"),
            'department1' => $this->request->getVar("Department1"),
            'school2' => $this->request->getVar("School2"),
            'department2' => $this->request->getVar("Department2"),
            'school3' => $this->request->getVar("School3"),
            'department3' => $this->request->getVar("Department3"),
            'school4' => $this->request->getVar("School4"),
            'department4' => $this->request->getVar("Department4"),
            'school5' => $this->request->getVar("School5"),
            'department5' => $this->request->getVar("Department5"),
            'school6' => $this->request->getVar("School6"),
            'department6' => $this->request->getVar("Department6"),
        ];
        print_r($data);
        $result = $volunteerModel->where('num', $num)->first();
        if(empty($result))
            $volunteerModel->save($data);
        else
        {
            $key = $volunteerModel->where('num', $num)->first()['id'];
            echo $key;
            $volunteerModel->update($key, $data);
        }
        print_r($result);
        echo '<h2 style = "text -align : center">修改成功!!<h2>';
        echo '<a href="/reviseController/"><button>回個人頁面</button></a>';
    }
    public function profile()
    {
        $session = session();
        $identity = $session -> get('identity');
        if($identity == 'student')
        {
            $model = new SignModel();
            $num = $model->where('username',$session->get('username'))->first()['id'];
            $data = $model->find($num);
            //print_r($data);
            return view("revises/studentProfile", $data);
        }
        else if($identity == 'professor')
        {
            //not complete
            return view("revises/professorProfile");
        }

    }
    public function profileStore()
    {
        $session = session();
        $identity = $session -> get('identity');
        if($identity == 'student')
        {
            $model = new SignModel();
            $id = $model->where('username',$session->get('username'))->first()['id'];
            $data = [
                'fullname' => $this->request->getVar('fullname'),   
                'idCard' => $this->request->getVar('idCard'),
                'school' => $this->request->getVar('school'),
                'mail' => $this->request->getVar('mail'),
                'phoneNumber' => $this->request->getVar('phoneNumber'),
                'relationship' => $this->request->getVar('relationship'),
                'phoneNumberOfGuardian' => $this->request->getVar('phoneNumberOfGuardian'),
                'address' => $this->request->getVar('address')
            ];
            //echo $id;
            $model->update($id,$data);
            print_r($data);
            echo '<h2 style = "text -align : center">修改成功!!<h2>';
            echo '<a href="/reviseController/"><button>回個人頁面</button></a>';
        }
        else if($identity == 'professor')
        {
            //not complete
            echo 'No';
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
