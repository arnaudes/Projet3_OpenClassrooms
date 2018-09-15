<?php
/**
 * Affichage html de articles dans la page 'list'.
 */
foreach ($posts as $post){
    ?>
    <div id="post_<?= $post->id ?>">
        <h4><?=$post->title?><?php echo ($post->posted == "0")? " <i class='material-icons' style='color: #d43547'>lock</i>" : "" ?></h4>
        <div class="row">
            <div class="col-12 col-sm-6 col-md-8">
                <?= substr(nl2br($post->content),0, 750) ?>...
                <br/> <br/> <?php echo ($post->posted == "1")? " <a href='../index.php?view=post&id=$post->id' class='btn btn-outline-success'><i class='fa fa-eye'></i> Voir</a>" : "" ?>

                <a href="?view=edit&id=<?=$post->id?>" class="btn btn-outline-primary"><i class="fa fa-edit"></i> Modifier</a>
                <button class="btn btn-outline-danger"  data-toggle="modal" data-target="#post_delete<?= $post->id ?>"><i class="fa fa-trash"></i> Supprimer</button>
                <div class="modal fade" id="post_delete<?= $post->id ?>" tabindex="-1" role="dialog"
                     aria-labelledby="supprimer le commentaire" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                        <div class="modal-content" style="text-align: center">
                            <div class="modal-header">
                                <h2 style="color: #d72e3d">Êtes-vous sûr de vouloir supprimer cet article?</h2>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body" style="text-align: left">
                                <h4><?= $post->title ?></h4>
                                <p>article posté par
                                    <strong><?= $post->writer."</strong><br/> Le " . date("d/m/Y à H:i", strtotime($post->date)) ?>
                                </p>
                                <hr>
                                <p><?= nl2br($post->content) ?></p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i
                                            class="fas fa-undo"></i> Annuler
                                </button>
                                <button id="<?= $post->id ?>" type="button" class="btn btn-danger delete_post"
                                        data-dismiss="modal"><i class="fa fa-trash"></i> Supprimer
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-6 col-md-4">
                <img src="../images/posts/<?=$post->image?>" class="img-thumbnail img-responsive rounded float-right" alt="Responsive image">
            </div>
        </div>
        <hr/>
    </div>
    <?php
}
?>