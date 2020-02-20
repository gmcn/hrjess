
<div class="portfolio-slider">
	<?php

	/*
	*  Loop through post objects (assuming this is a multi-select field) ( setup postdata )
	*  Using this method, you can use all the normal WP functions as the $post object is temporarily initialized within the loop
	*  Read more: http://codex.wordpress.org/Template_Tags/get_posts#Reset_after_Postlists_with_offset
	*/

	$post_objects = get_field('select_projects');

	if( $post_objects ): ?>
	    <ul class="portfolio">
	    <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
	        <?php setup_postdata($post); ?>
	        <li style="background: url('<?php echo the_post_thumbnail_url(); ?>') center; background-size: cover; height: 80vh;">
							<div class="container" style="height: 100%">
	              <div class="col-sm-3 col-sm-offset-5 recentproject">
									<div class="details">
										
										<p>
											<?php the_title(); ?>
										</p>
									</div>

			            <a href="<?php the_permalink(); ?>">View Project</a>

									<div class="viewportfolio">
										<a href="/projects_category/portfolio/">View Project Portfolio</a>
									</div>
	              </div>
		          </div>
	        </li>
	    <?php endforeach; ?>
	    </ul>
	    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
	<?php endif;

	/*
	*  Loop through post objects (assuming this is a multi-select field) ( don't setup postdata )
	*  Using this method, the $post object is never changed so all functions need a seccond parameter of the post ID in question.
	*/

	$post_objects = get_field('post_objects');

	if( $post_objects ): ?>
	    <ul>
	    <?php foreach( $post_objects as $post_object): ?>
	        <li>
	            <a href="<?php echo get_permalink($post_object->ID); ?>"><?php echo get_the_title($post_object->ID); ?></a>
	            <span>Post Object Custom Field: <?php the_field('field_name', $post_object->ID); ?></span>
	        </li>
	    <?php endforeach; ?>
	    </ul>
	<?php endif;

	?>
</div><!-- /.portfolio-slider -->
