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

add_action('admin_footer_text', 'devlog_admin_footer');
function devlog_admin_footer() {
    echo 'DEV//LOG theme by Mile Kostic';
}

add_action('wp_head', 'devlog_head_extras');
function devlog_head_extras() {
    echo '<!-- DEV//LOG theme v1.0 -->';
}

add_action('publish_post', 'devlog_on_publish', 10, 2);
function devlog_on_publish($post_id, $post) {
    error_log('New post published: ' . $post->post_title);
}

add_filter('excerpt_length', 'devlog_excerpt_length');
function devlog_excerpt_length($length) {
    return 20;
}

add_filter('excerpt_more', 'devlog_excerpt_more');
function devlog_excerpt_more($more) {
    return '...';
}

add_filter('the_content', 'devlog_reading_time');
function devlog_reading_time($content) {
    if(!is_single()) return $content;  // ← add this line
    $word_count = str_word_count(strip_tags($content));
    $reading_time = ceil($word_count / 200);
    $label = '<p class="reading-time">⏱ ' . $reading_time . ' min read</p>';
    return $label . $content;
}

function devlog_get_posts_by_category($category_slug, $count = 3) {
    return new WP_Query([
        'post_type'      => 'post',
        'posts_per_page' => $count,
        'tax_query'      => [[
            'taxonomy' => 'category',
            'field'    => 'slug',
            'terms'    => $category_slug,
        ]],
    ]);
}

function devlog_get_recent_projects($count = 3) {
    return new WP_Query([
        'post_type'      => 'projects',
        'posts_per_page' => $count,
        'orderby'        => 'date',
        'order'          => 'DESC',
    ]);
}

function devlog_get_posts_this_year() {
    return new WP_Query([
        'post_type'      => 'post',
        'posts_per_page' => 5,
        'date_query'     => [[
            'year' => date('Y'),
        ]],
    ]);
}