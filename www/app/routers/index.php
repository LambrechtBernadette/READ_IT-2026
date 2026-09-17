
<?php

// PAGE CONTACT
// PATTERN: ?
if (isset($_GET['contact'])) {
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
// ROUTE PAR DÉFAUT: Les 10 derniers posts
// PATTERN: /
// URL: ?
// CTRL: postsController
// ACTION: index
else {
    include_once '../app/controllers/postsController.php';
    \App\Controllers\PostsController\indexAction($connexion);
}
