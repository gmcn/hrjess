<?php
/**
 * Template Name: Front Page
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

include(locate_template("inc/page-front/slide-banner.php"));
include(locate_template("inc/page-front/services.php"));
include(locate_template("inc/page-front/toolkit.php"));
include(locate_template("inc/page-front/portfolio-slider.php"));
include(locate_template("inc/page/discuss-your-ideas.php"));

 ?>

<?php
//get_sidebar();
get_footer();
