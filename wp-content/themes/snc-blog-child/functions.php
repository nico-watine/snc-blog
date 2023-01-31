<?php

/* Queue loading parent theme styles */
add_action( 'wp_enqueue_scripts', 'snc_blog_child_enqueue_styles' );
function snc_blog_child_enqueue_styles() {
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
