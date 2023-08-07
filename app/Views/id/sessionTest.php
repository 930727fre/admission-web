<?php
session_start();
$_SESSION['userName'] = "Kao";
include "test1.php";
echo $_SESSION['userName'];
session_destroy();

