<?php

// enqueue the style and script files
add_action('wp_enqueue_scripts', 'test_theme_script');
function test_theme_script() {
  wp_enqueue_style('custom-styling', get_stylesheet_uri());
  wp_enqueue_style('custom-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_script('custom-script', get_template_directory_uri().'/assets/js/script.js', array('jquery'), '', true);
}

// for option page
if (function_exists('acf_add_options_page')) {
  acf_add_options_page(array(
    'page_title' 	=> 'Custom Option Page',
    'menu_title'	=> 'Custom Option Page',
    'menu_slug' 	=> 'custom-option-page',
    'icon_url'    => 'dashicons-admin-settings',
  ));

  acf_add_options_sub_page(array(
    'page_title' 	=> 'Header Section',
    'menu_title'	=> 'Header',
    'parent_slug' 	=> 'custom-option-page',
  ));

  acf_add_options_sub_page(array(
    'page_title' 	=> 'Footer Section',
    'menu_title'	=> 'Footer',
    'parent_slug' 	=> 'custom-option-page',
  ));
}

// theme support
add_action('after_setup_theme', 'leadershipevent_theme_setup');
function leadershipevent_theme_setup() {
  register_nav_menus( array(
    'primary' => __('Primary Menu', 'leadershipevent'),
    'secondary' => __('Secondary Menu', 'leadershipevent')
  ) );
}

// custom post type
add_action( 'init', 'schedule_post_type');
function schedule_post_type() {
  $labels = array(
    'name'                => _x( 'schedule', 'Post Type General Name', 'leadershipevent' ),
    'singular_name'       => _x( 'schedule', 'Post Type Singular Name', 'leadershipevent' ),
    'menu_name'           => __( 'schedule', 'leadershipevent' ),
    'all_items'           => __( 'All schedule', 'leadershipevent' ),
    'add_new'             => __( 'Add New', 'leadershipevent' ),
    'edit_item'           => __( 'Edit schedule', 'leadershipevent' ),
    'update_item'         => __( 'Update schedule', 'leadershipevent' ),
    'search_items'        => __( 'Search schedule', 'leadershipevent' ),
    'not_found'           => __( 'Not Found', 'leadershipevent' ),
    'not_found_in_trash'  => __( 'Not found in Trash', 'leadershipevent' ),
  );
  $args = array(
    'label'               => __( 'schedule', 'leadershipevent' ),
    'description'         => __( 'schedule description', 'leadershipevent' ),
    'labels'              => $labels,
    'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail' ),
    'hierarchical'        => true,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 4,
    'menu_icon'           => 'dashicons-clock',
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => true,
    'publicly_queryable'  => true,
    'capability_type'     => 'page',
  );
  register_post_type( 'schedule', $args );
}

// for classic editor
add_filter('use_block_editor_for_post', '__return_false');

?>