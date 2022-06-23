<?php
function twpp_enqueue_styles()
{
  wp_enqueue_style('reset-sheet', get_template_directory_uri() . "/css/reset.css");
  wp_enqueue_style('main-style-sheet', get_template_directory_uri() . "/style.css");
}
add_action('wp_enqueue_scripts', 'twpp_enqueue_styles');

add_filter('show_admin_bar', '__return_false');

function twpp_enqueue_scripts()
{
  wp_enqueue_script(
    'main-js-sheet',
    get_template_directory_uri() . '/js/main.js',
    array(),
    false,
    true
  );
}
add_action('wp_enqueue_scripts', 'twpp_enqueue_scripts');
add_theme_support('post-thumbnails');
add_action('after_setup_theme', 'register_menu');
function register_menu()
{
  register_nav_menu('primary', __('Primary Menu', 'theme-slug'));
}
function my_theme_widgets_init()
{
  register_sidebar(array(
    'name' => 'Main Sidebar',
    'id' => 'main-sidebar',
  ));
}
add_action('widgets_init', 'my_theme_widgets_init');


add_action('init', 'create_post_type');
function create_post_type()
{
  register_post_type('archive', [
    'labels' => [
      'name'          => 'アーカイブ',
      'singular_name' => 'archive',
    ],
    'public'        => true,
    'has_archive'   => true,
    'menu_position' => 5,
    'show_in_rest'  => true,
    array(
      'supports' => array('title', 'thumbnail', 'editor')
    )
  ]);
}
function custom_template_include($template)
{
  if (is_single() && in_category('archive')) {
    $archive_template = locate_template(array('single.php'));
    if ('' != $archive_template) {
      return $archive_template;
    }
  }
  return $template;
}
add_filter('template_include', 'custom_template_include', 99);
