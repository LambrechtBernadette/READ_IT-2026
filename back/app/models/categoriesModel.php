<?php
/*
  ./app/models/categoriesModel.php
*/
namespace App\Models\CategoriesModel;
/**
 * 
 * @param PDO $connexion [description]
 * @return array         [description]
 */

function findAll(\PDO $connexion) :array
{
    $sql = "SELECT *
            FROM categories
            ORDER BY id ASC;";
    $rs = $connexion->query($sql);
    $categories = $rs->fetchAll(\PDO::FETCH_ASSOC);
    return $categories;
}

function findOneById(\PDO $connexion, int $id){
  $sql = "SELECT *
            FROM categories
            WHERE id = :id;";

            $rs= $connexion->prepare($sql);
            $rs->bindValue(':id', $id, \PDO::PARAM_INT);
            $rs->execute();
            $category = $rs->fetch(\PDO::FETCH_ASSOC);
            return $category;
}

function insert(\PDO $connexion, array $data){
$sql = "INSERT INTO categories
        SET name = :name;";

 $rs= $connexion->prepare($sql);
            $rs->bindValue(':name', $data['name'], \PDO::PARAM_STR);
            $rs->execute();
            return intval($connexion->lastInsertId());
}

function update(\PDO $connexion, array $data){
$sql = "UPDATE categories
        SET name = :name
        WHERE id = :id;";

 $rs= $connexion->prepare($sql);
            $rs->bindValue(':name', $data['name'], \PDO::PARAM_STR);
            $rs->bindValue(':id', $data['id'], \PDO::PARAM_INT);
            return intval($rs->execute());
}
function delete(\PDO $connexion, int $id){
$sql = "DELETE FROM categories
        WHERE id = :id;";

 $rs= $connexion->prepare($sql);
            $rs->bindValue(':id', $id, \PDO::PARAM_INT);
            return intval($rs->execute());
}


