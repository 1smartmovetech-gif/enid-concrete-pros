<?php
function enid_concrete_pros_setup() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('responsive-embeds');
  add_theme_support('wp-block-styles');
  register_nav_menus([
    'primary' => 'Primary Menu',
    'footer' => 'Footer Menu',
  ]);
}
add_action('after_setup_theme', 'enid_concrete_pros_setup');

function enid_concrete_pros_assets() {
  wp_enqueue_style('enid-concrete-pros-style', get_stylesheet_uri(), [], '1.0.0');
}
add_action('wp_enqueue_scripts', 'enid_concrete_pros_assets');
