<div class="container page-toolkit">

  <div class="row">
    <?php the_content(); ?>
  </div>



  <div class="row timeline-wrapper">

  <?php if( have_rows('stages') ): ?>

  <?php $i = 1; ?>

	<ul class="stage-timeline-wrapper hidden-sm hidden-xs">

  	<?php while( have_rows('stages') ): the_row();

  		// vars
  		$stage_name1 = get_sub_field('stage_name');

  		?>

      <li class="stage-timeline-item-wrapper">
        <div class="stage-timeline-item">
          <?php echo $stage_name1; ?><br  />
          <span>#<?php echo $i ?></span>
        </div>
      </li>

  	<?php $i++; endwhile; ?>
    <div class="clear">
      
    </div>

  </ul>

<?php endif; ?>

</div>

</div>

<div class="container page-toolkit">



    <?php if( have_rows('stages') ): ?>

      <?php $i = 1; ?>

    	<?php while( have_rows('stages') ): the_row();

    		// vars
    		$stage_name = get_sub_field('stage_name');
    		$stage_icon = get_sub_field('stage_icon');
    		$stage_content = get_sub_field('stage_content');

    		?>

        <div class="row stage-wrapper">

      		<div class="col-md-1 col-sm-2 number-wrapper">

            <div class="stagenumber">
              #<span><?php echo $i ?></span>
            </div>

            <?php echo $stage_name; ?>

      		</div>

          <div class="col-sm-4 col-md-3 col-lg-offset-1 icon">
            <img src="<?php echo $stage_icon ?>" alt="<?php echo $stage_name; ?>"  />

          </div>

          <div class="col-sm-5 content">
            <?php echo $stage_content ?>
          </div>

        </div><!-- /.row -->

    	<?php $i++; endwhile; ?>

    <?php endif; ?>
  </div>
</div>
