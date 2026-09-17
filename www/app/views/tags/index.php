<?php

/**
 * ./app/views/tags/index.php
 * Variables disponibles
 * @var array $tags: ARRAY(ARRRAY(id, name))
 */
?>


<h3>Tag Cloud</h3>
<div class="tagcloud">
    <?php foreach ($tags as $tag): ?>
        <a href="#" class="tag-cloud-link"><?php echo $tag['name']; ?></a>
    <?php endforeach; ?>
                
</div>