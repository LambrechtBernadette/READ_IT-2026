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

function findallRecents(PDO $connexion, int $limit = 10)
{
    $sql = "SELECT p.id, p.title, p.created_at, p.image,
                a.firstname, a.lastname,
                COUNT(c.id) AS nbrComments
            FROM posts p
            JOIN authors a ON p.author_id = a.id
            LEFT JOIN comments c ON c.post_id = p.id
            GROUP BY p.id
            ORDER BY p.created_at DESC
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
