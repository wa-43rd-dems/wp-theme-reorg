<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header id="main-header" class="full-width">
        <nav class="nav-menu-container">
            <?php if (has_custom_logo()): ?>
            <div class="nav-home-container site-logo-container"><?php the_custom_logo(); ?></div>
            <?php else: ?>
            <h1 class="nav-home-container site-name">
                <a class="title-link" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
            </h1>
            <?php endif; ?>
            <?php
            if (has_nav_menu('top-nav')) {
                reorg_nav_menu('top-nav');
            }
            ?>
        </nav>
    </header>
