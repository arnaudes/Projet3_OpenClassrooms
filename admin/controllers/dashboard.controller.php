<?php
/**
 * @param $table
 * @return mixed
 * compte toutes dans les tables de la bdd (utilisé pour afficher le nombre d'article total,
 * et le nombre de commentaires total)
 */
function inTable($table){
    global $db;
    $query = $db->query("SELECT COUNT(id) FROM $table");
    return $nombre = $query->fetch();
}

/**
 * @param $table
 * @param $colors
 * @return string
 * fonction pour afficher les cards du dashboard de la couleur voulu s'ils sont défini,
 * sinon retourne par defaut "bg-warning"= ORANGE.
 */
function getColor($table,$colors){
    if(isset($colors[$table])){
        return $colors[$table];
    }else{
        return "bg-warning";
    }
}

/**
 * @return mixed
 * compte dans la table 'comments' le nombre de commentaire où reported = "1"
 * (utilisé pour afficher le nombre de commentaire reporté, sur le dashboard)
 */
function inTableReported(){
    global $db;
    $query = $db->query("SELECT COUNT(reported) FROM comments WHERE comments.reported ='1'");
    return $nombre = $query->fetch();
}

/**
 * @return array
 * retourne le tableau contenants les commentaires quand ceux-ci ont été signalé par un utilisateur
 * (utilisé sur la page dashboard pour récupérer le contenu de chaque commentaire reporté)
 */
function get_reported_comments(){
    global $db;

    $req = $db->query("
        SELECT  comments.id,
                comments.name,
                comments.email,
                comments.date,
                comments.post_id,
                comments.comment,
                posts.title
        FROM comments
        JOIN posts
        ON comments.post_id = posts.id
        WHERE comments.reported = '1'
        ORDER BY comments.date ASC 
    ");

    $results = [];
    while($rows = $req->fetchObject()){
        $results[] = $rows;
    }
    return $results;
}