<?php
/**
 * @return array
 * recupère tout les posts et les affiche du plus récent au plus ancien
 */
function get_posts(){

    global $db;

    $req = $db->query("SELECT * FROM posts ORDER BY date DESC");

    $results = [];
    while($rows = $req->fetchObject()){
        $results [] = $rows;
    }

    return $results;
}

$posts = get_posts();