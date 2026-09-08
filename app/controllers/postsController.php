<?php
/*
Vous ouvrez directement show.php : cette vue n’est pas autonome et $post n’existe pas.
L’URL ne contient pas postId, par exemple index.php au lieu de index.php?postId=1.
L’identifiant n’existe pas en base : findOneById() retourne alors false, et non un tableau.
Ajoutez une vérification dans showAction() pour gérer ce cas et afficher un message d’erreur 404.
$post = PostsModel\findOneById($connexion, $id);
*/
/*
if ($post === false) {
    http_response_code(404);
    exit('Article introuvable');
}
/*

/*
./app/controllers/postsController.php
*/ 

namespace App\Controllers\PostsController;

use \PDO;
use \App\Models\PostsModel;
/**
 * @param PDO $connexion
 */
function indexAction(\PDO $connexion)
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

function showAction(PDO $connexion, int $id) {
// je mets dans $post les infos du post que je demande au modèle
    include_once '../app/models/postsModel.php';
    $post = PostsModel\findOneById($connexion, $id);

// je mets dans $author les infos de l'auteur du post qu je demande au modèle au authorModele

// je charge la vue show dans $content

    GLOBAL $title, $content;
    $title = $post['title'];
    ob_start();
    include '../app/views/posts/show.php';
    $content = ob_get_clean();
}


