<?php
/*
./app/controllers/tagsController.php
*/ 
namespace App\Controllers\CommentsController;

use \App\Models\CommentsModel;
/**

 * @param \PDO $connexion [description]
 * @param int $postId       [description]
 */

function indexByPostIdAction(\PDO $connexion, int $postId) {
    //je mets dans $commentss la liste des commenairess du post que je demande au modele
    include_once '../app/models/commentsModel.php';
    $comments = CommentsModel\findAllByPostId($connexion, $postId);

    //je charge la vue comments/indexByPostId directement (pas dans $content)

    $post_id = $postId;
    include '../app/views/comments/indexByPostId.php';

}

function storeAction(\PDO $connexion) {
    
    include_once '../app/models/commentsModel.php';
    $id = CommentsModel\insertOne($connexion);
    
    header('Location: ?posts=show&id=' . (int) $_POST['post_id']);

}