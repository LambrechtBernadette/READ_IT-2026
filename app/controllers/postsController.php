<?php

/*
./app/controllers/postsController.php


*/ 

namespace App\Controllers\PostsController;

use \PDO;
use \App\Models\PostsModel;
/**
 * @param PDO $connexion
 */
function indexAction(PDO $connexion)
//je mets dans $posts la liste des 10 derniers posts que je demande au modele
//je charge la vue posts/indes dans 
{
    include_once '../app/models/postsModel.php';
    $posts = PostsModel\findAll($connexion);

    GLOBAL $title, $content;
    $title = "Blog";
    ob_start();
    include '../app/views/posts/index.php';
    $content = ob_get_clean();
}


