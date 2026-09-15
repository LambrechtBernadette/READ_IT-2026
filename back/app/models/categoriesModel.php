<?php
/*
  ./app/models/categoriesModel.php
*/
namespace App\Models\CategoriesModel;
/**
 * [findAll description] 
 * @param PDO $connexion [description]
 * @return array         [description]
 */

function findAll(\PDO $connexion) :array
{
    $sql = "SELECT *
            FROM categories
            ORDER BY name ASC;";
    $rs = $connexion->query($sql);
    $categories = $rs->fetchAll(\PDO::FETCH_ASSOC);
    return $categories;
}
