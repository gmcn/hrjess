<?php if (is_page('developments')): ?>
  <div class="container-fluid planning-construction">
    <div class="row timeline-wrapper">


      <?php if( have_rows('planning_construction_steps') ): ?>
	     <ul class="stage-timeline-wrapper">

         <?php $i = 1; while( have_rows('planning_construction_steps') ): the_row();

       		// vars
       		$construction_steps_title = get_sub_field('construction_steps_title');

       		?>

        <li class="stage-timeline-item-wrapper">
          <div class="stage-timeline-item">
            <?php echo $construction_steps_title ?><br />
            <!-- <span>#<?php echo $i; ?></span> -->
          </div>
        </li>



      <?php $i++; endwhile; ?>
      <div class="clear"></div>
    	</ul>

    <?php endif; ?>


    </div>
  </div>
<?php endif; ?>
