<?php


use \App\Controllers\UsersController;


include_once '../app/controllers/usersController.php';


switch ($_GET['users']):
    case 'login':
        UsersController\loginAction($connexion, $_POST);
    default:
        UsersController\loginFormAction($connexion);
        break;
endswitch;
