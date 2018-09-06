<?php
    require 'controllers/form_comments.controller.php';
?>

<form method="post">
    <div class="row gtr-uniform">
        <div class="col-6 col-12-small">
            <input type="text" name="name" id="name" value="" placeholder="Votre Nom" />
        </div>
        <div class="col-6 col-12-small">
            <input type="email" name="email" id="email" value="" placeholder="Adresse Email" />
        </div>
        <div class="col-12">
            <textarea name="comment" id="comment" value="" placeholder="Contenu de votre commentaire"></textarea>
        </div>
        <div>
            <button type="submit" name="submit" class="button primary">Commenter ce post</button>
        </div>
    </div>
</form>