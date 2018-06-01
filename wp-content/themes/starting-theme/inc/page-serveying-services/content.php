<?php
$product_image = get_the_post_thumbnail_url();
$homepage = file_get_contents($product_image);
 ?>



<div class="container-fluid surveying-child-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-md-5">
        <h2><?php the_title(); ?></h2>
        <?php echo $homepage ?>
      </div><!-- /.col-md-5 -->

      <div class="col-md-6">

        <?php the_content(); ?>

        <a href="/surveying/">Back To Surveying Services</a>
      </div><!-- /.col-md-6 -->

    </div><!-- /.row -->
  </div><!-- /.coontainer -->
</div><!-- /.coontainer-fluid -->
