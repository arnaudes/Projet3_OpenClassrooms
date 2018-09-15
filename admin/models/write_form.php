
<?php
/**
 * vérifications de données envoyé lors de la rédaction d'un article
 * vérifie si le champs tittre et contenu ne sont pas vides, si il le sont on affiche une erreur
 * Vérifie si l'extension correspond bien a un image valide, si ce n'est pas le cas on affiche une erreur.
 * ATTENTION, par défault si aucune image n'est selectionné, ce sra l'image post.png qui sera séléctionné par défaut dans la bdd!
 * si tout est bon, on redirige l'utilisateur vers la page 'list'.
 */
if(isset($_POST['post'])) {
    $title = htmlspecialchars(trim($_POST['title']));
    $content = (trim($_POST['mytextarea']));
    $posted = isset($_POST['public']) ? "1" : "0";

    $errors = [];

    if (empty($title) || empty($content)) {
        $errors['empty'] = "Veuillez remplir tous les champs!";
    }

    if (!empty($_FILES['image']['name'])) {
        $file = $_FILES['image']['name'];
        $extensions = ['.png', '.jpg', '.jpeg', 'gif', '.PNG', '.JPG', '.JPEG', '.GIF'];
        $extension = strrchr($file, '.');

        if (!in_array($extension, $extensions)) {
            $errors['image'] = "Cette image n'est valide!";
        }
    }

    if (!empty($errors)) {
        ?>
        <div class="alert alert-danger" role="alert" style="text-align: center">
            <?php
            foreach ($errors as $error) {
                echo $error . "<br/>";
            }
            ?>
        </div>
        <?php
    }else{
        post($title, $content, $posted);
        if(!empty($_FILES['image']['name'])){
            post_img($_FILES['image']['tmp_name'], $extension);

        }else{
            $id = $db->lastInsertId();
            ?>
            <script>window.location.replace("index.php?view=list")</script>
            <?php
        }
    }
}

?>

