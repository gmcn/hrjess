<div class="container-fluid dev-toolkit">
  <div class="container">
    <div class="row">
      <div class="col-md-4 matchheight">
        <h1>development toolkit</h1>
        <h2>Your complete guide to home success</h2>
        <p>
          Not sure where to start with a new project? Our professional skills and creativity can help you achieve your vision and add value to your project through good design and sound construction.
        </p>

        <?php if ( !is_page('homes') ) : ?>
          <a href="/toolkit/"><button>View Now</button></a>
        <?php endif; ?>

      </div>

      <?php if ( is_page('homes') ) : ?>
        <div class="col-md-2 matchheight">
          <a href="/toolkit/"><button>View Now</button></a>
        </div>
      <?php endif; ?>
    </div><!-- /.row -->


    <?php if ( is_front_page() ) : ?>


      <div class="page-toolkit">

        <div class="row timeline-wrapper">

        <?php if( have_rows('stages', 217) ): ?>

        <?php $i = 1; ?>

      	<ul class="stage-timeline-wrapper hidden-sm hidden-xs">

        	<?php while( have_rows('stages', 217) ): the_row();

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

  <?php endif; ?>




  </div><!-- /.container -->
</div><!-- /.container-fluid dev-toolkit -->
