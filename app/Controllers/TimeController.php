<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class TimeController extends BaseController
{
    public function getTime()
    {
        echo "<p>今天是：" . date("Y/m/d") . "</p>";
    }
    public function setTime()
    {

    }
}
