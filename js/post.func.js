/**
 * Fonction jQuery (quand une class est appelé, va cherché la fonction correspondante dans le dossier '/ajax')
 * Puis affiche une alerte pour signaler que le commentaire à bien été signalé
 */
$(document).ready(function () {


    $(".reported_comment").click(function () {
        var id = $(this).attr("id");
        $.post('admin/ajax/reported_comment.php', {id: id}, function () {
            alert ("Le commentaire à bien été signalé! " +
                "\nIl sera analysé par l'administrateur du site" +
                "\nAfin d'être modéré... Merci. ")
        });
    });
});