
<?php

if (isset($_GET['categories'])):
     include_once '../app/routers/categoriesRouter.php';

elseif (isset($_GET['users'])):
     include_once '../app/routers/usersRouter.php';
// ROUTE PAR DÉFAUT: USERS.LOGOUT
// PATTERN: users/logout
// URL: ?users=logout
// CTRL: usersController
// ACTION: logout
//objectif : tuer la variable de session (unset())
//Rediriger vers l'accueil du public
else:

    include_once '../app/controllers/pagesController.php';
    \App\Controllers\PagesController\dashboardAction($connexion);
endif;