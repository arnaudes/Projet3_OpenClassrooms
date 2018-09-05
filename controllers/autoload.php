<?php

    include 'controllers/main-controllers.php';

    $pages = scandir('views/');
    if(isset($_GET['view']) && !empty($_GET['view'])){
        if(in_array($_GET['view'].'.php',$pages)){
            $page = $_GET['view'];
        }else{
            $page = "error";
        }
    }else{
        $page = "home";
}

$pages_controllers = scandir('controllers/');
if(in_array($page.'.controller.php',$pages_controllers)){
    include 'controllers/'.$page.'.controller.php';
}
