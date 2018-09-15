<?php
/**
 * accès a la bdd
 */
require "../../controllers/main-controller.php";
/**
 * supprime le commentaire de la bdd
 */
$db->exec("DELETE FROM comments WHERE id = {$_POST['id']}");