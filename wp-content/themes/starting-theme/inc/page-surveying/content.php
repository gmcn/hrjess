<div class="container-fluid surveying">
  <div class="container">
    <div class="row">

        <div class="col-md-4 wow fadeInLeft">

          <h1><?php echo the_field('surveying_main_heading') ?></h1>

        </div><!-- /.col-md-4 wow fadeInLeft -->

        <div class="col-md-6 col-md-push-1 intro_paragraph wow fadeInRight">
          <?php echo the_field('surveying_paragraph') ?>
        </div><!-- /.col-md-6 col-md-offset-1 wow fadeInRight-->

      </div><!-- /.row -->

    <div class="row">
      <div class="col-md-12 wow fadeInLeft">
        <span class="">There are three levels of service in the RICS Home Surveys suite. </span>
      </div>
    </div>


    <div class="row no-gutter serveylevels">

      <div class="col-md-5 matchheight wow fadeInLeft">

        <?php if( have_rows('survey_levels') ): ?>

        	<ul class="nav nav-tabs" role="tablist">

            <?php $i = 0; ?>
            <!-- Nav tabs -->
          	<?php while( have_rows('survey_levels') ): the_row();

          		// vars
          		$servey_level_title = get_sub_field('servey_level_title');

          		?>
          		<li role="presentation">

                <a class="service<?php echo $i ?>" href="#<?php echo $i ?>" aria-controls="<?php echo $servey_level_title ?>" role="tab" data-toggle="tab"><?php echo $servey_level_title ?></a>

          		</li>

          	<?php $i++; endwhile; ?>

        	</ul>

        <?php endif; ?>
      </div>

      <div class="col-md-7 matchheight wow fadeInRight">

          <?php if( have_rows('survey_levels') ): ?>

            <!-- Tab panes -->
            <div class="tab-content">

              <?php $i = 0; ?>

          	<?php while( have_rows('survey_levels') ): the_row();

          		// vars
          		$servey_level_title = get_sub_field('servey_level_title');
              $survey_level_infor = get_sub_field('survey_level_infor');

          		?>

              <div role="tabpanel" class="tab-pane fade <?php if ( $i == 0 ) echo "in active" ?> service<?php echo $i ?> " id="<?php echo $i ?>"><?php echo $survey_level_infor ?></div>

          	<?php $i++; endwhile; ?>

          	</div>

          <?php endif; ?>

      </div>

    </div><!-- /.row serveylevels -->




  </div><!-- /.container -->
</div><!-- /.container-fluid -->

<div class="container need">
  <div class="row">
    <div class="col-sm-6 col-sm-5 wow fadeInLeft">
      <strong>Not sure what you need</strong> <br  />
      Give us a call for free advice and quotation
    </div>
    <div class="col-sm-6 need_phone wow fadeInLeft">
      <a href="tel:+2890364615">
				<img src="<?php echo get_template_directory_uri(); ?>/images/phone-icon_grey.svg" alt="Phone HR Jess">
        028 9036 4615
      </a>
    </div>
  </div>
</div>
