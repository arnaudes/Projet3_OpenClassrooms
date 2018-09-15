<?php
    if($responses != false) {
        foreach ($responses as $response) {
            /**
             * Code html d'un affichage de commentaire si il y'en a.
             */
            ?>
            <blockquote>
                <u>Posté par <strong><?= $response->name ?> le (<?= date("d/m/Y à H:i", strtotime($response->date)) ?>)
                        :</strong></u>
                <p><?= nl2br($response->comment) ?></p>
                <div style="text-align: right">
                <a href="#!" id="<?= $response->id ?>" type="button" class="btn btn-outline-danger btn-sm reported_comment">Signaler ce commentaire</a>
                </div>
            </blockquote>
            <?php
        }
        /**
         * Si il n'y a aucun commentaire correspondant au post, on affiche cette phrase.
         */
    }else echo "Aucun commentaire n'a encore été publié... Soyez le premier!";