
<?php





// ROUTE PAR DÉFAUT: Dashboard
// PATTERN: /
// URL: ?
// CTRL: pageController
// ACTION: index

    include_once '../app/controllers/pagesController.php';
    \App\Controllers\PagesController\dashboardAction($connexion);
