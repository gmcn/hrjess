<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Starting_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link type="text/plain" rel="author" href="<?php echo get_template_directory_uri(); ?>/humans.txt" />
<link type="text/plain" rel="author" href="<?php echo get_template_directory_uri(); ?>/robots.txt" />
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
<?php wp_head(); ?>
<?php $description = get_bloginfo( 'description', 'display' ); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'starting-theme' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<div class="container">

			<div class="row">

				<div class="col-md-2 col-xs-4 wow fadeInDown">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/images/hrjess-logo.svg" alt="<?php echo $description; /* WPCS: xss ok. */ ?>" /></a>
				</div><!-- /.col-md-2 -->

				<div class="col-md-5 col-xs-5 col-md-offset-3">

					<div class="row sub-nav hidden-xs">
						<div class="col-md-6 col-md-offset-6">
							<a href="/about/">About</a>
							<a href="/contact/">Contact</a>
						</div>
					</div>

					<!-- Static navbar -->
				      <nav class="navbar navbar-default">

									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
										<!-- menu -->
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>

				          <div class="navbar-header">
				          </div>
				            <?php wp_nav_menu( array(
											'theme_location' => 'menu-1',
											'menu_id' => 'navbar',
											'container_id' => 'navbar',
											'container_class' => 'navbar-collapse collapse',
											'menu_class' => 'navbar-collapse',
											'items_wrap' => '<ul class="nav navbar-nav">%3$s</ul>' ) );
											?>
				      </nav><!-- #site-navigation -->

				</div><!-- /.col-md-5 col-xs-6 col-md-offset-3 -->

				<div class="col-xs-3 col-md-2 contact">

					<a href="mailto:info@hrjess.co.uk"><img src="<?php echo get_template_directory_uri(); ?>/images/email-icon.png" alt="Email HR Jess" /></a>
					<a href="tel:02890364615">
						<img class="hidden-sm hidden-md hidden-lg" src="<?php echo get_template_directory_uri(); ?>/images/phone-icon.png" alt="Email HR Jess" />
						<span class="hidden-xs">028 9036 4615</span></a>

				</div>

			</div><!-- /.row -->




		</div><!-- /.container -->

	</header><!-- #masthead -->



	<!-- <div id="content" class="site-content"> -->
