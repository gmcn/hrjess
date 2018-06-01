

  <?php if(strstr($_SERVER['REQUEST_URI'], "portfolio") !== false ): ?>

    <?php $taxonomies = get_terms( 'projects_category' );
    if ( ! empty( $taxonomies ) && ! is_wp_error( $taxonomies ) ){
        echo '<ul>';
        foreach ( $taxonomies as $taxonomy ) {
            echo '<li><a href="/projects_category/' . $taxonomy->slug . '">' . $taxonomy->name . '</a></li>';
        }
        echo '</ul>';
    } ?>


<?php endif ?>

<div class="container-fluid portfolio-wrapper services">
  <div class="container">

    <div class="row">
      <div class="col-md-5">
        <h1>View Our <?php echo $product_cat ?> Gallery</h1>
      </div>
      <div class="col-md-2">
        <a class="viewall" href="/projects_category/portfolio/">View All</a>
      </div>
    </div>


    <div class="row">

      <?php
      while ($wp_query->have_posts()) : $wp_query->the_post();
      $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
      ?>



        <a href="<?php the_permalink(); ?>">
          <div class="col-md-3 col-xs-6 col-xxs-12 wow fadeInLeft portfolio-item">

            <div class="outer">
                <div class="inner" style="background: url('<?php echo $backgroundImg[0] ?>') center; background-size: cover">
                    <div class="hover">
                      <h2><?php the_title(); ?></h2>
                      View Project
                    </div>
                </div>
            </div>
          </div>
        </a>

        <?php if (function_exists('wp_pagenavi')){ wp_pagenavi(); } ?>

      <?php endwhile; ?>

      <?php the_posts_pagination( array( 'mid_size'  => 2 ) ); ?>



    </div>

  </div>
</div>
