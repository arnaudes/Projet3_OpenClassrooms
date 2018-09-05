<?php

    function get_posts(){
        global $db;

        $req = $db->query("
            SELECT * FROM posts
        
        ");

        $results = array();

        while($rows = $req->fetchObject()){
            $results[] = $rows;
        }
        return $results;
    }

$posts = get_posts();