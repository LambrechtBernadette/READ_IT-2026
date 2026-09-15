
<?php

/** @var array $post */
?>
<p class="mb-5">
    <img src="images/<?php echo $post['image']; ?>" alt="<?php echo $post['title']; ?>" class="img-fluid">
</p>

<h1 class="mb-3 h1"><?php echo $post['title']; ?></h1>
<div><?php echo $post['content']; ?></div>

<div class="tag-widget post-tag-container mb-5 mt-5">
    <div class="tagcloud">
        <a href="#" class="tag-cloud-link">Life</a>
        <a href="#" class="tag-cloud-link">Sport</a>
        <a href="#" class="tag-cloud-link">Tech</a>
        <a href="#" class="tag-cloud-link">Travel</a>
    </div>
</div>

<!-- AUTHOR DETAILS -->
<?php include '../app/views/authors/show.php'; ?>

<?php include_once '../app/controllers/commentsController.php'; ?>
<?php \App\Controllers\CommentsController\indexByPostIdAction($connexion, $post['id']); ?>

