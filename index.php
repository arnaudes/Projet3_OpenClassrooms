<?php
/**
 * require de l'autoloader pour afficher le contenu de la page ('views/$page.php')
 */
 require 'controllers/autoload.php';
?>


<!doctype html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
    <title>Billet simple pour l'Alaska</title>
    <link rel="shortcut icon" href="images/favicon.png">
</head>
<body class="landing is-preload">
<!-- Page Wrapper -->
<div id="page-wrapper">
    <?php include 'models/nav_menu.php'; ?>
    <?php include 'views/'.$page.'.php'; ?>

    <!-- Footer -->
    <?php include 'models/footer.php'; ?>

</div>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>
<?php include 'controllers/autoload_js.php' ?>
</body>
</html>