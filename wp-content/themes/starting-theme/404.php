<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Starting_Theme
 */

get_header(); ?>

<div class="entry-header" style="background: url('<?php echo $title_background ?>') <?php if ($title_background) : ?>#000<?php else : ?> #8599a5 <?php endif; ?> center;">
  <?php if ($title_background) : ?>
  <div class="container-fluid">
  <?php endif; ?>
    <div class="container">
      <div class="col-sm-3 col-sm-offset-5 wow fadeInRight">
        <h1 class="entry-title">Page Not Found</h1>
      </div><!-- /.col-sm-3 col-sm-offset-5 -->
    </div><!-- /.container -->
    <?php if ($title_background) : ?>
  </div><!-- /.container-fluid -->
<?php endif; ?>
</div><!-- /.entry-header -->

<div class="container">
	<div class="row">
		<div class="col-md-5">

		</div>
		<div class="col-md-6">
			<h2><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'starting-theme' ); ?></h2>
			<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'starting-theme' ); ?></p>
		</div>
	</div>
</div>

<?php

	// include(locate_template("inc/page/header.php"));
	include(locate_template("inc/page/dev-toolkit.php"));
	include(locate_template("inc/page/discuss-your-ideas.php"));

 ?>



<?php
get_footer();
