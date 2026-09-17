<?php

namespace App\Models\CommentsModel;

/**
 * [findAllByPostId description]
 *
 * @param \PDO $connexion   [description]
 * @param int $postId       [description] 
 * @return array            [description]
 */
function findAllByPostId(\PDO $connexion, int $postId) :array
{
    $sql = "SELECT *
            FROM comments
            WHERE post_id = :postId
            ORDER BY created_at DESC;";

    $rs = $connexion->prepare($sql);
    $rs->bindValue(':postId', $postId, \PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetchAll(\PDO::FETCH_ASSOC);
    
}

function insertOne(\PDO $connexion){
    $sql = "INSERT INTO comments
    SET pseudo      =  :pseudo,
        content     =  :content,
        post_id     =  :post_id,
        created_at  = NOW();";
$rs = $connexion->prepare($sql);
$rs->bindvalue(':pseudo', $_POST ['pseudo'], \PDO::PARAM_STR);
$rs->bindvalue(':content', $_POST ['content'], \PDO::PARAM_STR);
$rs->bindvalue(':post_id', $_POST ['post_id'], \PDO::PARAM_INT);
$rs->execute();
return intval($connexion->lastInsertId());


}