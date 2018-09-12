<?php
    if($responses != false) {
        foreach ($responses as $response) {
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
    }else echo "Aucun commentaire n'a encore été publié... Soyez le premier!";