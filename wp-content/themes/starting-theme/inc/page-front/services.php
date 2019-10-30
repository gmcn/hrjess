<div class="container-fluid services">
	<!-- <div class="container"> -->


		<h1>a full service practice</h1>
		<p>
			Complete architecture, planning and surveying services in Northern Ireland
		</p>

			<?php if( have_rows('services') ): ?>

			<div class="row">

				<?php $i = 0; ?>

			<?php while( have_rows('services') ): the_row();

				// vars
				$service_image = get_sub_field('service_image');
				$service_name = get_sub_field('service_name');
				$link = get_sub_field('link_to_service_page');
				$service_title = get_sub_field('service_title');
				$service_description = get_sub_field('service_description');

				?>

				<div class="col-sm-6 col-md-4 col-lg-3 wow fadeInLeft service service<?php echo $i ?>">

					<div class="outer">
						<a href="<?php echo $link; ?>">
						  <div class="inner" style="background-image: url('<?php echo the_sub_field('service_image'); ?>'); background-size: cover">
								<h2><?php echo $service_name ?></h2>
						  </div>
						</a>
					</div>

					<h3><?php echo $service_title ?></h3>
					<p>
						<?php echo $service_description ?>
					</p>

				</div>

			<?php $i++; endwhile; ?>

			<div class="clear">

			</div>

		</div>

		<?php endif; ?>
	<!--</div> /.container -->
</div><!-- /.container-fluid services -->
