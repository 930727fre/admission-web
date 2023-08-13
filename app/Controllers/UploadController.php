<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DepartmentModel;


class UploadController extends BaseController
{
    public function index()
    {
        return view('uploads/index');
    }
    public function uploadForm()
    {
        return view('uploads/uploadForm');
    }
    public function upload()
    {
        $fileModel = new DepartmentModel();
        $newName = $this -> request -> getVar('title');
        $files = $this -> request -> getFile('userfile');
        $fileModel->where('department',$newName);
        $result = $fileModel->findAll();
        if(empty($result))
        {
            $url = 'public/uploads/'.$newName.'.jpg';
            $data=[
                'url'=>$url,
                'department'=>$newName
            ];
            $newName = $newName .'.jpg';
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
    public function deletedepartment()
    {
        $fileModel = new DepartmentModel();
        $fileModel->where('department','中正數學系');
        $fileModel->delete();
    }
    public function reset()
    {
        
    }
}
