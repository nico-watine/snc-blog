<?php

/* Load parent theme's JS files */
add_action( 'wp_enqueue_scripts', 'snc_blog_parent_scripts' );
function snc_blog_parent_scripts() {
  wp_enqueue_script( 'snc-blog', get_template_directory_uri() . '/js/bundle.js', array('jquery'), wp_get_theme()->parent()->get( 'Version' ) );
}

/* Load parent theme's CSS files */
add_action( 'wp_enqueue_scripts', 'snc_blog_parent_styles' );
function snc_blog_parent_styles() {
  wp_enqueue_style( 'snc-blog', get_template_directory_uri() . '/style.css', [], wp_get_theme()->parent()->get( 'Version' ) );
}

/* Load child theme's CSS files */
add_action( 'wp_enqueue_scripts', 'snc_blog_child_styles' );
function snc_blog_child_styles() {
  wp_enqueue_style( 'snc-blog-child',
    get_stylesheet_directory_uri() . '/style.css',
    array('snc-blog'),
    wp_get_theme()->get( 'Version' )
  );
}

/* Add Custom CSS to Admin Area */
add_action('admin_head', 'custom_dashboard_css');
function custom_dashboard_css() {
  /* Hide all plugin registration notices after installing WP-Optimize Premium */
  echo '<style>
    .updated#udmupdater_not_connected,
  .error.updraftmanagermessage {
      display: none !important;
      visibility: hidden !important;
    }
    [data-slug="wp-optimize-premium"] + tr {
      display: none !important;
      visibility: hidden !important;
    }
  </style>';
}
