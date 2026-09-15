<?php

/*
./app/controllers/tagsController.php
*/ 

namespace App\Controllers\CommentsController;

use \App\Models\CommentsModel;

function indexByPostIdAction(\PDO $connexion, int $postId) {
    //je mets dans $commentss la liste des commenairess du post que je demande au modele
    include_once '../app/models/commentsModel.php';
    $comments = CommentsModel\findAllByPostId($connexion, $postId);

    //je charge la vue comments/indexByPostId directement (pas dans $content)

    include '../app/views/comments/indexByPostId.php';

}
