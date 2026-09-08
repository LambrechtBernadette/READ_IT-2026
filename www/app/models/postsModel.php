<?php



namespace App\Models\PostsModel;

use \PDO;


/**
 * [findOneByid description]
 * @param  \PDO $connexion  [description]
 * @param  int $id          [description]
 * @return array            [description]
 */


function findall(PDO $connexion, int $limit = 10)
{
    $sql = "SELECT *
            FROM posts
            ORDER BY created_at DESC
            LIMIT :limit;";

    $rs = $connexion->prepare($sql);
    $rs->bindValue(':limit', $limit, PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetchAll(PDO::FETCH_ASSOC);
    
}


function findOneById(PDO $connexion, int $id) :array
{
    $sql = "SELECT *
            FROM posts
            WHERE id = :id;";

    $rs = $connexion->prepare($sql);
    $rs->bindValue(':id', $id, PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetch(PDO::FETCH_ASSOC);
}
