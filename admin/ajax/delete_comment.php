<?php

require "../../controllers/main-controller.php";

$db->exec("DELETE FROM comments WHERE id = {$_POST['id']}");