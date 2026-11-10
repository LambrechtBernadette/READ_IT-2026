<?php

/*
./app/controllers/tagsController.php
*/ 

namespace App\Controllers\TagsController;

use \App\Models\TagsModel;

function indexAction(\PDO $connexion) {
    //je mets dans $tags la liste de tous les tags que je demande au modele
    include_once '../app/models/tagsModel.php';
    $tags = TagsModel\findAll($connexion);

    //je charge la vue tags/index directement (pas dans $content)

    include '../app/views/tags/index.php';
}

function indexByPostIdAction(\PDO $connexion, int $postId) {
    //je mets dans $tags la liste des tags du post que je demande au modele
    include_once '../app/models/tagsModel.php';
    $tags = TagsModel\findAllByPostId($connexion, $postId);

    //je charge la vue tags/indexByPostId directement (pas dans $content)

    include '../app/views/tags/indexByPostId.php';

}