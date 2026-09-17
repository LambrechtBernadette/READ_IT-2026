
<?php
/*
.app/routeur.php
ROUTEUR PRINCIPAL
*/
//AJOUT D UN COMMENTAIRE
//PATTERN: ?comments=add
//CTRL: commentsControleur
//ACTION store
if (isset($_GET['comments']) && $_GET['comments'] === 'add') {
    include_once '../app/controllers/commentsController.php';
    \App\Controllers\CommentsController\storeAction($connexion);
}

// PAGE CONTACT
elseif (isset($_GET['contact'])) {
    $title = "Contact";
    ob_start();
    include_once '../app/views/templates/partials/contact.php';
    $content = ob_get_clean();
}
// ROUTES POSTS
// PATTERN: /posts/...
// URL: ?posts=...
// ROUTER posts
elseif (isset($_GET['posts'])) {
    include_once '../app/routers/posts.php';
}
// ROUTES USERS
// PATTERN: /users/...
// URL: ?users=...
// ROUTER users
elseif (isset($_GET['users'])) {
    include_once '../app/routers/users.php';
}

else {
    include_once '../app/controllers/postsController.php';
    \App\Controllers\PostsController\indexAction($connexion);
}