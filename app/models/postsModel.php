<?php

namespace App\Models\PostsModel;

use \PDO;


function findall(\PDO $connexion) :array
{
    $sql = "SELECT *
            FROM posts
            ORDER BY created_at DESC
            LIMIT 10;";

    $rs = $connexion->query($sql);
    $posts = $rs->fetchAll(PDO::FETCH_ASSOC);
    $rs->closeCursor();
    unset($rs);
    return $posts;

    

}
