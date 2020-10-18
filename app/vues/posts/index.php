  <?php
/*
./app/vues/posts/index.php
Variables disponibles :
    -$posts :ARRAY(ARRAY(title, text,created_at,quote, category_id))
*/

 ?>

 <!-- <div class="row"> -->




        <div class="col-md-12 content-page">


              <!-- ADD A POST -->
              <div>
                <a href="posts/add/form.html" type="button" class="btn btn-primary">Add a Post</a>
              </div>
              <!-- ADD A POST END -->


  <!-- Blog Post Start -->


    <?php foreach ($posts as $post):?>
      <div class="col-md-12 blog-post">





    <div class="post-title">



      <a href="posts/<?php echo $post['postId']; ?>/<?php echo \Noyau\Fonctions\slugify($post['title']); ?>.html"><h1><?php echo $post['title']; ?></h1></a>


    </div>



    <div class="post-info">



      <span> <?php echo Noyau\Fonctions\datify($post['postDate'],'Y\-m\-d'); ?> </span> | <span><?php echo $post['categorieName']; ?></span>

      </div>



    </div>


    <p><?php echo \Noyau\Fonctions\tronquer($post['text'], 150); ?></p>





    <a href="posts/<?php echo $post['postId']; ?>/<?php echo \Noyau\Fonctions\slugify($post['title']); ?>.html" class="button button-style button-anim fa fa-long-arrow-right"><span>Read More</span></a>







<?php endforeach; ?>

</div>

<!-- Blog Post End -->






         </div>
