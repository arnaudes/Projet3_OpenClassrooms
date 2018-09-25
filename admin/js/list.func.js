/**
 * Fonction jQuery pour supprimer un arcticle
 * (quand une class est appelé, va cherché la fonction correspondante dans le dossier '/ajax')
 * Puis reload la page afin de l'actualiser.
 */
$(document).ready(function(){

    $(".delete_post").click(function () {
        var id = $(this).attr("id");
        $.post('ajax/delete_post.php', {id:id}, function(){
        window.location.reload()

        });
    });
});