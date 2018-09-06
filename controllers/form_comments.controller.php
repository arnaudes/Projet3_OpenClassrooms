<?php

if(isset($_POST['submit'])){
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $comment = htmlspecialchars(trim($_POST['comment']));
    $errors = [];

    if(empty($name) || empty($email) || empty($comment)){
        $errors['empty'] = "tous les champs n'ont pas été remplis!";
    }else{
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors['email'] = "L'adresse email n'est pas valide!";
        }
    }

    if(!empty($errors)){
        ?>
            <div class="alert alert-danger">
                <?php
                    foreach ($errors as $error){
                        echo $error."<br/>";
                    }
                ?>
            </div>
        <?php
    }else{
        comment($name, $email, $comment);
        ?>
            <script>window.location.replace("index.php?view=post&id=<?=$_GET['id']?>");</script>
        <?php
    }

}
