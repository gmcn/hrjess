<div class="container gallery">
  <h2>Filter Options</h2>
    <?php $taxonomies = get_terms( 'projects_category', array( 'orderby' => 'title', 'order' => 'DESC', 'hide_empty' => 0 ) );
    if ( ! empty( $taxonomies ) && ! is_wp_error( $taxonomies ) ){
        echo '<ul class="tags">';
        echo '<li class="portfolio"><a href="/projects">All Gallery</a></li>';
        foreach ( $taxonomies as $taxonomy ) {


            //echo '<li class="' . $taxonomy->name .'"><a href="/projects_category/' . $taxonomy->slug . '">' . $taxonomy->name . '</a></li>';

            echo '<li class="';
            echo $taxonomy->slug;
            echo '"><a href="/projects_category/';
            echo $taxonomy->slug;
            echo '">';
            echo $taxonomy->name;
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

      $term_obj_list = get_the_terms( $post->ID, 'projects_category' );
      $terms_string = join(', ', wp_list_pluck($term_obj_list, 'name'));

      ?>

        <a href="<?php the_permalink(); ?>">
          <div class="col-md-3 col-xs-6 col-xxs-12 wow fadeInLeft portfolio-item">

            <div class="outer">

              <div class="inner" style="background: url('<?php echo $backgroundImg[0] ?>') center; background-size: cover">
                  <div class="hover">



                    <h2>
                      <span>

                        <?php $i = 1; foreach ($term_obj_list as $term_obj) : ?>

                          <?php if ($i > 1) : ?>
                            <?php echo "/ " . $term_obj->name ?>
                            <?php else: ?>
                              <?php echo $term_obj->name ?>
                          <?php endif; ?>

                        <?php $i++; endforeach ?>
                        Project
                      </span>

                      <br /><?php the_title(); ?></h2>
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
