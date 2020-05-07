<?php

// vars
$intro_main_heading = get_field('intro_main_heading', $term);
$intro_sub_heading = get_field('intro_sub_heading', $term);
$intro_paragraph = get_field('intro_paragraph', $term);

$term_obj_list = get_the_terms( $post->ID, 'projects_category' );

?>


<div class="container intro-wrapper project-single">

	<div class="row">

    <div class="col-md-2 project-single__cat wow fadeInLeft">
      <h3>
				<?php $i = 1; foreach ($term_obj_list as $term_obj) : ?>

					<?php if ($i > 1) : ?>
						<?php echo "/ " . $term_obj->name ?>
						<?php else: ?>
							<?php echo $term_obj->name ?>
					<?php endif; ?>

				<?php $i++; endforeach ?>
      </h3>

    </div>

		<div class="col-md-4 project-single__title wow fadeInLeft">
      <span>Project Title</span>

			<h1>
        <?php echo the_title(); ?>
			</h1>
			<p>
				<?php echo $intro_sub_heading ?>
			</p>

		</div><!-- /.col-md-4 wow fadeInLeft -->

		<div class="col-md-6 intro_paragraph wow fadeInRight">
			<?php echo $intro_paragraph ?>
		</div><!-- /.col-md-6 col-md-offset-1 wow fadeInRight-->

	</div><!-- /.row -->
</div><!-- /.container content-wrapper -->
