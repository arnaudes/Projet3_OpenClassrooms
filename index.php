<?php
 require 'controllers/autoload.php';
?>


<!doctype html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>

    <title>Billet simple pour l'Alaska</title>
</head>
<body class="landing is-preload">
<!-- Page Wrapper -->
<div id="page-wrapper">
    <!-- Page Wrapper -->
    <?php include 'models/nav_menu.php'; ?>
    <?php include 'views/'.$page.'.php'; ?>
    <!-- Footer -->
    <?php include 'models/footer.php'; ?>

</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>