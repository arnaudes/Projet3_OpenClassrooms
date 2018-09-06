<?php
/**
 * récupère le model du header pour afficher la bannière
 */
include 'models/wrap_chapitres.php';
?>
    <section class="wrapper style5" style="text-align: justify">
        <div class="inner">
<?php foreach ($posts as $post){?>
        <header>
        <h2><?= $post->title ?></h2>
        <P>Article posté le : <em><?= date("d/m/Y à H:i",strtotime($post->date)); ?></em> par <?= $post->name ?></P>
        </header>
        <p><span class="image right"><img src="images/posts/<?= $post->image ?>" alt="<?= $post->title ?>" /></span><?= substr(nl2br($post->content),0,700); ?>...</p>
            <ul class="actions stacked" style="text-align: right">
                <li><a href="?view=post&id=<?= $post->id ?>" class="button primary icon fa-eye">Lire le chapitre complet</a></li>
            </ul>
        <hr>
<?php
}
?>
        </div>
    </section>


