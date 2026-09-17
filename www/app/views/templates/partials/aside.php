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
                include_once '../app/models/categoriesModel.php';
                $categories = \App\Models\CategoriesModel\findAll($connexion);
                include '../app/views/categories/index.php';
              ?>
            </div>

            <div class="sidebar-box ftco-animate">
              <?php
                include_once '../app/models/postsModel.php';
                $posts = \App\Models\PostsModel\findAllRecents($connexion, 3);
                include '../app/views/posts/index_recent.php';
              ?>
          
              </div>

              <div class="sidebar-box ftco-animate">
              <?php
                include_once '../app/models/tagsModel.php';
                $tags = \App\Models\TagsModel\findAll($connexion);
                include '../app/views/tags/index.php';
              ?>
          
              </div>

              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_3.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Nov. 14, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>

            <div class="sidebar-box ftco-animate">
              
            </div>

    
          </div>