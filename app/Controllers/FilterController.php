<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Controllers\TimeController;
use App\Models\VolunteerModel;
use App\Models\StudentModel;
use CodeIgniter\Session\Session;

class FilterController extends BaseController
{
    public function index()
    {
        //
    }
    public function showResult()
    {
        $session = session();
        $identity = $session -> get('identity');
        $model = new VolunteerModel();
        $control = new TimeController();
        $result = $control->limitTime('08-20','08-30','day');
        if($session->get('signedIn')==false)
        {
            echo '你尚未登入';
            echo '<a href="/"><button>回個人頁面</button></a>';
            return;
        }
        if($identity == 'student')
        {
            $studentModel = new StudentModel();
            $num = $studentModel->where('username',$session->get('username'))->first()['id'];
            $data = $model -> where('num',$num)->first();
            print_r($data);
            if($data==null)
            {
                return view('filter/notEnter',$msg = ["msg"=>"你沒有輸入志願"]);
            }
            for($i = 1; $i <= 6; $i++)
            {
                $r = rand(0,100);
                $data['result'.$i] = $r;
            }
            if($result)
                return view('filter/filterResult.php',$data);
            else
                return view('filter/notEnter',$msg = ["msg"=>"時間未開放"]);
        }
        else if($identity == 'professor')
        {
            echo '你不是學生';
            echo '<a href="/"><button>回個人頁面</button></a>';
            return;
        }

    }
}
