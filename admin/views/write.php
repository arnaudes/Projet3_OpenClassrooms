


<div class="container">
    <div class="jumbotron" style="text-align: center">
        <h1 class="text-capitalize">Rédiger un article</h1>
    </div>
    <?php include 'models/write_form.php' ?>
    <form method="post" enctype="multipart/form-data">
        <div>
            <div class="form-group-row">
                <h5 style="text-align: center">Titre de votre article :</h5>
                <input class="form-control form-control-lg" type="text" placeholder="Titre de l'article" name="title" id="title">
            </div><br/>

            </div>
            <div class="form-group-row">
                <h5 style="text-align: center">Contenu de votre article :</h5>
                <textearea name="content" id="mytextarea" ></textearea>
            </div><br/>

            <div class="form-group">
                <div class="input-group input-file" name="image">
                <span class="input-group-btn">
                    <button class="btn btn-outline-info btn-choose" type="button">Choisir l'image de l'article</button>
                </span>
                    <input type="text" class="form-control" placeholder='Choisissez un fichier...' readonly />
                    <span class="input-group-btn">
                     <button class="btn btn-outline-danger btn-reset" type="button"><i class="fa fa-trash"></i></button>
                </span>
                </div>
            </div><br/>

            <h5>Public ?</h5>
            <div class="checkbox">
                <input name="public" type="checkbox" data-off="Non" data-on="Oui" checked data-toggle="toggle" data-offstyle="outline-danger" data-onstyle="outline-success" >
            </div>

            <div style="text-align: right; margin-bottom: 3%">
                <button class="btn btn-outline-success btn-lg" type="submit" name="post"><i class="fa fa-check"></i> Publier cet Article ?</button>
            </div>


    </form>

</div>