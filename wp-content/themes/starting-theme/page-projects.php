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
	include(locate_template("inc/page-projects/benefits.php"));
	include(locate_template("inc/page-projects/dev-guideance.php"));
	include(locate_template("inc/page-projects/service-content.php"));
	include(locate_template("inc/page-projects/content.php"));
	include(locate_template("inc/page/dev-toolkit.php"));
	include(locate_template("inc/page/discuss-your-ideas.php"));

 ?>

<?php
//get_sidebar();
get_footer();
