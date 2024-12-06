<?php
// Enqueue styles and scripts
function a2_enqueue_scripts() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
    wp_enqueue_script('main-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'a2_enqueue_scripts');

// Add theme support
function a2_theme_setup() {
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'a2_theme_setup');
?>
