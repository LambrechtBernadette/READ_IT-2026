<?php
//ROUTEUR PRINCIPAL

//ROUTE PAR DEFAUT
//PATTERN : /
//CTRL : PostsController
//ACTION : indexAction

include_once '../app/controllers/postsController.php';

\App\Controllers\PostsController\indexAction($connexion);