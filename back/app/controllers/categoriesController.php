<?php
/*
./app/controllers/categoriesController.php
 Contrôleur des catégories
*/


namespace App\Controllers\CategoriesController;

use App\Models\CategoriesModel;

function indexAction(\PDO $connexion){
    include_once '../app/models/categoriesModel.php';

    $categories = CategoriesModel\findAll($connexion);

    GLOBAL $content, $title;
    $title = 'Categories';

    ob_start();
    include '../app/views/categories/index.php';
    $content = ob_get_clean();
}

function addFormAction(){
    GLOBAL $title, $content;

    $title = "Ajout d'une categorie";
    ob_start();
    include '../app/views/categories/addForm.php';
    $content = ob_get_clean();

}

function editFormAction(\PDO $connexion, int $id)
{
    
include_once '../app/models/categoriesModel.php';

    $category = CategoriesModel\findOneById($connexion, $id);
    GLOBAL $title, $content;

    $title = "modification d'une categorie";
    ob_start();
    include '../app/views/categories/editForm.php';
    $content = ob_get_clean();
}

function insertAction(\PDO $connexion, array $data){
    include_once '../app/models/categoriesModel.php'; 
    $id = CategoriesModel\insert($connexion,$data);

    header('location: ' . ADMIN_BASE_URL . 'categories');
}

function updateAction(\PDO $connexion, array $data){
     include_once '../app/models/categoriesModel.php'; 
    $id = CategoriesModel\update($connexion,$data);

    header('location: ' . ADMIN_BASE_URL . 'categories');
}

function deleteAction(\PDO $connexion, int $id){
     include_once '../app/models/categoriesModel.php'; 
    $return = CategoriesModel\delete($connexion,$id);

    header('location: ' . ADMIN_BASE_URL . 'categories');
}

