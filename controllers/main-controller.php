<?php
session_start();
/**
 * déclaration des objets
 * changer la valeur des objets en cas de changement de BDD (par exemple)
 */
    $dbhost = 'localhost';
    $dbname = 'blog_p3';
    $dbuser = 'root';
    $dbpswd = 'root';

/**
 * connexion à la BDD en utilisants les objets
 */
    try{
        $db = new PDO('mysql:host='.$dbhost.';dbname='.$dbname,$dbuser,$dbpswd,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
    }catch (PDOexception $e){
        die("une erreur est survenue lors de la connexion à la base de donnée");
}