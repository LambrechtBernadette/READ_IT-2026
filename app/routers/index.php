<?php
//ROUTEUR PRINCIPAL

//ROUTE DETAIL D UN POST
//PATTERN : ?postId=x
//CTRL : PostsController
//ACTION : showAction   

if (isset($_GET['postId'])): 
    include_once '../app/controllers/postsController.php';
    \App\Controllers\PostsController\showAction($connexion, $_GET['postId']);



//ROUTE PAR DEFAUT
//PATTERN : /
//CTRL : PostsController
//ACTION : indexAction
else:
include_once '../app/controllers/postsController.php';

\App\Controllers\PostsController\indexAction($connexion);
endif;