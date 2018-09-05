<?php
/**
 * récupère le model du header pour afficher la bannière
 */
include 'models/wrap_chapitres.php';
?>

    <section class="wrapper style5" style="text-align: justify">
        <div class="inner">
    <?php foreach ($posts as $post){?>

        <h2><?= $post->title ?></h2>
        <h6>Article posté le : <em><?= $post->date ?></em></h6>
        <p><?= $post->content ?></p><hr>

<?php
}
?>
        </div>
    </section>

