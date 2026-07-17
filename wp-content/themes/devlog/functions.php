<?php 

function devlog_setup() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    register_nav_menus([
        'primary' => 'Primary Navigation',
    ]);
}

add_action('after_setup_theme', 'devlog_setup');

function devlog_enqueue_assets() {
    wp_enqueue_style('devlog-style', get_template_directory_uri() . '/assets/css/style.css', [], '1.0');
}
add_action('wp_enqueue_scripts', 'devlog_enqueue_assets');