<?php

/**
 * @var array
 * variables disponible :
 *  $post : ARRAY (id, title, created_at, resumme, image, content, author_id, categorie_id)
 * 
 * app/views/posts/show.php
 */
?>

<p class="mb-5">
    <img src="images/<?php echo $post['image']; ?>" alt="" class="img-fluid">
</p>

<h1 class="mb-3 h1"><?php echo $post['title']; ?></h1>
            
<div class="">
    <?php echo $post['content']; ?>

</div>

<!-- TAGS LIST -->

<?php
    include_once '../app/controllers/tagsController.php';  
    \App\Controllers\TagsController\indexByPostIdAction($connexion, $post['id']);


            