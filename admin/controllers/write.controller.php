<?php
/**
 * @param $title
 * @param $content
 * @param $posted
 * Fonction pour entrer en bdd un nouvel article
 * (insèrt dans la bdd, le titre, le contenu, l'auteur (=l'admin), la date NOW(), et si le post est en 'Public' ou non)
 */
function post($title, $content, $posted){

    global $db;

    $p = [
        'title'     => $title,
        'content'   => $content,
        'writer'    => $_SESSION['admin'],
        'posted'    => $posted

    ];

    $sql = "
        INSERT INTO posts(title,content,writer,date,posted) 
        VALUES(:title, :content, :writer, NOW(), :posted)
    ";

    $req = $db->prepare($sql);
    $req->execute($p);

}

/**
 * @param $tmp_name
 * @param $extension
 * Fonction pour uploader l'image dans le dossier "../images/posts/" puis change le nom avec l'id.l'extension
 */
function post_img($tmp_name, $extension){

    global $db;

    $id = $db->lastInsertId();
    $i = [
        'id'    => $id,
        'image' => $id.$extension
    ];

    $sql = "UPDATE posts SET image = :image WHERE id = :id";
    $req = $db->prepare($sql);
    $req->execute($i);
    move_uploaded_file($tmp_name, "../images/posts/".$id.$extension);
    ?>
    <script>window.location.replace("index.php?view=list")</script>
    <?php
}