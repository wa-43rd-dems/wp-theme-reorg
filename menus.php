<?php
function reorg_nav_menu($theme_location, $args = array()) {
    $defaults = array(
        'menu_class' => 'nav-menu',
        'container'  => false,
        'fallback_cb' => false,
        'theme_location' => $theme_location
    );

    $args = wp_parse_args($args, $defaults);
    return wp_nav_menu($args);
}

function reorg_actions_menu($theme_location, $args = array()) {
    $defaults = array(
        'menu_class' => 'actions-menu',
        'container' => false,
        'fallback_cb' => false,
        'theme_location' => $theme_location
    );

    $args = wp_parse_args($args, $defaults);
    return wp_nav_menu($args);
}

// Register menus.
function reorg_register_nav_menus() {
    register_nav_menu('top-nav', 'Top Navigation Menu');
    register_nav_menu('actions-menu', 'Actions Menu');
}

add_action('after_setup_theme', 'reorg_register_nav_menus');
?>
