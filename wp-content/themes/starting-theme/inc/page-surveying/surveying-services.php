<div class="container-fluid surveying-services-wrapper">
  <div class="container">

    <div class="row">

      <div class="col-md-4">
        <h1>Surveying Services</h1>
      </div>

      <div class="col-md-5 col-md-offset-1">
        <p>
          We also provide a full range of surveying services to help you with any type of property related issue:
        </p>
      </div>

    </div>

    <?php
    $args = array(
    'post_parent' => $post->ID,
    'post_type' => 'page',
    'orderby' => 'menu_order'
    );

    $child_query = new WP_Query( $args );

    ?>

    <div class="row surveying-services">

      <?php $i = 1; ?>

    <?php while ( $child_query->have_posts() ) : $child_query->the_post();

    $service_icon = get_field('service_icon');

    ?>

    <div class="col-md-3 col-xs-6 service<?php echo $i ?> wow fadeInUp">
      <h2><?php the_title(); ?></h2>


      <div>
        <?php the_post_thumbnail(); ?>
      </div>

      <a href="<?php the_permalink(); ?>">Read More</a>

    </div>

    <?php $i++; endwhile; wp_reset_postdata(); ?>

    </div><!-- /.row -->


  </div><!-- /.container -->
</div><!-- /.container-fluid -->
