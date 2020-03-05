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

        <a class="more" href="/surveying/">Back To Surveying Services</a>


        <?php
        $args = array(
        'post_parent' => 171,
        'post_type' => 'page',
        'orderby' => 'menu_order'
        );

        $child_query = new WP_Query( $args );

        ?>

        <div class="row surveying-services">

          <h3>Surveying Services</h3>

          <?php $i = 1; ?>

        <?php while ( $child_query->have_posts() ) : $child_query->the_post();

        $service_icon = get_field('service_icon');

        ?>

        <div class="col-md-3 col-xs-6 service<?php echo $i ?> wow fadeInUp">
          <h2><?php the_title(); ?></h2>

            <?php the_post_thumbnail(); ?> <br />


          <a href="<?php the_permalink(); ?>">Read More</a>

        </div>

        <?php $i++; endwhile; wp_reset_postdata(); ?>

        </div><!-- /.row surveying-services-->


      </div><!-- /.col-md-6 -->

    </div><!-- /.row -->
  </div><!-- /.coontainer -->
</div><!-- /.coontainer-fluid -->
