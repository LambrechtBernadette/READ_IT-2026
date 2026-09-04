<?php

/*
./app/controllers/tagsController.php
*/ 

namespace App\Controllers\TagsController;

use \App\Models\TagsModel;

function indexByPostIdAction(\PDO $connexion, int $postId) {
    //je mts dans $tags la liste des tags du post que je demande au modele
    include_once '../app/models/tagsModel.php';
    $tags = TagsModel\findAllByPostId($connexion, $postId);

    //je charge la vue tags/indexByPostId directement (pas dans $content)

    include '../app/views/tags/indexByPostId.php';

}