<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header id="main-header">
        <nav class="nav-menu-container">
            <div class="nav-home-container">
                <a href="<?php bloginfo('url'); ?>" class="nav-home">
                    <?php bloginfo('name'); ?>
                </a>
            </div>
            <?php
            if (has_nav_menu('top-nav')) {
                reorg_nav_menu('top-nav');
            }
            ?>
        </nav>
        <?php if (has_custom_logo()): ?>
        <div class="site-logo-container"><?php the_custom_logo(); ?></div>
        <?php else: ?>
        <h1 class="site-name">
            <a class="title-link" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
        </h1>
        <?php endif; ?>
    </header>
