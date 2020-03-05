<div class="container page-toolkit">

  <div class="row">
    <div class="col-md-12">
      <?php the_content(); ?>
    </div>
  </div>


  <?php
  $args = array(
  'post_parent' => $post->ID,
  'post_type' => 'page',
  'orderby' => 'menu_order',
  'order' => 'ASC'
  );
  $child_query = new WP_Query( $args );
  $totalpost = $child_query->found_posts;
  ?>


  <div class="row timeline-wrapper">



	<ul class="stage-timeline-wrapper hidden-sm hidden-xs">

    <?php $i = 1; while ( $child_query->have_posts() ) : $child_query->the_post();
    $service_icon = get_field('service_icon');
    ?>

      <li class="stage-timeline-item-wrapper" style="width: calc(100% / <?php echo $totalpost; ?> - 5px);">
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

<?php
$args = array(
'post_parent' => $post->ID,
'post_type' => 'page',
'orderby' => 'menu_order',
'order' => 'ASC'
);
$child_query = new WP_Query( $args );
?>


<div class="container page-toolkit">

<?php while ( $child_query->have_posts() ) : $child_query->the_post();
?>

<div class="row stage-wrapper">

  <div class="col-xs-6 col-sm-2 number-wrapper">

    <?php echo the_title() ?>

    <div class="stagenumber">
      #<span><?php echo get_post_field( 'menu_order', $post_id); ?></span>
    </div>



  </div>

  <div class="col-xs-6 col-sm-4 col-md-3 col-md-offset-1 icon">
    <?php echo get_the_post_thumbnail(); ?>

  </div>

  <div class="col-xs-12 col-sm-5 content">
    <?php echo the_excerpt(); ?>

    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Read More</a>
  </div>

</div><!-- /.row -->

<?php endwhile; wp_reset_postdata(); ?>

</div>
</div>
