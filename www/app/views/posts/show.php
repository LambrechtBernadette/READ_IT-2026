
<?php

/** @var array $post */
?>
<p class="mb-5">
    <img src="images/<?php echo $post['image']; ?>" alt="<?php echo $post['title']; ?>" class="img-fluid">
</p>

<h1 class="mb-3 h1"><?php echo $post['title']; ?></h1>
<div><?php echo $post['content']; ?></div>

<?php include_once '../app/controllers/tagsController.php'; ?>
<?php \App\Controllers\TagsController\indexByPostIdAction($connexion, $post['id']); ?>

<!-- AUTHOR DETAILS -->
<?php include '../app/views/authors/show.php'; ?>

<?php include_once '../app/controllers/commentsController.php'; ?>
<?php \App\Controllers\CommentsController\indexByPostIdAction($connexion, $post['id']); ?>

