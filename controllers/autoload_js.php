<?php
/**
 * autoload le js :
 * scan le directory "js/" pour charger automatiquement les pages qui portent le meme nom que $page + .func.js
 */
$pages_js = scandir('js/');
if(in_array($page.'.func.js',$pages_js)){
    ?>
    <script type="text/javascript" src="js/<?= $page ?>.func.js"></script>
    <?php
}