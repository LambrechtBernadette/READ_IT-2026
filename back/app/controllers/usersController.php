<?php

namespace App\Controllers\UsersController;

use \PDO;
use \App\Models\UsersModel;
// include_once '../app/models/usersModel.php';




function logoutAction(){
    unset($_SESSION['user']);
    header('Location: ' . PUBLIC_BASE_URL); // je reviens vers index du www
    exit;

}

function indexAction(\PDO $connexion){
    include_once '../app/models/usersModel.php';

    $categories = UsersModel\findAll($connexion);

    GLOBAL $content, $title;
    $title = 'Utilisateurs';

    ob_start();
    include '../app/views/users/index.php';
    $content = ob_get_clean();
}

function addFormAction(){
    GLOBAL $title, $content;

    $title = "Ajout d'un utilisateur";
    ob_start();
    include '../app/views/users/addForm.php';
    $content = ob_get_clean();

}

function editFormAction(\PDO $connexion, int $id)
{
    
include_once '../app/models/usersModel.php';

    $category = UsersModel\findOneById($connexion, $id);
    GLOBAL $title, $content;

    $title = "modification d'un user";
    ob_start();
    include '../app/views/users/editForm.php';
    $content = ob_get_clean();
}

function insertAction(\PDO $connexion, array $data){
    include_once '../app/models/usersModel.php'; 
    $id = UsersModel\insert($connexion,$data);

    header('location: ' . ADMIN_BASE_URL . 'users');
}

function updateAction(\PDO $connexion, array $data){
     include_once '../app/models/usersModel.php'; 
    $id = UsersModel\update($connexion,$data);

    header('location: ' . ADMIN_BASE_URL . 'users');
}

function deleteAction(\PDO $connexion, int $id){
     include_once '../app/models/usersModel.php'; 
    $return = UsersModel\delete($connexion,$id);

    header('location: ' . ADMIN_BASE_URL . 'users');
}




