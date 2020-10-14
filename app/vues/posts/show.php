  <?php
/*
./app/vues/posts/show.php
Variables disponibles :
    -$post : ARRAY(title, text,created_at,quote, category_id)
*/

 ?>

 <div class="sub-title">
   <a href="index.html" title="Go to Home Page"><h2>Back Home</h2></a>
     <a href="#comment" class="smoth-scroll"><i class="icon-bubbles"></i></a>
  </div>


 <div class="col-md-12 content-page">
   <div class="col-md-12 blog-post">


     <!-- Post Headline Start -->
     <div class="post-title">
         <h1><?php echo $post['title']; ?></h1>
        </div>
        <!-- Post Headline End -->


     <!-- Post Detail Start -->
     <div class="post-info">
         <span>November 23, 2016</span> | <span>Life style</span>
        </div>
        <!-- Post Detail End -->


         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin at quam at orci commodo hendrerit vitae nec eros. Vestibulum neque est, imperdiet nec tortor nec, tempor semper metus. <b>Cras vel tempus velit</b>, et accumsan nisi. Duis laoreet pretium ultricies. Curabitur rhoncus auctor nunc congue sodales. Sed posuere nisi ipsum, eget dignissim nunc dapibus eget. Aenean elementum <b><a href="javascript:void(0)" data-toggle="popover" data-placement="top" data-content="You can write any text here">Click me</a></b> sollicitudin sapien ut sapien fermentum aliquet mollis. Curabitur ac quam orci sodales quam ut tempor. <b data-toggle="tooltip" data-placement="top" title="You can write any text here.">Hover me</b> suspendisse, gravida in augue in, interdum bibendum dui. Suspendisse sit amet justo sit amet diam fringilla commodo. Praesent ac magna at metus malesuada tincidunt non ac arcu. Nunc gravida eu felis vel elementum. Vestibulum sodales quam ut tempor tempor. Donec sollicitudin sapien ut sapien fermentum, non ultricies nulla gravida.</p>



                                          <!-- Post Blockquote (Italic Style) Start -->
                                          <blockquote class="margin-top-40 margin-bottom-40">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin at quam at orci commodo hendrerit vitae nec eros. Vestibulum neque est, imperdiet nec tortor nec, tempor semper metus. Cras vel tempus velit, <b>et accumsan nisi</b>. Duis laoreet pretium ultricies. Curabitur rhoncus auctor nunc congue sodale Sed posuere nisi ipsum.</p>
                                           </blockquote>
                                           <!-- Post Blockquote (Italic Style) End -->

                                           <!-- Post Buttons -->
                                           <div>
                                             <a href="form.html" type="button" class="btn btn-primary">Edit Post</a>
                                             <a href="#" type="button" class="btn btn-secondary" role="button">Delete Post</a>
                                           </div>
                                           <!-- Post Buttons End -->




     </div>
  </div>
