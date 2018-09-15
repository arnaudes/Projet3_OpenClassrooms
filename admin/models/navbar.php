<!-- Code html de la nav-bar  -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark"">
<a class="navbar-brand" href="#">JEAN FORTEROCHE | ADMINISTRATION</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse justify-content-md-center" id="navbarNavAltMarkup">
    <div class="navbar-nav">
        <?php
        /**
         * on Vérifie que la session est 'admin' pour afficher les bouton
         * si la session n'est pas admin, la bar sera vide.
         */
        if (isset($_SESSION['admin'])){
        ?>
        <ul class="navbar-nav">
            <li class="nav-item <?php echo ($page == "dashboard") ? "active" : ""; ?>">
                <a class="nav-link" href="?view=dashboard"><i class="material-icons">dashboard</i></a>
            </li>
            <li class="nav-item <?php echo ($page == "write") ? "active" : ""; ?>">
                <a class="nav-link" href="?view=write"><i class="material-icons">edit</i></a>
            </li>
            <li class="nav-item <?php echo ($page == "list") ? "active" : ""; ?>">
                <a class="nav-link" href="?view=list"><i class="material-icons">view_list</i></a>
            </li>
            <a class="nav-item nav-link" href="?view=logout">Déconnexion</a>
            <a class="nav-item nav-link" href="../index.php?view=chapitres">Quitter</a>
            <?php
            }
            ?>
        </ul>
    </div>
</div>
</nav>