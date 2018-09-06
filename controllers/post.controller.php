<?php
/**
 * @return mixed
 * récupère les posts
 */
function get_post(){

    global $db;

    $req = $db->query("
        SELECT posts.id,
                posts.title,
                posts.image,
                posts.content,
                posts.date,
                admins.name
        FROM posts
        JOIN admins
        ON posts.writer = admins.email
        WHERE posts.id='{$_GET['id']}'
        AND posts.posted='1'
    ");

    $result = $req->fetchObject();
    return $result;
}

$post = get_post();

/**
 * @param $name
 * @param $email
 * @param $comment
 * récupére les éléments postés dans le form_comments,
 * insert les commentaires dans la BDD
 */
function comment($name, $email, $comment){
    global $db;

    $c = array(
        'name'      => $name,
        'email'     => $email,
        'comment'   => $comment,
        'post_id'   => $_GET['id']

    );

    $sql = "INSERT INTO comments(name, email, comment, post_id, date) VALUES(:name, :email, :comment, :post_id, NOW())";
    $req = $db->prepare($sql);
    $req->execute($c);
}

/**
 * @return array
 * récupére tout les commentaires dépendants d'un post
 */
function get_comments(){
    global $db;
    $req = $db->query("SELECT * FROM comments WHERE post_id = '{$_GET['id']}' ORDER BY date DESC");
    $results = [];
    while($rows = $req->fetchObject()){
        $results[] = $rows;
    }
    return $results;
}
$responses = get_comments();