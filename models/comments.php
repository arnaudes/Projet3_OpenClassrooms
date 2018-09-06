<?php
    if($responses != false) {
        foreach ($responses as $response) {
            ?>
            <blockquote>
                <u>Posté par <strong><?= $response->name ?> le (<?= date("d/m/Y à H:i", strtotime($response->date)) ?>)
                        :</strong></u>
                <p><?= nl2br($response->comment) ?></p>
            </blockquote>
            <?php
        }
    }else echo "Aucun commentaire n'a encore été publié... Soyez le premier!";