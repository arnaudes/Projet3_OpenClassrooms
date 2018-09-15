<?php
/**
 * @return array
 * récupère les article dans la table 'posts' quand ceux-ci on le statut posté
 * where posted = "1"
 */
    function get_posts(){

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
        WHERE posts.posted='1'
        ");

        $results = array();

        while($rows = $req->fetchObject()){
            $results[] = $rows;
        }
        return $results;
    }

$posts = get_posts();