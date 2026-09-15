<?php

/**
 * @var array $author
 * ./app/views/authors/show.php
 * Variables disponible :
 * $author : ARRAY(id, firsname, lastname, biography)
 */
?>
<div class="about-author d-flex p-4 bg-light">
              <div class="bio mr-5">
                <img src="images/<?php echo $author['image']; ?>" alt="<?php echo $author['firstname']; ?> <?echo $author['lastname']; ?>"class="img-fluid mb-4">
              </div>
              <div class="desc">
                <h3><?php echo $author['firstname']; ?> <?php echo $author['lastname']; ?></h3>
                <p><?php echo $author['biography']; ?></p>
              </div>
            </div>
