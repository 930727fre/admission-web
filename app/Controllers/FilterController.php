<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\VolunteerModel;

class FilterController extends BaseController
{
    public function index()
    {
        //
    }
    public function showResult()
    {
        $model = new VolunteerModel();
        return view('filter/filterResult.php');
    }
}
