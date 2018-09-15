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
