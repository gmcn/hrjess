<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Starting_Theme
 */

?>

	<!--</div> #content -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<footer class="site-footer clear">

		<div class="col-md-2 footer_social">
			<a href="https://www.linkedin.com/in/hadleigh-jess-0b715351/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/linkedin-icon.svg" alt="Follow HR Jess on Linkedin" /></a>
			<a href="https://www.instagram.com/hrjessarchitecture/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/instagram-icon.svg" alt="Follow HR Jess on Instagram" /></a>
			<a href="https://www.facebook.com/hrjess" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook-icon.svg" alt="Follow HR Jess on Facebook" /></a>
		</div>

		<div class="col-md-10 footer_contact hidden-xs hidden-sm">
			HR Jess Architecture, 1 Jordanstown Road, Newtownabbey, BT37 0QD <span class="sep"> | </span> Tel: <a class="phone" href="tel:+442890364615">028 9036 4615</a> <span class="sep"> | </span> Email: <a href="mailto:info@hrjess.co.uk">info@hrjess.co.uk</a>
		</div>

		<div class="col-md-10 footer_contact hidden-md hidden-lg">
			HR Jess Architecture, 1 Jordanstown Road, Newtownabbey, BT37 0QD <br /> Tel: <a class="phone" href="tel:+442890364615">028 9036 4615</a> <span class="sep"> | </span> Email: <a href="mailto:info@hrjess.co.uk">info@hrjess.co.uk</a>
		</div>

		<div style="clear: both">

		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
