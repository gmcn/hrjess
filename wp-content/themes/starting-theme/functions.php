<?php
/**
 * Starting Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Starting_Theme
 */

if ( ! function_exists( 'starting_theme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function starting_theme_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Starting Theme, use a find and replace
	 * to change 'starting-theme' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'starting-theme', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'starting-theme' ),
		'menu-2' => esc_html__( 'Mobile Primary', 'starting-theme' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'starting_theme_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'starting_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function starting_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'starting_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'starting_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function starting_theme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'starting-theme' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'starting-theme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'starting_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function starting_theme_scripts() {
	wp_enqueue_style( 'starting-theme-style', get_stylesheet_uri() );
	// wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array());
	// wp_enqueue_style( 'custom', get_template_directory_uri() . '/css/style.css', array());
	// wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css', array());
	wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', array(), '1.12.4', true );
	wp_enqueue_script( 'starting-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'bxslider-js', get_template_directory_uri() . '/js/jquery.bxslider.min.js', array(), '4.2.12', true );
	wp_enqueue_script( 'fancybox-js', get_template_directory_uri() . '/js/jquery.fancybox.js', array(), '2.1.7', true );
	wp_enqueue_script( 'cookieconsent', get_template_directory_uri() . '/js/cookieconsent.min.js', array(), '3.1.1', true );
	wp_enqueue_script( 'fancybox-pack-js', get_template_directory_uri() . '/js/jquery.fancybox.pack.js', array(), '2.1.7', true );
	wp_enqueue_script( 'functions-js', get_template_directory_uri() . '/js/functions.js', array(), '0.1', true );
	wp_enqueue_script( 'wow-js', get_template_directory_uri() . '/js/wow.min.js', array(), '0.1', true );
	wp_enqueue_script( 'matchHeight-js', get_template_directory_uri() . '/js/jquery.matchHeight.js', array(), '0.7.2', true );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.7', true );
	wp_enqueue_script( 'starting-theme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'starting_theme_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


//add data-toggle class and dropdown-toggle to parent anchor link
function addanchorlink_class($menu) {
    $menu = preg_replace('/ href="#"/','/ href="#" class="dropdown-toggle" data-toggle="dropdown" /',$menu);
    return $menu;
}

add_filter('wp_nav_menu','addanchorlink_class');

//replace child ul class
function new_submenu_class($menu) {
    $menu = preg_replace('/ class="sub-menu"/','/ class="dropdown-menu" /',$menu);
    return $menu;
}

add_filter('wp_nav_menu','new_submenu_class');

// Move Yoast to bottom
    function yoasttobottom() {
        return 'low';
    }
    add_filter( 'wpseo_metabox_prio', 'yoasttobottom');

/**
 * Code to add the custom login css file to the theme
 * - file is "/login/custom-login-styles.css"
 */
function my_custom_login() {
echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/login/custom-login-styles.css" />';
}
add_action('login_head', 'my_custom_login');

//* Enqueue script to activate WOW.js
add_action('wp_enqueue_scripts', 'sk_wow_init_in_footer');
function sk_wow_init_in_footer() {
	add_action( 'print_footer_scripts', 'wow_init' );
}

function add_excerpt_to_pages()
{
     add_post_type_support( 'page', 'excerpt' );
}
add_action('init', 'add_excerpt_to_pages');

// Register Custom Post Type
function projects_post_type() {

	$labels = array(
		'name'                  => _x( 'Projects', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Project', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Projects', 'text_domain' ),
		'name_admin_bar'        => __( 'Project', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Project', 'text_domain' ),
		'description'           => __( 'Projects information page.', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'revisions', 'featured', 'page-attributes' ),
		'taxonomies'            => array( 'category' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-clipboard',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'projects', $args );

}
add_action( 'init', 'projects_post_type', 0 );

add_action( 'init', 'adv_roofline_taxonomies', 0 );

function adv_roofline_taxonomies() {

    // Product Type Taxonomy
    $product_cat_labels = array(
        'name'          => 'Projects Category',
        'singular_name' => 'Projects Category',
        'menu_name'     => 'Projects Categories'
    );

    $product_cat_args = array(
        'labels'                     => $product_cat_labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'rewrite'                    => array('pages' => true)
    );
    register_taxonomy( 'projects_category', array( 'projects' ), $product_cat_args );

}

// reordering projects
add_action( 'pre_get_posts', 'reorder_projects' );

function reorder_projects( $query ) {

	// Check if on frontend and main query is modified
	if( ! is_admin() && $query->is_main_query() && $query->query_vars['post_type'] != 'portfolio' ) {

			$query->set( 'order' , 'asc' );
			$query->set( 'orderby', 'menu_order');

	}

}

function cc_mime_types($mimes) {
 $mimes['svg'] = 'image/svg+xml';
 return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

//* Add JavaScript before </body>
function wow_init() { ?>
	<script type="text/javascript">
		new WOW().init();
	</script>
<?php }
