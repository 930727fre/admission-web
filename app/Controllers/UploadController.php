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
        $url = 'uploads/';
        $result = $fileModel->where('school',$school)->where('department',$department)->first();
        //print_r($files);
        print_r($school);
        print_r($department);
        //print_r($result);
        if(empty($result))
        {
            $data=[
                'url'=> $url,
                'school' => $school,
                'department'=> $department
            ];
            $fileModel->save($data);
            $id = $fileModel->where('school',$school)->where('department',$department)->first()['id'];
            $newName = $id . '.jpg';
            $url = $url . $id . '.jpg';
            $files->move(ROOTPATH . 'public/uploads', $newName);
            $data=[
                'url'=> $url,
                'school' => $school,
                'department'=> $department
            ];
            $fileModel ->update($id, $data);
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
        $img = base_url('uploads/d.jpg');
        echo '<img src = "'.$img.'"/>';
    }
    public function findSchool()
    {
        $schoolModel = new DepartmentModel();
        $data = ["row" => $schoolModel->findAll()];
        foreach($data["row"] as $i)
            print_r($i);
        return view('uploads/findSchool', $data);
    }
    public function showSchool()
    {
        $fileModel = new DepartmentModel();
        $school = $this -> request -> getVar('school');
        $department = $this -> request -> getVar('department');
        $id = $fileModel->where('school',$school)->where('department',$department)->first()['id'];
        $url = $fileModel->find($id)['url'];
        $img = base_url($url);
        echo '<img src = "'.$img.'"/>';
        echo $id;
        print_r($url);
        echo '<a href="/UploadController"><button>回頁面</button></a>';
    }
    public function deletedepartment()
    {
        $fileModel = new DepartmentModel();
        $fileModel->where('school','中正');
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
                    'department' => $j,
                    'url' => 'uploads/1.jpg'
                ];
                $fileModel->save($newData);
            }
        }
        echo '<a href="/UploadController"><button>回個人頁面</button></a>';
    }
}
