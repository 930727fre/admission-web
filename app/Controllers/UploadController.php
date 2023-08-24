<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DepartmentModel;
helper('filesystem');


class UploadController extends BaseController
{
    public function index()
    {
        $session = session();
        $username = $session->get('username');
        echo $username;
        return view('uploads/index');
    }
    public function uploadForm()
    {
        return view('uploads/uploadForm');
    }
    public function upload()
    {
        $fileModel = new DepartmentModel();
        $school = $this -> request -> getVar('school');
        $department = $this -> request -> getVar('department');
        $files = $this -> request -> getFile('userfile');
        $url = $fileModel->where('school',$school)->where('department',$department)->first();

        //print_r($files);
        print_r($school);
        $result = '1';
        if(empty($result))
        {
            $url = 'public/uploads/'.'1'.'.jpg';
            $data=[
                'url'=>$url,
                'department'=>'1'
            ];
            $newName = '1' .'.jpg';
            $files->move(ROOTPATH . 'public/uploads', $newName);
            $fileModel->save($data);
            echo '成功上傳';
            return view('uploads/index');
        }
        else
        {
            echo '已經上傳';
            return view('uploads/index');
        }
        //echo '<a href="/UploadController/"><button>回登入頁面</button></a>';
    }
    public function show()
    {
        $fileModel = new DepartmentModel();
        $file = $fileModel->findAll();
        print_r($file);
    }
    public function deletedepartment()
    {
        $fileModel = new DepartmentModel();
        $fileModel->where('department','中正數學系');
        $fileModel->delete();
    }
    public function reset()
    {
        $fileModel = new DepartmentModel();
        $url = 'uploads';
        $map = directory_map($url, 1);
        print_r($map);

        $arr = $fileModel->findColumn('id');
        if($arr!=NULL)
        {
            foreach($arr as $i)
                $fileModel -> where('id', $i)->delete();
        }
        $school = ['台大', '清大', '交大', '成大'];
        $department = ['數學系', '電機系', '資工系'];
        $data = [
            'school' => $school,
            'department' => $department
        ];
        foreach($school as $i)
        {
            foreach($department as $j)
            {
                $newData = [
                    'school' => $i,
                    'department' => $j
                ];
                $fileModel->save($newData);
            }
        }
    }
}
