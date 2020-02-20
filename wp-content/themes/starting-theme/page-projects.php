<?php
/**
 * Template Name: Services Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Starting_Theme
 */

get_header(); ?>

<?php

	include(locate_template("inc/page/header.php"));
	include(locate_template("inc/page/intro.php"));
	include(locate_template("inc/page-projects/planning-construction.php"));
	include(locate_template("inc/page-projects/countryside-planning.php"));
	include(locate_template("inc/page-projects/benefits.php"));
	include(locate_template("inc/page-projects/dev-guideance.php"));
	include(locate_template("inc/page-projects/service-content.php"));
	include(locate_template("inc/page-projects/content.php"));


	if (!is_page(array( 'countryside-planning', 'commercial'))) :
		include(locate_template("inc/page/dev-toolkit.php"));
	endif;

	if (!is_page('homes')) :
		include(locate_template("inc/page/discuss-your-ideas.php"));
	endif;

	if (is_page('homes')) :
		include(locate_template("inc/page-projects/virtual-reality.php"));
	endif;
 ?>

<?php
//get_sidebar();
get_footer();
