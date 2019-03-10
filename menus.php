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
