<?php
/*
 * Template Name: Page Without Title
 * description: A page template that does not show the page title.
 */

get_header('full-width');
?>
<main id="main" class="site-main full-width single">
<?php
while (have_posts()):
    the_post();
?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="post-header page-header">
            <div class="feature-image-and-desc">
                <?php the_post_thumbnail(); ?>
                <div class="feature-image-mask">
                    <div class="description-container">
                        <p class="site-description">
                            <?php echo get_theme_mod('site_description', ''); ?>
                        </p>
                    </div>
                </div>
            </div>
<?php
    if (has_nav_menu('actions-menu')) {
        reorg_actions_menu('actions-menu');
    }
?>
        </header>
        <div class="content-container">
            <?php the_content(); ?>
        </div>
        <footer class="post-footer">
        </footer>
    </article>
<?php
endwhile;
?>
</main>
<?php get_footer(); ?>

