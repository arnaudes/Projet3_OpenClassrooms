<?php
/**
 * détruit la session 'admin' lors de la déconnexion et redirige l'utilisateur vers la page d'acceuil.
 */
    unset($_SESSION['admin']);
    ?>
    <script>window.location.replace("../index.php?view=home")</script>

