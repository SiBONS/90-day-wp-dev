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

function devlog_register_cpts() {
    register_post_type('projects', [
        'labels' => [
            'name'          => 'Projects',
            'singular_name' => 'Project',
            'add_new_item'  => 'Add New Project',
            'edit_item'     => 'Edit Project',
        ],
        'public'        => true,
        'has_archive'   => true,
        'supports'      => ['title', 'editor', 'thumbnail', 'excerpt'],
        'menu_icon'     => 'dashicons-portfolio',
        'rewrite'       => ['slug' => 'projects'],
    ]);
}
add_action('init', 'devlog_register_cpts');