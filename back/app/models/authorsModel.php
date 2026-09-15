<?php

/*
./app/models/authorsModel.php
*/

namespace App\Models\AuthorsModel;


/*
 * [findOneByid description]
 * @param  \PDO $connexion  [description]
 * @param  int $id          [description]
 * @return array            [description]
 */

function findOneById(\PDO $connexion, int $id) :array
{
    $sql = "SELECT *
            FROM authors
            WHERE id = :id;";

    $rs = $connexion->prepare($sql);
    $rs->bindValue(':id', $id, \PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetch(\PDO::FETCH_ASSOC);
}
