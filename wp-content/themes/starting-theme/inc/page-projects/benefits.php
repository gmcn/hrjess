

    <?php if( have_rows('benefits') ): ?>

      <div class="container-fluid benefits">
        <div class="container">

          	<div class="row">

          	<?php while( have_rows('benefits') ): the_row();

          		// vars
          		$benefit_title = get_sub_field('benefit_title');
          		$benefit_image = get_sub_field('benefit_image');
          		$benefit_description = get_sub_field('benefit_description');

          		?>

              <div class="col-md-4 wow fadeInDown">
                <h1><?php echo $benefit_title; ?></h1>
                <img src="<?php echo $benefit_image; ?>" alt="<?php echo $benefit_title; ?>" />
                <p>
                  <?php echo $benefit_description; ?>
                </p>
              </div>

          	<?php endwhile; ?>

          </div>

        </div><!-- /.container -->
      </div><!-- /.container-fluid -->

    <?php endif; ?>
