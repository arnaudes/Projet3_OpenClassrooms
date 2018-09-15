<?php
/**
 * Si la session est deja 'admin' pas besoin de login, on redirige vers le dashboard.
 */
if(isset($_SESSION['admin'])){
    header("Location:index.php?view=dashboard");
}

/**
 * Vérification des données envoyées lors du 'submit'
 * vérifie l'email et le password
 * si un champs est vide, on affiche les erreurs.
 * si tout est correct et que la session deviens 'admin', alors on redirige l'utilisateur vers 'dashboard'
 */
if(isset($_POST['submit'])){
    $email = htmlspecialchars(trim($_POST['email']));
    $password = htmlspecialchars(trim($_POST['password']));

    $errors = [];

    if(empty($email) || empty($password)){
        $errors ['empty'] = "Tous les champs n'ont pas été remplis!";
    }else if(is_admin($email,$password) == 0){
        $errors['exist'] = "Cet administrateur n'existe pas!";
    }

    if(!empty($errors)){
        ?>
        <div class="container">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?php
                foreach ($errors as $error){
                    echo $error."<br/>";
                }
                ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        <?php
    }else{
        $_SESSION['admin'] = $email;
        ?>
        <script>window.location.replace("index.php?view=dashboard")</script>
        <?php
    }
}
?>