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
<link type="text/plain" rel="author" href="/humans.txt" />
<link type="text/plain" rel="author" href="/robots.txt" />
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
<?php wp_head(); ?>
<?php $description = get_bloginfo( 'description', 'display' ); ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-34406856-1"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'UA-34406856-1');
</script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'starting-theme' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<div class="container">

			<nav class="hidden-sm hidden-md hidden-lg">
	        <div class="container-fluid">
	          <div class="navbar-header">
							<a class="mobile_number" href="tel:028 9036 4615"><img src="<?php echo get_template_directory_uri(); ?>/images/phone-icon.png" alt="Phone HR Jess" /> 028 9036 4615</a>
	            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	              <span class="sr-only">Toggle navigation</span>
	              <span class="icon-bar"></span>
	              <span class="icon-bar"></span>
	              <span class="icon-bar"></span>
	            </button>
							<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/images/hrjess-logo.svg" alt="<?php echo $description; /* WPCS: xss ok. */ ?>" /></a>
	          </div>
	          <div id="navbar" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
							<?php wp_nav_menu( array(
					      'theme_location' => 'menu-1',
					      'menu_id' => 'navbar',
					      'menu_class' => 'navbar-collapse mainnav',
					      'items_wrap' => '<ul id="" class="nav navbar-nav navbar-right">%3$s</ul>' ) );
					      ?>
	          </div><!--/.nav-collapse -->
	        </div><!--/.container-fluid -->
	      </nav>

			<div class="row hidden-xs">

				<div class="col-md-2 col-xs-4 wow fadeInDown">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/images/hrjess-logo.svg" alt="<?php echo $description; /* WPCS: xss ok. */ ?>" /></a>
				</div><!-- /.col-md-2 -->

				<div class="col-xs-8 col-md-7 col-lg-5 col-lg-offset-3">

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

				<div class="col-xs-3 col-lg-2 hidden-sm contact">

					<a href="/contact">
						<img class="hidden-sm hidden-md hidden-lg" src="<?php echo get_template_directory_uri(); ?>/images/email-icon.png" alt="Email HR Jess" />
					</a>
					<a href="tel:02890364615">
						<img src="<?php echo get_template_directory_uri(); ?>/images/phone-icon.png" alt="Phone HR Jess" />
						<span>028 9036 4615</span></a>
				</div>

			</div><!-- /.row -->




		</div><!-- /.container -->

	</header><!-- #masthead -->



	<!-- <div id="content" class="site-content"> -->
