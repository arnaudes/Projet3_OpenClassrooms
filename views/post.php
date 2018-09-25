<?php
/**
 * si le post n'existe pas, ou posted = 0, on redirige vers la page erreur
 */
if($post == false){
    ?>
    <script>window.location.replace("index.php?view=error")</script>
    <?php
}else{
/**
 * récupère le model du header pour afficher la bannière
 */
include 'models/wrap_post.php';
/**
 * Code html d'affichage d'un post + commentaire(s).
 */
?>
    <section class="wrapper style5">
        <div class="inner">
            <a href="?view=chapitres" class="btn btn-outline-dark" style="margin-top: -13%"><i class="fas fa-undo"></i> Retour</a>
            <header style="margin-top: -3%">
                <h2>posté par : <?= $post->name ?></h2>
                <p>Le <em><?= date("d/m/Y à H:i", strtotime($post->date)); ?></em></p>
            </header>
                <span class="image right">
                    <img src="images/posts/<?=$post->image?>" alt="<?=$post->title?>">
                </span>
                <p style="text-align: justify"><?= $post->content ?></p>
            <a href="?view=chapitres" class="btn btn-outline-dark"><i class="fas fa-undo"></i> Retour</a>
<?php
}
?>
        </div>
    </section>
    <section id="one" class="wrapper style2 special">
            <div class="inner">
                <header class="major">
                    <h2 style="text-align: center">Commentaire(s) :</h2>
                </header>
            </div>
    </section>
    <section class="wrapper style5">
        <div class="inner">
<?php include 'models/comments.php' ?>


<?php include 'models/form_comments.php'; ?>
        </div>
    </section>

