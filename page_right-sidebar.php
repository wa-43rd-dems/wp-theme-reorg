<?php
/**
 * Template Name: Page with Sidebar
*/
get_header();
?>
<main id="main" class="site-main with-sidebar">
    <?php
    // Load posts loop.
    while (have_posts()) {
        the_post();
        get_template_part('template-parts/content/content', 'page');
    }
    ?>
    <aside class="sidebar">
    </aside>
</main>
<?php get_footer(); ?>
