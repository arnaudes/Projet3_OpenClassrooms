$(document).ready(function () {


    $(".reported_comment").click(function () {
        var id = $(this).attr("id");
        $.post('admin/ajax/reported_comment.php', {id: id}, function () {
            alert("Le commentaire à bien été signalé, il sera analysé par l'administrateur du site")
        });
    });
});