<?php

/*
.app/routers/categoriesRouter.php

*/ 
use App\Controllers\CategoriesController;

$id = $_GET['id'] ?? $_POST['id'] ?? null;

include_once '../app/controllers/categoriesController.php';

switch ($_GET['categories']):


    case 'delete':
        CategoriesController\deleteAction($connexion, (int) $id);
        break;

    case 'addForm':
        CategoriesController\addFormAction();
        break;

    case 'insert':
        CategoriesController\insertAction($connexion, $_POST);
        break;

    case 'editForm':
        if  ($id===null){
            break;
        }
        CategoriesController\editFormAction($connexion, (int) $id);
        break;

    case'update':
        if ($id === null){
            break;
        }
        CategoriesController\updateAction($connexion, ['id' => (int) $id,
                                                        'name' => $_POST['name'] ?? '']);

    case'index':
        CategoriesController\indexAction($connexion);
        break;
endswitch;