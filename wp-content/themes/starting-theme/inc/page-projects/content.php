<?php
$title = get_the_title();
?>

<?php
$projects = array(
  'post_type' => 'projects',
  'order' => 'ASC',
  'posts_per_page' => 8,
  'orderby' => 'rand',
  'tax_query' => array(
    array (
        'taxonomy' => 'projects_category',
        'field' => 'slug',
        'terms' => $title,
    )
  ));
$wp_query = new WP_Query( $projects );
if ( $wp_query->have_posts() ) : ?>

<div class="container-fluid portfolio-wrapper services">
  <div class="container">

    <div class="row wow fadeInUp">
      <div class="col-md-5">
        <h1>View Our <?php echo $title ?> Gallery</h1>
      </div>
      <div class="col-md-2">
        <a class="viewall" href="/projects_category/<?php echo $title ?>/">View All</a>
      </div>
    </div>




  		<?php
      while ( $wp_query->have_posts() ) : $wp_query->the_post();
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
  	</ul>
  		<?php wp_reset_query(); ?>


  </div>
</div>
<?php endif; ?>
