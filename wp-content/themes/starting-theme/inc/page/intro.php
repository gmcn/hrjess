<?php

// vars
$intro_main_heading = get_field('intro_main_heading', $term);
$intro_sub_heading = get_field('intro_sub_heading', $term);
$intro_paragraph = get_field('intro_paragraph', $term);

 ?>

<?php //if ($intro_main_heading) : ?>
<div class="container intro-wrapper">

	<div class="row">

		<div class="col-md-4 wow fadeInLeft">

			<h1>
        <?php if( is_singular( 'projects' ) ) {
            echo the_title();
        } else {
          echo $intro_main_heading;
        } ?>
			</h1>
			<p>
				<?php echo $intro_sub_heading ?>
			</p>

		</div><!-- /.col-md-4 wow fadeInLeft -->

		<div class="col-md-6 col-md-offset-1 intro_paragraph wow fadeInRight">
			<?php echo $intro_paragraph ?>
		</div><!-- /.col-md-6 col-md-offset-1 wow fadeInRight-->

	</div><!-- /.row -->
</div><!-- /.container content-wrapper -->

<?php //endif; ?>
