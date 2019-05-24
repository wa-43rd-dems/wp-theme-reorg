<?php
require_once('menus.php');
require_once('posts.php');
require_once('customizer.php');

function reorg_try($cond, $fn, $else_fn = false) {
    if ($cond) {
        echo $fn();
    } else if ($else_fn) {
        echo $else_fn();
    }
}

function reorg_the_posts_page($prefix = '') {
    $name = reorg_get_posts_page_name();
    $url = esc_url(get_permalink(get_option('page_for_posts')));
    printf('<a href="%s">%s%s</a>', $url, $prefix, $name);
}

function reorg_get_posts_page_name() {
    $post = get_post(get_option('page_for_posts'));
    return esc_html(apply_filters('the_title', $post->post_title, $post->ID));
}

// Support for custom logos.
function reorg_custom_logo_setup() {
    $defaults = array(
        'height'      => 647,
        'width'       => 1280,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array('site-name')
    );
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'reorg_custom_logo_setup');

// Support for featured images on all post types.
function reorg_post_thumbnails_setup() {
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'reorg_post_thumbnails_setup');

// Load stylesheets.
function reorg_add_theme_scripts() {
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'reorg_add_theme_scripts');

add_filter('show_admin_bar', '__return_false');
?>
