<?php

/**
 * va recuprérer la connexion a la BDD
 */
include '../controllers/main-controller.php';

/**
 * scan le directory views/ pour y trouver les pages à afficher
 * si aucun nom ne correspond on affiche un message d'erreur, la page par deffault est la page "dashboard"
 */
$pages = scandir('views/');
if(isset($_GET['view']) && !empty($_GET['view'])){
    if(in_array($_GET['view'].'.php',$pages)){
        $page = $_GET['view'];
    }else{
        $page = "error";
    }
}else{
    $page = "dashboard";
}
/**
 * scan le directory controllers/ pour les charger avec le nom correspondant à la page
 */
$pages_controllers = scandir('controllers/');
if(in_array($page.'.controller.php',$pages_controllers)){
    include 'controllers/'.$page.'.controller.php';
}
/**
 * si la page est différente de 'login' et qu'il n'y a pas de session 'admin', on redirige vers la page de login
 * pour interdire l'accès a des pages d'administrateur sans être connecté
 */
if($page !='login' && !isset($_SESSION['admin'])){
    header("Location:index.php?view=login");
}