<?php

require "../../controllers/main-controller.php";

$db->exec("DELETE FROM posts WHERE id = {$_POST['id']}");