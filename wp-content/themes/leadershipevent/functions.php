<?php

// enqueue the style and script files
add_action('wp_enqueue_scripts', 'test_theme_script');
function test_theme_script() {
wp_enqueue_style('custom-styling', get_stylesheet_uri());
wp_enqueue_style('custom-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
}

// for classic editor
add_filter('use_block_editor_for_post', '__return_false');

?>