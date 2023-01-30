<?php

function snc_blog_child_enqueue_styles() {
  wp_enqueue_style( get_stylesheet(), get_stylesheet_uri(), array( 'snc-blog' ));
}

add_action( 'wp_enqueue_scripts', 'snc_blog_child_enqueue_styles' );

// Remove emoji scripts and styles
remove_action('wp_head', 'print_emoji_detection_script', 7 );
remove_action('admin_print_scripts', 'print_emoji_detection_script' );
remove_action('wp_print_styles', 'print_emoji_styles' );
remove_action('admin_print_styles', 'print_emoji_styles' );

remove_action('wp_head', 'wp_generator'); // Remove WordPress Generator version number
remove_action('wp_head', 'wlwmanifest_link'); // Remove Windows Live Writer Manifest Link
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0); // Remove shortlink
remove_action('wp_head', 'wp_resource_hints', 2, 99 );

// Add Custom CSS to Admin Area
add_action('admin_head', 'custom_dashboard_css');

function custom_dashboard_css() {
  // Hide all plugin registration notices after installing WP-Optimize Premium
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
