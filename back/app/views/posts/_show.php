<?php

/**
 * @var array $post: ARRAY(id, title, created_at, resume, imagen content, author_id, categorie_id)
 *            $author: ARRAY(id, firsname, lastname, biography)
 * 
 */
?>

<p class="mb-5">
  <img src="images/<?php echo $post['image']; ?>"  alt="<?php echo $post['title']; ?>" class="img-fluid">
</p>

<h1 class="mb-3 h1"><?php echo $post['title']; ?></h1>
<div class="">
    <?php echo $post['content']; ?>
</div>
<!-- TAGS LIST -->
 <?php include_once '../app/controllers/tagsController.php';
  \App\Controllers\TagsController\indexByPostIdAction($connexion, $post['id']);
?>
<!-- AUTHORS DETAILS -->
<?php include '../app/views/authors/show.php'; ?>

<!--COMMENTS LIST-->
<?php 
  include_once '../app/controllers/commentsController.php';
    \App\Controllers\CommentsController\indexByPostIdAction($connexion, $post['id']);?>
