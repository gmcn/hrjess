<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Starting_Theme
 */

get_header(); ?>

<?php

	include(locate_template("inc/page/header.php"));
	include(locate_template("inc/tax-portfolio-single/intro.php"));
	include(locate_template("inc/tax-portfolio-single/content.php"));
	// include(locate_template("inc/page-about/content.php"));

 ?>

 <?php if (is_singular( 'project' )) {
	 echo "single project";
 } ?>

<?php
//get_sidebar();
get_footer();
