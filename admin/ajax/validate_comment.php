<?php

require "../../controllers/main-controller.php";

$db->exec("UPDATE comments SET reported='0' WHERE id='{$_POST['id']}'");