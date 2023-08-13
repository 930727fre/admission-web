<?php

namespace App\Controllers;
use App\Models\TimeModel;
use App\Controllers\BaseController;

class TimeController extends BaseController
{
    public function index()
    {
        return view('times/time.php');
    }
    public function getTime()   //initail time
    {
        date_default_timezone_set('Asia/Taipei');
        $time = date('Y-m-d H:i:s');
        $timeModel = new TimeModel();
        $isEmpty = $timeModel->findAll();
        $data = [
            'month' => 0,
            'day' => 0,
            'hour' => 0,
            'minute'=> 0,
            'second'=> 0
        ];
        if(empty($isEmpty))
        {
            $timeModel->save($data);
            echo "Table is empty.";
            return $time;
        }
        else
        {
            $offset = $timeModel -> first();
            $newTime = $this -> addOffset($time, $offset);
            return $newTime;
        }
    }
    public function setTime()
    {
        return view('times/time.php');
    }
    public function storeTime()
    {
        $timeModel = new TimeModel();
        $isEmpty = $timeModel->findAll();
        $newTime = $this->request->getVar('time');
        date_default_timezone_set('Asia/Taipei');
        $time = date('Y-m-d H:i:s');
        if(!empty($isEmpty))
        {
            $offset = $timeModel -> first();
            $timeModel->where('month', $offset['month'])->delete();
        }
        $newOffset = $this->getOffset($time,$newTime);
        $timeModel->save($newOffset);
        echo '儲存成功<br>';
        echo '<a href="/TimeController/getTime"><button>回個人首頁</button></a>';
    }
    public function resetTime()
    {
        $timeModel = new TimeModel();
        $offset = $timeModel -> first();
        if(!empty($offset))
            $timeModel->where('month', $offset['month'])->delete();
        echo "重設成功";
    } 
    private function convertINT($string)
    {
        if(strstr($string,'T')) //this is from setTime()
        {
            $time = preg_split("/[-T:]/", $string);
            return $time;
        }
        else
        {
            $time = preg_split("/[- :]/", $string);
            return $time;
        }
    }
    private function getOffset($time,$newTime)
    {
        $tmp1 = $this->convertINT($time);
        $tmp2 = $this->convertINT($newTime);
        $offset = [
            'month' => 0,
            'day' => 0,
            'hour' => 0,
            'minute'=> 0,
            'second'=> 0
        ];
        $offset['second'] = $tmp2[5] - $tmp1[5];
        $offset['minute'] = $tmp2[4] - $tmp1[4];
        $offset['hour'] = $tmp2[3] - $tmp1[3];
        $offset['day'] = $tmp2[2] - $tmp1[2];
        $offset['month'] = $tmp2[1] -$tmp1[1];
        if($offset['second'] < 0)
        {
            $offset['second'] = $offset['second'] + 60;
            $offset['minute'] = $offset['minute'] - 1;
        }
        if($offset['minute'] < 0)
        {
            $offset['minute'] = $offset['minute'] + 60;
            $offset['hour'] = $offset['hour'] - 1;
        }
        if($offset['hour'] < 0)
        {
            $offset['hour'] = $offset['hour'] + 24;
            $offset['day'] = $offset['day'] - 1;
        }
        if($offset['day'] < 0)
        {
            if($tmp2[1]==2||$tmp2[1]==4||$tmp2[1]==6||$tmp2[1]==8||$tmp2[1]==9||$tmp2[1]==11)
            {
                $offset['day'] = $offset['day'] + 31;
            }
            else if($tmp2[1]==5||$tmp2[1]==7||$tmp2[1]==10||$tmp2[1]==12)
            {
                $offset['day'] = $offset['day'] + 30;   
            }
            else
            {
                $offset['day'] = $offset['day'] + 28;  
            }
            $offset['month'] = $offset['month'] - 1;
        }
        return $offset;
    }
    public function addOffset($time, $offset)
    {
        $newTime = $this->convertINT($time);
        $offset['month'] = $newTime[1] + $offset['month'];
        $offset['day'] = $newTime[2] + $offset['day'];
        $offset['hour'] = $newTime[3] + $offset['hour'];
        $offset['minute'] = $newTime[4] + $offset['minute'];
        $offset['second'] = $newTime[5] + $offset['second'];
        if($offset['second'] >= 60)
        {
            $offset['second'] = $offset['second'] - 60;
            $offset['minute'] = $offset['minute'] + 1;
        }
        if($offset['minute'] >= 60)
        {
            $offset['minute'] = $offset['minute'] - 60;
            $offset['hour'] = $offset['hour'] + 1;
        }
        if($offset['hour'] >= 24)
        {
            $offset['hour'] = $offset['hour'] - 24;
            $offset['day'] = $offset['day'] + 1;
        }
        if($offset['month']==1||$offset['month']==3||$offset['month']==5||$offset['month']==7||$offset['month']==8||$offset['month']==10)
        {
            if($offset['day'] > 31)
            {
                $offset['day'] = $offset['day'] - 31;
                $offset['month'] = $offset['month'] + 1;
            }
        }
        else if($offset['month']==4||$offset['month']==6||$offset['month']==9||$offset['month']==11)
        {
            if($offset['day'] > 30)
            {
                $offset['day'] = $offset['day'] - 30;
                $offset['month'] = $offset['month'] + 1;
            }
        }
        else
        {
            if($offset['day'] > 28)
            {
                $offset['day'] = $offset['day'] - 28;
                $offset['month'] = $offset['month'] + 1;
            }
        }
        if(strlen($offset['month']) == 1)
            $offset['month'] = '0'.$offset['month'];
        if(strlen($offset['day']) == 1)
            $offset['day'] = '0'.$offset['day'];
        if(strlen($offset['hour']) == 1)
            $offset['hour'] = '0'.$offset['hour'];
        if(strlen($offset['minute']) == 1)
            $offset['minute'] = '0'.$offset['minute'];
        if(strlen($offset['second']) == 1)
            $offset['second'] = '0'.$offset['second'];
        $time =  $newTime[0].'-'.$offset['month'].'-'.$offset['day'].' '.$offset['hour'].':'.$offset['minute'].":".$offset['second'];
        return  $time;
    }
    private function creatCalendar()
    {
        echo 123;
    }
}
