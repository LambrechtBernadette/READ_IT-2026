<?php

/*
.app/routers/usersRouter.php

*/ 
use App\Controllers\UsersController;

include_once '../app/controllers/usersController.php';
$id = $_GET['id'] ?? $_POST['id'] ?? null;

switch ($_GET['users']):
    case 'delete':
        UsersController\deleteAction($connexion, (int) $id);
        break;

    case 'addForm':
        UsersController\addFormAction();
        break;

    case 'insert':
        UsersController\insertAction($connexion, $_POST);
        break;

    case 'editForm':
        if  ($id===null){
            break;
        }
        UsersController\editFormAction($connexion, (int) $id);
        break;

    case'update':
        if ($id === null){
            break;
        }
        UsersController\updateAction($connexion, ['id' => (int) $id,
                                                        'name' => $_POST['name'] ?? '']);

    case'index':
        CategoriesController\indexAction($connexion);
        break;

    case 'logout':
       UsersController\logoutAction();
        break;
endswitch;