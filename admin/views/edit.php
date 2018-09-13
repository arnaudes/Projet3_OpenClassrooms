<div class="container">
    <div class="jumbotron" style="text-align: center">
        <h1 class="text-capitalize">Modifier l'article<br/><em>"<?= $post->title ?>"</em></h1>
    </div>
<?php include 'models/edit_form.php' ?>
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