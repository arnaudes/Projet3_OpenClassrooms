<?php
/**
 * si le post n'existe pas, on redirige vers la page erreur
 */
if($post == false){
    header("Location:index.php?view=error");
}else{
/**
 * récupère le model du header pour afficher la bannière
 */
include 'models/wrap_post.php';
?>
    <section class="wrapper style5">
    <div class="inner">
        <header>
            <h2>posté par : <?= $post->name ?></h2>
            <p>Le <em><?= date("d/m/Y à H:i", strtotime($post->date)); ?></em></p>
        </header>
            <span class="image right">
                <img src="images/posts/<?=$post->image?>" alt="<?=$post->title?>">
            </span>
            <p><?= $post->content ?></p>

<?php
}
?>

    <hr>
    <h4>Commentaires :</h4>
<?php include 'models/comments.php' ?>
    <hr>
    <h4>Commenter :</h4>

<?php include 'models/form_comments.php'; ?>
    </div>
    </section>