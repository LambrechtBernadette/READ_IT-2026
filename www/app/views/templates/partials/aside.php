<?php
/*./app/views/templates/partials/aside.php

*/
?>
<div class="col-lg-4 sidebar pl-lg-5 ftco-animate">
            <div class="sidebar-box">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon icon-search"></span>
                  <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                </div>
              </form>
            </div>
            <div class="sidebar-box ftco-animate">
              <?php
                include_once '../app/controllers/categoriesController.php';
                \App\Controllers\CategoriesController\indexAction($connexion);
              ?>
            </div>

            <div class="sidebar-box ftco-animate">
              <?php
                include_once '../app/controllers/postsController.php';
                \App\Controllers\PostsController\lastestIndexAction($connexion, 3);
              ?>
          
              </div>

              <div class="sidebar-box ftco-animate">
              <?php
                include_once '../app/controllers/tagsController.php';
                \App\Controllers\TagsController\indexAction($connexion);
              ?>
          
              </div>

            </div>

          </div>