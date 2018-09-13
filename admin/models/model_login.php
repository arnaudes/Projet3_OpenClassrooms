<?php
if(isset($_SESSION['admin'])){
    header("Location:index.php?view=dashboard");
}

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
        header("Location:?view=dashboard");
    }
}
?>