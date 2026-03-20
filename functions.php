<?php
function tripdial_assets() {
  wp_enqueue_style('main-css', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'tripdial_assets');

wp_enqueue_script('main-js', get_template_directory_uri() . '/js/app.js', [], false, true);
