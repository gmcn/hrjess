<?php

$title_background = get_field('title_background');
$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
$current = $post->ID;
$parent = $post->post_parent;
$grandparent_get = get_post($parent);
$grandparent = $grandparent_get->post_parent;

?>




<div class="entry-header" style="background: url('<?php echo $title_background ?>') no-repeat <?php if ($title_background) : ?>#000<?php else : ?> #8599a5 <?php endif; ?> center;">
  <?php if ($title_background) : ?>
  <div class="container-fluid">
  <?php endif; ?>
    <div class="container entry-title">
      <div class="col-sm-8 col-sm-offset-4 col-md-10 col-md-offset-2 col-lg-7 col-lg-offset-5 wow fadeInRight">
        <h1>

          <?php

            // 'adv_product_category' is the name of your taxonomy
            $term_list = wp_get_post_terms($post->ID, 'projects_category', array("fields" => "all"));

            // Get required vars
            $product_cat = $term_list[0]->name;     // Gets the name of the first object in returned array
            $product_cat_slug = $term_list[0]->slug;     // Gets the name of the first object in returned array
            $product_cat_link = get_term_link($term_list[0]); ?>

            <?php if(is_singular('projects')) {
              echo $product_cat;
            }
            elseif (is_tax()) {
                echo $term->name; // will show the name
              }
              elseif ($root_parent = get_the_title($grandparent) !== $root_parent = get_the_title($current)) {
                echo get_the_title($grandparent);
              }
                else {
                  echo get_the_title($parent);
                }
            ?>
        </h1>
      </div><!-- /.col-sm-3 col-sm-offset-5 -->
    </div><!-- /.container -->
    <?php if ($title_background) : ?>
  </div><!-- /.container-fluid -->
<?php endif; ?>
</div><!-- /.entry-header -->
