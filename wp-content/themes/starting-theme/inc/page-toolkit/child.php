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
