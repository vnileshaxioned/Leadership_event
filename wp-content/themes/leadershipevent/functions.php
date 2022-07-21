<?php

// enqueue the style and script files
add_action('wp_enqueue_scripts', 'test_theme_script');
function test_theme_script() {
wp_enqueue_style('custom-styling', get_stylesheet_uri());
wp_enqueue_style('custom-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
}

// theme support
add_action('after_setup_theme', 'leadershipevent_theme_setup');
function leadershipevent_theme_setup() {
  register_nav_menus( array(
    'primary' => __('Primary Menu', 'leadershipevent'),
    'secondary' => __('Secondary Menu', 'leadershipevent')
  ) );
}

// for classic editor
add_filter('use_block_editor_for_post', '__return_false');

?>