<?php
/**
 * accès a la bdd
 */
require "../../controllers/main-controller.php";
/**
 * update la colone reported d'un commentaire à "1" quand un utilisateur le signal
 */
$db->exec("UPDATE comments SET reported = '1' WHERE id='{$_POST['id']}'");