<?php
$pages_js = scandir('js/');
if(in_array($page.'.func.js',$pages_js)){
    ?>
    <script type="text/javascript" src="js/<?= $page ?>.func.js"></script>
    <?php
}