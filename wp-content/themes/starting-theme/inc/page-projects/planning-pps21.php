<?php if( have_rows('pps_21_content') ): ?>
  <div class="container-fluid">
    <div class="container">

           <?php $i = 1; while( have_rows('pps_21_content') ): the_row();

         		// vars
         		$pps_21_info_title = get_sub_field('pps_21_info_title');
            $pps_21_infor_intro = get_sub_field('pps_21_infor_intro');
            $pps_21_info_content = get_sub_field('pps_21_info_content');

         		?>

            <div class="row pps_21 wow fadeInUp">

              <div class="row">
                <div class="col-sm-2 pps_21_count">
                  <div class="wrapper">
                    <p><?php echo $pps_21_info_title ?></p>
                    <span>#<?php echo $i; ?></span>
                  </div>
                </div>
                <div class="col-sm-3 pps_21_intro">
                  <?php echo $pps_21_infor_intro ?>
                </div>
                <div class="col-sm-7 pps_21_content">
                  <?php echo $pps_21_info_content ?>

                  <?php if( have_rows('pps_21_info_images') ): ?>

                    <div class="row pps_21_images">

                    <?php $a = 1; while( have_rows('pps_21_info_images') ): the_row();

                      // vars
                      $image = get_sub_field('image');
                      $title = get_sub_field('title');
                      $details = get_sub_field('details');

                  		?>

                      <div class="col-xs-6">

                        <img src="<?php echo $image ?>" alt="<?php echo $title ?>">

                        <div class="pps_21_images_info">
                          <p class="count">0<?php echo $a; ?></p>
                          <p class="title"><?php echo $title ?></p>
                          <?php echo $details ?>
                        </div>

                      </div>

                    <?php $a++; endwhile; ?>

                    </div>

                  <?php endif; ?>

                </div>
              </div>

            </div>



        <?php $i++; endwhile; ?>

    </div>
  </div>
<?php endif; ?>
