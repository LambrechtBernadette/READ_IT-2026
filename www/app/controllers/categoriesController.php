<?php
/*
./app/controllers/categoriesController.php
*/

namespace App\Controllers\CategoriesController;

use \App\Models\CategoriesModel;

function indexAction(\PDO $connexion)
{
    //je mets dans $categories la liste des categories que je demande au modele
    include_once '../app/models/categoriesModel.php';
    $categories = CategoriesModel\findAll($connexion);

    //je charge la vue categories/index directement (pas dans $content)

    include '../app/views/categories/index.php';
}
