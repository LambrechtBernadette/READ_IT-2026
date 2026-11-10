<?php

namespace App\Controllers\PostsController;

use \PDO;
use \App\Models\PostsModel;


function indexAction(PDO $connexion)
{
    include_once '../app/models/postsModel.php';
    $posts = PostsModel\findAll($connexion);


    global $content;
    ob_start();
    include '../app/views/posts/index.php';
    $content = ob_get_clean();
}


function showAction(PDO $connexion, int $id)

{
    
    include_once '../app/models/postsModel.php';
    $post = PostsModel\findOneById($connexion, $id);

    /*je mets dans $author les infos de l'auteur du post que je demande au modèle authorModele*/

    include_once '../app/models/authorsModel.php';
    $author = \App\Models\AuthorsModel\findOneById($connexion, $post['author_id']);

    // Je charge la vue show dans $content

    global $content, $title;
    $title = $post['title'];
    ob_start();
    include '../app/views/posts/show.php';
    $content = ob_get_clean();
}

function lastestIndexAction(PDO $connexion, int $limit = 3)
{
    //je mets dans $posts la liste des derniers posts que je demande au modele
    include_once '../app/models/postsModel.php';
    $posts = PostsModel\findAllRecents($connexion, $limit);

    //je charge la vue posts/index_recent directement (pas dans $content)

    include '../app/views/posts/index_recent.php';
}


