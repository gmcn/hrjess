<div class="container gallery">
  <h2>Filter Options</h2>
    <?php $taxonomies = get_terms( 'projects_category', array( 'orderby' => 'id', 'order' => 'DESC', 'hide_empty' => 0 ) );
    if ( ! empty( $taxonomies ) && ! is_wp_error( $taxonomies ) ){
        echo '<ul class="tags">';
        foreach ( $taxonomies as $taxonomy ) {


            //echo '<li class="' . $taxonomy->name .'"><a href="/projects_category/' . $taxonomy->slug . '">' . $taxonomy->name . '</a></li>';

            echo '<li class="';
            echo $taxonomy->name;
            echo '"><a href="/projects_category/';
            echo $taxonomy->slug;
            echo '">';
            if ($taxonomy->slug == 'portfolio') {
              echo "All Gallery";
            } else {
              echo $taxonomy->name;
            }
            echo '</a></li>';
        }
        echo '</ul>';
    } ?>
</div>


<div class="container-fluid portfolio-wrapper">
  <div class="container">

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

      <?php endwhile; ?>

      <?php the_posts_pagination( array( 'mid_size'  => 2 ) ); ?>



    </div>

  </div>
</div>
