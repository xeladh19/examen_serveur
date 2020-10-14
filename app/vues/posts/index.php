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
                <a href="form.html" type="button" class="btn btn-primary">Add a Post</a>
              </div>
              <!-- ADD A POST END -->


  <!-- Blog Post Start -->

  <div class="col-md-12 blog-post">

    <?php foreach ($posts as $post):?>

    <div class="post-title">
      <a href="?postId=<?php echo $post ['id']; ?>"><h1><?php echo $post ['title']; ?></h1></a>
    </div>
    <div class="post-info">
      <span><?php echo date('Y\-m\-d', strtotime($post['created_at'])); ?></span> | <span>Life style</span>
    </div>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae ut ratione similique temporibus tempora dicta soluta? Qui hic, voluptatem nemo quo corporis dignissimos voluptatum debitis cumque fugiat mollitia quasi quod. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae ut ratione similique...</p>
    <a href="?postId=<?php echo $post['id']; ?>" class="button button-style button-anim fa fa-long-arrow-right"><span>Read More</span></a>
</div>

<!-- Blog Post End -->


<?php endforeach; ?>



         </div>

     </div>
