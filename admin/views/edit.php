<div class="container" style="margin-top: 5%">
    <div class="jumbotron" style="text-align: center">
        <h1 class="text-capitalize">Modifier l'article<br/><em>"<?= $post->title ?>"</em></h1>
    </div>
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
                    <script>window.location.replace("index.php?view=edit&id=<?=$_GET['id']?>");</script>
                <?php
            }
        }
    ?>

        <form method="post">
            <div>
                <div class="form-group-row">
                    <h5 style="text-align: center">Titre de votre article :</h5>
                    <input class="form-control form-control-lg" type="text" value="<?=$post->title?>" name="title" id="title">
                </div><br/>

            </div>
            <div class="form-group-row">
                <h5 style="text-align: center">Contennu de votre article :</h5>
                <textearea name="content" id="mytextarea"><?= $post->content ?></textearea>
            </div><br/>


            <h5>Public ?</h5>
            <div class="checkbox">
                <input name="public" type="checkbox" data-off="Non" data-on="Oui" checked data-toggle="toggle" data-offstyle="outline-danger" data-onstyle="outline-success" >
            </div>

            <div style="text-align: right; margin-bottom: 3%">
                <button class="btn btn-outline-success btn-lg" type="submit" name="post"><i class="fa fa-check"></i> Modifier cet Article ?</button>
            </div>
        </form>

</div>