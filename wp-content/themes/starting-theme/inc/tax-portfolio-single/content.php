<div class="container">

  <div class="row">

    <div class="<?php if( have_rows('gallery') ): ?>col-md-6<?php else : ?>col-md-12 no-gallery<?php endif ?> thumbnail-wrapper wow fadeIn">

      <a class="fancybox" rel="group" href="<?php echo the_post_thumbnail_url(); ?>" title="<?php the_title(); ?>">

        <?php the_post_thumbnail(); ?>

      </a>



    </div>


      <?php if( have_rows('gallery') ): ?>
        <div class="col-md-6">
        	<div class="row no-gutter">

        	<?php

           $i = 1;
           while( have_rows('gallery') ): the_row();

        		// vars
        		$media_type = get_sub_field('media_type');
        		$image = get_sub_field('image');
        		$video_link = get_sub_field('video_link');
        		$video_bg = get_sub_field('video_bg');

        		?>

        	<div class="col-xs-12 projects-media <?php if( $i > 3 ) { echo 'hidden'; } ?>" style="height: 300px; background: url('<?php echo $video_bg ?>')">

            <?php if ($media_type == "video") : ?>

              <div class="vert-align">
                <a class="fancybox" data-fancybox-type="iframe" rel="group" href="<?php echo $video_link ?>" title="<?php the_title(); ?>">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/play.svg" alt="Play <?php the_title(); ?> Video" />
                </a>
              </div>

            <?php endif ?>

            <?php if ($media_type == "image") : ?>

              <a class="fancybox" style="background: url(<?php echo esc_url($image['url']); ?>) center center no-repeat; height:300px; background-size: cover; overflow: hidden; display: block;" rel="group" href="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['alt']); ?>">

              </a>

            <?php endif; ?>

      		</div>

        <?php $i++; endwhile; ?>

        </div>
      </div>
      <?php endif; ?>

  </div>

</div>

<div class="container">

  </div>

  <div class="container">

    <div class="row buttons-wrapper">
      <div class="col-md-4 buttons-wrapper_back">
        <a href="/projects_category/<?php echo $product_cat_slug ?>/">Back to <?php echo $product_cat ?> Gallery</a>
      </div>
      <div class="col-md-4 buttons-wrapper_view">
        <a class="fancybox" rel="group" href="<?php echo the_post_thumbnail_url(); ?>" title="<?php the_title(); ?>">

          View All Images

        </a>
      </div>
      <div class="col-md-4 buttons-wrapper_contact">
        <a href="/contact">Contact Us Now</a>
      </div>
    </div>

  </div>

  <div class="container-fluid similarproducts">

    <div class="container">

      <h1>View Similar Projects</h1>

      <?php

        $similarprojects = array( 'post_type' => 'projects', 'posts_per_page' => 4, 'orderby' => 'rand', 'tax_query' => array (
          array(
              'taxonomy' => 'projects_category',
              'field' => 'slug',
              'terms' => array(
                  $product_cat
              )
          )
      ));
    	$wp_query = new WP_Query( $similarprojects );
    	if ( $wp_query->have_posts() ) : ?>
    		<?php while ( $wp_query->have_posts() ) : $wp_query->the_post();
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
    		<?php wp_reset_query(); ?>
    		<?php endif; ?>

    </div>

  </div>
