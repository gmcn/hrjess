<?php

  global $post;

 ?>

<div class="container toolkit-child">
  <div class="row toolkit-child__title-wrapper">
    <div class="col-xs-8 col-sm-6 toolkit-child__title">
      <h2><?php echo the_title(); ?></h2>
    </div>
    <div class="col-xs-4 col-sm-6 toolkit-child__title_thumb">
      <?php echo get_the_post_thumbnail(); ?>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-3 col-md-2 hidden-xs toolkit-child_order matchheight">
      <p><?php echo the_title() ?></p>
      <p class="menu_order">
        <span>#</span><?php echo get_post_field( 'menu_order', $post_id); ?>
      </p>
    </div>
    <div class="col-sm-9 col-md-10 toolkit-child_content matchheight">
      <?php echo the_content(); ?>
    </div>
  </div>

</div>

<div class="container page-toolkit">

<?php
$args = array(
'post_parent' => 217,
'post_type' => 'page',
'orderby' => 'menu_order',
'order' => 'ASC'
);
$child_query = new WP_Query( $args );
$totalpost = $child_query->found_posts;
?>


  <div class="row timeline-wrapper">

    <ul class="col-md-12 stage-timeline-wrapper hidden-sm hidden-xs">

      <?php $i = 1; while ( $child_query->have_posts() ) : $child_query->the_post();
      $service_icon = get_field('service_icon');
      ?>

        <li class="stage-timeline-item-wrapper<?php if ( is_page($post->ID) == $post->ID ) : ?> active<?php endif; ?>" style="width: calc(100% / <?php echo $totalpost; ?> - 5px);">
          <div class="stage-timeline-item">
            <p class="matchheight"><?php echo the_title(); ?></p>
            <span>#<?php echo get_post_field( 'menu_order', $post_id); ?></span>
          </div>
        </li>

      <?php $i++; endwhile; wp_reset_postdata(); ?>
      <div class="clear">

      </div>

    </ul>

  </div>
</div>
