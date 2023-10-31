<?php
/**
 * Theme functions and definitions.
 *
 * @package SNC Blog
 */

add_action( 'after_setup_theme', 'snc_blog_setup' );
if ( ! function_exists( 'snc_blog_setup' ) ) :
/* Sets up theme defaults and registers support for various WordPress features */
function snc_blog_setup() {

  /* Add default posts and comments RSS feed links to head:
     <link rel="alternate" type="application/rss+xml" title="Studio N Creations Blog &raquo; Feed" href="https://studioncreations.com/feed/" /> */
  add_theme_support( 'automatic-feed-links' );

  /* Let WordPress manage the document title, rather than hard-coded <title> in <head>*/
  add_theme_support( 'title-tag' );

  /* Enable support for Post Thumbnails (via Featured Image) on posts and pages. */
  add_theme_support( 'post-thumbnails' );

  /* This theme uses wp_nav_menu() in one location. */
  register_nav_menus( array(
    'primary' => esc_html__( 'Primary', 'snc-blog' ),
  ) );

  /* Switch default core markup for search form, comment form, and
     comments to output valid HTML5 */
  add_theme_support( 'html5', array(
    'search-form',
    'comment-form',
    'comments__list',
    'gallery',
    'caption',
  ) );
}
endif;

/* Set the content width in pixels (700), based on the theme's design and stylesheet.
   Priority 0 to make it available to lower priority callbacks.
   This is necessary for gfycat embeds to function. */
add_action( 'after_setup_theme', 'snc_content_width', 0 );
function snc_content_width() {
  $GLOBALS['content_width'] = apply_filters( 'snc_content_width', 700 );
}

/* Register widget area */
add_action( 'widgets_init', 'modernize_widgets_init' );
function modernize_widgets_init() {
  register_sidebar( array(
    'name'          => esc_html__( 'Sidebar', 'modernize' ),
    'id'            => 'sidebar-1',
    'description'   => esc_html__( 'Add widgets here.', 'modernize' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget__title">',
    'after_title'   => '</h2>',
  ) );
}

/* Register customize */
add_action( 'customize_register', 'theme_customize_register' );
function theme_customize_register($wp_customize) {
  $wp_customize->add_section( 'article_column_section', array(
    'title'          =>'Article Layout',
    'priority'       => 200,
  ));
}

/* Change default excerpt word count from 55 to 30 */
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
function custom_excerpt_length( $length ) {
  return 30;
}

/* Set text-overflow of excerpts to ellipsis "…" */
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );
function wpdocs_excerpt_more( $more ) {
  return '[&hellip;]';
}

/* Load theme's CSS files */
add_action( 'wp_enqueue_scripts', 'snc_blog_styles' );
function snc_blog_styles() {
  wp_enqueue_style( 'snc-blog', get_template_directory_uri() . '/style.css', [], wp_get_theme()->parent()->get( 'Version' ) );
}

/* Load theme's JS files */
add_action( 'wp_enqueue_scripts', 'snc_blog_scripts' );
function snc_blog_scripts() {
  wp_enqueue_script( 'snc-blog', get_template_directory_uri() . '/js/bundle.js', array('jquery'), wp_get_theme()->parent()->get( 'Version' ) );

  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }
}

/* Custom template tags for this theme */
require get_template_directory() . '/inc/template-tags.php';

/* Remove JQuery migrate */
add_action( 'wp_default_scripts', 'remove_jquery_migrate' );
function remove_jquery_migrate( $scripts ) {
  if ( ! is_admin() && isset( $scripts->registered['jquery'] ) ) {
    $script = $scripts->registered['jquery'];
    if ( $script->deps ) {
      $script->deps = array_diff( $script->deps, array( 'jquery-migrate' ) );
    }
  }
}

/* Remove emoji scripts and styles */
remove_action('wp_head', 'print_emoji_detection_script', 7 );
remove_action('admin_print_scripts', 'print_emoji_detection_script' );
remove_action('wp_print_styles', 'print_emoji_styles' );
remove_action('admin_print_styles', 'print_emoji_styles' );

/* Remove WordPress Generator version number */
remove_action('wp_head', 'wp_generator');

/* Remove Windows Live Writer Manifest Link */
remove_action('wp_head', 'wlwmanifest_link');

/* Remove shortlink */
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

/* Remove various Wordpress dns-fetch */
remove_action('wp_head', 'wp_resource_hints', 2, 99 );

/* Show favicons next to external anchor links within a Post*/
add_action('wp_footer', 'external_link_favicons_js');
function external_link_favicons_js() {
  ?>
    <script>
      jQuery('a:not([href^="https://studioncreations.com/"]):not([href^="#"]):not([href^="/"])').each(function() {
        jQuery(this).css({
          background: "url(https://www.google.com/s2/favicons?domain=" + this.hostname + ") left center no-repeat",
          "padding-left": "20px"
        });
      });
    </script>
  <?php
}

/* Don't show favicons for <a><img> inside <figure> */
add_action('wp_head', 'external_link_favicons_css');
function external_link_favicons_css() {
  echo '<style>figure > a {background: none !important;padding-left: 0 !important;}</style>';
}

/* Get local-hosted Gutenberg <video> blocks to autoplay */
add_filter( 'render_block', 'custom_autoplay_block', 10, 2 );
function custom_autoplay_block( $block_content, $block ) {
  if ( $block['blockName'] === 'core/video' ) {
    $block_content = str_replace( '<video controls', '<video controls autoplay loop muted playsinline', $block_content );
  }
  return $block_content;
}
