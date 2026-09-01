<?php

/*./app/vieus/templates/default.php
Template par défaut*/

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include '../app/views/templates/partials/head.php'; ?>
  </head>
  <body>
    <!-- nav -->
    <?php include '../app/views/templates/partials/nav.php'; ?>	  
    <!-- END nav -->

    <!--header-->
    <?php include '../app/views/templates/partials/header.php'; ?>
    <!--END header-->

    <?php include '../app/views/templates/partials/main.php'; ?>
    

    <?php include '../app/views/templates/partials/footer.php'; ?>

<!-- loader -->

    <?php include '../app/views/templates/partials/loader.php'; ?>
  
  </body>
</html>
