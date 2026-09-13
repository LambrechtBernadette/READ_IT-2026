
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

<div class="comment-form-wrap pt-5">
        <h3 class="mb-5">Leave a comment</h3>
        <form action="#" class="p-5 bg-light" method="post">
            <div class="form-group">
                <label for="name">Name *</label>
                <input type="text" class="form-control" id="name">
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <input type="hidden" name="postId" value="4" />
                <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
            </div>

        </form>
    </div>
</div>