<?php
/**
 * Theme functions and definitions.
 *
 * @package SNC Blog
 */

if ( ! function_exists( 'snc_blog_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function snc_blog_setup() {

  /* Add default posts and comments RSS feed links to head:
     <link rel="alternate" type="application/rss+xml" title="Studio N Creations Blog &raquo; Feed" href="https://studioncreations.com/feed/" /> */
  add_theme_support( 'automatic-feed-links' );

  /* Let WordPress manage the document title.
     By adding theme support, we declare that this theme does not use a
     hard-coded <title> tag in the document head, and expect WordPress to
     provide it for us. */
  add_theme_support( 'title-tag' );

  /* Enable support for Post Thumbnails (via Featured Image) on posts and pages. */
  add_theme_support( 'post-thumbnails' );

  /* This theme uses wp_nav_menu() in one location. */
  register_nav_menus( array(
    'primary' => esc_html__( 'Primary', 'modernize' ),
  ) );

  /*
   * Switch default core markup for search form, comment form, and comments
   * to output valid HTML5.
   */
  add_theme_support( 'html5', array(
    'search-form',
    'comment-form',
    'comments__list',
    'gallery',
    'caption',
  ) );
}
endif;
add_action( 'after_setup_theme', 'snc_blog_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 */
function modernize_content_width() {
  $GLOBALS['content_width'] = apply_filters( 'modernize_content_width', 700 );
}
add_action( 'after_setup_theme', 'modernize_content_width', 0 );

/**
 * Register widget area.
 */
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
add_action( 'widgets_init', 'modernize_widgets_init' );

/**
* Register customize.
*/
add_action( 'customize_register', 'theme_customize_register' );
function theme_customize_register($wp_customize) {
  $wp_customize->add_section( 'article_column_section', array(
    'title'          =>'Article Layout',
    'priority'       => 200,
  ));
}

/* Change default excerpt word count from 55 to 30 */
function custom_excerpt_length( $length ) {
  return 30;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function wpdocs_excerpt_more( $more ) {
  return '[&hellip;]';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

/**
 * Enqueue scripts and styles.
 */
function snc_blog_scripts() {
  $url = get_template_directory_uri();
  $theme   = wp_get_theme();
  $version = $theme->get( 'Version' );

  wp_enqueue_script( 'snc-blog', $url . '/js/bundle.js', array('jquery'), $version, true );

  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }
}
add_action( 'wp_enqueue_scripts', 'snc_blog_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';
