<?php
    session_start();
     
    // require file Common
    require_once './commons/env.php';
    require_once './commons/function.php';

    // require file Controller
    require_once './controllers/HomeController.php';

    // Require file Model
    $act = $_GET['act'] ?? '/';
    
    match ($act){
        '/' => (new HomeController) -> home()
    }

?>