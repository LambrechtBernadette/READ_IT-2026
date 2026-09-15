<?php
/**
 * ./app/views/comments/indexByPostId.php
 * @var array $comments
 */
?>
<div class="pt-5 mt-5">
    <h3 class="mb-5"><?php echo count($comments); ?> Comments</h3>
    <ul class="comment-list">
        <?php foreach ($comments as $comment): ?>
            <?php $created_at = strtotime($comment['created_at']); ?>
            <li class="comment">
                <div class="comment-body">
                    <h3><?php echo $comment['pseudo']; ?></h3>
                    <div class="meta mb-3"><?php echo date('F d, Y a\t H:i', $created_at); ?></div>
                    <p><?php echo $comment['content']; ?></p>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
    <!-- END comment-list -->
    <?php include '_addForm.php'; ?>
</div>
