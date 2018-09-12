<?php

require "../../controllers/main-controller.php";

$db->exec("UPDATE comments SET reported = '1' WHERE id='{$_POST['id']}'");