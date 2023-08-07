<?php
    session_start();
    session_destroy();
    $_SESSION = array(); 
    echo "see ya!";