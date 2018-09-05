<?php

/**
 * va recuprérer la connexion a la BDD
 */
    include 'controllers/main-controller.php';

/**
 * scan le directory views/ pour y trouver les pages à afficher
 * si aucun nom ne correspond on affiche un message d'erreur
 */
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
/**
 * scan le directory controllers/ pour les charger avec le nom correspondant à la page
 */
$pages_controllers = scandir('controllers/');
if(in_array($page.'.controller.php',$pages_controllers)){
    include 'controllers/'.$page.'.controller.php';
}
