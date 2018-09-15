/**
 * Fonction jQuery (quand une class est appelé, va cherché la fonction correspondante dans le dossier '/ajax')
 * Puis reload la page pour affiché le contenu du dashboard actualisé)
 */
$(document).ready(function(){


    $(".validate_comment").click(function () {
        var id = $(this).attr("id");
        $.post('ajax/validate_comment.php', {id:id}, function(){
            window.location.reload();
        });
    });

    $(".delete_comment").click(function () {
        var id = $(this).attr("id");
        $.post('ajax/delete_comment.php', {id:id}, function(){
            window.location.reload();
        });
    });
});
