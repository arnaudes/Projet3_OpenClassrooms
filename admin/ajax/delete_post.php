<?php
/**
 * accès a la bdd
 */
require "../../controllers/main-controller.php";
/**
 * supprime l'article de la bdd
 */
$db->exec("DELETE FROM posts WHERE id = {$_POST['id']}");