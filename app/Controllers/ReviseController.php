<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Database\Migrations\Template;
use App\Models\GradeModel;
use App\Models\ProfessorModel;
use App\Models\StudentModel;
use App\Models\VolunteerModel;
use App\Models\DepartmentModel;
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
        $session = session();
        $studentModel = new StudentModel();
        $num = $studentModel->where('username',$session->get('username'))->first()['id'];
        $gradeModel = new GradeModel();
        $result = $gradeModel->where('num', $num)->first();
        $data = [
            'num' => $num,   
            'chinese' => $this->request->getVar('Chinese'),
            'english' => $this->request->getVar('English'),
            'math' => $this->request->getVar('Math'),
            'science' => $this->request->getVar('Science'),
            'social' => $this->request->getVar('Social')

        ];
        if(empty($result))
        {
            $gradeModel->save($data);
        }
        else
        {
            $id = $result['id'];
            //print_r($id);
            $gradeModel->update($id,$data);
        }
        //echo '<h2 style = "text -align : center">修改成功!!<h2>';
        //echo '<a href="/ReviseController/"><button>回個人首頁</button></a>';
        return view('id/countdown.php',array("message"=>"修改成功!"));
    }
    public function deleteGrade()
    {
        $gradeModel = new GradeModel();
        $gradeModel->where('Id','1');
        $gradeModel->delete();
    }
    public function grade()
    {
        //check session
        $session = session();
        if($session->get('signedIn')==false)
        {
            echo '你尚未登入';
            echo '<a href="/"><button>回個人頁面</button></a>';
            return;
        }
        if($session->get('identity')=='professor')
        {
            echo 'you are not student';
            echo '<a href="/"><button>回個人頁面</button></a>';
            return;
        }

        $GrandModel = new GradeModel();
        $StudentModel = new StudentModel();
        $num = $StudentModel->where('username',$session->get('username'))->first()['id'];
        $data = $GrandModel->find($num);
        //print_r($data);
        if(empty($data))
        {
            $data = [
                'num' => $num,   
                'chinese' => 0,
                'english' => 0,
                'math' => 0,
                'science' => 0,
                'social' => 0
    
            ];
        }
        return view('revises/grade', $data);
    }
    public function volunteer()
    {
        $session = session();
        if($session->get('signedIn')==false)
        {
            echo '你尚未登入';
            echo '<a href="/"><button>回個人頁面</button></a>';
            return;
        }
        if($session->get('identity')=='professor')
        {
            echo 'you are not student';
            echo '<a href="/"><button>回個人頁面</button></a>';
            return;
        }
        $schoolModel = new DepartmentModel();
        $data = ["row" => $schoolModel->findAll()];
        return view("revises/volunteer",$data);
    }
    public function volunteerStore()
    {
        $session = session();
        $volunteerModel = new VolunteerModel();
        $studentModel =new StudentModel();
        $num = $studentModel->where('username',$session->get('username'))->first()['id'];
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
        //print_r($data);
        $result = $volunteerModel->where('num', $num)->first();
        if(empty($result))
            $volunteerModel->save($data);
        else
        {
            $key = $volunteerModel->where('num', $num)->first()['id'];
            echo $key;
            $volunteerModel->update($key, $data);
        }
        //print_r($result);
        //echo '<h2 style = "text -align : center">修改成功!!<h2>';
        return view('id/countdown.php',array("message"=>"修改成功!"));
        //echo '<a href="/reviseController/"><button>回個人頁面</button></a>';
    }
    public function profile()
    {
        $session = session();
        $identity = $session -> get('identity');
        if($session->get('signedIn')==false)
        {
            echo '你尚未登入';
            echo '<a href="/"><button>回個人頁面</button></a>';
            return;
        }
        if($identity == 'student')
        {
            $model = new StudentModel();
            $num = $model->where('username',$session->get('username'))->first()['id'];
            $data = $model->find($num);
            //print_r($data);
            return view("revises/studentProfile", $data);
        }
        else if($identity == 'professor')
        {
            //not complete
            $model = new ProfessorModel();
            $num = $model->where('username',$session->get('username'))->first()['id'];
            $data = $model->find($num);
            //print_r($data);
            return view("revises/professorProfile",$data);
        }

    }
    public function profileStore()
    {
        $session = session();
        $identity = $session -> get('identity');
        if($identity == 'student')
        {
            $model = new StudentModel();
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
            //print_r($data);
            //echo '<h2 style = "text -align : center">修改成功!!<h2>';
            //echo '<a href="/reviseController/"><button>回個人頁面</button></a>';
            return view('id/countdown.php',array("message"=>"修改成功!"));
        }
        else if($identity == 'professor')
        {
            $model = new ProfessorModel();
            $id = $model->where('username',$session->get('username'))->first()['id'];
            $data = [
                'fullname' => $this->request->getVar('fullname'),   
                'school' => $this->request->getVar('school'),
                'mail' => $this->request->getVar('mail'),
                'phoneNumber' => $this->request->getVar('phoneNumber'),
                'site' => $this->request->getVar('site'),
                'address' => $this->request->getVar('address')
            ];
            //print_r($data);
            $model->update($id,$data);
            //print_r($data);
            //echo '<h2 style = "text -align : center">修改成功!!<h2>';
            //echo '<a href="/reviseController/"><button>回個人頁面</button></a>';
            return view('id/countdown.php',array("message"=>"修改成功!"));
        }
    }

    public function testTemplate()
    {
        $session = session();
        $model = new ProfessorModel();
        $num = $model->where('username',$session->get('username'))->first()['id'];
        $data = $model->find($num);
        return view("revises/test",$data);
    }
}
