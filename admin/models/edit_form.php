<?php
if(isset($_POST['post'])){
    $title = htmlspecialchars(trim($_POST['title']));
    $content = (trim($_POST['mytextarea']));
    $posted = isset($_POST['public'])? "1" : "0";
    $errors = [];
    if(empty($title) || empty($content)){
        $errors['empty'] = "Veuillez remplir tous le champs!";
    }
    if(!empty($errors)){
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
        edit($title,$content,$posted,$_GET['id']);
        ?>
        <script>window.location.replace("index.php?view=list")</script>
        <?php
    }
}
?>
