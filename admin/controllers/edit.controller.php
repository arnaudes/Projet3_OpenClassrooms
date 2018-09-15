<?php
/**
 * @return mixed
 * récupère en bdd les articles quand l'id de l'article = l'id indiqué dans l'url.
 * si l'id ne correspond à aucun post dans la bdd, on redirige vers la page erreur.
 */
function get_post(){
    global $db;

    $req = $db->query("
        SELECT  posts.id,
                posts.title,
                posts.image,
                posts.date,
                posts.content,
                posts.posted,
                admins.name
        FROM posts
        JOIN admins
        ON posts.writer = admins.email
        WHERE posts.id = '{$_GET['id']}'
    ");

    $result = $req->fetchObject();
    return $result;
}
$post = get_post();
if($post == false){
    header("Location: index.php?view=error");
}
/**
 * @param $title
 * @param $content
 * @param $posted
 * @param $id
 * Fonction pour update un article.
 */
function edit($title, $content, $posted, $id){

    global $db;

    $e = [
        'title'   => $title,
        'content' => $content,
        'posted'  => $posted,
        'id'      => $id
    ];

    $sql = "UPDATE posts SET title = :title, content = :content, posted = :posted WHERE id = :id";
    $req = $db->prepare($sql);
    $req->execute($e);
}