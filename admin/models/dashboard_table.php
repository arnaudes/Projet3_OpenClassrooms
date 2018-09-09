<?php $comments = get_reported_comments(); ?>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Article</th>
        <th scope="col">Commentaire</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($comments as $comment) { ?>
        <tr id="commentaire_<?= $comment->id ?>">
            <td><?= $comment->title ?></td>
            <td><?= substr($comment->comment, 0, 100); ?>...</td>
            <td>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#comment_validate<?=$comment->id?>"><i class="fas fa-check"></i></button>
                <div class="modal fade" id="comment_validate<?=$comment->id?>" tabindex="-1" role="dialog" aria-labelledby="Voir l'article" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                        <div class="modal-content" style="text-align: center">
                            <div class="modal-header">
                                <h2 style="color: #249d3d">Êtes-vous sûr de vouloir valider ce commentaire?</h2>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body" style="text-align: left">
                                <h4><?= $comment->title ?></h4>
                                <p>commentaire posté par <strong><?= $comment->name." (".$comment->email.")</strong><br/>Le ".date("d/m/Y à H:i",strtotime($comment->date)) ?></p>
                                <hr><p><?= nl2br($comment->comment) ?></p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-undo"></i> Annuler</button>
                                <button type="button" class="btn btn-success validate_comment" data-dismiss="modal"><i class="fa fa-check"></i> Valider</button>
                            </div>
                        </div>
                    </div>
                </div>

                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#comment_delete<?=$comment->id?>"><i class="fas fa-trash"></i></button>
                <div class="modal fade" id="comment_delete<?=$comment->id?>" tabindex="-1" role="dialog" aria-labelledby="Voir l'article" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                        <div class="modal-content" style="text-align: center">
                            <div class="modal-header">
                                <h2 style="color: #d72e3d">Êtes-vous sûr de vouloir supprimer ce commentaire?</h2>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body" style="text-align: left">
                                <h4><?= $comment->title ?></h4>
                                <p>commentaire posté par <strong><?= $comment->name." (".$comment->email.")</strong><br/>Le ".date("d/m/Y à H:i",strtotime($comment->date)) ?></p>
                                <hr><p><?= nl2br($comment->comment) ?></p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-undo"></i> Annuler</button>
                                <button type="button" class="btn btn-danger delete_comment" data-dismiss="modal"><i class="fa fa-trash"></i> Supprimer</button>
                            </div>
                        </div>
                    </div>
                </div>

            </td>
        </tr>
        <?php
    }?>
    </tbody>
</table>