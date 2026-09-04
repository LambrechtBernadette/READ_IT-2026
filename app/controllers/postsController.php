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

function showAction(\PDO $connexion, int $id) {

//je mets dans $post les infos du post que je demande au modèle
    
    include_once '../app/models/postsModel.php';
    
    $post = PostsModel\findOneById($connexion, $id);

    //je charge la vue show dans $content

    GLOBAL $title, $content;
    $title = $post['title'];
    ob_start();
    include '../app/views/posts/show.php';
    $content = ob_get_clean();
}


