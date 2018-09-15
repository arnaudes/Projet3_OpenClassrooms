<?php
/**
 * accès à la bdd
 */
require "../../controllers/main-controller.php";
/**
 * update la colone reported d'un commentaire à "0" quand l'admin valide le commentaire
 */
$db->exec("UPDATE comments SET reported='0' WHERE id='{$_POST['id']}'");