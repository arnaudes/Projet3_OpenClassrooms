<?php

function get_posts(){

    global $db;

    $req = $db->query("SELECT * FROM posts ORDER BY date ASC");

    $results = [];
    while($rows = $req->fetchObject()){
        $results [] = $rows;
    }

    return $results;
}
$posts = get_posts();