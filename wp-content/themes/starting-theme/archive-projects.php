<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Starting_Theme
 */

get_header(); ?>

	<?php

	include(locate_template("inc/page/header.php"));
	include(locate_template("inc/tax-portfolio/content.php"));

	 ?>

<?php
get_footer();
