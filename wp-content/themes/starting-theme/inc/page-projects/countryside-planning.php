<?php if( have_rows('countryside_planning_steps') ): ?>
  <div class="container-fluid countryside-planning">
    <div class="container">


      <div class="row">

           <?php $i = 1; while( have_rows('countryside_planning_steps') ): the_row();

         		// vars
         		$countryside_planning_step_title = get_sub_field('countryside_planning_step_title');
            $countryside_planning_step_information = get_sub_field('countryside_planning_step_information');

         		?>

            <div class="col-md-6 countryside-planning_step wow fadeInUp matchheight">

              <div class="row">
                <div class="col-sm-4 countryside-planning_step__title titlematch">
                  <p><?php echo $countryside_planning_step_title ?></p>
                  <span>#<?php echo $i; ?></span>
                </div>
                <div class="col-sm-8 countryside-planning_step__content">
                  <?php echo $countryside_planning_step_information ?>
                </div>
              </div>

            </div>



        <?php $i++; endwhile; ?>

      </div>
    </div>
  </div>
<?php endif; ?>


<?php
$args = array(
'post_parent' => $post->ID,
'post_type' => 'page',
'orderby' => 'menu_order',
'order' => 'ASC'
);
$child_query = new WP_Query( $args );
?>

<?php while ( $child_query->have_posts() ) : $child_query->the_post();
?>

<div class="container-fluid service-child">
  <div class="row no-gutter">

    <div class="col-md-6 matchheight">
      <div class="vert-align wow fadeIn">
        <h3><?php echo the_title(); ?></h3>
        <?php echo the_excerpt(); ?>
        <a class="more" href="<?php echo the_permalink(); ?>">Read More</a>
      </div>
    </div>

    <div class="col-md-6 matchheight">
      <?php echo the_post_thumbnail(); ?>
    </div>


  </div>
</div>

<?php endwhile; wp_reset_postdata(); ?>

<?php if (is_page('countryside-planning')): ?>

<?php endif; ?>
