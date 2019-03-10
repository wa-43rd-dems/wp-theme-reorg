<?php
/**
 * Template Name: Page without Header
*/
get_header();
?>
<main id="main" class="site-main page-no-header">
    <?php
    // Load posts loop.
    while (have_posts()):
        the_post();
    ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php the_content(); ?>
        <footer class="post-footer">
        </footer>
    </article>
    <?php endwhile; ?>
    <aside class="sidebar">
    </aside>
</main>
<?php get_footer(); ?>
