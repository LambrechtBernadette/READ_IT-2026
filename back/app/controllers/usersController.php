<?php

namespace App\Controllers\UsersController;

use \PDO;
use \App\Models\UsersModel;
// include_once '../app/models/usersModel.php';

function loginFormAction(PDO $connexion)
{
    global $content, $title;
    $title = "Login Form";
    ob_start();
    include '../app/views/users/loginForm.php';
    $content = ob_get_clean();
}

function loginAction (PDO $connexion, array $userData){
    include_once '../app/models/usersModel.php';
    // on va hercher le/la user.euse qui correspond aux userData
    $user = UsersModel\findOneByLoginPwd($connexion, $userData);

    // si il y en a pas, on redirige vers la route login

    if (!$user):     
// Placez ce code avant tout affichage HTML ou espace blanc
        header('Location: '. PUBLIC_BASE_URL .'users/login-form'); 

// pour voir si ça fonctionne : var_dump($user)

// on redirige vers le dashboard admin
    
    else:
        header('Location: ' . ADMIN_BASE_URL);
        
    endif;

        
}

